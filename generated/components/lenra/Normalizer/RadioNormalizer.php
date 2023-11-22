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
class RadioNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\Radio';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\Radio;
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
        $object = new \Lenra\App\Components\Lenra\Model\Radio();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('autofocus', $data)) {
            $object->setAutofocus($data['autofocus']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('groupValue', $data)) {
            $object->setGroupValue($data['groupValue']);
        }
        if (\array_key_exists('materialTapTargetSize', $data)) {
            $object->setMaterialTapTargetSize($data['materialTapTargetSize']);
        }
        if (\array_key_exists('onPressed', $data)) {
            $object->setOnPressed($this->denormalizer->denormalize($data['onPressed'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('toggleable', $data)) {
            $object->setToggleable($data['toggleable']);
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($this->denormalizer->denormalize($data['style'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesRadioStyle', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
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
        if ($object->isInitialized('autofocus') && null !== $object->getAutofocus()) {
            $data['autofocus'] = $object->getAutofocus();
        }
        $data['value'] = $object->getValue();
        $data['groupValue'] = $object->getGroupValue();
        if ($object->isInitialized('materialTapTargetSize') && null !== $object->getMaterialTapTargetSize()) {
            $data['materialTapTargetSize'] = $object->getMaterialTapTargetSize();
        }
        if ($object->isInitialized('onPressed') && null !== $object->getOnPressed()) {
            $data['onPressed'] = $this->normalizer->normalize($object->getOnPressed(), 'json', $context);
        }
        if ($object->isInitialized('toggleable') && null !== $object->getToggleable()) {
            $data['toggleable'] = $object->getToggleable();
        }
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $this->normalizer->normalize($object->getStyle(), 'json', $context);
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\Radio' => false);
    }
}