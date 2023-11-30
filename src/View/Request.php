<?php


namespace Lenra\App\View;

class Request {
    public function __construct(
        public $data,
        public $props,
        public $context
    ) {
    }
}