<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesOutlinedBorder
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
     * Element of type BorderSide
     *
     * @var ComponentsStylesBorderSide
     */
    protected $side;
    /**
     * Element of type BorderSide
     *
     * @return ComponentsStylesBorderSide
     */
    public function getSide() : ComponentsStylesBorderSide
    {
        return $this->side;
    }
    /**
     * Element of type BorderSide
     *
     * @param ComponentsStylesBorderSide $side
     *
     * @return self
     */
    public function setSide(ComponentsStylesBorderSide $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
}