<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRSCoreType;

/**
 * Class representing VehVendorAvailsAType
 */
class VehVendorAvailsAType
{

    /**
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     * $vehVendorAvail
     */
    private $vehVendorAvail = null;

    /**
     * Adds as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType
     * $vehVendorAvail
     */
    public function addToVehVendorAvail(\Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvail[] = $vehVendorAvail;

        return $this;
    }

    /**
     * isset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehVendorAvail($index)
    {
        return isset($this->vehVendorAvail[$index]);
    }

    /**
     * unset vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehVendorAvail($index)
    {
        unset($this->vehVendorAvail[$index]);
    }

    /**
     * Gets as vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvail()
    {
        return $this->vehVendorAvail;
    }

    /**
     * Sets a new vehVendorAvail
     *
     * Information on the availability of rental vehicles for one specific vendor.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     * $vehVendorAvail
     * @return self
     */
    public function setVehVendorAvail(array $vehVendorAvail)
    {
        $this->vehVendorAvail = $vehVendorAvail;

        return $this;
    }


}

