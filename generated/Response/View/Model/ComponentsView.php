<?php

namespace Lenra\App\Response\View\Model;

class ComponentsView
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
     * The name of the view
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
     * Find query for view components
     *
     * @var ComponentsViewDefinitionsFind
     */
    protected $find;
    /**
     * The context projection. This field represents the projection of the context, allowing selective retrieval of specific elements. It is a map that specifies the desired elements to be included in the projection.
     *
     * @var mixed
     */
    protected $context;
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
     * The name of the view
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * The name of the view
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
    /**
     * Find query for view components
     *
     * @return ComponentsViewDefinitionsFind
     */
    public function getFind() : ComponentsViewDefinitionsFind
    {
        return $this->find;
    }
    /**
     * Find query for view components
     *
     * @param ComponentsViewDefinitionsFind $find
     *
     * @return self
     */
    public function setFind(ComponentsViewDefinitionsFind $find) : self
    {
        $this->initialized['find'] = true;
        $this->find = $find;
        return $this;
    }
    /**
     * The context projection. This field represents the projection of the context, allowing selective retrieval of specific elements. It is a map that specifies the desired elements to be included in the projection.
     *
     * @return mixed
     */
    public function getContext()
    {
        return $this->context;
    }
    /**
     * The context projection. This field represents the projection of the context, allowing selective retrieval of specific elements. It is a map that specifies the desired elements to be included in the projection.
     *
     * @param mixed $context
     *
     * @return self
     */
    public function setContext($context) : self
    {
        $this->initialized['context'] = true;
        $this->context = $context;
        return $this;
    }
}