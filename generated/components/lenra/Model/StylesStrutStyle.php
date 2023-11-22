<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesStrutStyle
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
     * A label to help identify this strut style.
     *
     * @var string
     */
    protected $debugLabel;
    /**
     * The font family to use for this strut style.
     *
     * @var string
     */
    protected $fontFamily;
    /**
     * A list of fallback font families to use for this strut style.
     *
     * @var mixed[]
     */
    protected $fontFamilyFallback;
    /**
     * The font size to use for this strut style.
     *
     * @var float
     */
    protected $fontSize;
    /**
     * The font weight to use for this strut style.
     *
     * @var string
     */
    protected $fontWeight;
    /**
     * Whether to force the strut height.
     *
     * @var bool
     */
    protected $forceStrutHeight;
    /**
     * The minimum height of the strut.
     *
     * @var float
     */
    protected $height;
    /**
     * The additional leading of the strut which is a multiple of fontSize.
     *
     * @var float
     */
    protected $leading;
    /**
     * The TextLeadingDistribution enum.
     *
     * @var string
     */
    protected $leadingDistribution = 'even';
    /**
     * A label to help identify this strut style.
     *
     * @return string
     */
    public function getDebugLabel() : string
    {
        return $this->debugLabel;
    }
    /**
     * A label to help identify this strut style.
     *
     * @param string $debugLabel
     *
     * @return self
     */
    public function setDebugLabel(string $debugLabel) : self
    {
        $this->initialized['debugLabel'] = true;
        $this->debugLabel = $debugLabel;
        return $this;
    }
    /**
     * The font family to use for this strut style.
     *
     * @return string
     */
    public function getFontFamily() : string
    {
        return $this->fontFamily;
    }
    /**
     * The font family to use for this strut style.
     *
     * @param string $fontFamily
     *
     * @return self
     */
    public function setFontFamily(string $fontFamily) : self
    {
        $this->initialized['fontFamily'] = true;
        $this->fontFamily = $fontFamily;
        return $this;
    }
    /**
     * A list of fallback font families to use for this strut style.
     *
     * @return mixed[]
     */
    public function getFontFamilyFallback() : array
    {
        return $this->fontFamilyFallback;
    }
    /**
     * A list of fallback font families to use for this strut style.
     *
     * @param mixed[] $fontFamilyFallback
     *
     * @return self
     */
    public function setFontFamilyFallback(array $fontFamilyFallback) : self
    {
        $this->initialized['fontFamilyFallback'] = true;
        $this->fontFamilyFallback = $fontFamilyFallback;
        return $this;
    }
    /**
     * The font size to use for this strut style.
     *
     * @return float
     */
    public function getFontSize() : float
    {
        return $this->fontSize;
    }
    /**
     * The font size to use for this strut style.
     *
     * @param float $fontSize
     *
     * @return self
     */
    public function setFontSize(float $fontSize) : self
    {
        $this->initialized['fontSize'] = true;
        $this->fontSize = $fontSize;
        return $this;
    }
    /**
     * The font weight to use for this strut style.
     *
     * @return string
     */
    public function getFontWeight() : string
    {
        return $this->fontWeight;
    }
    /**
     * The font weight to use for this strut style.
     *
     * @param string $fontWeight
     *
     * @return self
     */
    public function setFontWeight(string $fontWeight) : self
    {
        $this->initialized['fontWeight'] = true;
        $this->fontWeight = $fontWeight;
        return $this;
    }
    /**
     * Whether to force the strut height.
     *
     * @return bool
     */
    public function getForceStrutHeight() : bool
    {
        return $this->forceStrutHeight;
    }
    /**
     * Whether to force the strut height.
     *
     * @param bool $forceStrutHeight
     *
     * @return self
     */
    public function setForceStrutHeight(bool $forceStrutHeight) : self
    {
        $this->initialized['forceStrutHeight'] = true;
        $this->forceStrutHeight = $forceStrutHeight;
        return $this;
    }
    /**
     * The minimum height of the strut.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * The minimum height of the strut.
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
     * The additional leading of the strut which is a multiple of fontSize.
     *
     * @return float
     */
    public function getLeading() : float
    {
        return $this->leading;
    }
    /**
     * The additional leading of the strut which is a multiple of fontSize.
     *
     * @param float $leading
     *
     * @return self
     */
    public function setLeading(float $leading) : self
    {
        $this->initialized['leading'] = true;
        $this->leading = $leading;
        return $this;
    }
    /**
     * The TextLeadingDistribution enum.
     *
     * @return string
     */
    public function getLeadingDistribution() : string
    {
        return $this->leadingDistribution;
    }
    /**
     * The TextLeadingDistribution enum.
     *
     * @param string $leadingDistribution
     *
     * @return self
     */
    public function setLeadingDistribution(string $leadingDistribution) : self
    {
        $this->initialized['leadingDistribution'] = true;
        $this->leadingDistribution = $leadingDistribution;
        return $this;
    }
}