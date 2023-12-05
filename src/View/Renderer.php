<?php

namespace Lenra\App\View;

abstract class Renderer {
    abstract public function render(Request $request);
}
