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
class TextfieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\Textfield';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\Textfield;
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
        $object = new \Lenra\App\Components\Lenra\Model\Textfield();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('_type', $data)) {
            $object->setType($data['_type']);
        }
        if (\array_key_exists('value', $data)) {
            $object->setValue($data['value']);
        }
        if (\array_key_exists('autocorrect', $data)) {
            $object->setAutocorrect($data['autocorrect']);
        }
        if (\array_key_exists('autofillHints', $data)) {
            $values = array();
            foreach ($data['autofillHints'] as $value) {
                $values[] = $value;
            }
            $object->setAutofillHints($values);
        }
        if (\array_key_exists('autofocus', $data)) {
            $object->setAutofocus($data['autofocus']);
        }
        if (\array_key_exists('buildCounter', $data)) {
            $object->setBuildCounter($this->denormalizer->denormalize($data['buildCounter'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('style', $data)) {
            $object->setStyle($this->denormalizer->denormalize($data['style'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesTextFieldStyle', 'json', $context));
        }
        if (\array_key_exists('dragStartBehavior', $data)) {
            $object->setDragStartBehavior($data['dragStartBehavior']);
        }
        if (\array_key_exists('enabled', $data)) {
            $object->setEnabled($data['enabled']);
        }
        if (\array_key_exists('enableInteractiveSelection', $data)) {
            $object->setEnableInteractiveSelection($data['enableInteractiveSelection']);
        }
        if (\array_key_exists('expands', $data)) {
            $object->setExpands($data['expands']);
        }
        if (\array_key_exists('keyboardType', $data)) {
            $object->setKeyboardType($this->denormalizer->denormalize($data['keyboardType'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesTextInputType', 'json', $context));
        }
        if (\array_key_exists('maxLength', $data)) {
            $object->setMaxLength($data['maxLength']);
        }
        if (\array_key_exists('maxLengthEnforcement', $data)) {
            $object->setMaxLengthEnforcement($data['maxLengthEnforcement']);
        }
        if (\array_key_exists('maxLines', $data)) {
            $object->setMaxLines($data['maxLines']);
        }
        if (\array_key_exists('minLines', $data)) {
            $object->setMinLines($data['minLines']);
        }
        if (\array_key_exists('obscureText', $data)) {
            $object->setObscureText($data['obscureText']);
        }
        if (\array_key_exists('onAppPrivateCommand', $data)) {
            $object->setOnAppPrivateCommand($this->denormalizer->denormalize($data['onAppPrivateCommand'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onChanged', $data)) {
            $object->setOnChanged($this->denormalizer->denormalize($data['onChanged'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onEditingComplete', $data)) {
            $object->setOnEditingComplete($this->denormalizer->denormalize($data['onEditingComplete'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onSubmitted', $data)) {
            $object->setOnSubmitted($this->denormalizer->denormalize($data['onSubmitted'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('onTap', $data)) {
            $object->setOnTap($this->denormalizer->denormalize($data['onTap'], 'Lenra\\App\\Components\\Lenra\\Model\\Listener', 'json', $context));
        }
        if (\array_key_exists('readOnly', $data)) {
            $object->setReadOnly($data['readOnly']);
        }
        if (\array_key_exists('showCursor', $data)) {
            $object->setShowCursor($data['showCursor']);
        }
        if (\array_key_exists('textCapitalization', $data)) {
            $object->setTextCapitalization($data['textCapitalization']);
        }
        if (\array_key_exists('textDirection', $data)) {
            $object->setTextDirection($data['textDirection']);
        }
        if (\array_key_exists('textInputAction', $data)) {
            $object->setTextInputAction($data['textInputAction']);
        }
        if (\array_key_exists('toolbarOptions', $data)) {
            $object->setToolbarOptions($this->denormalizer->denormalize($data['toolbarOptions'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesToolbarOptions', 'json', $context));
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
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
        if ($object->isInitialized('autocorrect') && null !== $object->getAutocorrect()) {
            $data['autocorrect'] = $object->getAutocorrect();
        }
        if ($object->isInitialized('autofillHints') && null !== $object->getAutofillHints()) {
            $values = array();
            foreach ($object->getAutofillHints() as $value) {
                $values[] = $value;
            }
            $data['autofillHints'] = $values;
        }
        if ($object->isInitialized('autofocus') && null !== $object->getAutofocus()) {
            $data['autofocus'] = $object->getAutofocus();
        }
        if ($object->isInitialized('buildCounter') && null !== $object->getBuildCounter()) {
            $data['buildCounter'] = $this->normalizer->normalize($object->getBuildCounter(), 'json', $context);
        }
        if ($object->isInitialized('style') && null !== $object->getStyle()) {
            $data['style'] = $this->normalizer->normalize($object->getStyle(), 'json', $context);
        }
        if ($object->isInitialized('dragStartBehavior') && null !== $object->getDragStartBehavior()) {
            $data['dragStartBehavior'] = $object->getDragStartBehavior();
        }
        if ($object->isInitialized('enabled') && null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if ($object->isInitialized('enableInteractiveSelection') && null !== $object->getEnableInteractiveSelection()) {
            $data['enableInteractiveSelection'] = $object->getEnableInteractiveSelection();
        }
        if ($object->isInitialized('expands') && null !== $object->getExpands()) {
            $data['expands'] = $object->getExpands();
        }
        if ($object->isInitialized('keyboardType') && null !== $object->getKeyboardType()) {
            $data['keyboardType'] = $this->normalizer->normalize($object->getKeyboardType(), 'json', $context);
        }
        if ($object->isInitialized('maxLength') && null !== $object->getMaxLength()) {
            $data['maxLength'] = $object->getMaxLength();
        }
        if ($object->isInitialized('maxLengthEnforcement') && null !== $object->getMaxLengthEnforcement()) {
            $data['maxLengthEnforcement'] = $object->getMaxLengthEnforcement();
        }
        if ($object->isInitialized('maxLines') && null !== $object->getMaxLines()) {
            $data['maxLines'] = $object->getMaxLines();
        }
        if ($object->isInitialized('minLines') && null !== $object->getMinLines()) {
            $data['minLines'] = $object->getMinLines();
        }
        if ($object->isInitialized('obscureText') && null !== $object->getObscureText()) {
            $data['obscureText'] = $object->getObscureText();
        }
        if ($object->isInitialized('onAppPrivateCommand') && null !== $object->getOnAppPrivateCommand()) {
            $data['onAppPrivateCommand'] = $this->normalizer->normalize($object->getOnAppPrivateCommand(), 'json', $context);
        }
        if ($object->isInitialized('onChanged') && null !== $object->getOnChanged()) {
            $data['onChanged'] = $this->normalizer->normalize($object->getOnChanged(), 'json', $context);
        }
        if ($object->isInitialized('onEditingComplete') && null !== $object->getOnEditingComplete()) {
            $data['onEditingComplete'] = $this->normalizer->normalize($object->getOnEditingComplete(), 'json', $context);
        }
        if ($object->isInitialized('onSubmitted') && null !== $object->getOnSubmitted()) {
            $data['onSubmitted'] = $this->normalizer->normalize($object->getOnSubmitted(), 'json', $context);
        }
        if ($object->isInitialized('onTap') && null !== $object->getOnTap()) {
            $data['onTap'] = $this->normalizer->normalize($object->getOnTap(), 'json', $context);
        }
        if ($object->isInitialized('readOnly') && null !== $object->getReadOnly()) {
            $data['readOnly'] = $object->getReadOnly();
        }
        if ($object->isInitialized('showCursor') && null !== $object->getShowCursor()) {
            $data['showCursor'] = $object->getShowCursor();
        }
        if ($object->isInitialized('textCapitalization') && null !== $object->getTextCapitalization()) {
            $data['textCapitalization'] = $object->getTextCapitalization();
        }
        if ($object->isInitialized('textDirection') && null !== $object->getTextDirection()) {
            $data['textDirection'] = $object->getTextDirection();
        }
        if ($object->isInitialized('textInputAction') && null !== $object->getTextInputAction()) {
            $data['textInputAction'] = $object->getTextInputAction();
        }
        if ($object->isInitialized('toolbarOptions') && null !== $object->getToolbarOptions()) {
            $data['toolbarOptions'] = $this->normalizer->normalize($object->getToolbarOptions(), 'json', $context);
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\Textfield' => false);
    }
}