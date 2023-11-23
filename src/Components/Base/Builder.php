<?php

namespace Lenra\App\Components\Base;

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
}