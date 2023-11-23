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
class ComponentsStylesTextFieldStyleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextFieldStyle';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Response\View\Model\ComponentsStylesTextFieldStyle;
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
        $object = new \Lenra\App\Response\View\Model\ComponentsStylesTextFieldStyle();
        if (\array_key_exists('cursorHeight', $data) && \is_int($data['cursorHeight'])) {
            $data['cursorHeight'] = (double) $data['cursorHeight'];
        }
        if (\array_key_exists('cursorWidth', $data) && \is_int($data['cursorWidth'])) {
            $data['cursorWidth'] = (double) $data['cursorWidth'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cursorColor', $data)) {
            $object->setCursorColor($data['cursorColor']);
        }
        if (\array_key_exists('cursorHeight', $data)) {
            $object->setCursorHeight($data['cursorHeight']);
        }
        if (\array_key_exists('cursorRadius', $data)) {
            $object->setCursorRadius($this->denormalizer->denormalize($data['cursorRadius'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesRadius', 'json', $context));
        }
        if (\array_key_exists('cursorWidth', $data)) {
            $object->setCursorWidth($data['cursorWidth']);
        }
        if (\array_key_exists('decoration', $data)) {
            $object->setDecoration($this->denormalizer->denormalize($data['decoration'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesInputDecoration', 'json', $context));
        }
        if (\array_key_exists('keyboardAppearance', $data)) {
            $object->setKeyboardAppearance($data['keyboardAppearance']);
        }
        if (\array_key_exists('obscuringCharacter', $data)) {
            $object->setObscuringCharacter($data['obscuringCharacter']);
        }
        if (\array_key_exists('scrollPadding', $data)) {
            $object->setScrollPadding($this->denormalizer->denormalize($data['scrollPadding'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesPadding', 'json', $context));
        }
        if (\array_key_exists('selectionHeightStyle', $data)) {
            $object->setSelectionHeightStyle($data['selectionHeightStyle']);
        }
        if (\array_key_exists('selectionWidthStyle', $data)) {
            $object->setSelectionWidthStyle($data['selectionWidthStyle']);
        }
        if (\array_key_exists('strutStyle', $data)) {
            $object->setStrutStyle($this->denormalizer->denormalize($data['strutStyle'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesStrutStyle', 'json', $context));
        }
        if (\array_key_exists('textStyle', $data)) {
            $object->setTextStyle($this->denormalizer->denormalize($data['textStyle'], 'Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextStyle', 'json', $context));
        }
        if (\array_key_exists('textAlign', $data)) {
            $object->setTextAlign($data['textAlign']);
        }
        if (\array_key_exists('textAlignVertical', $data)) {
            $object->setTextAlignVertical($data['textAlignVertical']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('cursorColor') && null !== $object->getCursorColor()) {
            $data['cursorColor'] = $object->getCursorColor();
        }
        if ($object->isInitialized('cursorHeight') && null !== $object->getCursorHeight()) {
            $data['cursorHeight'] = $object->getCursorHeight();
        }
        if ($object->isInitialized('cursorRadius') && null !== $object->getCursorRadius()) {
            $data['cursorRadius'] = $this->normalizer->normalize($object->getCursorRadius(), 'json', $context);
        }
        if ($object->isInitialized('cursorWidth') && null !== $object->getCursorWidth()) {
            $data['cursorWidth'] = $object->getCursorWidth();
        }
        if ($object->isInitialized('decoration') && null !== $object->getDecoration()) {
            $data['decoration'] = $this->normalizer->normalize($object->getDecoration(), 'json', $context);
        }
        if ($object->isInitialized('keyboardAppearance') && null !== $object->getKeyboardAppearance()) {
            $data['keyboardAppearance'] = $object->getKeyboardAppearance();
        }
        if ($object->isInitialized('obscuringCharacter') && null !== $object->getObscuringCharacter()) {
            $data['obscuringCharacter'] = $object->getObscuringCharacter();
        }
        if ($object->isInitialized('scrollPadding') && null !== $object->getScrollPadding()) {
            $data['scrollPadding'] = $this->normalizer->normalize($object->getScrollPadding(), 'json', $context);
        }
        if ($object->isInitialized('selectionHeightStyle') && null !== $object->getSelectionHeightStyle()) {
            $data['selectionHeightStyle'] = $object->getSelectionHeightStyle();
        }
        if ($object->isInitialized('selectionWidthStyle') && null !== $object->getSelectionWidthStyle()) {
            $data['selectionWidthStyle'] = $object->getSelectionWidthStyle();
        }
        if ($object->isInitialized('strutStyle') && null !== $object->getStrutStyle()) {
            $data['strutStyle'] = $this->normalizer->normalize($object->getStrutStyle(), 'json', $context);
        }
        if ($object->isInitialized('textStyle') && null !== $object->getTextStyle()) {
            $data['textStyle'] = $this->normalizer->normalize($object->getTextStyle(), 'json', $context);
        }
        if ($object->isInitialized('textAlign') && null !== $object->getTextAlign()) {
            $data['textAlign'] = $object->getTextAlign();
        }
        if ($object->isInitialized('textAlignVertical') && null !== $object->getTextAlignVertical()) {
            $data['textAlignVertical'] = $object->getTextAlignVertical();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Response\\View\\Model\\ComponentsStylesTextFieldStyle' => false);
    }
}