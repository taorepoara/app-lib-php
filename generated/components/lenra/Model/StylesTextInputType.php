<?php

namespace Lenra\App\Components\Lenra\Model;

class StylesTextInputType
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
     * Whether to show copy option in toolbar
     *
     * @var bool
     */
    protected $copy;
    /**
     * Whether to show cut option in toolbar
     *
     * @var bool
     */
    protected $cut;
    /**
     * Whether to show past option in toolbar
     *
     * @var bool
     */
    protected $paste;
    /**
     * Whether to show select all option in toolbar
     *
     * @var bool
     */
    protected $selectAll;
    /**
     * Whether to show copy option in toolbar
     *
     * @return bool
     */
    public function getCopy() : bool
    {
        return $this->copy;
    }
    /**
     * Whether to show copy option in toolbar
     *
     * @param bool $copy
     *
     * @return self
     */
    public function setCopy(bool $copy) : self
    {
        $this->initialized['copy'] = true;
        $this->copy = $copy;
        return $this;
    }
    /**
     * Whether to show cut option in toolbar
     *
     * @return bool
     */
    public function getCut() : bool
    {
        return $this->cut;
    }
    /**
     * Whether to show cut option in toolbar
     *
     * @param bool $cut
     *
     * @return self
     */
    public function setCut(bool $cut) : self
    {
        $this->initialized['cut'] = true;
        $this->cut = $cut;
        return $this;
    }
    /**
     * Whether to show past option in toolbar
     *
     * @return bool
     */
    public function getPaste() : bool
    {
        return $this->paste;
    }
    /**
     * Whether to show past option in toolbar
     *
     * @param bool $paste
     *
     * @return self
     */
    public function setPaste(bool $paste) : self
    {
        $this->initialized['paste'] = true;
        $this->paste = $paste;
        return $this;
    }
    /**
     * Whether to show select all option in toolbar
     *
     * @return bool
     */
    public function getSelectAll() : bool
    {
        return $this->selectAll;
    }
    /**
     * Whether to show select all option in toolbar
     *
     * @param bool $selectAll
     *
     * @return self
     */
    public function setSelectAll(bool $selectAll) : self
    {
        $this->initialized['selectAll'] = true;
        $this->selectAll = $selectAll;
        return $this;
    }
}