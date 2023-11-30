<?php

namespace Lenra\App\Manifest;

use Lenra\App\Logger;
use Lenra\App\Manifest;

abstract class Builder {
    private const MANIFEST_CLASS = 'App\Manifest';
    private static Manifest $manifest;

    abstract protected function build(): Manifest;

    public static function manifest(): Manifest {
        if (!isset(self::$manifest)) {
            $class = self::MANIFEST_CLASS;
            if (!class_exists($class)) {
                Logger::log("class $class does not exist");
                throw new \Exception("class $class does not exist");
            }
            $instance = new ($class)();
            self::$manifest = $instance->build();
        }
        return self::$manifest;
    }
}