<?php

namespace Lenra\App\Components\Lenra\Model;

class ViewDefinitionsFind
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
     * the collection where the query is applied
     *
     * @var string
     */
    protected $coll;
    /**
     * Mongo data query
     *
     * @var array<string, mixed>
     */
    protected $query;
    /**
     * Mongo data query projection
     *
     * @var array<string, mixed>
     */
    protected $projection;
    /**
     * the collection where the query is applied
     *
     * @return string
     */
    public function getColl() : string
    {
        return $this->coll;
    }
    /**
     * the collection where the query is applied
     *
     * @param string $coll
     *
     * @return self
     */
    public function setColl(string $coll) : self
    {
        $this->initialized['coll'] = true;
        $this->coll = $coll;
        return $this;
    }
    /**
     * Mongo data query
     *
     * @return array<string, mixed>
     */
    public function getQuery() : iterable
    {
        return $this->query;
    }
    /**
     * Mongo data query
     *
     * @param array<string, mixed> $query
     *
     * @return self
     */
    public function setQuery(iterable $query) : self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
    /**
     * Mongo data query projection
     *
     * @return array<string, mixed>
     */
    public function getProjection() : iterable
    {
        return $this->projection;
    }
    /**
     * Mongo data query projection
     *
     * @param array<string, mixed> $projection
     *
     * @return self
     */
    public function setProjection(iterable $projection) : self
    {
        $this->initialized['projection'] = true;
        $this->projection = $projection;
        return $this;
    }
}