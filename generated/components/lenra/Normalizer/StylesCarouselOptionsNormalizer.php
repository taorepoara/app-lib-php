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
class StylesCarouselOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Lenra\\App\\Components\\Lenra\\Model\\StylesCarouselOptions';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return $data instanceof \Lenra\App\Components\Lenra\Model\StylesCarouselOptions;
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
        $object = new \Lenra\App\Components\Lenra\Model\StylesCarouselOptions();
        if (\array_key_exists('height', $data) && \is_int($data['height'])) {
            $data['height'] = (double) $data['height'];
        }
        if (\array_key_exists('aspectRatio', $data) && \is_int($data['aspectRatio'])) {
            $data['aspectRatio'] = (double) $data['aspectRatio'];
        }
        if (\array_key_exists('viewportFraction', $data) && \is_int($data['viewportFraction'])) {
            $data['viewportFraction'] = (double) $data['viewportFraction'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('height', $data)) {
            $object->setHeight($data['height']);
        }
        if (\array_key_exists('enlargeCenterPage', $data)) {
            $object->setEnlargeCenterPage($data['enlargeCenterPage']);
        }
        if (\array_key_exists('autoPlay', $data)) {
            $object->setAutoPlay($data['autoPlay']);
        }
        if (\array_key_exists('autoPlayInterval', $data)) {
            $object->setAutoPlayInterval($this->denormalizer->denormalize($data['autoPlayInterval'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesDuration', 'json', $context));
        }
        if (\array_key_exists('autoPlayAnimationDuration', $data)) {
            $object->setAutoPlayAnimationDuration($this->denormalizer->denormalize($data['autoPlayAnimationDuration'], 'Lenra\\App\\Components\\Lenra\\Model\\StylesDuration', 'json', $context));
        }
        if (\array_key_exists('pauseAutoPlayOnTouch', $data)) {
            $object->setPauseAutoPlayOnTouch($data['pauseAutoPlayOnTouch']);
        }
        if (\array_key_exists('aspectRatio', $data)) {
            $object->setAspectRatio($data['aspectRatio']);
        }
        if (\array_key_exists('initialPage', $data)) {
            $object->setInitialPage($data['initialPage']);
        }
        if (\array_key_exists('enableInfiniteScroll', $data)) {
            $object->setEnableInfiniteScroll($data['enableInfiniteScroll']);
        }
        if (\array_key_exists('reverse', $data)) {
            $object->setReverse($data['reverse']);
        }
        if (\array_key_exists('scrollDirection', $data)) {
            $object->setScrollDirection($data['scrollDirection']);
        }
        if (\array_key_exists('viewportFraction', $data)) {
            $object->setViewportFraction($data['viewportFraction']);
        }
        if (\array_key_exists('enlargeStrategy', $data)) {
            $object->setEnlargeStrategy($data['enlargeStrategy']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('height') && null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if ($object->isInitialized('enlargeCenterPage') && null !== $object->getEnlargeCenterPage()) {
            $data['enlargeCenterPage'] = $object->getEnlargeCenterPage();
        }
        if ($object->isInitialized('autoPlay') && null !== $object->getAutoPlay()) {
            $data['autoPlay'] = $object->getAutoPlay();
        }
        if ($object->isInitialized('autoPlayInterval') && null !== $object->getAutoPlayInterval()) {
            $data['autoPlayInterval'] = $this->normalizer->normalize($object->getAutoPlayInterval(), 'json', $context);
        }
        if ($object->isInitialized('autoPlayAnimationDuration') && null !== $object->getAutoPlayAnimationDuration()) {
            $data['autoPlayAnimationDuration'] = $this->normalizer->normalize($object->getAutoPlayAnimationDuration(), 'json', $context);
        }
        if ($object->isInitialized('pauseAutoPlayOnTouch') && null !== $object->getPauseAutoPlayOnTouch()) {
            $data['pauseAutoPlayOnTouch'] = $object->getPauseAutoPlayOnTouch();
        }
        if ($object->isInitialized('aspectRatio') && null !== $object->getAspectRatio()) {
            $data['aspectRatio'] = $object->getAspectRatio();
        }
        if ($object->isInitialized('initialPage') && null !== $object->getInitialPage()) {
            $data['initialPage'] = $object->getInitialPage();
        }
        if ($object->isInitialized('enableInfiniteScroll') && null !== $object->getEnableInfiniteScroll()) {
            $data['enableInfiniteScroll'] = $object->getEnableInfiniteScroll();
        }
        if ($object->isInitialized('reverse') && null !== $object->getReverse()) {
            $data['reverse'] = $object->getReverse();
        }
        if ($object->isInitialized('scrollDirection') && null !== $object->getScrollDirection()) {
            $data['scrollDirection'] = $object->getScrollDirection();
        }
        if ($object->isInitialized('viewportFraction') && null !== $object->getViewportFraction()) {
            $data['viewportFraction'] = $object->getViewportFraction();
        }
        if ($object->isInitialized('enlargeStrategy') && null !== $object->getEnlargeStrategy()) {
            $data['enlargeStrategy'] = $object->getEnlargeStrategy();
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Lenra\\App\\Components\\Lenra\\Model\\StylesCarouselOptions' => false);
    }
}