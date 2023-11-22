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
class TextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\Text';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\Text;
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
        $object = new \Lenra\App\Components\Lenra\Model\Text();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($this->denormalizer->denormalize($data['style'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesTextStyle', 'json', $context));
        }
        if (\array_key_exists('locale', $data)) {
            $object->setLocale($this->denormalizer->denormalize($data['locale'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesLocale', 'json', $context));
        }
        if (\array_key_exists('semanticsLabel', $data)) {
            $object->setSemanticsLabel($data['semanticsLabel']);
        }
        if (\array_key_exists('spellOut', $data)) {
            $object->setSpellOut($data['spellOut']);
        }
        if (\array_key_exists('textAlign', $data)) {
            $object->setTextAlign($data['textAlign']);
        }
        if (\array_key_exists('children', $data)) {
            $values = array();
            foreach ($data['children'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Lenra\\App\\Components\\Lenra\\Model\\Text', 'json', $context);
            }
            $object->setChildren($values);
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
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $this->normalizer->normalize($object->getStyle(), 'json', $context);
        }
        if ($object->isInitialized('locale') && null !== $object->getLocale()) {
            $data['locale'] = $this->normalizer->normalize($object->getLocale(), 'json', $context);
        }
        if ($object->isInitialized('semanticsLabel') && null !== $object->getSemanticsLabel()) {
            $data['semanticsLabel'] = $object->getSemanticsLabel();
        }
        if ($object->isInitialized('spellOut') && null !== $object->getSpellOut()) {
            $data['spellOut'] = $object->getSpellOut();
        }
        if ($object->isInitialized('textAlign') && null !== $object->getTextAlign()) {
            $data['textAlign'] = $object->getTextAlign();
        }
        if ($object->isInitialized('children') && null !== $object->getChildren()) {
            $values = array();
            foreach ($object->getChildren() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['children'] = $values;
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\Text' => false);
    }
}