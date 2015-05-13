<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * The vehicle types associated with the frequent renter information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType\VehicleAType[]
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Adds as vehicle
     *
     * The vehicle types associated with the frequent renter information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType\VehicleAType
     * $vehicle
     */
    public function addToVehicle(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType\VehicleAType $vehicle
    ) {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * The vehicle types associated with the frequent renter information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicle($index)
    {
        return isset($this->vehicle[$index]);
    }

    /**
     * unset vehicle
     *
     * The vehicle types associated with the frequent renter information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicle($index)
    {
        unset($this->vehicle[$index]);
    }

    /**
     * Gets as vehicle
     *
     * The vehicle types associated with the frequent renter information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * The vehicle types associated with the frequent renter information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType\VehicleAType[]
     * $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

