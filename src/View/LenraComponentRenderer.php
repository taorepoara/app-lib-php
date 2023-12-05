<?php

namespace Lenra\App\View;

use Lenra\App\Components\Base\Builder;

abstract class LenraComponentRenderer extends Renderer {
    abstract public function render(Request $request) : Builder;
}
