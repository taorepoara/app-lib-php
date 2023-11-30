<?php

namespace Lenra\App\Manifest;

use Lenra\App\Manifest;

abstract class Builder {
    private static Manifest $manifest;
    private static Builder $instance;

    public function __construct() {
        self::$instance = $this;
    }

    abstract protected function build(): Manifest;

    public static function manifest(): Manifest {
        if (!isset(self::$manifest)) {
            self::$manifest = self::$instance->build();
        }
        return self::$manifest;
    }
}