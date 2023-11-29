<?php

namespace Lenra\App\Response\View\Model;

class ComponentsTextField
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
     * The value displayed inside the Textfield
     *
     * @var string
     */
    protected $value;
    /**
     * Whether to enable the autocorrection
     *
     * @var bool
     */
    protected $autocorrect;
    /**
     * The AutofillHints enum to handle textfield's autocompletion.
     *
     * @var string[]
     */
    protected $autofillHints;
    /**
     * Whether this Textfield should be focused initially.
     *
     * @var bool
     */
    protected $autofocus;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $buildCounter;
    /**
     * Element of type TextFieldStyle
     *
     * @var ComponentsStylesTextFieldStyle
     */
    protected $style;
    /**
     * Component of type DragStartBehavior.
     *
     * @var string
     */
    protected $dragStartBehavior;
    /**
     * Whether the text field is enabled.
     *
     * @var bool
     */
    protected $enabled;
    /**
     * Whether to enable user interface options to change the text selection.
     *
     * @var bool
     */
    protected $enableInteractiveSelection;
    /**
     * Whether the TextField is sized to fill its parent.
     *
     * @var bool
     */
    protected $expands;
    /**
     * Element of textInput Type
     *
     * @var ComponentsStylesTextInputType
     */
    protected $keyboardType;
    /**
     * The maximum number of characters to allow in the text field.
     *
     * @var int
     */
    protected $maxLength;
    /**
     * Component of type MaxLengthEnforcement.
     *
     * @var string
     */
    protected $maxLengthEnforcement;
    /**
     * The maximum number of lines to show at one time.
     *
     * @var int
     */
    protected $maxLines;
    /**
     * The minimum number of lines to occupy on the screen.
     *
     * @var int
     */
    protected $minLines;
    /**
     * Whether to hide the text being edited.
     *
     * @var bool
     */
    protected $obscureText;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onAppPrivateCommand;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onChanged;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onEditingComplete;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onSubmitted;
    /**
     * 
     *
     * @var ComponentsListener
     */
    protected $onTap;
    /**
     * Whether the text can be changed.
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * Whether to show the cursor.
     *
     * @var bool
     */
    protected $showCursor;
    /**
     * Component of type TextCapitalization.
     *
     * @var string
     */
    protected $textCapitalization;
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @var string
     */
    protected $textDirection = 'ltr';
    /**
     * Component of type TextInputAction.
     *
     * @var string
     */
    protected $textInputAction;
    /**
     * Element of type toolbar options
     *
     * @var ComponentsStylesToolbarOptions
     */
    protected $toolbarOptions;
    /**
     * The name that will be used in the form.
     *
     * @var string
     */
    protected $name;
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
     * The value displayed inside the Textfield
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * The value displayed inside the Textfield
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
     * Whether to enable the autocorrection
     *
     * @return bool
     */
    public function getAutocorrect() : bool
    {
        return $this->autocorrect;
    }
    /**
     * Whether to enable the autocorrection
     *
     * @param bool $autocorrect
     *
     * @return self
     */
    public function setAutocorrect(bool $autocorrect) : self
    {
        $this->initialized['autocorrect'] = true;
        $this->autocorrect = $autocorrect;
        return $this;
    }
    /**
     * The AutofillHints enum to handle textfield's autocompletion.
     *
     * @return string[]
     */
    public function getAutofillHints() : array
    {
        return $this->autofillHints;
    }
    /**
     * The AutofillHints enum to handle textfield's autocompletion.
     *
     * @param string[] $autofillHints
     *
     * @return self
     */
    public function setAutofillHints(array $autofillHints) : self
    {
        $this->initialized['autofillHints'] = true;
        $this->autofillHints = $autofillHints;
        return $this;
    }
    /**
     * Whether this Textfield should be focused initially.
     *
     * @return bool
     */
    public function getAutofocus() : bool
    {
        return $this->autofocus;
    }
    /**
     * Whether this Textfield should be focused initially.
     *
     * @param bool $autofocus
     *
     * @return self
     */
    public function setAutofocus(bool $autofocus) : self
    {
        $this->initialized['autofocus'] = true;
        $this->autofocus = $autofocus;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getBuildCounter() : ComponentsListener
    {
        return $this->buildCounter;
    }
    /**
     * 
     *
     * @param ComponentsListener $buildCounter
     *
     * @return self
     */
    public function setBuildCounter(ComponentsListener $buildCounter) : self
    {
        $this->initialized['buildCounter'] = true;
        $this->buildCounter = $buildCounter;
        return $this;
    }
    /**
     * Element of type TextFieldStyle
     *
     * @return ComponentsStylesTextFieldStyle
     */
    public function getStyle() : ComponentsStylesTextFieldStyle
    {
        return $this->style;
    }
    /**
     * Element of type TextFieldStyle
     *
     * @param ComponentsStylesTextFieldStyle $style
     *
     * @return self
     */
    public function setStyle(ComponentsStylesTextFieldStyle $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
    /**
     * Component of type DragStartBehavior.
     *
     * @return string
     */
    public function getDragStartBehavior() : string
    {
        return $this->dragStartBehavior;
    }
    /**
     * Component of type DragStartBehavior.
     *
     * @param string $dragStartBehavior
     *
     * @return self
     */
    public function setDragStartBehavior(string $dragStartBehavior) : self
    {
        $this->initialized['dragStartBehavior'] = true;
        $this->dragStartBehavior = $dragStartBehavior;
        return $this;
    }
    /**
     * Whether the text field is enabled.
     *
     * @return bool
     */
    public function getEnabled() : bool
    {
        return $this->enabled;
    }
    /**
     * Whether the text field is enabled.
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
     * Whether to enable user interface options to change the text selection.
     *
     * @return bool
     */
    public function getEnableInteractiveSelection() : bool
    {
        return $this->enableInteractiveSelection;
    }
    /**
     * Whether to enable user interface options to change the text selection.
     *
     * @param bool $enableInteractiveSelection
     *
     * @return self
     */
    public function setEnableInteractiveSelection(bool $enableInteractiveSelection) : self
    {
        $this->initialized['enableInteractiveSelection'] = true;
        $this->enableInteractiveSelection = $enableInteractiveSelection;
        return $this;
    }
    /**
     * Whether the TextField is sized to fill its parent.
     *
     * @return bool
     */
    public function getExpands() : bool
    {
        return $this->expands;
    }
    /**
     * Whether the TextField is sized to fill its parent.
     *
     * @param bool $expands
     *
     * @return self
     */
    public function setExpands(bool $expands) : self
    {
        $this->initialized['expands'] = true;
        $this->expands = $expands;
        return $this;
    }
    /**
     * Element of textInput Type
     *
     * @return ComponentsStylesTextInputType
     */
    public function getKeyboardType() : ComponentsStylesTextInputType
    {
        return $this->keyboardType;
    }
    /**
     * Element of textInput Type
     *
     * @param ComponentsStylesTextInputType $keyboardType
     *
     * @return self
     */
    public function setKeyboardType(ComponentsStylesTextInputType $keyboardType) : self
    {
        $this->initialized['keyboardType'] = true;
        $this->keyboardType = $keyboardType;
        return $this;
    }
    /**
     * The maximum number of characters to allow in the text field.
     *
     * @return int
     */
    public function getMaxLength() : int
    {
        return $this->maxLength;
    }
    /**
     * The maximum number of characters to allow in the text field.
     *
     * @param int $maxLength
     *
     * @return self
     */
    public function setMaxLength(int $maxLength) : self
    {
        $this->initialized['maxLength'] = true;
        $this->maxLength = $maxLength;
        return $this;
    }
    /**
     * Component of type MaxLengthEnforcement.
     *
     * @return string
     */
    public function getMaxLengthEnforcement() : string
    {
        return $this->maxLengthEnforcement;
    }
    /**
     * Component of type MaxLengthEnforcement.
     *
     * @param string $maxLengthEnforcement
     *
     * @return self
     */
    public function setMaxLengthEnforcement(string $maxLengthEnforcement) : self
    {
        $this->initialized['maxLengthEnforcement'] = true;
        $this->maxLengthEnforcement = $maxLengthEnforcement;
        return $this;
    }
    /**
     * The maximum number of lines to show at one time.
     *
     * @return int
     */
    public function getMaxLines() : int
    {
        return $this->maxLines;
    }
    /**
     * The maximum number of lines to show at one time.
     *
     * @param int $maxLines
     *
     * @return self
     */
    public function setMaxLines(int $maxLines) : self
    {
        $this->initialized['maxLines'] = true;
        $this->maxLines = $maxLines;
        return $this;
    }
    /**
     * The minimum number of lines to occupy on the screen.
     *
     * @return int
     */
    public function getMinLines() : int
    {
        return $this->minLines;
    }
    /**
     * The minimum number of lines to occupy on the screen.
     *
     * @param int $minLines
     *
     * @return self
     */
    public function setMinLines(int $minLines) : self
    {
        $this->initialized['minLines'] = true;
        $this->minLines = $minLines;
        return $this;
    }
    /**
     * Whether to hide the text being edited.
     *
     * @return bool
     */
    public function getObscureText() : bool
    {
        return $this->obscureText;
    }
    /**
     * Whether to hide the text being edited.
     *
     * @param bool $obscureText
     *
     * @return self
     */
    public function setObscureText(bool $obscureText) : self
    {
        $this->initialized['obscureText'] = true;
        $this->obscureText = $obscureText;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnAppPrivateCommand() : ComponentsListener
    {
        return $this->onAppPrivateCommand;
    }
    /**
     * 
     *
     * @param ComponentsListener $onAppPrivateCommand
     *
     * @return self
     */
    public function setOnAppPrivateCommand(ComponentsListener $onAppPrivateCommand) : self
    {
        $this->initialized['onAppPrivateCommand'] = true;
        $this->onAppPrivateCommand = $onAppPrivateCommand;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnChanged() : ComponentsListener
    {
        return $this->onChanged;
    }
    /**
     * 
     *
     * @param ComponentsListener $onChanged
     *
     * @return self
     */
    public function setOnChanged(ComponentsListener $onChanged) : self
    {
        $this->initialized['onChanged'] = true;
        $this->onChanged = $onChanged;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnEditingComplete() : ComponentsListener
    {
        return $this->onEditingComplete;
    }
    /**
     * 
     *
     * @param ComponentsListener $onEditingComplete
     *
     * @return self
     */
    public function setOnEditingComplete(ComponentsListener $onEditingComplete) : self
    {
        $this->initialized['onEditingComplete'] = true;
        $this->onEditingComplete = $onEditingComplete;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnSubmitted() : ComponentsListener
    {
        return $this->onSubmitted;
    }
    /**
     * 
     *
     * @param ComponentsListener $onSubmitted
     *
     * @return self
     */
    public function setOnSubmitted(ComponentsListener $onSubmitted) : self
    {
        $this->initialized['onSubmitted'] = true;
        $this->onSubmitted = $onSubmitted;
        return $this;
    }
    /**
     * 
     *
     * @return ComponentsListener
     */
    public function getOnTap() : ComponentsListener
    {
        return $this->onTap;
    }
    /**
     * 
     *
     * @param ComponentsListener $onTap
     *
     * @return self
     */
    public function setOnTap(ComponentsListener $onTap) : self
    {
        $this->initialized['onTap'] = true;
        $this->onTap = $onTap;
        return $this;
    }
    /**
     * Whether the text can be changed.
     *
     * @return bool
     */
    public function getReadOnly() : bool
    {
        return $this->readOnly;
    }
    /**
     * Whether the text can be changed.
     *
     * @param bool $readOnly
     *
     * @return self
     */
    public function setReadOnly(bool $readOnly) : self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;
        return $this;
    }
    /**
     * Whether to show the cursor.
     *
     * @return bool
     */
    public function getShowCursor() : bool
    {
        return $this->showCursor;
    }
    /**
     * Whether to show the cursor.
     *
     * @param bool $showCursor
     *
     * @return self
     */
    public function setShowCursor(bool $showCursor) : self
    {
        $this->initialized['showCursor'] = true;
        $this->showCursor = $showCursor;
        return $this;
    }
    /**
     * Component of type TextCapitalization.
     *
     * @return string
     */
    public function getTextCapitalization() : string
    {
        return $this->textCapitalization;
    }
    /**
     * Component of type TextCapitalization.
     *
     * @param string $textCapitalization
     *
     * @return self
     */
    public function setTextCapitalization(string $textCapitalization) : self
    {
        $this->initialized['textCapitalization'] = true;
        $this->textCapitalization = $textCapitalization;
        return $this;
    }
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @return string
     */
    public function getTextDirection() : string
    {
        return $this->textDirection;
    }
    /**
     * In which direction the elements should be placed following the horizontal axis.
     *
     * @param string $textDirection
     *
     * @return self
     */
    public function setTextDirection(string $textDirection) : self
    {
        $this->initialized['textDirection'] = true;
        $this->textDirection = $textDirection;
        return $this;
    }
    /**
     * Component of type TextInputAction.
     *
     * @return string
     */
    public function getTextInputAction() : string
    {
        return $this->textInputAction;
    }
    /**
     * Component of type TextInputAction.
     *
     * @param string $textInputAction
     *
     * @return self
     */
    public function setTextInputAction(string $textInputAction) : self
    {
        $this->initialized['textInputAction'] = true;
        $this->textInputAction = $textInputAction;
        return $this;
    }
    /**
     * Element of type toolbar options
     *
     * @return ComponentsStylesToolbarOptions
     */
    public function getToolbarOptions() : ComponentsStylesToolbarOptions
    {
        return $this->toolbarOptions;
    }
    /**
     * Element of type toolbar options
     *
     * @param ComponentsStylesToolbarOptions $toolbarOptions
     *
     * @return self
     */
    public function setToolbarOptions(ComponentsStylesToolbarOptions $toolbarOptions) : self
    {
        $this->initialized['toolbarOptions'] = true;
        $this->toolbarOptions = $toolbarOptions;
        return $this;
    }
    /**
     * The name that will be used in the form.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name that will be used in the form.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
}