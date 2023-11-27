<?php

namespace Lenra\App\Components\Base;

use Lenra\App\Response\View\Normalizer\JaneObjectNormalizer;

/**
 * @template T
 */
class Builder implements \JsonSerializable
{
    private static JaneObjectNormalizer $normalizer;
    /**
     * @var T
     */
    protected $data;
    public function __construct(string|Null $type, string $model)
    {
        $this->data = new ($model)();
        if (isset($type)) {
            $this->data->setType($type);
        }
    }

    function jsonSerialize(): mixed
    {
        if (!isset(Builder::$normalizer)) {
            Builder::$normalizer = new JaneObjectNormalizer();
            Builder::$normalizer->setNormalizer(Builder::$normalizer);
            Builder::$normalizer->setDenormalizer(Builder::$normalizer);
        }
        return Builder::$normalizer->normalize($this->data);
    }

    static function convert($value): mixed
    {
        if ($value instanceof Builder) {
            $value = $value->data;
        }
        elseif (is_array($value)) {
            $value = array_map(function ($item) {
                return Builder::convert($item);
            }, $value);
        }
        return $value;
    }
}