<?php

namespace Lenra\App;

use Exception;
use Lenra\App\Manifest\Builder;
use Lenra\App\View\Request as ViewRequest;
use Lenra\App\Listener\Request as ListenerRequest;

class Runner {
    private const APCU_KEY = Runner::class . '::instance';
    private const VIEW = 'View';
    private const LISTENER = 'Listener';
    private static Runner $instance;
    private string $manifest;
    private $handlers = [];

    protected function __construct() {
        self::$instance = $this;
    }

    protected function handleRequest($request) {
        // Check if data matches one of the expected queries
        if (isset($request->view)) {
            Logger::log("View: $request->view");
            $resp = $this->runHandler(self::VIEW, $request->view, new ViewRequest(
                $request->data ?? [],
                $request->props ?? [],
                $request->context ?? [],
            ));
            Logger::log("json_encode resp");
            $resp = json_encode(
                $resp
            );
            Logger::log("\\json_encode resp");
            echo $resp;
        } elseif (isset($request->listener)) {
            Logger::log("Listener: $request->listener");
            $api = new Api($request->api);
            $this->runHandler(self::LISTENER, $request->listener, new ListenerRequest(
                $request->props ?? [],
                $request->event ?? [],
                new Api($request->api),
            ));
        } elseif (isset($request->resource)) {
            Logger::log("Resource: $request->resource");
            readfile("resources/$request->resource");
        } else {
            Logger::log("Manifest");
            if (!isset($this->manifest)) {
                $this->manifest = json_encode(Builder::manifest());
            }
            echo $this->manifest;
        }
    }

    protected function runHandler($type, $name, $request) {
        Logger::log("runHandler: $type, $name");
        $parts = explode(".", $name);
        foreach ($parts as &$part) {
            $part = ucfirst($part);
        }
        $class = "App\\$type\\" . join("\\", $parts);
        if (!isset($this->handlers[$class])) {
            Logger::log("new $class");
            if (!class_exists($class)) {
                Logger::log("class $class does not exist");
                throw new Exception("class $class does not exist");
            }
            $this->handlers[$class] = new $class();

            Logger::log("\\new $class");
        }
        if ($type === 'View') {
            return $this->handlers[$class]->render($request);
        } else {
            $this->handlers[$class]->handle($request);
        }
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            $instance = null;
            if(extension_loaded('apcu')) {
                $instance = apcu_fetch(self::APCU_KEY);
                if ($instance === false) {
                    $instance = new Runner;
                    apcu_store(self::APCU_KEY, $instance);
                }
            }
            else {
                $instance = new Runner;
            }
            self::$instance = $instance;
        }
        return self::$instance;
    }

    private static function handleServerRequest() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new Exception('The request must be POST');
        }
        // Takes raw data from the request
        $json = file_get_contents('php://input');

        // Converts it into a PHP object
        $data = json_decode($json);

        try {
            Logger::log("handleRequest");
            self::instance()->handleRequest($data);
            Logger::log("\\handleRequest");
        } catch (\Exception $e) {
            Logger::log("An error occured: " . $e->getMessage());
        }
    }

    private static function handleCliRequest() {
        Logger::useStderr();

        // Takes raw data from the request
        $json = stream_get_contents(STDIN);

        // Converts it into a PHP object
        $data = json_decode($json);

        try {
            Logger::log("handleRequest");
            self::instance()->handleRequest($data);
            Logger::log("\\handleRequest");
        } catch (\Exception $e) {
            Logger::log("An error occured: " . $e->getMessage());
        }
    }

    public static function run() {
        if (php_sapi_name() === 'cli') {
            self::handleCliRequest();
        } else {
            self::handleServerRequest();
        }
    }
}
