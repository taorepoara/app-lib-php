<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesTextFieldStyle
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
    protected $cursorColor;
    /**
     * The height of the cursor.
     *
     * @var float
     */
    protected $cursorHeight;
    /**
     * Element of type Radius
     *
     * @var ComponentsStylesRadius
     */
    protected $cursorRadius;
    /**
     * The width of the cursor.
     *
     * @var float
     */
    protected $cursorWidth;
    /**
     * Element of type InputDecoration
     *
     * @var ComponentsStylesInputDecoration
     */
    protected $decoration;
    /**
     * Component of type Brightness.
     *
     * @var string
     */
    protected $keyboardAppearance;
    /**
     * The character used to obscure the text.
     *
     * @var string
     */
    protected $obscuringCharacter;
    /**
     * Element of type Padding
     *
     * @var ComponentsStylesPadding
     */
    protected $scrollPadding;
    /**
     * Component of type BoxHeightStyle.
     *
     * @var string
     */
    protected $selectionHeightStyle;
    /**
     * Component of type BoxWidthStyle.
     *
     * @var string
     */
    protected $selectionWidthStyle;
    /**
     * Defines the strut of a text line.
     *
     * @var ComponentsStylesStrutStyle
     */
    protected $strutStyle;
    /**
     * The style of the Text.
     *
     * @var ComponentsStylesTextStyle
     */
    protected $textStyle;
    /**
     * Component of type TextAlign.
     *
     * @var string
     */
    protected $textAlign;
    /**
     * Component of type TextAlignVertical.
     *
     * @var string
     */
    protected $textAlignVertical;
    /**
     * Color type
     *
     * @return int
     */
    public function getCursorColor() : int
    {
        return $this->cursorColor;
    }
    /**
     * Color type
     *
     * @param int $cursorColor
     *
     * @return self
     */
    public function setCursorColor(int $cursorColor) : self
    {
        $this->initialized['cursorColor'] = true;
        $this->cursorColor = $cursorColor;
        return $this;
    }
    /**
     * The height of the cursor.
     *
     * @return float
     */
    public function getCursorHeight() : float
    {
        return $this->cursorHeight;
    }
    /**
     * The height of the cursor.
     *
     * @param float $cursorHeight
     *
     * @return self
     */
    public function setCursorHeight(float $cursorHeight) : self
    {
        $this->initialized['cursorHeight'] = true;
        $this->cursorHeight = $cursorHeight;
        return $this;
    }
    /**
     * Element of type Radius
     *
     * @return ComponentsStylesRadius
     */
    public function getCursorRadius() : ComponentsStylesRadius
    {
        return $this->cursorRadius;
    }
    /**
     * Element of type Radius
     *
     * @param ComponentsStylesRadius $cursorRadius
     *
     * @return self
     */
    public function setCursorRadius(ComponentsStylesRadius $cursorRadius) : self
    {
        $this->initialized['cursorRadius'] = true;
        $this->cursorRadius = $cursorRadius;
        return $this;
    }
    /**
     * The width of the cursor.
     *
     * @return float
     */
    public function getCursorWidth() : float
    {
        return $this->cursorWidth;
    }
    /**
     * The width of the cursor.
     *
     * @param float $cursorWidth
     *
     * @return self
     */
    public function setCursorWidth(float $cursorWidth) : self
    {
        $this->initialized['cursorWidth'] = true;
        $this->cursorWidth = $cursorWidth;
        return $this;
    }
    /**
     * Element of type InputDecoration
     *
     * @return ComponentsStylesInputDecoration
     */
    public function getDecoration() : ComponentsStylesInputDecoration
    {
        return $this->decoration;
    }
    /**
     * Element of type InputDecoration
     *
     * @param ComponentsStylesInputDecoration $decoration
     *
     * @return self
     */
    public function setDecoration(ComponentsStylesInputDecoration $decoration) : self
    {
        $this->initialized['decoration'] = true;
        $this->decoration = $decoration;
        return $this;
    }
    /**
     * Component of type Brightness.
     *
     * @return string
     */
    public function getKeyboardAppearance() : string
    {
        return $this->keyboardAppearance;
    }
    /**
     * Component of type Brightness.
     *
     * @param string $keyboardAppearance
     *
     * @return self
     */
    public function setKeyboardAppearance(string $keyboardAppearance) : self
    {
        $this->initialized['keyboardAppearance'] = true;
        $this->keyboardAppearance = $keyboardAppearance;
        return $this;
    }
    /**
     * The character used to obscure the text.
     *
     * @return string
     */
    public function getObscuringCharacter() : string
    {
        return $this->obscuringCharacter;
    }
    /**
     * The character used to obscure the text.
     *
     * @param string $obscuringCharacter
     *
     * @return self
     */
    public function setObscuringCharacter(string $obscuringCharacter) : self
    {
        $this->initialized['obscuringCharacter'] = true;
        $this->obscuringCharacter = $obscuringCharacter;
        return $this;
    }
    /**
     * Element of type Padding
     *
     * @return ComponentsStylesPadding
     */
    public function getScrollPadding() : ComponentsStylesPadding
    {
        return $this->scrollPadding;
    }
    /**
     * Element of type Padding
     *
     * @param ComponentsStylesPadding $scrollPadding
     *
     * @return self
     */
    public function setScrollPadding(ComponentsStylesPadding $scrollPadding) : self
    {
        $this->initialized['scrollPadding'] = true;
        $this->scrollPadding = $scrollPadding;
        return $this;
    }
    /**
     * Component of type BoxHeightStyle.
     *
     * @return string
     */
    public function getSelectionHeightStyle() : string
    {
        return $this->selectionHeightStyle;
    }
    /**
     * Component of type BoxHeightStyle.
     *
     * @param string $selectionHeightStyle
     *
     * @return self
     */
    public function setSelectionHeightStyle(string $selectionHeightStyle) : self
    {
        $this->initialized['selectionHeightStyle'] = true;
        $this->selectionHeightStyle = $selectionHeightStyle;
        return $this;
    }
    /**
     * Component of type BoxWidthStyle.
     *
     * @return string
     */
    public function getSelectionWidthStyle() : string
    {
        return $this->selectionWidthStyle;
    }
    /**
     * Component of type BoxWidthStyle.
     *
     * @param string $selectionWidthStyle
     *
     * @return self
     */
    public function setSelectionWidthStyle(string $selectionWidthStyle) : self
    {
        $this->initialized['selectionWidthStyle'] = true;
        $this->selectionWidthStyle = $selectionWidthStyle;
        return $this;
    }
    /**
     * Defines the strut of a text line.
     *
     * @return ComponentsStylesStrutStyle
     */
    public function getStrutStyle() : ComponentsStylesStrutStyle
    {
        return $this->strutStyle;
    }
    /**
     * Defines the strut of a text line.
     *
     * @param ComponentsStylesStrutStyle $strutStyle
     *
     * @return self
     */
    public function setStrutStyle(ComponentsStylesStrutStyle $strutStyle) : self
    {
        $this->initialized['strutStyle'] = true;
        $this->strutStyle = $strutStyle;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return ComponentsStylesTextStyle
     */
    public function getTextStyle() : ComponentsStylesTextStyle
    {
        return $this->textStyle;
    }
    /**
     * The style of the Text.
     *
     * @param ComponentsStylesTextStyle $textStyle
     *
     * @return self
     */
    public function setTextStyle(ComponentsStylesTextStyle $textStyle) : self
    {
        $this->initialized['textStyle'] = true;
        $this->textStyle = $textStyle;
        return $this;
    }
    /**
     * Component of type TextAlign.
     *
     * @return string
     */
    public function getTextAlign() : string
    {
        return $this->textAlign;
    }
    /**
     * Component of type TextAlign.
     *
     * @param string $textAlign
     *
     * @return self
     */
    public function setTextAlign(string $textAlign) : self
    {
        $this->initialized['textAlign'] = true;
        $this->textAlign = $textAlign;
        return $this;
    }
    /**
     * Component of type TextAlignVertical.
     *
     * @return string
     */
    public function getTextAlignVertical() : string
    {
        return $this->textAlignVertical;
    }
    /**
     * Component of type TextAlignVertical.
     *
     * @param string $textAlignVertical
     *
     * @return self
     */
    public function setTextAlignVertical(string $textAlignVertical) : self
    {
        $this->initialized['textAlignVertical'] = true;
        $this->textAlignVertical = $textAlignVertical;
        return $this;
    }
}