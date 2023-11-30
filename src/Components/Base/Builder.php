<?php

namespace Lenra\App\Components\Base;

use ArrayObject;

class Builder implements \JsonSerializable {
    protected $data;
    public function __construct(string|Null $type = null) {
        $this->data = new ArrayObject();
        if (isset($type)) {
            $this->data["_type"] = $type;
        }
    }

    function jsonSerialize(): mixed {
        return $this->data;
    }
}
