<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleVendorAvailabilityType
 *
 * The VehicleVendorAvailabilityType complex type identifies the data that
 * describes the availability of one or more vehicles for a specific vendor, along
 * with supplemental information about the vendor and the facilities of that
 * vendor.
 * XSD Type: VehicleVendorAvailabilityType
 */
class VehicleVendorAvailabilityType
{

    /**
     * Information on the vendor associated with this availability of vehicles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * A collection of vehicles along with their availability and associated rate
     * information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType
     * $vehAvails
     */
    private $vehAvails = null;

    /**
     * Supplemental information associated with the vendor and the availability of the
     * vehicles.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType $info
     */
    private $info = null;

    /**
     * Gets as vendor
     *
     * Information on the vendor associated with this availability of vehicles.
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
     * Information on the vendor associated with this availability of vehicles.
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
     * Gets as vehAvails
     *
     * A collection of vehicles along with their availability and associated rate
     * information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType
     */
    public function getVehAvails()
    {
        return $this->vehAvails;
    }

    /**
     * Sets a new vehAvails
     *
     * A collection of vehicles along with their availability and associated rate
     * information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType
     * $vehAvails
     * @return self
     */
    public function setVehAvails(
        \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType $vehAvails
    ) {
        $this->vehAvails = $vehAvails;

        return $this;
    }

    /**
     * Gets as info
     *
     * Supplemental information associated with the vendor and the availability of the
     * vehicles.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Supplemental information associated with the vendor and the availability of the
     * vehicles.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\VehicleAvailVendorInfoType $info)
    {
        $this->info = $info;

        return $this;
    }


}

