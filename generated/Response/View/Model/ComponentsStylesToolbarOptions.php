<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStylesToolbarOptions
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
     * The number is decimal, allowing a decimal point to provide fractional
     *
     * @var bool
     */
    protected $decimal;
    /**
     * The number is signed, allowing a positive or negative sign at the start.
     *
     * @var bool
     */
    protected $signed;
    /**
     * The number is decimal, allowing a decimal point to provide fractional
     *
     * @return bool
     */
    public function getDecimal() : bool
    {
        return $this->decimal;
    }
    /**
     * The number is decimal, allowing a decimal point to provide fractional
     *
     * @param bool $decimal
     *
     * @return self
     */
    public function setDecimal(bool $decimal) : self
    {
        $this->initialized['decimal'] = true;
        $this->decimal = $decimal;
        return $this;
    }
    /**
     * The number is signed, allowing a positive or negative sign at the start.
     *
     * @return bool
     */
    public function getSigned() : bool
    {
        return $this->signed;
    }
    /**
     * The number is signed, allowing a positive or negative sign at the start.
     *
     * @param bool $signed
     *
     * @return self
     */
    public function setSigned(bool $signed) : self
    {
        $this->initialized['signed'] = true;
        $this->signed = $signed;
        return $this;
    }
}