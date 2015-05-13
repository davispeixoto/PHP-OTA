<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgRoomInventoryType
 *
 * Describes a type of room/cabin/apartment etc.
 * XSD Type: PkgRoomInventoryType
 */
class PkgRoomInventoryType extends RoomStayCandidateType
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
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharges
     */
    private $supplementCharges = null;

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
     * Adds as charge
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToSupplementCharges(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->supplementCharges[] = $charge;

        return $this;
    }

    /**
     * isset supplementCharges
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplementCharges($index)
    {
        return isset($this->supplementCharges[$index]);
    }

    /**
     * unset supplementCharges
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplementCharges($index)
    {
        unset($this->supplementCharges[$index]);
    }

    /**
     * Gets as supplementCharges
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getSupplementCharges()
    {
        return $this->supplementCharges;
    }

    /**
     * Sets a new supplementCharges
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharges
     * @return self
     */
    public function setSupplementCharges(array $supplementCharges)
    {
        $this->supplementCharges = $supplementCharges;

        return $this;
    }


}

