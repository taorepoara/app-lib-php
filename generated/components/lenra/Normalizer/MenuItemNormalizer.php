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
class MenuItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\MenuItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\MenuItem;
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
        $object = new \Lenra\App\Components\Lenra\Model\MenuItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('isSelected', $data)) {
            $object->setIsSelected($data['isSelected']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('icon', $data)) {
            $object->setIcon($this->denormalizer->denormalize($data['icon'], 'Lenra\\App\\Components\\Lenra\\Model\\Icon', 'json', $context));
        }
        if (\array_key_exists('onPressed', $data)) {
            $object->setOnPressed($this->denormalizer->denormalize($data['onPressed'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
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
        $data['text'] = $object->getText();
        if ($object->isInitialized('isSelected') && null !== $object->getIsSelected()) {
            $data['isSelected'] = $object->getIsSelected();
        }
        if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if ($object->isInitialized('icon') && null !== $object->getIcon()) {
            $data['icon'] = $this->normalizer->normalize($object->getIcon(), 'json', $context);
        }
        if ($object->isInitialized('onPressed') && null !== $object->getOnPressed()) {
            $data['onPressed'] = $this->normalizer->normalize($object->getOnPressed(), 'json', $context);
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\MenuItem' => false);
    }
}