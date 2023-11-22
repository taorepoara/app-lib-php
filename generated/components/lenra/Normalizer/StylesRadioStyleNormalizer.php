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
class StylesRadioStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesRadioStyle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesRadioStyle;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesRadioStyle();
        if (\array_key_exists('splashRadius', $data) && \is_int($data['splashRadius'])) {
            $data['splashRadius'] = (double) $data['splashRadius'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activeColor', $data)) {
            $object->setActiveColor($data['activeColor']);
        }
        if (\array_key_exists('focusColor', $data)) {
            $object->setFocusColor($data['focusColor']);
        }
        if (\array_key_exists('hovercolor', $data)) {
            $object->setHovercolor($data['hovercolor']);
        }
        if (\array_key_exists('unselectedColor', $data)) {
            $object->setUnselectedColor($data['unselectedColor']);
        }
        if (\array_key_exists('splashRadius', $data)) {
            $object->setSplashRadius($data['splashRadius']);
        }
        if (\array_key_exists('visualDensity', $data)) {
            $object->setVisualDensity($data['visualDensity']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('activeColor') && null !== $object->getActiveColor()) {
            $data['activeColor'] = $object->getActiveColor();
        }
        if ($object->isInitialized('focusColor') && null !== $object->getFocusColor()) {
            $data['focusColor'] = $object->getFocusColor();
        }
        if ($object->isInitialized('hovercolor') && null !== $object->getHovercolor()) {
            $data['hovercolor'] = $object->getHovercolor();
        }
        if ($object->isInitialized('unselectedColor') && null !== $object->getUnselectedColor()) {
            $data['unselectedColor'] = $object->getUnselectedColor();
        }
        if ($object->isInitialized('splashRadius') && null !== $object->getSplashRadius()) {
            $data['splashRadius'] = $object->getSplashRadius();
        }
        if ($object->isInitialized('visualDensity') && null !== $object->getVisualDensity()) {
            $data['visualDensity'] = $object->getVisualDensity();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesRadioStyle' => false);
    }
}