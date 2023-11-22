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
class StylesTextInputTypeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesTextInputType';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesTextInputType;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesTextInputType();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('copy', $data)) {
            $object->setCopy($data['copy']);
        }
        if (\array_key_exists('cut', $data)) {
            $object->setCut($data['cut']);
        }
        if (\array_key_exists('paste', $data)) {
            $object->setPaste($data['paste']);
        }
        if (\array_key_exists('selectAll', $data)) {
            $object->setSelectAll($data['selectAll']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('copy') && null !== $object->getCopy()) {
            $data['copy'] = $object->getCopy();
        }
        if ($object->isInitialized('cut') && null !== $object->getCut()) {
            $data['cut'] = $object->getCut();
        }
        if ($object->isInitialized('paste') && null !== $object->getPaste()) {
            $data['paste'] = $object->getPaste();
        }
        if ($object->isInitialized('selectAll') && null !== $object->getSelectAll()) {
            $data['selectAll'] = $object->getSelectAll();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesTextInputType' => false);
    }
}