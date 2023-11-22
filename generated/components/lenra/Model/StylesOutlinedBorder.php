<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesOutlinedBorder
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
     * @var StylesBorderSide
     */
    protected $side;
    /**
     * Element of type BorderSide
     *
     * @return StylesBorderSide
     */
    public function getSide() : StylesBorderSide
    {
        return $this->side;
    }
    /**
     * Element of type BorderSide
     *
     * @param StylesBorderSide $side
     *
     * @return self
     */
    public function setSide(StylesBorderSide $side) : self
    {
        $this->initialized['side'] = true;
        $this->side = $side;
        return $this;
    }
}