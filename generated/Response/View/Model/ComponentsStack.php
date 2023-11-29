<?php

namespace Lenra\App\Response\View\Model;

class ComponentsStack
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
     * The children of the Stack.
     *
     * @var ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    protected $children;
    /**
     * The alignment to use.
     *
     * @var string
     */
    protected $alignment = 'center';
    /**
     * The StackFit enum.
     *
     * @var string
     */
    protected $fit = 'passthrough';
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
     * The children of the Stack.
     *
     * @return ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[]
     */
    public function getChildren() : array
    {
        return $this->children;
    }
    /**
     * The children of the Stack.
     *
     * @param ComponentsActionable[]|ComponentsButton[]|ComponentsCarousel[]|ComponentsCheckbox[]|ComponentsContainer[]|ComponentsDropdownButton[]|ComponentsFlex[]|ComponentsFlexible[]|ComponentsForm[]|ComponentsIcon[]|ComponentsImage[]|ComponentsMenu[]|ComponentsMenuItem[]|ComponentsOverlayEntry[]|ComponentsRadio[]|ComponentsSlider[]|ComponentsStack[]|ComponentsStatusSticker[]|ComponentsText[]|ComponentsTextField[]|ComponentsToggle[]|ComponentsView[]|ComponentsWrap[] $children
     *
     * @return self
     */
    public function setChildren(array $children) : self
    {
        $this->initialized['children'] = true;
        $this->children = $children;
        return $this;
    }
    /**
     * The alignment to use.
     *
     * @return string
     */
    public function getAlignment() : string
    {
        return $this->alignment;
    }
    /**
     * The alignment to use.
     *
     * @param string $alignment
     *
     * @return self
     */
    public function setAlignment(string $alignment) : self
    {
        $this->initialized['alignment'] = true;
        $this->alignment = $alignment;
        return $this;
    }
    /**
     * The StackFit enum.
     *
     * @return string
     */
    public function getFit() : string
    {
        return $this->fit;
    }
    /**
     * The StackFit enum.
     *
     * @param string $fit
     *
     * @return self
     */
    public function setFit(string $fit) : self
    {
        $this->initialized['fit'] = true;
        $this->fit = $fit;
        return $this;
    }
}