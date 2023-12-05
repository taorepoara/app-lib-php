<?php

namespace Lenra\App\Manifest;

use Lenra\App\Components\View;

class Route implements \JsonSerializable {
    protected string $path;
    protected View $view;

    public function __construct(
        string $path,
        View $view
    ) {
        $this->path = $path;
        $this->view = $view;
    }

    public function jsonSerialize(): mixed {
        return [
            'path' => $this->path,
            'view' => $this->view->jsonSerialize(),
        ];
    }
}