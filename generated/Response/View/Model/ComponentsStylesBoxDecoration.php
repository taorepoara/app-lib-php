<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesBoxDecoration
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
     * Element of type BorderRadius
     *
     * @var ComponentsStylesBorderRadius
     */
    protected $borderRadius;
    /**
     * Element of type BoxShadow
     *
     * @var ComponentsStylesBoxShadow
     */
    protected $boxShadow;
    /**
     * Color type
     *
     * @var int
     */
    protected $color;
    /**
     * The BoxShape enum, used to define the shape of a box.
     *
     * @var string
     */
    protected $shape = 'rectangle';
    /**
     * Element of type BorderRadius
     *
     * @return ComponentsStylesBorderRadius
     */
    public function getBorderRadius() : ComponentsStylesBorderRadius
    {
        return $this->borderRadius;
    }
    /**
     * Element of type BorderRadius
     *
     * @param ComponentsStylesBorderRadius $borderRadius
     *
     * @return self
     */
    public function setBorderRadius(ComponentsStylesBorderRadius $borderRadius) : self
    {
        $this->initialized['borderRadius'] = true;
        $this->borderRadius = $borderRadius;
        return $this;
    }
    /**
     * Element of type BoxShadow
     *
     * @return ComponentsStylesBoxShadow
     */
    public function getBoxShadow() : ComponentsStylesBoxShadow
    {
        return $this->boxShadow;
    }
    /**
     * Element of type BoxShadow
     *
     * @param ComponentsStylesBoxShadow $boxShadow
     *
     * @return self
     */
    public function setBoxShadow(ComponentsStylesBoxShadow $boxShadow) : self
    {
        $this->initialized['boxShadow'] = true;
        $this->boxShadow = $boxShadow;
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
     * The BoxShape enum, used to define the shape of a box.
     *
     * @return string
     */
    public function getShape() : string
    {
        return $this->shape;
    }
    /**
     * The BoxShape enum, used to define the shape of a box.
     *
     * @param string $shape
     *
     * @return self
     */
    public function setShape(string $shape) : self
    {
        $this->initialized['shape'] = true;
        $this->shape = $shape;
        return $this;
    }
}