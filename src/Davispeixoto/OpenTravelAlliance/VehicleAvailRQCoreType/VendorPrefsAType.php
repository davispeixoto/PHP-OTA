<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType;

/**
 * Class representing VendorPrefsAType
 */
class VendorPrefsAType
{

    /**
     * To specify vendors with a certain level of participation in a system. Refer to
     * OpenTravel Code List Participation Level (PLC).
     *
     * @property string $participationLevelCode
     */
    private $participationLevelCode = null;

    /**
     * The type of location being requested. Refer to OpenTravel Code List Vehicle
     * Where at Facility (VWF).
     *
     * @property string $locationCategory
     */
    private $locationCategory = null;

    /**
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType\VendorPrefAType[]
     * $vendorPref
     */
    private $vendorPref = null;

    /**
     * Gets as participationLevelCode
     *
     * To specify vendors with a certain level of participation in a system. Refer to
     * OpenTravel Code List Participation Level (PLC).
     *
     * @return string
     */
    public function getParticipationLevelCode()
    {
        return $this->participationLevelCode;
    }

    /**
     * Sets a new participationLevelCode
     *
     * To specify vendors with a certain level of participation in a system. Refer to
     * OpenTravel Code List Participation Level (PLC).
     *
     * @param string $participationLevelCode
     * @return self
     */
    public function setParticipationLevelCode($participationLevelCode)
    {
        $this->participationLevelCode = $participationLevelCode;

        return $this;
    }

    /**
     * Gets as locationCategory
     *
     * The type of location being requested. Refer to OpenTravel Code List Vehicle
     * Where at Facility (VWF).
     *
     * @return string
     */
    public function getLocationCategory()
    {
        return $this->locationCategory;
    }

    /**
     * Sets a new locationCategory
     *
     * The type of location being requested. Refer to OpenTravel Code List Vehicle
     * Where at Facility (VWF).
     *
     * @param string $locationCategory
     * @return self
     */
    public function setLocationCategory($locationCategory)
    {
        $this->locationCategory = $locationCategory;

        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType\VendorPrefAType
     * $vendorPref
     */
    public function addToVendorPref(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType\VendorPrefAType $vendorPref
    ) {
        $this->vendorPref[] = $vendorPref;

        return $this;
    }

    /**
     * isset vendorPref
     *
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Indicates the preferred Vendor Company for the vehicle rental. If a company name
     * is supplied, the rates will be supplied for the specific Vendor Company. The
     * company name is unique amongst the vendors.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType\VendorPrefAType[]
     * $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }


}

