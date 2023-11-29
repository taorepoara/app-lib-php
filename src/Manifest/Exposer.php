<?php

namespace Lenra\App\Manifest;

use Lenra\App\Components\View;

class Exposer implements \JsonSerializable {
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