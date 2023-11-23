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
class ComponentsButtonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsButton';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsButton;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsButton();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('text', $data)) {
            $object->setText($data['text']);
        }
        if (\array_key_exists('disabled', $data)) {
            $object->setDisabled($data['disabled']);
        }
        if (\array_key_exists('size', $data)) {
            $object->setSize($data['size']);
        }
        if (\array_key_exists('mainStyle', $data)) {
            $object->setMainStyle($data['mainStyle']);
        }
        if (\array_key_exists('onPressed', $data)) {
            $object->setOnPressed($this->denormalizer->denormalize($data['onPressed'], 'Lenra\\App\\Response\\View\\Model\\ComponentsListener', 'json', $context));
        }
        if (\array_key_exists('leftIcon', $data)) {
            $object->setLeftIcon($this->denormalizer->denormalize($data['leftIcon'], 'Lenra\\App\\Response\\View\\Model\\ComponentsIcon', 'json', $context));
        }
        if (\array_key_exists('rightIcon', $data)) {
            $object->setRightIcon($this->denormalizer->denormalize($data['rightIcon'], 'Lenra\\App\\Response\\View\\Model\\ComponentsIcon', 'json', $context));
        }
        if (\array_key_exists('submit', $data)) {
            $object->setSubmit($data['submit']);
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
        if ($object->isInitialized('disabled') && null !== $object->getDisabled()) {
            $data['disabled'] = $object->getDisabled();
        }
        if ($object->isInitialized('size') && null !== $object->getSize()) {
            $data['size'] = $object->getSize();
        }
        if ($object->isInitialized('mainStyle') && null !== $object->getMainStyle()) {
            $data['mainStyle'] = $object->getMainStyle();
        }
        if ($object->isInitialized('onPressed') && null !== $object->getOnPressed()) {
            $data['onPressed'] = $this->normalizer->normalize($object->getOnPressed(), 'json', $context);
        }
        if ($object->isInitialized('leftIcon') && null !== $object->getLeftIcon()) {
            $data['leftIcon'] = $this->normalizer->normalize($object->getLeftIcon(), 'json', $context);
        }
        if ($object->isInitialized('rightIcon') && null !== $object->getRightIcon()) {
            $data['rightIcon'] = $this->normalizer->normalize($object->getRightIcon(), 'json', $context);
        }
        if ($object->isInitialized('submit') && null !== $object->getSubmit()) {
            $data['submit'] = $object->getSubmit();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsButton' => false);
    }
}