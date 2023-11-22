<?php

namespace Lenra\App\Components\Lenra\Model;

class MenuItem
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
     * The text of the element
     *
     * @var string
     */
    protected $text;
    /**
     * Whether the element is selected or not.
     *
     * @var bool
     */
    protected $isSelected = false;
    /**
     * Whether the element should be disabled or not.
     *
     * @var bool
     */
    protected $disabled = false;
    /**
     * The Icon to use
     *
     * @var Icon
     */
    protected $icon;
    /**
     * 
     *
     * @var Listener
     */
    protected $onPressed;
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
     * The text of the element
     *
     * @return string
     */
    public function getText() : string
    {
        return $this->text;
    }
    /**
     * The text of the element
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
     * Whether the element is selected or not.
     *
     * @return bool
     */
    public function getIsSelected() : bool
    {
        return $this->isSelected;
    }
    /**
     * Whether the element is selected or not.
     *
     * @param bool $isSelected
     *
     * @return self
     */
    public function setIsSelected(bool $isSelected) : self
    {
        $this->initialized['isSelected'] = true;
        $this->isSelected = $isSelected;
        return $this;
    }
    /**
     * Whether the element should be disabled or not.
     *
     * @return bool
     */
    public function getDisabled() : bool
    {
        return $this->disabled;
    }
    /**
     * Whether the element should be disabled or not.
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
     * 
     *
     * @return Listener
     */
    public function getOnPressed() : Listener
    {
        return $this->onPressed;
    }
    /**
     * 
     *
     * @param Listener $onPressed
     *
     * @return self
     */
    public function setOnPressed(Listener $onPressed) : self
    {
        $this->initialized['onPressed'] = true;
        $this->onPressed = $onPressed;
        return $this;
    }
}