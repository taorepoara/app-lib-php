<?php

namespace Lenra\App\Components\Lenra\Model;

class DropdownButton
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
     * The text of the dropdown button
     *
     * @var string
     */
    protected $text;
    /**
     * If true, the dropdown button is disabled
     *
     * @var bool
     */
    protected $disabled = false;
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @var string
     */
    protected $size = 'medium';
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @var string
     */
    protected $mainStyle = 'primary';
    /**
     * Any component
     *
     * @var Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    protected $child;
    /**
     * The Icon to use
     *
     * @var Icon
     */
    protected $icon;
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
     * The text of the dropdown button
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The text of the dropdown button
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text) : self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * If true, the dropdown button is disabled
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * If true, the dropdown button is disabled
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled) : self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @return string
     */
    public function getSize() : string
    {
        return $this->size;
    }
    /**
     * The size to use, the component will be sized according to the value.
     *
     * @param string $size
     *
     * @return self
     */
    public function setSize(string $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @return string
     */
    public function getMainStyle() : string
    {
        return $this->mainStyle;
    }
    /**
     * The style to use, the component will be changed according to the theme.
     *
     * @param string $mainStyle
     *
     * @return self
     */
    public function setMainStyle(string $mainStyle) : self
    {
        $this->initialized['mainStyle'] = true;
        $this->mainStyle = $mainStyle;
        return $this;
    }
    /**
     * Any component
     *
     * @return Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap
     */
    public function getChild()
    {
        return $this->child;
    }
    /**
     * Any component
     *
     * @param Actionable|Button|Carousel|Checkbox|Container|DropdownButton|Flex|Flexible|Form|Icon|Image|Menu|MenuItem|OverlayEntry|Radio|Slider|Stack|StatusSticker|Text|Textfield|Toggle|View|Wrap $child
     *
     * @return self
     */
    public function setChild($child) : self
    {
        $this->initialized['child'] = true;
        $this->child = $child;
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
}