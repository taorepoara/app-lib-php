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
class ComponentsStylesStrutStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesStrutStyle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesStrutStyle;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesStrutStyle();
        if (\array_key_exists('fontSize', $data) && \is_int($data['fontSize'])) {
            $data['fontSize'] = (double) $data['fontSize'];
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (double) $data['height'];
        }
        if (\array_key_exists('leading', $data) && \is_int($data['leading'])) {
            $data['leading'] = (double) $data['leading'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('debugLabel', $data)) {
            $object->setDebugLabel($data['debugLabel']);
        }
        if (\array_key_exists('fontFamily', $data)) {
            $object->setFontFamily($data['fontFamily']);
        }
        if (\array_key_exists('fontFamilyFallback', $data)) {
            $values = array();
            foreach ($data['fontFamilyFallback'] as $value) {
                $values[] = $value;
            }
            $object->setFontFamilyFallback($values);
        }
        if (\array_key_exists('fontSize', $data)) {
            $object->setFontSize($data['fontSize']);
        }
        if (\array_key_exists('fontWeight', $data)) {
            $object->setFontWeight($data['fontWeight']);
        }
        if (\array_key_exists('forceStrutHeight', $data)) {
            $object->setForceStrutHeight($data['forceStrutHeight']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('leading', $data)) {
            $object->setLeading($data['leading']);
        }
        if (\array_key_exists('leadingDistribution', $data)) {
            $object->setLeadingDistribution($data['leadingDistribution']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('debugLabel') && null !== $object->getDebugLabel()) {
            $data['debugLabel'] = $object->getDebugLabel();
        }
        if ($object->isInitialized('fontFamily') && null !== $object->getFontFamily()) {
            $data['fontFamily'] = $object->getFontFamily();
        }
        if ($object->isInitialized('fontFamilyFallback') && null !== $object->getFontFamilyFallback()) {
            $values = array();
            foreach ($object->getFontFamilyFallback() as $value) {
                $values[] = $value;
            }
            $data['fontFamilyFallback'] = $values;
        }
        if ($object->isInitialized('fontSize') && null !== $object->getFontSize()) {
            $data['fontSize'] = $object->getFontSize();
        }
        if ($object->isInitialized('fontWeight') && null !== $object->getFontWeight()) {
            $data['fontWeight'] = $object->getFontWeight();
        }
        if ($object->isInitialized('forceStrutHeight') && null !== $object->getForceStrutHeight()) {
            $data['forceStrutHeight'] = $object->getForceStrutHeight();
        }
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if ($object->isInitialized('leading') && null !== $object->getLeading()) {
            $data['leading'] = $object->getLeading();
        }
        if ($object->isInitialized('leadingDistribution') && null !== $object->getLeadingDistribution()) {
            $data['leadingDistribution'] = $object->getLeadingDistribution();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesStrutStyle' => false);
    }
}