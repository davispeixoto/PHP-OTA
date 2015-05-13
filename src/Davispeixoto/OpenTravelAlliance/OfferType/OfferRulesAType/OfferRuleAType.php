<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType;

/**
 * Class representing OfferRuleAType
 */
class OfferRuleAType
{

    /**
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the offer.
     *
     * @property string $stayOverDate
     */
    private $stayOverDate = null;

    /**
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @property integer $minTotalOccupancy
     */
    private $minTotalOccupancy = null;

    /**
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @property integer $maxTotalOccupancy
     */
    private $maxTotalOccupancy = null;

    /**
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @property integer $maxContiguousBookings
     */
    private $maxContiguousBookings = null;

    /**
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @property \DateInterval $maxAdvancedBookingOffset
     */
    private $maxAdvancedBookingOffset = null;

    /**
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @property \DateInterval $minAdvancedBookingOffset
     */
    private $minAdvancedBookingOffset = null;

    /**
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[]
     * $dateRestriction
     */
    private $dateRestriction = null;

    /**
     * A collection of lengths of stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of Day Of Week restrictions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions
     */
    private $dOWRestrictions = null;

    /**
     * Provides parameters of occupancy limits.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[]
     * $occupancy
     */
    private $occupancy = null;

    /**
     * Collection of inventory.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     * $inventories
     */
    private $inventories = null;

    /**
     * Gets as stayOverDate
     *
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the offer.
     *
     * @return string
     */
    public function getStayOverDate()
    {
        return $this->stayOverDate;
    }

    /**
     * Sets a new stayOverDate
     *
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the offer.
     *
     * @param string $stayOverDate
     * @return self
     */
    public function setStayOverDate($stayOverDate)
    {
        $this->stayOverDate = $stayOverDate;

        return $this;
    }

    /**
     * Gets as minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @return integer
     */
    public function getMinTotalOccupancy()
    {
        return $this->minTotalOccupancy;
    }

    /**
     * Sets a new minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @param integer $minTotalOccupancy
     * @return self
     */
    public function setMinTotalOccupancy($minTotalOccupancy)
    {
        $this->minTotalOccupancy = $minTotalOccupancy;

        return $this;
    }

    /**
     * Gets as maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @return integer
     */
    public function getMaxTotalOccupancy()
    {
        return $this->maxTotalOccupancy;
    }

    /**
     * Sets a new maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @param integer $maxTotalOccupancy
     * @return self
     */
    public function setMaxTotalOccupancy($maxTotalOccupancy)
    {
        $this->maxTotalOccupancy = $maxTotalOccupancy;

        return $this;
    }

    /**
     * Gets as maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @return integer
     */
    public function getMaxContiguousBookings()
    {
        return $this->maxContiguousBookings;
    }

    /**
     * Sets a new maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a
     * reservation (often used with packages).
     *
     * @param integer $maxContiguousBookings
     * @return self
     */
    public function setMaxContiguousBookings($maxContiguousBookings)
    {
        $this->maxContiguousBookings = $maxContiguousBookings;

        return $this;
    }

    /**
     * Gets as maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @return \DateInterval
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->maxAdvancedBookingOffset;
    }

    /**
     * Sets a new maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @param \DateInterval $maxAdvancedBookingOffset
     * @return self
     */
    public function setMaxAdvancedBookingOffset(\DateInterval $maxAdvancedBookingOffset)
    {
        $this->maxAdvancedBookingOffset = $maxAdvancedBookingOffset;

        return $this;
    }

    /**
     * Gets as minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @return \DateInterval
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->minAdvancedBookingOffset;
    }

    /**
     * Sets a new minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @param \DateInterval $minAdvancedBookingOffset
     * @return self
     */
    public function setMinAdvancedBookingOffset(\DateInterval $minAdvancedBookingOffset)
    {
        $this->minAdvancedBookingOffset = $minAdvancedBookingOffset;

        return $this;
    }

    /**
     * Adds as dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType
     * $dateRestriction
     */
    public function addToDateRestriction(
        \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType $dateRestriction
    ) {
        $this->dateRestriction[] = $dateRestriction;

        return $this;
    }

    /**
     * isset dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDateRestriction($index)
    {
        return isset($this->dateRestriction[$index]);
    }

    /**
     * unset dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDateRestriction($index)
    {
        unset($this->dateRestriction[$index]);
    }

    /**
     * Gets as dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[]
     */
    public function getDateRestriction()
    {
        return $this->dateRestriction;
    }

    /**
     * Sets a new dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[]
     * $dateRestriction
     * @return self
     */
    public function setDateRestriction(array $dateRestriction)
    {
        $this->dateRestriction = $dateRestriction;

        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(\Davispeixoto\OpenTravelAlliance\LengthsOfStayType $lengthsOfStay)
    {
        $this->lengthsOfStay = $lengthsOfStay;

        return $this;
    }

    /**
     * Gets as dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType
     */
    public function getDOWRestrictions()
    {
        return $this->dOWRestrictions;
    }

    /**
     * Sets a new dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions
     * @return self
     */
    public function setDOWRestrictions(\Davispeixoto\OpenTravelAlliance\DOWRestrictionsType $dOWRestrictions)
    {
        $this->dOWRestrictions = $dOWRestrictions;

        return $this;
    }

    /**
     * Adds as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType
     * $occupancy
     */
    public function addToOccupancy(
        \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType $occupancy
    ) {
        $this->occupancy[] = $occupancy;

        return $this;
    }

    /**
     * isset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOccupancy($index)
    {
        return isset($this->occupancy[$index]);
    }

    /**
     * unset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOccupancy($index)
    {
        unset($this->occupancy[$index]);
    }

    /**
     * Gets as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[]
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[]
     * $occupancy
     * @return self
     */
    public function setOccupancy(array $occupancy)
    {
        $this->occupancy = $occupancy;

        return $this;
    }

    /**
     * Adds as inventory
     *
     * Collection of inventory.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType
     * $inventory
     */
    public function addToInventories(
        \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory
    ) {
        $this->inventories[] = $inventory;

        return $this;
    }

    /**
     * isset inventories
     *
     * Collection of inventory.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInventories($index)
    {
        return isset($this->inventories[$index]);
    }

    /**
     * unset inventories
     *
     * Collection of inventory.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInventories($index)
    {
        unset($this->inventories[$index]);
    }

    /**
     * Gets as inventories
     *
     * Collection of inventory.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * Collection of inventory.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
     * $inventories
     * @return self
     */
    public function setInventories(array $inventories)
    {
        $this->inventories = $inventories;

        return $this;
    }


}

