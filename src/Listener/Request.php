<?php

namespace Lenra\App\Listener;

use Lenra\App\Api;

class Request {
    public function __construct(
        public $props,
        public $event,
        public Api $api
    ) {
    }
}
