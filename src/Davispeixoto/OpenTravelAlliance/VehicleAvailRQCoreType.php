<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailRQCoreType
 *
 * Common information in a request for vehicle availability and rates.
 * XSD Type: VehicleAvailRQCoreType
 */
class VehicleAvailRQCoreType
{

    /**
     * The status of the vehicle availability and/or rates are being requested for,
     * e.g. available and waitlist.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * To specify from which source the information being requested should be obtained,
     * e.g., vendor, GDS system, etc.
     *
     * @property string $targetSource
     */
    private $targetSource = null;

    /**
     * Core information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Vendor preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType
     * $vendorPrefs
     */
    private $vendorPrefs = null;

    /**
     * Vehicle preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     * $vehPrefs
     */
    private $vehPrefs = null;

    /**
     * Driver category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\DriverTypeAType[]
     * $driverType
     */
    private $driverType = null;

    /**
     * Rate qualifiers and promotions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateQualifierAType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Minimum and maximum rate range.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateRangeAType
     * $rateRange
     */
    private $rateRange = null;

    /**
     * Special equipment preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * The status of the vehicle availability and/or rates are being requested for,
     * e.g. available and waitlist.
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
     * The status of the vehicle availability and/or rates are being requested for,
     * e.g. available and waitlist.
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
     * Gets as targetSource
     *
     * To specify from which source the information being requested should be obtained,
     * e.g., vendor, GDS system, etc.
     *
     * @return string
     */
    public function getTargetSource()
    {
        return $this->targetSource;
    }

    /**
     * Sets a new targetSource
     *
     * To specify from which source the information being requested should be obtained,
     * e.g., vendor, GDS system, etc.
     *
     * @param string $targetSource
     * @return self
     */
    public function setTargetSource($targetSource)
    {
        $this->targetSource = $targetSource;

        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Core information.
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
     * Core information.
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
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }

    /**
     * Gets as vendorPrefs
     *
     * Vendor preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType
     */
    public function getVendorPrefs()
    {
        return $this->vendorPrefs;
    }

    /**
     * Sets a new vendorPrefs
     *
     * Vendor preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType
     * $vendorPrefs
     * @return self
     */
    public function setVendorPrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs
    ) {
        $this->vendorPrefs = $vendorPrefs;

        return $this;
    }

    /**
     * Adds as vehPref
     *
     * Vehicle preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType
     * $vehPref
     */
    public function addToVehPrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
    ) {
        $this->vehPrefs[] = $vehPref;

        return $this;
    }

    /**
     * isset vehPrefs
     *
     * Vehicle preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehPrefs($index)
    {
        return isset($this->vehPrefs[$index]);
    }

    /**
     * unset vehPrefs
     *
     * Vehicle preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehPrefs($index)
    {
        unset($this->vehPrefs[$index]);
    }

    /**
     * Gets as vehPrefs
     *
     * Vehicle preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPrefs()
    {
        return $this->vehPrefs;
    }

    /**
     * Sets a new vehPrefs
     *
     * Vehicle preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     * $vehPrefs
     * @return self
     */
    public function setVehPrefs(array $vehPrefs)
    {
        $this->vehPrefs = $vehPrefs;

        return $this;
    }

    /**
     * Adds as driverType
     *
     * Driver category.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\DriverTypeAType
     * $driverType
     */
    public function addToDriverType(\Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\DriverTypeAType $driverType)
    {
        $this->driverType[] = $driverType;

        return $this;
    }

    /**
     * isset driverType
     *
     * Driver category.
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
     * Driver category.
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
     * Driver category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Driver category.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\DriverTypeAType[]
     * $driverType
     * @return self
     */
    public function setDriverType(array $driverType)
    {
        $this->driverType = $driverType;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateQualifierAType
     * $rateQualifier
     */
    public function addToRateQualifier(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateQualifierAType[]
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as rateRange
     *
     * Minimum and maximum rate range.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateRangeAType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Minimum and maximum rate range.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateRangeAType
     * $rateRange
     * @return self
     */
    public function setRateRange(\Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\RateRangeAType $rateRange)
    {
        $this->rateRange = $rateRange;

        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Special equipment preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPrefs(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPrefs[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPrefs
     *
     * Special equipment preferences.
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
     * Special equipment preferences.
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
     * Special equipment preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Special equipment preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;

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

