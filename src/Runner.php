<?php 

namespace Lenra\App;

use Exception;

class Runner {
    public static function start() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            throw new Exception('The request must be POST');
        }
        
        // Takes raw data from the request
        $json = file_get_contents('php://input');
        
        // Converts it into a PHP object
        $data = json_decode($json);
        // var_dump($data);
        // var_dump($data->view);
        
        require_once 'handler.php';

        try {
            handleRequest($data);
        }
        catch (\Exception $e) {
            error_log("Un error occured: " . $e->getMessage());
        }
    }
}

?>