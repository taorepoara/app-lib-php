<?php

namespace Lenra\App;

class Logger {
    private static $STDOUT;

    private static function initStdio(): void {
        if (!isset(self::$STDOUT)) {
            self::$STDOUT = fopen('php://stdout', 'w');
        }
    }

    public static function log(string $message): void {
        self::initStdio();
        fwrite(self::$STDOUT, hrtime(true) . " - " . $message . "\n");
    }
    
    public static function logVar($var, string|Null $message = null): void {
        ob_start();
        var_dump($var);
        $contents = ob_get_contents();
        ob_end_clean();
        if (isset($message)) {
            $contents = $message . ": " . $contents;
        }
        self::log($contents);
    }
}
