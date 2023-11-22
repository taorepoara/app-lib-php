<?php

namespace Lenra\App\Components\Lenra\Model;

class Icon
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
     * The size of the Icon
     *
     * @var float
     */
    protected $size = 24;
    /**
     * Color type
     *
     * @var int
     */
    protected $color;
    /**
     * The semantic label for the Icon. This will be announced when using accessibility mode.
     *
     * @var string
     */
    protected $semanticLabel;
    /**
     * All of the possible values for an Icon.
     *
     * @var string
     */
    protected $value;
    /**
     * The style of the Icon
     *
     * @var string
     */
    protected $style = 'filled';
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
     * The size of the Icon
     *
     * @return float
     */
    public function getSize() : float
    {
        return $this->size;
    }
    /**
     * The size of the Icon
     *
     * @param float $size
     *
     * @return self
     */
    public function setSize(float $size) : self
    {
        $this->initialized['size'] = true;
        $this->size = $size;
        return $this;
    }
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
     * The semantic label for the Icon. This will be announced when using accessibility mode.
     *
     * @return string
     */
    public function getSemanticLabel() : string
    {
        return $this->semanticLabel;
    }
    /**
     * The semantic label for the Icon. This will be announced when using accessibility mode.
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
    /**
     * All of the possible values for an Icon.
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * All of the possible values for an Icon.
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
     * The style of the Icon
     *
     * @return string
     */
    public function getStyle() : string
    {
        return $this->style;
    }
    /**
     * The style of the Icon
     *
     * @param string $style
     *
     * @return self
     */
    public function setStyle(string $style) : self
    {
        $this->initialized['style'] = true;
        $this->style = $style;
        return $this;
    }
}