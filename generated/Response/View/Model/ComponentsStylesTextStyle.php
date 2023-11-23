<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesTextStyle
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
     * Color type
     *
     * @var int
     */
    protected $color;
    /**
     * Allows you to underline, overline or strike out the text.
     *
     * @var string
     */
    protected $decoration = 'none';
    /**
     * Color type
     *
     * @var int
     */
    protected $decorationColor;
    /**
     * The style in which to draw a text decoration.
     *
     * @var string
     */
    protected $decorationStyle = 'solid';
    /**
     * The thickness of the decoration.
     *
     * @var float
     */
    protected $decorationThickness;
    /**
     * The font family of the text.
     *
     * @var string
     */
    protected $fontFamily;
    /**
     * The list of font families to use if the first font family could not be found.
     *
     * @var string[]
     */
    protected $fontFamilyFallback;
    /**
     * The size of the text.
     *
     * @var float
     */
    protected $fontSize;
    /**
     * The style of the text.
     *
     * @var string
     */
    protected $fontStyle;
    /**
     * The weight of the text.
     *
     * @var string
     */
    protected $fontWeight;
    /**
     * The height of this text.
     *
     * @var float
     */
    protected $height = 1;
    /**
     * The amount of space to add between each letter.
     *
     * @var float
     */
    protected $letterSpacing;
    /**
     * How visual text overflow should be handled.
     *
     * @var string
     */
    protected $overflow;
    /**
     * A list of Shadows that will be painted underneath the text.
     *
     * @var ComponentsStylesBoxShadow[]
     */
    protected $shadows;
    /**
     * A horizontal line used for aligning text.
     *
     * @var string
     */
    protected $textBaseline = 'alphabetic';
    /**
     * The amount of space to add at each sequence of white-space.
     *
     * @var float
     */
    protected $wordSpacing;
    /**
     * Color type
     *
     * @return int
     */
    public function getColor() : int
    {
        return $this->color;
    }
    /**
     * Color type
     *
     * @param int $color
     *
     * @return self
     */
    public function setColor(int $color) : self
    {
        $this->initialized['color'] = true;
        $this->color = $color;
        return $this;
    }
    /**
     * Allows you to underline, overline or strike out the text.
     *
     * @return string
     */
    public function getDecoration() : string
    {
        return $this->decoration;
    }
    /**
     * Allows you to underline, overline or strike out the text.
     *
     * @param string $decoration
     *
     * @return self
     */
    public function setDecoration(string $decoration) : self
    {
        $this->initialized['decoration'] = true;
        $this->decoration = $decoration;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getDecorationColor() : int
    {
        return $this->decorationColor;
    }
    /**
     * Color type
     *
     * @param int $decorationColor
     *
     * @return self
     */
    public function setDecorationColor(int $decorationColor) : self
    {
        $this->initialized['decorationColor'] = true;
        $this->decorationColor = $decorationColor;
        return $this;
    }
    /**
     * The style in which to draw a text decoration.
     *
     * @return string
     */
    public function getDecorationStyle() : string
    {
        return $this->decorationStyle;
    }
    /**
     * The style in which to draw a text decoration.
     *
     * @param string $decorationStyle
     *
     * @return self
     */
    public function setDecorationStyle(string $decorationStyle) : self
    {
        $this->initialized['decorationStyle'] = true;
        $this->decorationStyle = $decorationStyle;
        return $this;
    }
    /**
     * The thickness of the decoration.
     *
     * @return float
     */
    public function getDecorationThickness() : float
    {
        return $this->decorationThickness;
    }
    /**
     * The thickness of the decoration.
     *
     * @param float $decorationThickness
     *
     * @return self
     */
    public function setDecorationThickness(float $decorationThickness) : self
    {
        $this->initialized['decorationThickness'] = true;
        $this->decorationThickness = $decorationThickness;
        return $this;
    }
    /**
     * The font family of the text.
     *
     * @return string
     */
    public function getFontFamily() : string
    {
        return $this->fontFamily;
    }
    /**
     * The font family of the text.
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
     * The list of font families to use if the first font family could not be found.
     *
     * @return string[]
     */
    public function getFontFamilyFallback() : array
    {
        return $this->fontFamilyFallback;
    }
    /**
     * The list of font families to use if the first font family could not be found.
     *
     * @param string[] $fontFamilyFallback
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
     * The size of the text.
     *
     * @return float
     */
    public function getFontSize() : float
    {
        return $this->fontSize;
    }
    /**
     * The size of the text.
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
     * The style of the text.
     *
     * @return string
     */
    public function getFontStyle() : string
    {
        return $this->fontStyle;
    }
    /**
     * The style of the text.
     *
     * @param string $fontStyle
     *
     * @return self
     */
    public function setFontStyle(string $fontStyle) : self
    {
        $this->initialized['fontStyle'] = true;
        $this->fontStyle = $fontStyle;
        return $this;
    }
    /**
     * The weight of the text.
     *
     * @return string
     */
    public function getFontWeight() : string
    {
        return $this->fontWeight;
    }
    /**
     * The weight of the text.
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
     * The height of this text.
     *
     * @return float
     */
    public function getHeight() : float
    {
        return $this->height;
    }
    /**
     * The height of this text.
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
     * The amount of space to add between each letter.
     *
     * @return float
     */
    public function getLetterSpacing() : float
    {
        return $this->letterSpacing;
    }
    /**
     * The amount of space to add between each letter.
     *
     * @param float $letterSpacing
     *
     * @return self
     */
    public function setLetterSpacing(float $letterSpacing) : self
    {
        $this->initialized['letterSpacing'] = true;
        $this->letterSpacing = $letterSpacing;
        return $this;
    }
    /**
     * How visual text overflow should be handled.
     *
     * @return string
     */
    public function getOverflow() : string
    {
        return $this->overflow;
    }
    /**
     * How visual text overflow should be handled.
     *
     * @param string $overflow
     *
     * @return self
     */
    public function setOverflow(string $overflow) : self
    {
        $this->initialized['overflow'] = true;
        $this->overflow = $overflow;
        return $this;
    }
    /**
     * A list of Shadows that will be painted underneath the text.
     *
     * @return ComponentsStylesBoxShadow[]
     */
    public function getShadows() : array
    {
        return $this->shadows;
    }
    /**
     * A list of Shadows that will be painted underneath the text.
     *
     * @param ComponentsStylesBoxShadow[] $shadows
     *
     * @return self
     */
    public function setShadows(array $shadows) : self
    {
        $this->initialized['shadows'] = true;
        $this->shadows = $shadows;
        return $this;
    }
    /**
     * A horizontal line used for aligning text.
     *
     * @return string
     */
    public function getTextBaseline() : string
    {
        return $this->textBaseline;
    }
    /**
     * A horizontal line used for aligning text.
     *
     * @param string $textBaseline
     *
     * @return self
     */
    public function setTextBaseline(string $textBaseline) : self
    {
        $this->initialized['textBaseline'] = true;
        $this->textBaseline = $textBaseline;
        return $this;
    }
    /**
     * The amount of space to add at each sequence of white-space.
     *
     * @return float
     */
    public function getWordSpacing() : float
    {
        return $this->wordSpacing;
    }
    /**
     * The amount of space to add at each sequence of white-space.
     *
     * @param float $wordSpacing
     *
     * @return self
     */
    public function setWordSpacing(float $wordSpacing) : self
    {
        $this->initialized['wordSpacing'] = true;
        $this->wordSpacing = $wordSpacing;
        return $this;
    }
}