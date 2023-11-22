<?php

namespace Lenra\App\Components;

use Lenra\App\Components\Json\Model\Listener as ModelListener;
use Lenra\App\Components\Json\Normalizer\ListenerNormalizer;

/**
 * @template-extends Builder<ModelListener>
 */
class Listener extends Builder
{
    public function __construct(string $name)
    {
        parent::__construct("listener", ModelListener::class, ListenerNormalizer::class);
        $this->data->setName($name);
    }

    public function props($props): Listener {
        $this->data->setProps($props);
        return $this;
    }

    public static function builder(string $name): Listener {
        return new Listener($name);
    }
}