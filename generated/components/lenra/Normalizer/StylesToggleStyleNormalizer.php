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
class StylesToggleStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesToggleStyle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesToggleStyle;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesToggleStyle();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activeColor', $data)) {
            $object->setActiveColor($data['activeColor']);
        }
        if (\array_key_exists('activeTrackColor', $data)) {
            $object->setActiveTrackColor($data['activeTrackColor']);
        }
        if (\array_key_exists('inactiveTrackColor', $data)) {
            $object->setInactiveTrackColor($data['inactiveTrackColor']);
        }
        if (\array_key_exists('inactiveThumbColor', $data)) {
            $object->setInactiveThumbColor($data['inactiveThumbColor']);
        }
        if (\array_key_exists('hoverColor', $data)) {
            $object->setHoverColor($data['hoverColor']);
        }
        if (\array_key_exists('focusColor', $data)) {
            $object->setFocusColor($data['focusColor']);
        }
        if (\array_key_exists('activeThumbImage', $data)) {
            $object->setActiveThumbImage($this->denormalizer->denormalize($data['activeThumbImage'], 'Lenra\\App\\Components\\Lenra\\Model\\Image', 'json', $context));
        }
        if (\array_key_exists('inactiveThumbImage', $data)) {
            $object->setInactiveThumbImage($this->denormalizer->denormalize($data['inactiveThumbImage'], 'Lenra\\App\\Components\\Lenra\\Model\\Image', 'json', $context));
        }
        if (\array_key_exists('materialTapTargetSize', $data)) {
            $object->setMaterialTapTargetSize($data['materialTapTargetSize']);
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
        if ($object->isInitialized('activeTrackColor') && null !== $object->getActiveTrackColor()) {
            $data['activeTrackColor'] = $object->getActiveTrackColor();
        }
        if ($object->isInitialized('inactiveTrackColor') && null !== $object->getInactiveTrackColor()) {
            $data['inactiveTrackColor'] = $object->getInactiveTrackColor();
        }
        if ($object->isInitialized('inactiveThumbColor') && null !== $object->getInactiveThumbColor()) {
            $data['inactiveThumbColor'] = $object->getInactiveThumbColor();
        }
        if ($object->isInitialized('hoverColor') && null !== $object->getHoverColor()) {
            $data['hoverColor'] = $object->getHoverColor();
        }
        if ($object->isInitialized('focusColor') && null !== $object->getFocusColor()) {
            $data['focusColor'] = $object->getFocusColor();
        }
        if ($object->isInitialized('activeThumbImage') && null !== $object->getActiveThumbImage()) {
            $data['activeThumbImage'] = $this->normalizer->normalize($object->getActiveThumbImage(), 'json', $context);
        }
        if ($object->isInitialized('inactiveThumbImage') && null !== $object->getInactiveThumbImage()) {
            $data['inactiveThumbImage'] = $this->normalizer->normalize($object->getInactiveThumbImage(), 'json', $context);
        }
        if ($object->isInitialized('materialTapTargetSize') && null !== $object->getMaterialTapTargetSize()) {
            $data['materialTapTargetSize'] = $object->getMaterialTapTargetSize();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesToggleStyle' => false);
    }
}