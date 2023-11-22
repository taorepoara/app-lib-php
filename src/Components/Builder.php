<?php

namespace Lenra\App\Components;

use Lenra\App\Components\Json\Model\Listener as ModelListener;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @template T
 */
class Builder implements \JsonSerializable
{
    private static $normalizers = [];
    /**
     * @var T
     */
    protected $data;
    protected string $normalizer;
    public function __construct(string $type, string $model, string $normalizer)
    {
        $this->data = new ($model)();
        $this->data->setType($type);
        $this->normalizer = $normalizer;
    }

    function jsonSerialize(): mixed
    {
        if (!isset(Builder::$normalizers[$this->normalizer])) {
            Builder::$normalizers[$this->normalizer] = new ($this->normalizer)();
        }

        return Builder::$normalizers[$this->normalizer]->normalize($this->data);
    }

    public static function builder(string $name): Listener {
        return new Listener($name);
    }
}