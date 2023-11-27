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
class ComponentsStylesBorderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorder';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesBorder;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesBorder();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('top', $data)) {
            $object->setTop($this->denormalizer->denormalize($data['top'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide', 'json', $context));
        }
        if (\array_key_exists('left', $data)) {
            $object->setLeft($this->denormalizer->denormalize($data['left'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide', 'json', $context));
        }
        if (\array_key_exists('bottom', $data)) {
            $object->setBottom($this->denormalizer->denormalize($data['bottom'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide', 'json', $context));
        }
        if (\array_key_exists('right', $data)) {
            $object->setRight($this->denormalizer->denormalize($data['right'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorderSide', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('top') && null !== $object->getTop()) {
            $data['top'] = $this->normalizer->normalize($object->getTop(), 'json', $context);
        }
        if ($object->isInitialized('left') && null !== $object->getLeft()) {
            $data['left'] = $this->normalizer->normalize($object->getLeft(), 'json', $context);
        }
        if ($object->isInitialized('bottom') && null !== $object->getBottom()) {
            $data['bottom'] = $this->normalizer->normalize($object->getBottom(), 'json', $context);
        }
        if ($object->isInitialized('right') && null !== $object->getRight()) {
            $data['right'] = $this->normalizer->normalize($object->getRight(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesBorder' => false);
    }
}