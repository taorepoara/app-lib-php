<?php

namespace Lenra\App;

use ArrayObject;
use Exception;
use Lenra\App\Manifest\Builder;

class Runner {
    private const VIEW = 'View';
    private const LISTENER = 'Listener';
    private static Runner $instance;
    private $manifest;
    private $handlers = [];

    protected function __construct() {
        self::$instance = $this;
    }

    protected function handleRequest($request) {
        Logger::logVar($request, "Request");
        // Check if data matches one of the expected queries
        if (isset($request->view)) {
            Logger::log("View: $request->view");
            echo json_encode(
                $this->runHandler(self::VIEW, $request->view, new ViewRequest(
                    $request->data ?? [],
                    $request->props ?? [],
                    $request->context ?? [],
                ))
            );
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
                $this->manifest = Builder::manifest();
            }
            echo json_encode($this->manifest);
        }
    }

    protected function runHandler($type, $name, $request) {
        $parts = explode(".", $name);
        foreach ($parts as &$part) {
            $part = ucfirst($part);
        }
        $class = "App\\$type\\" . join("\\", $parts);
        if (!isset($this->handlers[$class])) {
            if (!class_exists($class)) {
                Logger::log("class $class does not exist");
                throw new Exception("class $class does not exist");
            }
            $this->handlers[$class] = new $class();
        }
        if ($type === 'View') {
            return $this->handlers[$class]->render($request);
        } else {
            $this->handlers[$class]->handle($request);
        }
    }

    public static function instance() {
        if (!isset(self::$instance)) {
            self::$instance = new Runner();
        }
        return self::$instance;
    }

    public static function handleServerRequest() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new Exception('The request must be POST');
        }

        Logger::log("Read input");
        // Takes raw data from the request
        $json = file_get_contents('php://input');
        Logger::log("\\Read input");

        Logger::log("json_decode");
        // Converts it into a PHP object
        $data = json_decode($json);
        Logger::log("\\json_decode");

        try {
            Logger::log("handleRequest");
            self::instance()->handleRequest($data);
            Logger::log("\\handleRequest");
        } catch (\Exception $e) {
            Logger::log("An error occured: " . $e->getMessage());
        }
    }
}
