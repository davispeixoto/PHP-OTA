<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SeatZoneQueryType
 *
 * Query criteria related to a zone of seating.
 * XSD Type: SeatZoneQueryType
 */
class SeatZoneQueryType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The unique seat zone ID.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The name of the seat zone.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * If true, return all seats in the seat zone, with and without availability.
     *
     * @property boolean $allSeatsInd
     */
    private $allSeatsInd = null;

    /**
     * If true, return only seats with availability in the requested seat zone.
     *
     * @property boolean $availSeatsOnlyInd
     */
    private $availSeatsOnlyInd = null;

    /**
     * Select "include" to include the specified seat zone in the search results, or
     * "exclude" to exclude it from search results.
     *
     * @property string $includeExclude
     */
    private $includeExclude = null;

    /**
     * A type of seat in the seat zone being requested, e.g. premium, non-premium and
     * seats with features.
     *
     * @property string $type
     */
    private $type = null;

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
     * Gets as iD
     *
     * The unique seat zone ID.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The unique seat zone ID.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the seat zone.
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
     * The name of the seat zone.
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
     * Gets as allSeatsInd
     *
     * If true, return all seats in the seat zone, with and without availability.
     *
     * @return boolean
     */
    public function getAllSeatsInd()
    {
        return $this->allSeatsInd;
    }

    /**
     * Sets a new allSeatsInd
     *
     * If true, return all seats in the seat zone, with and without availability.
     *
     * @param boolean $allSeatsInd
     * @return self
     */
    public function setAllSeatsInd($allSeatsInd)
    {
        $this->allSeatsInd = $allSeatsInd;

        return $this;
    }

    /**
     * Gets as availSeatsOnlyInd
     *
     * If true, return only seats with availability in the requested seat zone.
     *
     * @return boolean
     */
    public function getAvailSeatsOnlyInd()
    {
        return $this->availSeatsOnlyInd;
    }

    /**
     * Sets a new availSeatsOnlyInd
     *
     * If true, return only seats with availability in the requested seat zone.
     *
     * @param boolean $availSeatsOnlyInd
     * @return self
     */
    public function setAvailSeatsOnlyInd($availSeatsOnlyInd)
    {
        $this->availSeatsOnlyInd = $availSeatsOnlyInd;

        return $this;
    }

    /**
     * Gets as includeExclude
     *
     * Select "include" to include the specified seat zone in the search results, or
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
     * Select "include" to include the specified seat zone in the search results, or
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

    /**
     * Gets as type
     *
     * A type of seat in the seat zone being requested, e.g. premium, non-premium and
     * seats with features.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A type of seat in the seat zone being requested, e.g. premium, non-premium and
     * seats with features.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

