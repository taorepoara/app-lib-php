<?php

namespace Lenra\App;

class ListenerRequest {
    public function __construct(
        public $props,
        public $event,
        public Api $api
    ) {
    }
}

abstract class Listener {
    abstract public function handle(ListenerRequest $request);
}
