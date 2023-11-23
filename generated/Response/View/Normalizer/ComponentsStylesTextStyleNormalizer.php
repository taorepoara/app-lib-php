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
class ComponentsStylesTextStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextStyle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesTextStyle;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesTextStyle();
        if (\array_key_exists('decorationThickness', $data) && \is_int($data['decorationThickness'])) {
            $data['decorationThickness'] = (double) $data['decorationThickness'];
        }
        if (\array_key_exists('fontSize', $data) && \is_int($data['fontSize'])) {
            $data['fontSize'] = (double) $data['fontSize'];
        }
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (double) $data['height'];
        }
        if (\array_key_exists('letterSpacing', $data) && \is_int($data['letterSpacing'])) {
            $data['letterSpacing'] = (double) $data['letterSpacing'];
        }
        if (\array_key_exists('wordSpacing', $data) && \is_int($data['wordSpacing'])) {
            $data['wordSpacing'] = (double) $data['wordSpacing'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('color', $data)) {
            $object->setColor($data['color']);
        }
        if (\array_key_exists('decoration', $data)) {
            $object->setDecoration($data['decoration']);
        }
        if (\array_key_exists('decorationColor', $data)) {
            $object->setDecorationColor($data['decorationColor']);
        }
        if (\array_key_exists('decorationStyle', $data)) {
            $object->setDecorationStyle($data['decorationStyle']);
        }
        if (\array_key_exists('decorationThickness', $data)) {
            $object->setDecorationThickness($data['decorationThickness']);
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
        if (\array_key_exists('fontStyle', $data)) {
            $object->setFontStyle($data['fontStyle']);
        }
        if (\array_key_exists('fontWeight', $data)) {
            $object->setFontWeight($data['fontWeight']);
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('letterSpacing', $data)) {
            $object->setLetterSpacing($data['letterSpacing']);
        }
        if (\array_key_exists('overflow', $data)) {
            $object->setOverflow($data['overflow']);
        }
        if (\array_key_exists('shadows', $data)) {
            $values_1 = array();
            foreach ($data['shadows'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesBoxShadow', 'json', $context);
            }
            $object->setShadows($values_1);
        }
        if (\array_key_exists('textBaseline', $data)) {
            $object->setTextBaseline($data['textBaseline']);
        }
        if (\array_key_exists('wordSpacing', $data)) {
            $object->setWordSpacing($data['wordSpacing']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('color') && null !== $object->getColor()) {
            $data['color'] = $object->getColor();
        }
        if ($object->isInitialized('decoration') && null !== $object->getDecoration()) {
            $data['decoration'] = $object->getDecoration();
        }
        if ($object->isInitialized('decorationColor') && null !== $object->getDecorationColor()) {
            $data['decorationColor'] = $object->getDecorationColor();
        }
        if ($object->isInitialized('decorationStyle') && null !== $object->getDecorationStyle()) {
            $data['decorationStyle'] = $object->getDecorationStyle();
        }
        if ($object->isInitialized('decorationThickness') && null !== $object->getDecorationThickness()) {
            $data['decorationThickness'] = $object->getDecorationThickness();
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
        if ($object->isInitialized('fontStyle') && null !== $object->getFontStyle()) {
            $data['fontStyle'] = $object->getFontStyle();
        }
        if ($object->isInitialized('fontWeight') && null !== $object->getFontWeight()) {
            $data['fontWeight'] = $object->getFontWeight();
        }
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if ($object->isInitialized('letterSpacing') && null !== $object->getLetterSpacing()) {
            $data['letterSpacing'] = $object->getLetterSpacing();
        }
        if ($object->isInitialized('overflow') && null !== $object->getOverflow()) {
            $data['overflow'] = $object->getOverflow();
        }
        if ($object->isInitialized('shadows') && null !== $object->getShadows()) {
            $values_1 = array();
            foreach ($object->getShadows() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['shadows'] = $values_1;
        }
        if ($object->isInitialized('textBaseline') && null !== $object->getTextBaseline()) {
            $data['textBaseline'] = $object->getTextBaseline();
        }
        if ($object->isInitialized('wordSpacing') && null !== $object->getWordSpacing()) {
            $data['wordSpacing'] = $object->getWordSpacing();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextStyle' => false);
    }
}