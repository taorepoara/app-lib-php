<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesInputDecoration
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
     * Whether to align the label with the hint or not. Defaults to false.
     *
     * @var bool
     */
    protected $alignLabelWithHint = false;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $border;
    /**
     * Element of type BoxConstraints
     *
     * @var StylesBoxConstraints
     */
    protected $constraints;
    /**
     * Element of type Padding
     *
     * @var StylesPadding
     */
    protected $contentPadding;
    /**
     * 
     *
     * @var mixed
     */
    protected $counter;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $counterStyle;
    /**
     * The text to place below the line as a character counter.
     *
     * @var string
     */
    protected $counterText;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $disabledBorder;
    /**
     * Whether the input is enabled or disabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $enabledBorder;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $errorBorder;
    /**
     * The maximum number of lines the error text can use.
     *
     * @var int
     */
    protected $errorMaxLines;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $errorStyle;
    /**
     * The error text to display when the input has an error.
     *
     * @var string
     */
    protected $errorText;
    /**
     * Color type
     *
     * @var int
     */
    protected $fillColor;
    /**
     * Whether the input is filled with fillColor.
     *
     * @var bool
     */
    protected $filled;
    /**
     * Element of type FloatingLabelBehavior.
     *
     * @var string
     */
    protected $floatingLabelBehavior;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $floatingLabelStyle;
    /**
     * Color type
     *
     * @var int
     */
    protected $focusColor;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $focusedBorder;
    /**
     * Element of type InputBorder
     *
     * @var StylesInputBorder
     */
    protected $focusedErrorBorder;
    /**
     * The maximum number of lines the helper text can use.
     *
     * @var int
     */
    protected $helperMaxLines;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $helperStyle;
    /**
     * The helper text to display.
     *
     * @var string
     */
    protected $helperText;
    /**
     * The maximum number of lines the hint text can use.
     *
     * @var int
     */
    protected $hintMaxLines;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $hintStyle;
    /**
     * The hint text to display.
     *
     * @var string
     */
    protected $hintText;
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @var string
     */
    protected $hintTextDirection = 'ltr';
    /**
     * Color type
     *
     * @var int
     */
    protected $hoverColor;
    /**
     * The Icon to use
     *
     * @var Icon
     */
    protected $icon;
    /**
     * Color type
     *
     * @var int
     */
    protected $iconColor;
    /**
     * Whether the decoration is the same size as the input field.
     *
     * @var bool
     */
    protected $isCollapsed;
    /**
     * Whether the decoration is dense.
     *
     * @var bool
     */
    protected $isDense;
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $label;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $labelStyle;
    /**
     * The text that describes the input field.
     *
     * @var string
     */
    protected $labelText;
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $prefix;
    /**
     * The Icon to use
     *
     * @var Icon
     */
    protected $prefixIcon;
    /**
     * Color type
     *
     * @var int
     */
    protected $prefixIconColor;
    /**
     * Element of type BoxConstraints
     *
     * @var StylesBoxConstraints
     */
    protected $prefixIconConstraints;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $prefixStyle;
    /**
     * The text to display before the input.
     *
     * @var string
     */
    protected $prefixText;
    /**
     * The semantic label for the counterText.
     *
     * @var string
     */
    protected $semanticCounterText;
    /**
     * 
     *
     * @var mixed
     */
    protected $suffix;
    /**
     * The Icon to use
     *
     * @var Icon
     */
    protected $suffixIcon;
    /**
     * Color type
     *
     * @var int
     */
    protected $suffixIconColor;
    /**
     * Element of type BoxConstraints
     *
     * @var StylesBoxConstraints
     */
    protected $suffixIconConstraints;
    /**
     * The style of the Text.
     *
     * @var StylesTextStyle
     */
    protected $suffixStyle;
    /**
     * The text to display after the input.
     *
     * @var string
     */
    protected $suffixText;
    /**
     * Whether to align the label with the hint or not. Defaults to false.
     *
     * @return bool
     */
    public function getAlignLabelWithHint() : bool
    {
        return $this->alignLabelWithHint;
    }
    /**
     * Whether to align the label with the hint or not. Defaults to false.
     *
     * @param bool $alignLabelWithHint
     *
     * @return self
     */
    public function setAlignLabelWithHint(bool $alignLabelWithHint) : self
    {
        $this->initialized['alignLabelWithHint'] = true;
        $this->alignLabelWithHint = $alignLabelWithHint;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getBorder() : StylesInputBorder
    {
        return $this->border;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $border
     *
     * @return self
     */
    public function setBorder(StylesInputBorder $border) : self
    {
        $this->initialized['border'] = true;
        $this->border = $border;
        return $this;
    }
    /**
     * Element of type BoxConstraints
     *
     * @return StylesBoxConstraints
     */
    public function getConstraints() : StylesBoxConstraints
    {
        return $this->constraints;
    }
    /**
     * Element of type BoxConstraints
     *
     * @param StylesBoxConstraints $constraints
     *
     * @return self
     */
    public function setConstraints(StylesBoxConstraints $constraints) : self
    {
        $this->initialized['constraints'] = true;
        $this->constraints = $constraints;
        return $this;
    }
    /**
     * Element of type Padding
     *
     * @return StylesPadding
     */
    public function getContentPadding() : StylesPadding
    {
        return $this->contentPadding;
    }
    /**
     * Element of type Padding
     *
     * @param StylesPadding $contentPadding
     *
     * @return self
     */
    public function setContentPadding(StylesPadding $contentPadding) : self
    {
        $this->initialized['contentPadding'] = true;
        $this->contentPadding = $contentPadding;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getCounter()
    {
        return $this->counter;
    }
    /**
     * 
     *
     * @param mixed $counter
     *
     * @return self
     */
    public function setCounter($counter) : self
    {
        $this->initialized['counter'] = true;
        $this->counter = $counter;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getCounterStyle() : StylesTextStyle
    {
        return $this->counterStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $counterStyle
     *
     * @return self
     */
    public function setCounterStyle(StylesTextStyle $counterStyle) : self
    {
        $this->initialized['counterStyle'] = true;
        $this->counterStyle = $counterStyle;
        return $this;
    }
    /**
     * The text to place below the line as a character counter.
     *
     * @return string
     */
    public function getCounterText() : string
    {
        return $this->counterText;
    }
    /**
     * The text to place below the line as a character counter.
     *
     * @param string $counterText
     *
     * @return self
     */
    public function setCounterText(string $counterText) : self
    {
        $this->initialized['counterText'] = true;
        $this->counterText = $counterText;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getDisabledBorder() : StylesInputBorder
    {
        return $this->disabledBorder;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $disabledBorder
     *
     * @return self
     */
    public function setDisabledBorder(StylesInputBorder $disabledBorder) : self
    {
        $this->initialized['disabledBorder'] = true;
        $this->disabledBorder = $disabledBorder;
        return $this;
    }
    /**
     * Whether the input is enabled or disabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether the input is enabled or disabled.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getEnabledBorder() : StylesInputBorder
    {
        return $this->enabledBorder;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $enabledBorder
     *
     * @return self
     */
    public function setEnabledBorder(StylesInputBorder $enabledBorder) : self
    {
        $this->initialized['enabledBorder'] = true;
        $this->enabledBorder = $enabledBorder;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getErrorBorder() : StylesInputBorder
    {
        return $this->errorBorder;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $errorBorder
     *
     * @return self
     */
    public function setErrorBorder(StylesInputBorder $errorBorder) : self
    {
        $this->initialized['errorBorder'] = true;
        $this->errorBorder = $errorBorder;
        return $this;
    }
    /**
     * The maximum number of lines the error text can use.
     *
     * @return int
     */
    public function getErrorMaxLines() : int
    {
        return $this->errorMaxLines;
    }
    /**
     * The maximum number of lines the error text can use.
     *
     * @param int $errorMaxLines
     *
     * @return self
     */
    public function setErrorMaxLines(int $errorMaxLines) : self
    {
        $this->initialized['errorMaxLines'] = true;
        $this->errorMaxLines = $errorMaxLines;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getErrorStyle() : StylesTextStyle
    {
        return $this->errorStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $errorStyle
     *
     * @return self
     */
    public function setErrorStyle(StylesTextStyle $errorStyle) : self
    {
        $this->initialized['errorStyle'] = true;
        $this->errorStyle = $errorStyle;
        return $this;
    }
    /**
     * The error text to display when the input has an error.
     *
     * @return string
     */
    public function getErrorText() : string
    {
        return $this->errorText;
    }
    /**
     * The error text to display when the input has an error.
     *
     * @param string $errorText
     *
     * @return self
     */
    public function setErrorText(string $errorText) : self
    {
        $this->initialized['errorText'] = true;
        $this->errorText = $errorText;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getFillColor() : int
    {
        return $this->fillColor;
    }
    /**
     * Color type
     *
     * @param int $fillColor
     *
     * @return self
     */
    public function setFillColor(int $fillColor) : self
    {
        $this->initialized['fillColor'] = true;
        $this->fillColor = $fillColor;
        return $this;
    }
    /**
     * Whether the input is filled with fillColor.
     *
     * @return bool
     */
    public function getFilled() : bool
    {
        return $this->filled;
    }
    /**
     * Whether the input is filled with fillColor.
     *
     * @param bool $filled
     *
     * @return self
     */
    public function setFilled(bool $filled) : self
    {
        $this->initialized['filled'] = true;
        $this->filled = $filled;
        return $this;
    }
    /**
     * Element of type FloatingLabelBehavior.
     *
     * @return string
     */
    public function getFloatingLabelBehavior() : string
    {
        return $this->floatingLabelBehavior;
    }
    /**
     * Element of type FloatingLabelBehavior.
     *
     * @param string $floatingLabelBehavior
     *
     * @return self
     */
    public function setFloatingLabelBehavior(string $floatingLabelBehavior) : self
    {
        $this->initialized['floatingLabelBehavior'] = true;
        $this->floatingLabelBehavior = $floatingLabelBehavior;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getFloatingLabelStyle() : StylesTextStyle
    {
        return $this->floatingLabelStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $floatingLabelStyle
     *
     * @return self
     */
    public function setFloatingLabelStyle(StylesTextStyle $floatingLabelStyle) : self
    {
        $this->initialized['floatingLabelStyle'] = true;
        $this->floatingLabelStyle = $floatingLabelStyle;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getFocusColor() : int
    {
        return $this->focusColor;
    }
    /**
     * Color type
     *
     * @param int $focusColor
     *
     * @return self
     */
    public function setFocusColor(int $focusColor) : self
    {
        $this->initialized['focusColor'] = true;
        $this->focusColor = $focusColor;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getFocusedBorder() : StylesInputBorder
    {
        return $this->focusedBorder;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $focusedBorder
     *
     * @return self
     */
    public function setFocusedBorder(StylesInputBorder $focusedBorder) : self
    {
        $this->initialized['focusedBorder'] = true;
        $this->focusedBorder = $focusedBorder;
        return $this;
    }
    /**
     * Element of type InputBorder
     *
     * @return StylesInputBorder
     */
    public function getFocusedErrorBorder() : StylesInputBorder
    {
        return $this->focusedErrorBorder;
    }
    /**
     * Element of type InputBorder
     *
     * @param StylesInputBorder $focusedErrorBorder
     *
     * @return self
     */
    public function setFocusedErrorBorder(StylesInputBorder $focusedErrorBorder) : self
    {
        $this->initialized['focusedErrorBorder'] = true;
        $this->focusedErrorBorder = $focusedErrorBorder;
        return $this;
    }
    /**
     * The maximum number of lines the helper text can use.
     *
     * @return int
     */
    public function getHelperMaxLines() : int
    {
        return $this->helperMaxLines;
    }
    /**
     * The maximum number of lines the helper text can use.
     *
     * @param int $helperMaxLines
     *
     * @return self
     */
    public function setHelperMaxLines(int $helperMaxLines) : self
    {
        $this->initialized['helperMaxLines'] = true;
        $this->helperMaxLines = $helperMaxLines;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getHelperStyle() : StylesTextStyle
    {
        return $this->helperStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $helperStyle
     *
     * @return self
     */
    public function setHelperStyle(StylesTextStyle $helperStyle) : self
    {
        $this->initialized['helperStyle'] = true;
        $this->helperStyle = $helperStyle;
        return $this;
    }
    /**
     * The helper text to display.
     *
     * @return string
     */
    public function getHelperText() : string
    {
        return $this->helperText;
    }
    /**
     * The helper text to display.
     *
     * @param string $helperText
     *
     * @return self
     */
    public function setHelperText(string $helperText) : self
    {
        $this->initialized['helperText'] = true;
        $this->helperText = $helperText;
        return $this;
    }
    /**
     * The maximum number of lines the hint text can use.
     *
     * @return int
     */
    public function getHintMaxLines() : int
    {
        return $this->hintMaxLines;
    }
    /**
     * The maximum number of lines the hint text can use.
     *
     * @param int $hintMaxLines
     *
     * @return self
     */
    public function setHintMaxLines(int $hintMaxLines) : self
    {
        $this->initialized['hintMaxLines'] = true;
        $this->hintMaxLines = $hintMaxLines;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getHintStyle() : StylesTextStyle
    {
        return $this->hintStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $hintStyle
     *
     * @return self
     */
    public function setHintStyle(StylesTextStyle $hintStyle) : self
    {
        $this->initialized['hintStyle'] = true;
        $this->hintStyle = $hintStyle;
        return $this;
    }
    /**
     * The hint text to display.
     *
     * @return string
     */
    public function getHintText() : string
    {
        return $this->hintText;
    }
    /**
     * The hint text to display.
     *
     * @param string $hintText
     *
     * @return self
     */
    public function setHintText(string $hintText) : self
    {
        $this->initialized['hintText'] = true;
        $this->hintText = $hintText;
        return $this;
    }
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @return string
     */
    public function getHintTextDirection() : string
    {
        return $this->hintTextDirection;
    }
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @param string $hintTextDirection
     *
     * @return self
     */
    public function setHintTextDirection(string $hintTextDirection) : self
    {
        $this->initialized['hintTextDirection'] = true;
        $this->hintTextDirection = $hintTextDirection;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getHoverColor() : int
    {
        return $this->hoverColor;
    }
    /**
     * Color type
     *
     * @param int $hoverColor
     *
     * @return self
     */
    public function setHoverColor(int $hoverColor) : self
    {
        $this->initialized['hoverColor'] = true;
        $this->hoverColor = $hoverColor;
        return $this;
    }
    /**
     * The Icon to use
     *
     * @return Icon
     */
    public function getIcon() : Icon
    {
        return $this->icon;
    }
    /**
     * The Icon to use
     *
     * @param Icon $icon
     *
     * @return self
     */
    public function setIcon(Icon $icon) : self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getIconColor() : int
    {
        return $this->iconColor;
    }
    /**
     * Color type
     *
     * @param int $iconColor
     *
     * @return self
     */
    public function setIconColor(int $iconColor) : self
    {
        $this->initialized['iconColor'] = true;
        $this->iconColor = $iconColor;
        return $this;
    }
    /**
     * Whether the decoration is the same size as the input field.
     *
     * @return bool
     */
    public function getIsCollapsed() : bool
    {
        return $this->isCollapsed;
    }
    /**
     * Whether the decoration is the same size as the input field.
     *
     * @param bool $isCollapsed
     *
     * @return self
     */
    public function setIsCollapsed(bool $isCollapsed) : self
    {
        $this->initialized['isCollapsed'] = true;
        $this->isCollapsed = $isCollapsed;
        return $this;
    }
    /**
     * Whether the decoration is dense.
     *
     * @return bool
     */
    public function getIsDense() : bool
    {
        return $this->isDense;
    }
    /**
     * Whether the decoration is dense.
     *
     * @param bool $isDense
     *
     * @return self
     */
    public function setIsDense(bool $isDense) : self
    {
        $this->initialized['isDense'] = true;
        $this->isDense = $isDense;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getLabel()
    {
        return $this->label;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $label
     *
     * @return self
     */
    public function setLabel($label) : self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getLabelStyle() : StylesTextStyle
    {
        return $this->labelStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $labelStyle
     *
     * @return self
     */
    public function setLabelStyle(StylesTextStyle $labelStyle) : self
    {
        $this->initialized['labelStyle'] = true;
        $this->labelStyle = $labelStyle;
        return $this;
    }
    /**
     * The text that describes the input field.
     *
     * @return string
     */
    public function getLabelText() : string
    {
        return $this->labelText;
    }
    /**
     * The text that describes the input field.
     *
     * @param string $labelText
     *
     * @return self
     */
    public function setLabelText(string $labelText) : self
    {
        $this->initialized['labelText'] = true;
        $this->labelText = $labelText;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $prefix
     *
     * @return self
     */
    public function setPrefix($prefix) : self
    {
        $this->initialized['prefix'] = true;
        $this->prefix = $prefix;
        return $this;
    }
    /**
     * The Icon to use
     *
     * @return Icon
     */
    public function getPrefixIcon() : Icon
    {
        return $this->prefixIcon;
    }
    /**
     * The Icon to use
     *
     * @param Icon $prefixIcon
     *
     * @return self
     */
    public function setPrefixIcon(Icon $prefixIcon) : self
    {
        $this->initialized['prefixIcon'] = true;
        $this->prefixIcon = $prefixIcon;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getPrefixIconColor() : int
    {
        return $this->prefixIconColor;
    }
    /**
     * Color type
     *
     * @param int $prefixIconColor
     *
     * @return self
     */
    public function setPrefixIconColor(int $prefixIconColor) : self
    {
        $this->initialized['prefixIconColor'] = true;
        $this->prefixIconColor = $prefixIconColor;
        return $this;
    }
    /**
     * Element of type BoxConstraints
     *
     * @return StylesBoxConstraints
     */
    public function getPrefixIconConstraints() : StylesBoxConstraints
    {
        return $this->prefixIconConstraints;
    }
    /**
     * Element of type BoxConstraints
     *
     * @param StylesBoxConstraints $prefixIconConstraints
     *
     * @return self
     */
    public function setPrefixIconConstraints(StylesBoxConstraints $prefixIconConstraints) : self
    {
        $this->initialized['prefixIconConstraints'] = true;
        $this->prefixIconConstraints = $prefixIconConstraints;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getPrefixStyle() : StylesTextStyle
    {
        return $this->prefixStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $prefixStyle
     *
     * @return self
     */
    public function setPrefixStyle(StylesTextStyle $prefixStyle) : self
    {
        $this->initialized['prefixStyle'] = true;
        $this->prefixStyle = $prefixStyle;
        return $this;
    }
    /**
     * The text to display before the input.
     *
     * @return string
     */
    public function getPrefixText() : string
    {
        return $this->prefixText;
    }
    /**
     * The text to display before the input.
     *
     * @param string $prefixText
     *
     * @return self
     */
    public function setPrefixText(string $prefixText) : self
    {
        $this->initialized['prefixText'] = true;
        $this->prefixText = $prefixText;
        return $this;
    }
    /**
     * The semantic label for the counterText.
     *
     * @return string
     */
    public function getSemanticCounterText() : string
    {
        return $this->semanticCounterText;
    }
    /**
     * The semantic label for the counterText.
     *
     * @param string $semanticCounterText
     *
     * @return self
     */
    public function setSemanticCounterText(string $semanticCounterText) : self
    {
        $this->initialized['semanticCounterText'] = true;
        $this->semanticCounterText = $semanticCounterText;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSuffix()
    {
        return $this->suffix;
    }
    /**
     * 
     *
     * @param mixed $suffix
     *
     * @return self
     */
    public function setSuffix($suffix) : self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * The Icon to use
     *
     * @return Icon
     */
    public function getSuffixIcon() : Icon
    {
        return $this->suffixIcon;
    }
    /**
     * The Icon to use
     *
     * @param Icon $suffixIcon
     *
     * @return self
     */
    public function setSuffixIcon(Icon $suffixIcon) : self
    {
        $this->initialized['suffixIcon'] = true;
        $this->suffixIcon = $suffixIcon;
        return $this;
    }
    /**
     * Color type
     *
     * @return int
     */
    public function getSuffixIconColor() : int
    {
        return $this->suffixIconColor;
    }
    /**
     * Color type
     *
     * @param int $suffixIconColor
     *
     * @return self
     */
    public function setSuffixIconColor(int $suffixIconColor) : self
    {
        $this->initialized['suffixIconColor'] = true;
        $this->suffixIconColor = $suffixIconColor;
        return $this;
    }
    /**
     * Element of type BoxConstraints
     *
     * @return StylesBoxConstraints
     */
    public function getSuffixIconConstraints() : StylesBoxConstraints
    {
        return $this->suffixIconConstraints;
    }
    /**
     * Element of type BoxConstraints
     *
     * @param StylesBoxConstraints $suffixIconConstraints
     *
     * @return self
     */
    public function setSuffixIconConstraints(StylesBoxConstraints $suffixIconConstraints) : self
    {
        $this->initialized['suffixIconConstraints'] = true;
        $this->suffixIconConstraints = $suffixIconConstraints;
        return $this;
    }
    /**
     * The style of the Text.
     *
     * @return StylesTextStyle
     */
    public function getSuffixStyle() : StylesTextStyle
    {
        return $this->suffixStyle;
    }
    /**
     * The style of the Text.
     *
     * @param StylesTextStyle $suffixStyle
     *
     * @return self
     */
    public function setSuffixStyle(StylesTextStyle $suffixStyle) : self
    {
        $this->initialized['suffixStyle'] = true;
        $this->suffixStyle = $suffixStyle;
        return $this;
    }
    /**
     * The text to display after the input.
     *
     * @return string
     */
    public function getSuffixText() : string
    {
        return $this->suffixText;
    }
    /**
     * The text to display after the input.
     *
     * @param string $suffixText
     *
     * @return self
     */
    public function setSuffixText(string $suffixText) : self
    {
        $this->initialized['suffixText'] = true;
        $this->suffixText = $suffixText;
        return $this;
    }
}