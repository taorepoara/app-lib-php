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
class SliderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\Slider';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\Slider;
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
        $object = new \Lenra\App\Components\Lenra\Model\Slider();
        if (\array_key_exists('divisions', $data) && \is_int($data['divisions'])) {
            $data['divisions'] = (double) $data['divisions'];
        }
        if (\array_key_exists('min', $data) && \is_int($data['min'])) {
            $data['min'] = (double) $data['min'];
        }
        if (\array_key_exists('max', $data) && \is_int($data['max'])) {
            $data['max'] = (double) $data['max'];
        }
        if (\array_key_exists('value', $data) && \is_int($data['value'])) {
            $data['value'] = (double) $data['value'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($this->denormalizer->denormalize($data['style'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesSliderStyle', 'json', $context));
        }
        if (\array_key_exists('autofocus', $data)) {
            $object->setAutofocus($data['autofocus']);
        }
        if (\array_key_exists('divisions', $data)) {
            $object->setDivisions($data['divisions']);
        }
        if (\array_key_exists('label', $data)) {
            $object->setLabel($data['label']);
        }
        if (\array_key_exists('min', $data)) {
            $object->setMin($data['min']);
        }
        if (\array_key_exists('max', $data)) {
            $object->setMax($data['max']);
        }
        if (\array_key_exists('onChanged', $data)) {
            $object->setOnChanged($this->denormalizer->denormalize($data['onChanged'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onChangeEnd', $data)) {
            $object->setOnChangeEnd($this->denormalizer->denormalize($data['onChangeEnd'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onChangeStart', $data)) {
            $object->setOnChangeStart($this->denormalizer->denormalize($data['onChangeStart'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
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
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $this->normalizer->normalize($object->getStyle(), 'json', $context);
        }
        if ($object->isInitialized('autofocus') && null !== $object->getAutofocus()) {
            $data['autofocus'] = $object->getAutofocus();
        }
        if ($object->isInitialized('divisions') && null !== $object->getDivisions()) {
            $data['divisions'] = $object->getDivisions();
        }
        if ($object->isInitialized('label') && null !== $object->getLabel()) {
            $data['label'] = $object->getLabel();
        }
        if ($object->isInitialized('min') && null !== $object->getMin()) {
            $data['min'] = $object->getMin();
        }
        if ($object->isInitialized('max') && null !== $object->getMax()) {
            $data['max'] = $object->getMax();
        }
        if ($object->isInitialized('onChanged') && null !== $object->getOnChanged()) {
            $data['onChanged'] = $this->normalizer->normalize($object->getOnChanged(), 'json', $context);
        }
        if ($object->isInitialized('onChangeEnd') && null !== $object->getOnChangeEnd()) {
            $data['onChangeEnd'] = $this->normalizer->normalize($object->getOnChangeEnd(), 'json', $context);
        }
        if ($object->isInitialized('onChangeStart') && null !== $object->getOnChangeStart()) {
            $data['onChangeStart'] = $this->normalizer->normalize($object->getOnChangeStart(), 'json', $context);
        }
        if ($object->isInitialized('value') && null !== $object->getValue()) {
            $data['value'] = $object->getValue();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\Slider' => false);
    }
}