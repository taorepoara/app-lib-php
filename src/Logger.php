<?php

namespace Lenra\App;

class Logger {
    private static $STDOUT;

    public static function log(string $message): void {
        if (!isset(self::$STDOUT)) {
            self::$STDOUT = fopen('php://stdout', 'w');
        }
        fwrite(self::$STDOUT, microtime() . " - " . $message . "\n");
    }
}
