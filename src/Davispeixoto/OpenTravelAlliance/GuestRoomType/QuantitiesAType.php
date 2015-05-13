<?php

namespace Davispeixoto\OpenTravelAlliance\GuestRoomType;

/**
 * Class representing QuantitiesAType
 */
class QuantitiesAType
{

    /**
     * Maximum number of rollaway beds allowed in a room type.
     *
     * @property integer $maxRollaways
     */
    private $maxRollaways = null;

    /**
     * Indicates the usual number of beds for this room type.
     *
     * @property integer $standardNumBeds
     */
    private $standardNumBeds = null;

    /**
     * Maximum number of additional guests that this room type can accommodate.
     *
     * @property integer $maximumAdditionalGuests
     */
    private $maximumAdditionalGuests = null;

    /**
     * Indicates the minimum number of guests for which a room charge will be applied,
     * even if there are fewer guests in the room.
     *
     * @property integer $minBillableGuests
     */
    private $minBillableGuests = null;

    /**
     * Maximum number of cribs allowed in a room type.
     *
     * @property integer $maxCribs
     */
    private $maxCribs = null;

    /**
     * Gets as maxRollaways
     *
     * Maximum number of rollaway beds allowed in a room type.
     *
     * @return integer
     */
    public function getMaxRollaways()
    {
        return $this->maxRollaways;
    }

    /**
     * Sets a new maxRollaways
     *
     * Maximum number of rollaway beds allowed in a room type.
     *
     * @param integer $maxRollaways
     * @return self
     */
    public function setMaxRollaways($maxRollaways)
    {
        $this->maxRollaways = $maxRollaways;

        return $this;
    }

    /**
     * Gets as standardNumBeds
     *
     * Indicates the usual number of beds for this room type.
     *
     * @return integer
     */
    public function getStandardNumBeds()
    {
        return $this->standardNumBeds;
    }

    /**
     * Sets a new standardNumBeds
     *
     * Indicates the usual number of beds for this room type.
     *
     * @param integer $standardNumBeds
     * @return self
     */
    public function setStandardNumBeds($standardNumBeds)
    {
        $this->standardNumBeds = $standardNumBeds;

        return $this;
    }

    /**
     * Gets as maximumAdditionalGuests
     *
     * Maximum number of additional guests that this room type can accommodate.
     *
     * @return integer
     */
    public function getMaximumAdditionalGuests()
    {
        return $this->maximumAdditionalGuests;
    }

    /**
     * Sets a new maximumAdditionalGuests
     *
     * Maximum number of additional guests that this room type can accommodate.
     *
     * @param integer $maximumAdditionalGuests
     * @return self
     */
    public function setMaximumAdditionalGuests($maximumAdditionalGuests)
    {
        $this->maximumAdditionalGuests = $maximumAdditionalGuests;

        return $this;
    }

    /**
     * Gets as minBillableGuests
     *
     * Indicates the minimum number of guests for which a room charge will be applied,
     * even if there are fewer guests in the room.
     *
     * @return integer
     */
    public function getMinBillableGuests()
    {
        return $this->minBillableGuests;
    }

    /**
     * Sets a new minBillableGuests
     *
     * Indicates the minimum number of guests for which a room charge will be applied,
     * even if there are fewer guests in the room.
     *
     * @param integer $minBillableGuests
     * @return self
     */
    public function setMinBillableGuests($minBillableGuests)
    {
        $this->minBillableGuests = $minBillableGuests;

        return $this;
    }

    /**
     * Gets as maxCribs
     *
     * Maximum number of cribs allowed in a room type.
     *
     * @return integer
     */
    public function getMaxCribs()
    {
        return $this->maxCribs;
    }

    /**
     * Sets a new maxCribs
     *
     * Maximum number of cribs allowed in a room type.
     *
     * @param integer $maxCribs
     * @return self
     */
    public function setMaxCribs($maxCribs)
    {
        $this->maxCribs = $maxCribs;

        return $this;
    }


}

