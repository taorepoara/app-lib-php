<?php

namespace Lenra\App\Components\Json\Model;

class Listener
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
     * 
     *
     * @var mixed
     */
    protected $type;
    /**
     * The name of the listener to call
     *
     * @var string
     */
    protected $name;
    /**
     * Parameters passed to the listener
     *
     * @var mixed
     */
    protected $props;
    /**
     * 
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * 
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
     * The name of the listener to call
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the listener to call
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
    /**
     * Parameters passed to the listener
     *
     * @return mixed
     */
    public function getProps()
    {
        return $this->props;
    }
    /**
     * Parameters passed to the listener
     *
     * @param mixed $props
     *
     * @return self
     */
    public function setProps($props) : self
    {
        $this->initialized['props'] = true;
        $this->props = $props;
        return $this;
    }
}