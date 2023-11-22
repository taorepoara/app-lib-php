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
class StylesPaddingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesPadding';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesPadding;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesPadding();
        if (\array_key_exists('top', $data) && \is_int($data['top'])) {
            $data['top'] = (double) $data['top'];
        }
        if (\array_key_exists('left', $data) && \is_int($data['left'])) {
            $data['left'] = (double) $data['left'];
        }
        if (\array_key_exists('bottom', $data) && \is_int($data['bottom'])) {
            $data['bottom'] = (double) $data['bottom'];
        }
        if (\array_key_exists('right', $data) && \is_int($data['right'])) {
            $data['right'] = (double) $data['right'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('top', $data)) {
            $object->setTop($data['top']);
        }
        if (\array_key_exists('left', $data)) {
            $object->setLeft($data['left']);
        }
        if (\array_key_exists('bottom', $data)) {
            $object->setBottom($data['bottom']);
        }
        if (\array_key_exists('right', $data)) {
            $object->setRight($data['right']);
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
            $data['top'] = $object->getTop();
        }
        if ($object->isInitialized('left') && null !== $object->getLeft()) {
            $data['left'] = $object->getLeft();
        }
        if ($object->isInitialized('bottom') && null !== $object->getBottom()) {
            $data['bottom'] = $object->getBottom();
        }
        if ($object->isInitialized('right') && null !== $object->getRight()) {
            $data['right'] = $object->getRight();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesPadding' => false);
    }
}