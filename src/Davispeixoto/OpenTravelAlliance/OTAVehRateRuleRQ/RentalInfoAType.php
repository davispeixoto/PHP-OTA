<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ;

/**
 * Class representing RentalInfoAType
 */
class RentalInfoAType
{

    /**
     * Indicates the status of the rate.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * A preference for one specific vehicle type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehicleInfo
     */
    private $vehicleInfo = null;

    /**
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * Used to send frequent renter membership information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\CustLoyaltyAType[]
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\RateQualifierAType
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     */
    private $offLocService = null;

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Tour information for which rate rules are requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * The identification of the customer for whom the rate rule is being requested.
     * This is different from the customer loyalty number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID
     */
    private $customerID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * Indicates the status of the rate.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Indicates the status of the rate.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;

        return $this;
    }

    /**
     * Gets as vehicleInfo
     *
     * A preference for one specific vehicle type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehiclePrefType
     */
    public function getVehicleInfo()
    {
        return $this->vehicleInfo;
    }

    /**
     * Sets a new vehicleInfo
     *
     * A preference for one specific vehicle type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehicleInfo
     * @return self
     */
    public function setVehicleInfo(\Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehicleInfo)
    {
        $this->vehicleInfo = $vehicleInfo;

        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPrefs(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPrefs[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipPrefs($index)
    {
        return isset($this->specialEquipPrefs[$index]);
    }

    /**
     * unset specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipPrefs($index)
    {
        unset($this->specialEquipPrefs[$index]);
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;

        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Used to send frequent renter membership information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\CustLoyaltyAType
     * $custLoyalty
     */
    public function addToCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty[] = $custLoyalty;

        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Used to send frequent renter membership information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Used to send frequent renter membership information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Used to send frequent renter membership information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Used to send frequent renter membership information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\CustLoyaltyAType[]
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\RateQualifierAType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\RateQualifierAType
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRQ\RentalInfoAType\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OffLocationServiceType
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on requested off-airport location services, for example, vehicle
     * delivery, customer pickup.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService
     * @return self
     */
    public function setOffLocService(\Davispeixoto\OpenTravelAlliance\OffLocationServiceType $offLocService)
    {
        $this->offLocService = $offLocService;

        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType
     * $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(\Davispeixoto\OpenTravelAlliance\VehicleArrivalDetailsType $arrivalDetails)
    {
        $this->arrivalDetails = $arrivalDetails;

        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Tour information for which rate rules are requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Tour information for which rate rules are requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(\Davispeixoto\OpenTravelAlliance\VehicleTourInfoType $tourInfo)
    {
        $this->tourInfo = $tourInfo;

        return $this;
    }

    /**
     * Gets as customerID
     *
     * The identification of the customer for whom the rate rule is being requested.
     * This is different from the customer loyalty number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * The identification of the customer for whom the rate rule is being requested.
     * This is different from the customer loyalty number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID
     * @return self
     */
    public function setCustomerID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

