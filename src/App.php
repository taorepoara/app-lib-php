<?php 

namespace Lenra\App;

class Server {
    public function __construct() {
        echo 'Hello World';
    }

    public function run() {
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
        
        handleRequest($data);
    }
}

?>