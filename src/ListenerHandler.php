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

abstract class ListenerHandler {
    abstract public function handle(ListenerRequest $request);
}
