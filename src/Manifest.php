<?php

namespace Lenra\App;

use Lenra\App\Components\Route;
use Lenra\App\Manifest\Exposer;

class Manifest implements \JsonSerializable {
    protected Exposer $json;
    protected Exposer $lenra;

    public function json(Exposer $exposer): Manifest {
        $this->json = $exposer;
        return $this;
    }

    public function lenra(Exposer $exposer): Manifest {
        $this->lenra = $exposer;
        return $this;
    }

    public function jsonSerialize() {
        return [
            'json' => $this->json->jsonSerialize(),
            'lenra' => $this->lenra->jsonSerialize(),
        ];
    }
}
