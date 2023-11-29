<?php

use Lenra\App\Api;

function var_error_log($object = null) {
    ob_start();
    var_dump($object);
    $contents = ob_get_contents();
    ob_end_clean();
    error_log($contents);
}

class ViewRequest {
    public function __construct(
        public $data,
        public $props,
        public $context
    ) {
    }
}

class ListenerRequest {
    public function __construct(
        public $props,
        public $event,
        public Api $api
    ) {
    }
}

function handleRequest($request) {
    // Check if data matches one of the expected queries
    if (isset($request->view)) {
        error_log("View: $request->view");
        includeFile('views', $request->view, new ViewRequest(
            $request->data ?? [],
            $request->props ?? [],
            $request->context ?? [],
        ));
    } elseif (isset($request->listener)) {
        error_log("Listener: $request->listener");

        $api = new Api($request->api);

        $listenerRequest = new ListenerRequest(
            $request->props ?? [],
            $request->event ?? [],
            $api,
        );

        includeFile('listeners', $request->listener, $listenerRequest);
    } elseif (isset($request->resource)) {
        error_log("Resource: $request->resource");
        readfile("resources/$request->resource");
    } else {
        error_log("Manifest");
        includeFile('manifest');
    }
}

function includeFile($type, $name = null, $request = null) {
    if (isset($name)) {
        $path = $type . '/' . str_replace(".", "/", $name) . '.php';
    } else {
        $path = $type . '.php';
    }
    error_log("include file $path");
    if (include $path) {
        $fn = 'handle';
        if (function_exists($fn) && is_callable($fn)) {
            echo json_encode(($fn)($request));
        } else {
            error_log("function $fn does not exist");
            throw new Exception("function $fn does not exist");
        }
    } else {
        error_log("include failed");
        throw new Exception('Could not include the file: ' . $path);
    }
}
