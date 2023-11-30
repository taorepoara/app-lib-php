<?php

namespace Lenra\App;

class Logger {
    public static function log(string $message): void {
        fwrite(\STDOUT, microtime() . " - " . $message . "\n");
    }
}
