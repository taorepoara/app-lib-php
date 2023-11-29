<?php

namespace Lenra\App;

use Lenra\App\Components\Route;

class Manifest implements \JsonSerializable {
    protected string $version;
    /** 
    * @var Route[] 
    */
    protected array $routes;

    /** 
    * @param string 
    * @param Route[] 
    */
    public function __construct(
        string $version,
        array $routes
    ) {
        $this->version = $version;
        $this->routes = $routes;
    }

    public function jsonSerialize() {
        return [
            'version' => $this->version,
            'routes' => array_map(function ($route) {
                return $route->jsonSerialize();
            }, $this->routes),
        ];
    }
}
