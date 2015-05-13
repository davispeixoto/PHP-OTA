<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleModifyRQCoreType
 *
 * The VehicleModifyRQCoreType complex type identifies the data that is common in a
 * request to modify an existing vehicle reservation.
 * XSD Type: VehicleModifyRQCoreType
 */
class VehicleModifyRQCoreType
{

    /**
     * @property string $status
     */
    private $status = null;

    /**
     * Used to specify the action that should be taken on the customers pending
     * reservation.
     *
     * @property string $transactionType
     */
    private $transactionType = null;

    /**
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Indicates the preferred Vendor Company for car rental. If a company name is
     * supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors. The name of the company is provided
     * in this element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     */
    private $vendorPref = null;

    /**
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     */
    private $vehPref = null;

    /**
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\DriverTypeAType[]
     * $driverType
     */
    private $driverType = null;

    /**
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateQualifierAType
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on restrictions that may be associated with this rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateRestrictionAType
     * $rateRestriction
     */
    private $rateRestriction = null;

    /**
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * Information on the charges associated with this vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharge
     */
    private $vehicleCharge = null;

    /**
     * Total cost for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\TotalChargeAType
     * $totalCharge
     */
    private $totalCharge = null;

    /**
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateDistanceAType[]
     * $rateDistance
     */
    private $rateDistance = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
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
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as transactionType
     *
     * Used to specify the action that should be taken on the customers pending
     * reservation.
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Sets a new transactionType
     *
     * Used to specify the action that should be taken on the customers pending
     * reservation.
     *
     * @param string $transactionType
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically
     * referred to as a reservation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

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
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Gets as vendorPref
     *
     * Indicates the preferred Vendor Company for car rental. If a company name is
     * supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors. The name of the company is provided
     * in this element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Indicates the preferred Vendor Company for car rental. If a company name is
     * supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors. The name of the company is provided
     * in this element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     * @return self
     */
    public function setVendorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Gets as vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehiclePrefType
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     * @return self
     */
    public function setVehPref(\Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref)
    {
        $this->vehPref = $vehPref;

        return $this;
    }

    /**
     * Adds as driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\DriverTypeAType
     * $driverType
     */
    public function addToDriverType(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\DriverTypeAType $driverType
    ) {
        $this->driverType[] = $driverType;

        return $this;
    }

    /**
     * isset driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDriverType($index)
    {
        return isset($this->driverType[$index]);
    }

    /**
     * unset driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDriverType($index)
    {
        unset($this->driverType[$index]);
    }

    /**
     * Gets as driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\DriverTypeAType[]
     * $driverType
     * @return self
     */
    public function setDriverType(array $driverType)
    {
        $this->driverType = $driverType;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateQualifierAType
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
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateQualifierAType
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as rateRestriction
     *
     * Information on restrictions that may be associated with this rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateRestrictionAType
     */
    public function getRateRestriction()
    {
        return $this->rateRestriction;
    }

    /**
     * Sets a new rateRestriction
     *
     * Information on restrictions that may be associated with this rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateRestrictionAType
     * $rateRestriction
     * @return self
     */
    public function setRateRestriction(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateRestrictionAType $rateRestriction
    ) {
        $this->rateRestriction = $rateRestriction;

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
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
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
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
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
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;

        return $this;
    }

    /**
     * Adds as vehicleCharge
     *
     * Information on the charges associated with this vehicle.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharge(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharge[] = $vehicleCharge;

        return $this;
    }

    /**
     * isset vehicleCharge
     *
     * Information on the charges associated with this vehicle.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleCharge($index)
    {
        return isset($this->vehicleCharge[$index]);
    }

    /**
     * unset vehicleCharge
     *
     * Information on the charges associated with this vehicle.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleCharge($index)
    {
        unset($this->vehicleCharge[$index]);
    }

    /**
     * Gets as vehicleCharge
     *
     * Information on the charges associated with this vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getVehicleCharge()
    {
        return $this->vehicleCharge;
    }

    /**
     * Sets a new vehicleCharge
     *
     * Information on the charges associated with this vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharge
     * @return self
     */
    public function setVehicleCharge(array $vehicleCharge)
    {
        $this->vehicleCharge = $vehicleCharge;

        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * Total cost for this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * Total cost for this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\TotalChargeAType
     * $totalCharge
     * @return self
     */
    public function setTotalCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\TotalChargeAType $totalCharge
    ) {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Adds as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateDistanceAType
     * $rateDistance
     */
    public function addToRateDistance(
        \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateDistanceAType $rateDistance
    ) {
        $this->rateDistance[] = $rateDistance;

        return $this;
    }

    /**
     * isset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateDistance($index)
    {
        return isset($this->rateDistance[$index]);
    }

    /**
     * unset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateDistance($index)
    {
        unset($this->rateDistance[$index]);
    }

    /**
     * Gets as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateDistanceAType[]
     */
    public function getRateDistance()
    {
        return $this->rateDistance;
    }

    /**
     * Sets a new rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType\RateDistanceAType[]
     * $rateDistance
     * @return self
     */
    public function setRateDistance(array $rateDistance)
    {
        $this->rateDistance = $rateDistance;

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

