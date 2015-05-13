<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType;

/**
 * Class representing AmenityAType
 */
class AmenityAType
{

    /**
     * A unique ID for an amenity.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * A code for an amenity.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an amenity.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * If true, this amenity should be included with a tee time rate plan.
     *
     * @property boolean $includedInTeeTimePriceInd
     */
    private $includedInTeeTimePriceInd = null;

    /**
     * Gets as iD
     *
     * A unique ID for an amenity.
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
     * A unique ID for an amenity.
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
     * Gets as code
     *
     * A code for an amenity.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code for an amenity.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an amenity.
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
     * The name of an amenity.
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
     * Gets as includedInTeeTimePriceInd
     *
     * If true, this amenity should be included with a tee time rate plan.
     *
     * @return boolean
     */
    public function getIncludedInTeeTimePriceInd()
    {
        return $this->includedInTeeTimePriceInd;
    }

    /**
     * Sets a new includedInTeeTimePriceInd
     *
     * If true, this amenity should be included with a tee time rate plan.
     *
     * @param boolean $includedInTeeTimePriceInd
     * @return self
     */
    public function setIncludedInTeeTimePriceInd($includedInTeeTimePriceInd)
    {
        $this->includedInTeeTimePriceInd = $includedInTeeTimePriceInd;

        return $this;
    }


}

