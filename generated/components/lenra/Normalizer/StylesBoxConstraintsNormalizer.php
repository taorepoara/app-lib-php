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
class StylesBoxConstraintsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesBoxConstraints';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesBoxConstraints;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesBoxConstraints();
        if (\array_key_exists('minWidth', $data) && \is_int($data['minWidth'])) {
            $data['minWidth'] = (double) $data['minWidth'];
        }
        if (\array_key_exists('maxWidth', $data) && \is_int($data['maxWidth'])) {
            $data['maxWidth'] = (double) $data['maxWidth'];
        }
        if (\array_key_exists('minHeight', $data) && \is_int($data['minHeight'])) {
            $data['minHeight'] = (double) $data['minHeight'];
        }
        if (\array_key_exists('maxHeight', $data) && \is_int($data['maxHeight'])) {
            $data['maxHeight'] = (double) $data['maxHeight'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('minWidth', $data)) {
            $object->setMinWidth($data['minWidth']);
        }
        if (\array_key_exists('maxWidth', $data)) {
            $object->setMaxWidth($data['maxWidth']);
        }
        if (\array_key_exists('minHeight', $data)) {
            $object->setMinHeight($data['minHeight']);
        }
        if (\array_key_exists('maxHeight', $data)) {
            $object->setMaxHeight($data['maxHeight']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('minWidth') && null !== $object->getMinWidth()) {
            $data['minWidth'] = $object->getMinWidth();
        }
        if ($object->isInitialized('maxWidth') && null !== $object->getMaxWidth()) {
            $data['maxWidth'] = $object->getMaxWidth();
        }
        if ($object->isInitialized('minHeight') && null !== $object->getMinHeight()) {
            $data['minHeight'] = $object->getMinHeight();
        }
        if ($object->isInitialized('maxHeight') && null !== $object->getMaxHeight()) {
            $data['maxHeight'] = $object->getMaxHeight();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesBoxConstraints' => false);
    }
}