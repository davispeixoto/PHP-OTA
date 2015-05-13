<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType;

use Davispeixoto\OpenTravelAlliance\VehicleRentalRateType;

/**
 * Class representing RateAType
 */
class RateAType extends VehicleRentalRateType
{

    /**
     * A unique identifier for the rate.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Specifies the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * Identifies a pick up location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType[] $pickUpLocation
     */
    private $pickUpLocation = null;

    /**
     * Identifies a vehicle for which the rate applies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * A collection of rule identifiers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     * $ruleIDs
     */
    private $ruleIDs = null;

    /**
     * Provides the advance booking requirements for this rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\AdvanceBookingAType
     * $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Identifies the points of sale that are allowed or excluded from selling this
     * rate. By default all markets can sell this rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\PointOfSaleRestrictionAType
     * $pointOfSaleRestriction
     */
    private $pointOfSaleRestriction = null;

    /**
     * Gets as iD
     *
     * A unique identifier for the rate.
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
     * A unique identifier for the rate.
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
     * Gets as processingInfo
     *
     * Specifies the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * Specifies the action to be taken on this information and the effective and
     * discontinue dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

        return $this;
    }

    /**
     * Adds as pickUpLocation
     *
     * Identifies a pick up location.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation
     */
    public function addToPickUpLocation(\Davispeixoto\OpenTravelAlliance\LocationType $pickUpLocation)
    {
        $this->pickUpLocation[] = $pickUpLocation;

        return $this;
    }

    /**
     * isset pickUpLocation
     *
     * Identifies a pick up location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPickUpLocation($index)
    {
        return isset($this->pickUpLocation[$index]);
    }

    /**
     * unset pickUpLocation
     *
     * Identifies a pick up location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPickUpLocation($index)
    {
        unset($this->pickUpLocation[$index]);
    }

    /**
     * Gets as pickUpLocation
     *
     * Identifies a pick up location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType[]
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets a new pickUpLocation
     *
     * Identifies a pick up location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType[] $pickUpLocation
     * @return self
     */
    public function setPickUpLocation(array $pickUpLocation)
    {
        $this->pickUpLocation = $pickUpLocation;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Identifies a vehicle for which the rate applies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Identifies a vehicle for which the rate applies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\VehicleType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Adds as ruleID
     *
     * A collection of rule identifiers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType
     * $ruleID
     */
    public function addToRuleIDs(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType $ruleID
    ) {
        $this->ruleIDs[] = $ruleID;

        return $this;
    }

    /**
     * isset ruleIDs
     *
     * A collection of rule identifiers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRuleIDs($index)
    {
        return isset($this->ruleIDs[$index]);
    }

    /**
     * unset ruleIDs
     *
     * A collection of rule identifiers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRuleIDs($index)
    {
        unset($this->ruleIDs[$index]);
    }

    /**
     * Gets as ruleIDs
     *
     * A collection of rule identifiers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     */
    public function getRuleIDs()
    {
        return $this->ruleIDs;
    }

    /**
     * Sets a new ruleIDs
     *
     * A collection of rule identifiers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\RuleIDsAType\RuleIDAType[]
     * $ruleIDs
     * @return self
     */
    public function setRuleIDs(array $ruleIDs)
    {
        $this->ruleIDs = $ruleIDs;

        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Provides the advance booking requirements for this rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Provides the advance booking requirements for this rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\AdvanceBookingAType
     * $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\AdvanceBookingAType $advanceBooking
    ) {
        $this->advanceBooking = $advanceBooking;

        return $this;
    }

    /**
     * Gets as pointOfSaleRestriction
     *
     * Identifies the points of sale that are allowed or excluded from selling this
     * rate. By default all markets can sell this rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\PointOfSaleRestrictionAType
     */
    public function getPointOfSaleRestriction()
    {
        return $this->pointOfSaleRestriction;
    }

    /**
     * Sets a new pointOfSaleRestriction
     *
     * Identifies the points of sale that are allowed or excluded from selling this
     * rate. By default all markets can sell this rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\PointOfSaleRestrictionAType
     * $pointOfSaleRestriction
     * @return self
     */
    public function setPointOfSaleRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType\PointOfSaleRestrictionAType $pointOfSaleRestriction
    ) {
        $this->pointOfSaleRestriction = $pointOfSaleRestriction;

        return $this;
    }


}

