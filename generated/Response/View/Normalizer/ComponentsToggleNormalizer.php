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
class ComponentsToggleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsToggle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsToggle;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsToggle();
        if (\array_key_exists('splashRadius', $data) && \is_int($data['splashRadius'])) {
            $data['splashRadius'] = (double) $data['splashRadius'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('splashRadius', $data)) {
            $object->setSplashRadius($data['splashRadius']);
        }
        if (\array_key_exists('autofocus', $data)) {
            $object->setAutofocus($data['autofocus']);
        }
        if (\array_key_exists('dragStartBehavior', $data)) {
            $object->setDragStartBehavior($data['dragStartBehavior']);
        }
        if (\array_key_exists('onPressed', $data)) {
            $object->setOnPressed($this->denormalizer->denormalize($data['onPressed'], 'Lenra\\App\\Response\\View\\Model\\ComponentsListener', 'json', $context));
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($this->denormalizer->denormalize($data['style'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesToggleStyle', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['_type'] = $object->getType();
        $data['value'] = $object->getValue();
        if ($object->isInitialized('splashRadius') && null !== $object->getSplashRadius()) {
            $data['splashRadius'] = $object->getSplashRadius();
        }
        if ($object->isInitialized('autofocus') && null !== $object->getAutofocus()) {
            $data['autofocus'] = $object->getAutofocus();
        }
        if ($object->isInitialized('dragStartBehavior') && null !== $object->getDragStartBehavior()) {
            $data['dragStartBehavior'] = $object->getDragStartBehavior();
        }
        if ($object->isInitialized('onPressed') && null !== $object->getOnPressed()) {
            $data['onPressed'] = $this->normalizer->normalize($object->getOnPressed(), 'json', $context);
        }
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $this->normalizer->normalize($object->getStyle(), 'json', $context);
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsToggle' => false);
    }
}