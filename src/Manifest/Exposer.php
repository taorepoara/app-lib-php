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
        array $routes
    ) {
        $this->routes = $routes;
    }

    public function version(string $version): Exposer {
        $this->version = $version;
        return $this;
    }

    public function jsonSerialize(): mixed {
        $ret = [
            'routes' => array_map(function ($route) {
                return $route->jsonSerialize();
            }, $this->routes),
        ];
        if (isset($this->version)) {
            $ret['version'] = $this->version;
        }
        return $ret;
    }
}
