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
class StylesBoxDecorationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesBoxDecoration';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesBoxDecoration;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesBoxDecoration();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('borderRadius', $data)) {
            $object->setBorderRadius($this->denormalizer->denormalize($data['borderRadius'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesBorderRadius', 'json', $context));
        }
        if (\array_key_exists('boxShadow', $data)) {
            $object->setBoxShadow($this->denormalizer->denormalize($data['boxShadow'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesBoxShadow', 'json', $context));
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (\array_key_exists('shape', $data)) {
            $object->setShape($data['shape']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('borderRadius') && null !== $object->getBorderRadius()) {
            $data['borderRadius'] = $this->normalizer->normalize($object->getBorderRadius(), 'json', $context);
        }
        if ($object->isInitialized('boxShadow') && null !== $object->getBoxShadow()) {
            $data['boxShadow'] = $this->normalizer->normalize($object->getBoxShadow(), 'json', $context);
        }
        if ($object->isInitialized('color') && null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if ($object->isInitialized('shape') && null !== $object->getShape()) {
            $data['shape'] = $object->getShape();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesBoxDecoration' => false);
    }
}