<?php

namespace Lenra\App\Response\View\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Lenra\App\Response\View\Runtime\Normalizer\CheckArray;
use Lenra\App\Response\View\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ComponentsStylesDurationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesDuration';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesDuration;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesDuration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('days', $data)) {
            $object->setDays($data['days']);
        }
        if (\array_key_exists('hours', $data)) {
            $object->setHours($data['hours']);
        }
        if (\array_key_exists('minutes', $data)) {
            $object->setMinutes($data['minutes']);
        }
        if (\array_key_exists('seconds', $data)) {
            $object->setSeconds($data['seconds']);
        }
        if (\array_key_exists('milliseconds', $data)) {
            $object->setMilliseconds($data['milliseconds']);
        }
        if (\array_key_exists('microseconds', $data)) {
            $object->setMicroseconds($data['microseconds']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('days') && null !== $object->getDays()) {
            $data['days'] = $object->getDays();
        }
        if ($object->isInitialized('hours') && null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if ($object->isInitialized('minutes') && null !== $object->getMinutes()) {
            $data['minutes'] = $object->getMinutes();
        }
        if ($object->isInitialized('seconds') && null !== $object->getSeconds()) {
            $data['seconds'] = $object->getSeconds();
        }
        if ($object->isInitialized('milliseconds') && null !== $object->getMilliseconds()) {
            $data['milliseconds'] = $object->getMilliseconds();
        }
        if ($object->isInitialized('microseconds') && null !== $object->getMicroseconds()) {
            $data['microseconds'] = $object->getMicroseconds();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesDuration' => false);
    }
}