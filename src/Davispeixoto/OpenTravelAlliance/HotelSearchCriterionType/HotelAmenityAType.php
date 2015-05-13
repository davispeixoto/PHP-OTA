<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing HotelAmenityAType
 */
class HotelAmenityAType
{

    /**
     * An amenity available to guests that applies to the property as a whole (hotel
     * level) versus an individual guest or meeting room type. Refer to OpenTravel Code
     * List Hotel Amenity Code (HAC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * When true, there is no charge for the amenity. When false, there is a fee
     * associated with the amenity.
     *
     * @property boolean $complimentaryInd
     */
    private $complimentaryInd = null;

    /**
     * A method to associate amenities into logical groups by specifying AND/ OR
     * conditions.
     *
     * @property integer $equivalenceGroup
     */
    private $equivalenceGroup = null;

    /**
     * Gets as code
     *
     * An amenity available to guests that applies to the property as a whole (hotel
     * level) versus an individual guest or meeting room type. Refer to OpenTravel Code
     * List Hotel Amenity Code (HAC).
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
     * An amenity available to guests that applies to the property as a whole (hotel
     * level) versus an individual guest or meeting room type. Refer to OpenTravel Code
     * List Hotel Amenity Code (HAC).
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
     * Gets as complimentaryInd
     *
     * When true, there is no charge for the amenity. When false, there is a fee
     * associated with the amenity.
     *
     * @return boolean
     */
    public function getComplimentaryInd()
    {
        return $this->complimentaryInd;
    }

    /**
     * Sets a new complimentaryInd
     *
     * When true, there is no charge for the amenity. When false, there is a fee
     * associated with the amenity.
     *
     * @param boolean $complimentaryInd
     * @return self
     */
    public function setComplimentaryInd($complimentaryInd)
    {
        $this->complimentaryInd = $complimentaryInd;

        return $this;
    }

    /**
     * Gets as equivalenceGroup
     *
     * A method to associate amenities into logical groups by specifying AND/ OR
     * conditions.
     *
     * @return integer
     */
    public function getEquivalenceGroup()
    {
        return $this->equivalenceGroup;
    }

    /**
     * Sets a new equivalenceGroup
     *
     * A method to associate amenities into logical groups by specifying AND/ OR
     * conditions.
     *
     * @param integer $equivalenceGroup
     * @return self
     */
    public function setEquivalenceGroup($equivalenceGroup)
    {
        $this->equivalenceGroup = $equivalenceGroup;

        return $this;
    }


}

