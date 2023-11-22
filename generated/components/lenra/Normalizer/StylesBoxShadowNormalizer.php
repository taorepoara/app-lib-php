<?php

namespace Lenra\App\Components\Lenra\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Lenra\App\Components\Lenra\Runtime\Normalizer\CheckArray;
use Lenra\App\Components\Lenra\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class StylesBoxShadowNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesBoxShadow';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesBoxShadow;
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Lenra\App\Components\Lenra\Model\StylesBoxShadow();
        if (\array_key_exists('blurRadius', $data) && \is_int($data['blurRadius'])) {
            $data['blurRadius'] = (double) $data['blurRadius'];
        }
        if (\array_key_exists('spreadRadius', $data) && \is_int($data['spreadRadius'])) {
            $data['spreadRadius'] = (double) $data['spreadRadius'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (\array_key_exists('blurRadius', $data)) {
            $object->setBlurRadius($data['blurRadius']);
        }
        if (\array_key_exists('spreadRadius', $data)) {
            $object->setSpreadRadius($data['spreadRadius']);
        }
        if (\array_key_exists('offset', $data)) {
            $object->setOffset($this->denormalizer->denormalize($data['offset'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesOffset', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('color') && null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if ($object->isInitialized('blurRadius') && null !== $object->getBlurRadius()) {
            $data['blurRadius'] = $object->getBlurRadius();
        }
        if ($object->isInitialized('spreadRadius') && null !== $object->getSpreadRadius()) {
            $data['spreadRadius'] = $object->getSpreadRadius();
        }
        if ($object->isInitialized('offset') && null !== $object->getOffset()) {
            $data['offset'] = $this->normalizer->normalize($object->getOffset(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesBoxShadow' => false);
    }
}