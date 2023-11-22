<?php

namespace Lenra\App\Components\Lenra\Model;

class Text
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
     * the value displayed in the element
     *
     * @var string
     */
    protected $value;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $style;
    /**
     * Element of type locale
     *
     * @var StylesLocale
     */
    protected $locale;
    /**
     * The value to explain a different semantics
     *
     * @var string
     */
    protected $semanticsLabel;
    /**
     * Whether the assistive technologies should spell out this text character by character
     *
     * @var bool
     */
    protected $spellOut;
    /**
     * The text alignment
     *
     * @var mixed
     */
    protected $textAlign = 'left';
    /**
     * Additional texts to add after this text.
     *
     * @var Text[]
     */
    protected $children;
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
     * the value displayed in the element
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * the value displayed in the element
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getStyle() : StylesTextStyle
    {
        return $this->style;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $style
     *
     * @return self
     */
    public function setStyle(StylesTextStyle $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * Element of type locale
     *
     * @return StylesLocale
     */
    public function getLocale() : StylesLocale
    {
        return $this->locale;
    }
    /**
     * Element of type locale
     *
     * @param StylesLocale $locale
     *
     * @return self
     */
    public function setLocale(StylesLocale $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * The value to explain a different semantics
     *
     * @return string
     */
    public function getSemanticsLabel() : string
    {
        return $this->semanticsLabel;
    }
    /**
     * The value to explain a different semantics
     *
     * @param string $semanticsLabel
     *
     * @return self
     */
    public function setSemanticsLabel(string $semanticsLabel) : self
    {
        $this->initialized['semanticsLabel'] = true;
        $this->semanticsLabel = $semanticsLabel;
        return $this;
    }
    /**
     * Whether the assistive technologies should spell out this text character by character
     *
     * @return bool
     */
    public function getSpellOut() : bool
    {
        return $this->spellOut;
    }
    /**
     * Whether the assistive technologies should spell out this text character by character
     *
     * @param bool $spellOut
     *
     * @return self
     */
    public function setSpellOut(bool $spellOut) : self
    {
        $this->initialized['spellOut'] = true;
        $this->spellOut = $spellOut;
        return $this;
    }
    /**
     * The text alignment
     *
     * @return mixed
     */
    public function getTextAlign()
    {
        return $this->textAlign;
    }
    /**
     * The text alignment
     *
     * @param mixed $textAlign
     *
     * @return self
     */
    public function setTextAlign($textAlign) : self
    {
        $this->initialized['textAlign'] = true;
        $this->textAlign = $textAlign;
        return $this;
    }
    /**
     * Additional texts to add after this text.
     *
     * @return Text[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * Additional texts to add after this text.
     *
     * @param Text[] $children
     *
     * @return self
     */
    public function setChildren(array $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
}