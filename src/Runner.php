<?php 

namespace Lenra\App;

use Exception;

class Runner {
    public static function start() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new Exception('The request must be POST');
        }
        
        Logger::log("Read input");
        // Takes raw data from the request
        $json = stream_get_contents(\STDIN);
        Logger::log("\\Read input");
        
        Logger::log("json_decode");
        // Converts it into a PHP object
        $data = json_decode($json);
        // var_dump($data);
        // var_dump($data->view);
        Logger::log("\\json_decode");
        
        Logger::log("require_once 'handler.php'");
        require_once 'handler.php';
        Logger::log("\\require_once 'handler.php'");

        try {
            Logger::log("handleRequest");
            handleRequest($data);
            Logger::log("\\handleRequest");
        }
        catch (\Exception $e) {
            Logger::log("An error occured: " . $e->getMessage());
        }
    }
}

?>