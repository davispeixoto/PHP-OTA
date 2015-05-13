<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CabinClassQueryType
 *
 * Search criteria information for one or more cabin classes.
 * XSD Type: CabinClassQueryType
 */
class CabinClassQueryType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Name that a particular airline/ CRS may give to the cabin class.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Select "include" to include the specified cabin type in the search results, or
     * "exclude" to exclude it from search results.
     *
     * @property string $includeExclude
     */
    private $includeExclude = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as name
     *
     * Name that a particular airline/ CRS may give to the cabin class.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name that a particular airline/ CRS may give to the cabin class.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as includeExclude
     *
     * Select "include" to include the specified cabin type in the search results, or
     * "exclude" to exclude it from search results.
     *
     * @return string
     */
    public function getIncludeExclude()
    {
        return $this->includeExclude;
    }

    /**
     * Sets a new includeExclude
     *
     * Select "include" to include the specified cabin type in the search results, or
     * "exclude" to exclude it from search results.
     *
     * @param string $includeExclude
     * @return self
     */
    public function setIncludeExclude($includeExclude)
    {
        $this->includeExclude = $includeExclude;

        return $this;
    }


}

