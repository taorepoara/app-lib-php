<?php

namespace Lenra\App\Listener;

abstract class Handler {
    abstract public function handle(Request $request);
}
