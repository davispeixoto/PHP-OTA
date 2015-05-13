<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleReservationRQCoreType
 *
 * The VehicleReservationRQCoreType complex type identifies the core, or common,
 * information that is typically included when requesting the reservation of
 * avehicle.
 * XSD Type: VehicleReservationRQCoreType
 */
class VehicleReservationRQCoreType
{

    /**
     * Used to specify the status of the reservation with either one of the
     * enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as
     * an IATA status code.
     *
     * @property string $status
     */
    private $status = null;

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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\DriverTypeAType[]
     * $driverType
     */
    private $driverType = null;

    /**
     * Indicates the type of rates to be booked, along with any discount number or
     * promotional codes that may affect the rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateQualifierType $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * A collection of fees associated with this vehicle reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharges
     */
    private $vehicleCharges = null;

    /**
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType
     * $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * Information on the distance that a reserved vehicle may be driven as part of the
     * standard rental charge. Such distance may be unlimited, or a quantity of miles
     * or kilometers for a certain period of time. This may be repeated for situations
     * such as an 8 day rental that has 500 miles per week and 100 miles per additional
     * day.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\RateDistanceAType[]
     * $rateDistance
     */
    private $rateDistance = null;

    /**
     * Total cost for this reservation as returned from an availability search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\TotalChargeAType
     * $totalCharge
     */
    private $totalCharge = null;

    /**
     * Information to specify the queue on which the reservation should be placed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\QueueAType $queue
     */
    private $queue = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as
     * an IATA status code.
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
     * Used to specify the status of the reservation with either one of the
     * enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as
     * an IATA status code.
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\DriverTypeAType
     * $driverType
     */
    public function addToDriverType(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\DriverTypeAType $driverType
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\DriverTypeAType[]
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\DriverTypeAType[]
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
     * Indicates the type of rates to be booked, along with any discount number or
     * promotional codes that may affect the rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateQualifierType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates to be booked, along with any discount number or
     * promotional codes that may affect the rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateQualifierType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Davispeixoto\OpenTravelAlliance\RateQualifierType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Adds as vehicleCharge
     *
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharges(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharges[] = $vehicleCharge;

        return $this;
    }

    /**
     * isset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleCharges($index)
    {
        return isset($this->vehicleCharges[$index]);
    }

    /**
     * unset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleCharges($index)
    {
        unset($this->vehicleCharges[$index]);
    }

    /**
     * Gets as vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getVehicleCharges()
    {
        return $this->vehicleCharges;
    }

    /**
     * Sets a new vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may
     * include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     * $vehicleCharges
     * @return self
     */
    public function setVehicleCharges(array $vehicleCharges)
    {
        $this->vehicleCharges = $vehicleCharges;

        return $this;
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional
     * equipment, such as ski racks, child seats, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType
     * $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\SpecialEquipPrefsAType $specialEquipPrefs
    ) {
        $this->specialEquipPrefs = $specialEquipPrefs;

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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\RateDistanceAType
     * $rateDistance
     */
    public function addToRateDistance(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\RateDistanceAType $rateDistance
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\RateDistanceAType[]
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
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\RateDistanceAType[]
     * $rateDistance
     * @return self
     */
    public function setRateDistance(array $rateDistance)
    {
        $this->rateDistance = $rateDistance;

        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * Total cost for this reservation as returned from an availability search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * Total cost for this reservation as returned from an availability search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\TotalChargeAType
     * $totalCharge
     * @return self
     */
    public function setTotalCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\TotalChargeAType $totalCharge
    ) {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Gets as queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\QueueAType
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\QueueAType
     * $queue
     * @return self
     */
    public function setQueue(\Davispeixoto\OpenTravelAlliance\VehicleReservationRQCoreType\QueueAType $queue)
    {
        $this->queue = $queue;

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

