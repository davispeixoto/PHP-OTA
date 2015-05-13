<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleSegmentCoreType
 *
 * The VehicleSegmentCoreType complex type identifies the core, or common, data
 * that descibes the information assocated with a vehicle segment. Such information
 * is typically provided in a reservation.
 * XSD Type: VehicleSegmentCoreType
 */
class VehicleSegmentCoreType
{

    /**
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @property integer $indexNumber
     */
    private $indexNumber = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\ConfIDAType[]
     * $confID
     */
    private $confID = null;

    /**
     * Identifies the vendor associated with this information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this vehicle reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * The total cost of this reservation, the sum of the individual charges, optional
     * charges and associated fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\TotalChargeAType
     * $totalCharge
     */
    private $totalCharge = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @return integer
     */
    public function getIndexNumber()
    {
        return $this->indexNumber;
    }

    /**
     * Sets a new indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @param integer $indexNumber
     * @return self
     */
    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;

        return $this;
    }

    /**
     * Adds as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\ConfIDAType
     * $confID
     */
    public function addToConfID(\Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\ConfIDAType $confID)
    {
        $this->confID[] = $confID;

        return $this;
    }

    /**
     * isset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConfID($index)
    {
        return isset($this->confID[$index]);
    }

    /**
     * unset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConfID($index)
    {
        unset($this->confID[$index]);
    }

    /**
     * Gets as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\ConfIDAType[]
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can
     * also be used for reservation, contract and PNR IDs as well.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\ConfIDAType[]
     * $confID
     * @return self
     */
    public function setConfID(array $confID)
    {
        $this->confID = $confID;

        return $this;
    }

    /**
     * Gets as vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;

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
     * Gets as vehicle
     *
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
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
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
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
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(\Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate = $rentalRate;

        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquips(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;

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
     * Gets as totalCharge
     *
     * The total cost of this reservation, the sum of the individual charges, optional
     * charges and associated fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The total cost of this reservation, the sum of the individual charges, optional
     * charges and associated fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\TotalChargeAType
     * $totalCharge
     * @return self
     */
    public function setTotalCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleSegmentCoreType\TotalChargeAType $totalCharge
    ) {
        $this->totalCharge = $totalCharge;

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

