<?php

namespace Lenra\App\Components\Lenra\Model;

class Image
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The identifier of the component
     *
     * @var mixed
     */
    protected $type;
    /**
     * The URL to the image. Will fetch the application's image if the URL does not start with `http(s)://`.
     *
     * @var string
     */
    protected $src;
    /**
     * The image width.
     *
     * @var float
     */
    protected $width;
    /**
     * The image height.
     *
     * @var float
     */
    protected $height;
    /**
     * The alignment to use.
     *
     * @var string
     */
    protected $alignment = 'center';
    /**
     * Element of type Rect
     *
     * @var StylesRect
     */
    protected $centerSlice;
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $errorPlaceholder;
    /**
     * Whether to exclude this image from semantics.
     *
     * @var bool
     */
    protected $excludeFromSemantics = false;
    /**
     * The filter quality to use.
     *
     * @var string
     */
    protected $filterQuality = 'low';
    /**
     * How the box should be fitted in its parent.
     *
     * @var string
     */
    protected $fit = 'contain';
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $framePlaceholder;
    /**
     * Whether the old image (true) or nothing (false) is shown when the image provider changes.
     *
     * @var bool
     */
    protected $gaplessPlayback = false;
    /**
     * Whether to paint the image with anti-aliasing.
     *
     * @var bool
     */
    protected $isAntiAlias = false;
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $loadingPlaceholder;
    /**
     * How the image should be painted on the areas that it does not cover.
     *
     * @var string
     */
    protected $repeat = 'noRepeat';
    /**
     * A semantic description of the image. This is used for TalkBack on Android and VoiceOver on IOS.
     *
     * @var string
     */
    protected $semanticLabel;
    /**
     * The identifier of the component
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * The identifier of the component
     *
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The URL to the image. Will fetch the application's image if the URL does not start with `http(s)://`.
     *
     * @return string
     */
    public function getSrc() : string
    {
        return $this->src;
    }
    /**
     * The URL to the image. Will fetch the application's image if the URL does not start with `http(s)://`.
     *
     * @param string $src
     *
     * @return self
     */
    public function setSrc(string $src) : self
    {
        $this->initialized['src'] = true;
        $this->src = $src;
        return $this;
    }
    /**
     * The image width.
     *
     * @return float
     */
    public function getWidth() : float
    {
        return $this->width;
    }
    /**
     * The image width.
     *
     * @param float $width
     *
     * @return self
     */
    public function setWidth(float $width) : self
    {
        $this->initialized['width'] = true;
        $this->width = $width;
        return $this;
    }
    /**
     * The image height.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * The image height.
     *
     * @param float $height
     *
     * @return self
     */
    public function setHeight(float $height) : self
    {
        $this->initialized['height'] = true;
        $this->height = $height;
        return $this;
    }
    /**
     * The alignment to use.
     *
     * @return string
     */
    public function getAlignment() : string
    {
        return $this->alignment;
    }
    /**
     * The alignment to use.
     *
     * @param string $alignment
     *
     * @return self
     */
    public function setAlignment(string $alignment) : self
    {
        $this->initialized['alignment'] = true;
        $this->alignment = $alignment;
        return $this;
    }
    /**
     * Element of type Rect
     *
     * @return StylesRect
     */
    public function getCenterSlice() : StylesRect
    {
        return $this->centerSlice;
    }
    /**
     * Element of type Rect
     *
     * @param StylesRect $centerSlice
     *
     * @return self
     */
    public function setCenterSlice(StylesRect $centerSlice) : self
    {
        $this->initialized['centerSlice'] = true;
        $this->centerSlice = $centerSlice;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getErrorPlaceholder()
    {
        return $this->errorPlaceholder;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $errorPlaceholder
     *
     * @return self
     */
    public function setErrorPlaceholder($errorPlaceholder) : self
    {
        $this->initialized['errorPlaceholder'] = true;
        $this->errorPlaceholder = $errorPlaceholder;
        return $this;
    }
    /**
     * Whether to exclude this image from semantics.
     *
     * @return bool
     */
    public function getExcludeFromSemantics() : bool
    {
        return $this->excludeFromSemantics;
    }
    /**
     * Whether to exclude this image from semantics.
     *
     * @param bool $excludeFromSemantics
     *
     * @return self
     */
    public function setExcludeFromSemantics(bool $excludeFromSemantics) : self
    {
        $this->initialized['excludeFromSemantics'] = true;
        $this->excludeFromSemantics = $excludeFromSemantics;
        return $this;
    }
    /**
     * The filter quality to use.
     *
     * @return string
     */
    public function getFilterQuality() : string
    {
        return $this->filterQuality;
    }
    /**
     * The filter quality to use.
     *
     * @param string $filterQuality
     *
     * @return self
     */
    public function setFilterQuality(string $filterQuality) : self
    {
        $this->initialized['filterQuality'] = true;
        $this->filterQuality = $filterQuality;
        return $this;
    }
    /**
     * How the box should be fitted in its parent.
     *
     * @return string
     */
    public function getFit() : string
    {
        return $this->fit;
    }
    /**
     * How the box should be fitted in its parent.
     *
     * @param string $fit
     *
     * @return self
     */
    public function setFit(string $fit) : self
    {
        $this->initialized['fit'] = true;
        $this->fit = $fit;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getFramePlaceholder()
    {
        return $this->framePlaceholder;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $framePlaceholder
     *
     * @return self
     */
    public function setFramePlaceholder($framePlaceholder) : self
    {
        $this->initialized['framePlaceholder'] = true;
        $this->framePlaceholder = $framePlaceholder;
        return $this;
    }
    /**
     * Whether the old image (true) or nothing (false) is shown when the image provider changes.
     *
     * @return bool
     */
    public function getGaplessPlayback() : bool
    {
        return $this->gaplessPlayback;
    }
    /**
     * Whether the old image (true) or nothing (false) is shown when the image provider changes.
     *
     * @param bool $gaplessPlayback
     *
     * @return self
     */
    public function setGaplessPlayback(bool $gaplessPlayback) : self
    {
        $this->initialized['gaplessPlayback'] = true;
        $this->gaplessPlayback = $gaplessPlayback;
        return $this;
    }
    /**
     * Whether to paint the image with anti-aliasing.
     *
     * @return bool
     */
    public function getIsAntiAlias() : bool
    {
        return $this->isAntiAlias;
    }
    /**
     * Whether to paint the image with anti-aliasing.
     *
     * @param bool $isAntiAlias
     *
     * @return self
     */
    public function setIsAntiAlias(bool $isAntiAlias) : self
    {
        $this->initialized['isAntiAlias'] = true;
        $this->isAntiAlias = $isAntiAlias;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getLoadingPlaceholder()
    {
        return $this->loadingPlaceholder;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $loadingPlaceholder
     *
     * @return self
     */
    public function setLoadingPlaceholder($loadingPlaceholder) : self
    {
        $this->initialized['loadingPlaceholder'] = true;
        $this->loadingPlaceholder = $loadingPlaceholder;
        return $this;
    }
    /**
     * How the image should be painted on the areas that it does not cover.
     *
     * @return string
     */
    public function getRepeat() : string
    {
        return $this->repeat;
    }
    /**
     * How the image should be painted on the areas that it does not cover.
     *
     * @param string $repeat
     *
     * @return self
     */
    public function setRepeat(string $repeat) : self
    {
        $this->initialized['repeat'] = true;
        $this->repeat = $repeat;
        return $this;
    }
    /**
     * A semantic description of the image. This is used for TalkBack on Android and VoiceOver on IOS.
     *
     * @return string
     */
    public function getSemanticLabel() : string
    {
        return $this->semanticLabel;
    }
    /**
     * A semantic description of the image. This is used for TalkBack on Android and VoiceOver on IOS.
     *
     * @param string $semanticLabel
     *
     * @return self
     */
    public function setSemanticLabel(string $semanticLabel) : self
    {
        $this->initialized['semanticLabel'] = true;
        $this->semanticLabel = $semanticLabel;
        return $this;
    }
}