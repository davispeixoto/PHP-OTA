<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomProfileType
 *
 * Describes the occupancy of a room or cabin.
 * XSD Type: RoomProfileType
 */
class RoomProfileType extends RoomStayCandidateType
{

    /**
     * A full description of the room/apartment etc.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @property integer $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Maximum number of adults allowed in a unit of accommodation.
     *
     * @property integer $maxAdults
     */
    private $maxAdults = null;

    /**
     * The number of cots/cribs available in a room/apartment etc.
     *
     * @property integer $cotQuantity
     */
    private $cotQuantity = null;

    /**
     * Indicates whether a free child is permitted in a room/apartment etc.
     *
     * @property boolean $freeChildFlag
     */
    private $freeChildFlag = null;

    /**
     * Details of individual passengers in a room; may be used instead of GuestCounts.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomProfileType\PassengerRPHsAType
     * $passengerRPHs
     */
    private $passengerRPHs = null;

    /**
     * Gets as description
     *
     * A full description of the room/apartment etc.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A full description of the room/apartment etc.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as minOccupancy
     *
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @return integer
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * Minimum number of persons allowed in a unit of accommodation or place.
     *
     * @param integer $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;

        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Maximum number of persons allowed in a unit of accommodation or place.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as maxAdults
     *
     * Maximum number of adults allowed in a unit of accommodation.
     *
     * @return integer
     */
    public function getMaxAdults()
    {
        return $this->maxAdults;
    }

    /**
     * Sets a new maxAdults
     *
     * Maximum number of adults allowed in a unit of accommodation.
     *
     * @param integer $maxAdults
     * @return self
     */
    public function setMaxAdults($maxAdults)
    {
        $this->maxAdults = $maxAdults;

        return $this;
    }

    /**
     * Gets as cotQuantity
     *
     * The number of cots/cribs available in a room/apartment etc.
     *
     * @return integer
     */
    public function getCotQuantity()
    {
        return $this->cotQuantity;
    }

    /**
     * Sets a new cotQuantity
     *
     * The number of cots/cribs available in a room/apartment etc.
     *
     * @param integer $cotQuantity
     * @return self
     */
    public function setCotQuantity($cotQuantity)
    {
        $this->cotQuantity = $cotQuantity;

        return $this;
    }

    /**
     * Gets as freeChildFlag
     *
     * Indicates whether a free child is permitted in a room/apartment etc.
     *
     * @return boolean
     */
    public function getFreeChildFlag()
    {
        return $this->freeChildFlag;
    }

    /**
     * Sets a new freeChildFlag
     *
     * Indicates whether a free child is permitted in a room/apartment etc.
     *
     * @param boolean $freeChildFlag
     * @return self
     */
    public function setFreeChildFlag($freeChildFlag)
    {
        $this->freeChildFlag = $freeChildFlag;

        return $this;
    }

    /**
     * Gets as passengerRPHs
     *
     * Details of individual passengers in a room; may be used instead of GuestCounts.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomProfileType\PassengerRPHsAType
     */
    public function getPassengerRPHs()
    {
        return $this->passengerRPHs;
    }

    /**
     * Sets a new passengerRPHs
     *
     * Details of individual passengers in a room; may be used instead of GuestCounts.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomProfileType\PassengerRPHsAType
     * $passengerRPHs
     * @return self
     */
    public function setPassengerRPHs(\Davispeixoto\OpenTravelAlliance\RoomProfileType\PassengerRPHsAType $passengerRPHs)
    {
        $this->passengerRPHs = $passengerRPHs;

        return $this;
    }


}

