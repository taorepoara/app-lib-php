<?php

namespace Lenra\App;

use Lenra\App\Components\Base\Builder;

class ViewRequest {
    public function __construct(
        public $data,
        public $props,
        public $context
    ) {
    }
}

abstract class ViewRenderer {
    abstract public function render(ViewRequest $request);
}

abstract class LenraViewRenderer extends ViewRenderer {
    abstract public function render(ViewRequest $request) : Builder;
}
