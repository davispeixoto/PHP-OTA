<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType;

/**
 * Class representing VehAvailAType
 */
class VehAvailAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType $vehAvailCore
     */
    private $vehAvailCore = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleAvailAdditionalInfoType
     * $vehAvailInfo
     */
    private $vehAvailInfo = null;

    /**
     * Specifies the advance booking requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType
     * $advanceBooking
     */
    private $advanceBooking = null;

    /**
     * Gets as vehAvailCore
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType
     */
    public function getVehAvailCore()
    {
        return $this->vehAvailCore;
    }

    /**
     * Sets a new vehAvailCore
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType $vehAvailCore
     * @return self
     */
    public function setVehAvailCore(\Davispeixoto\OpenTravelAlliance\VehicleAvailCoreType $vehAvailCore)
    {
        $this->vehAvailCore = $vehAvailCore;

        return $this;
    }

    /**
     * Gets as vehAvailInfo
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleAvailAdditionalInfoType
     */
    public function getVehAvailInfo()
    {
        return $this->vehAvailInfo;
    }

    /**
     * Sets a new vehAvailInfo
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleAvailAdditionalInfoType
     * $vehAvailInfo
     * @return self
     */
    public function setVehAvailInfo(\Davispeixoto\OpenTravelAlliance\VehicleAvailAdditionalInfoType $vehAvailInfo)
    {
        $this->vehAvailInfo = $vehAvailInfo;

        return $this;
    }

    /**
     * Gets as advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType
     */
    public function getAdvanceBooking()
    {
        return $this->advanceBooking;
    }

    /**
     * Sets a new advanceBooking
     *
     * Specifies the advance booking requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType
     * $advanceBooking
     * @return self
     */
    public function setAdvanceBooking(
        \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType\AdvanceBookingAType $advanceBooking
    ) {
        $this->advanceBooking = $advanceBooking;

        return $this;
    }


}

