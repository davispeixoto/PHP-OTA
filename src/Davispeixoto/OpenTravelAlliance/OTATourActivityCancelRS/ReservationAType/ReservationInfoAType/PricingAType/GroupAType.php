<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PricingAType;

/**
 * Class representing GroupAType
 */
class GroupAType
{

    /**
     * A group code that participant(s) are associated with.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * A group name that participant(s) are associated with.
     *
     * @property string $groupName
     */
    private $groupName = null;

    /**
     * The minimum quantity of participants in a group.
     *
     * @property integer $minGroupSize
     */
    private $minGroupSize = null;

    /**
     * The maximum quantity of participants in a group.
     *
     * @property integer $maxGroupSize
     */
    private $maxGroupSize = null;

    /**
     * The actual quantity of participants in a group.
     *
     * @property integer $knownGroupSize
     */
    private $knownGroupSize = null;

    /**
     * Pricing for the specified group information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     */
    private $price = null;

    /**
     * Gets as groupCode
     *
     * A group code that participant(s) are associated with.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * A group code that participant(s) are associated with.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as groupName
     *
     * A group name that participant(s) are associated with.
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets a new groupName
     *
     * A group name that participant(s) are associated with.
     *
     * @param string $groupName
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Gets as minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMinGroupSize()
    {
        return $this->minGroupSize;
    }

    /**
     * Sets a new minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @param integer $minGroupSize
     * @return self
     */
    public function setMinGroupSize($minGroupSize)
    {
        $this->minGroupSize = $minGroupSize;

        return $this;
    }

    /**
     * Gets as maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMaxGroupSize()
    {
        return $this->maxGroupSize;
    }

    /**
     * Sets a new maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @param integer $maxGroupSize
     * @return self
     */
    public function setMaxGroupSize($maxGroupSize)
    {
        $this->maxGroupSize = $maxGroupSize;

        return $this;
    }

    /**
     * Gets as knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @return integer
     */
    public function getKnownGroupSize()
    {
        return $this->knownGroupSize;
    }

    /**
     * Sets a new knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @param integer $knownGroupSize
     * @return self
     */
    public function setKnownGroupSize($knownGroupSize)
    {
        $this->knownGroupSize = $knownGroupSize;

        return $this;
    }

    /**
     * Gets as price
     *
     * Pricing for the specified group information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Pricing for the specified group information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price
     * @return self
     */
    public function setPrice(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $price)
    {
        $this->price = $price;

        return $this;
    }


}

