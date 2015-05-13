<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType;

/**
 * Class representing VehiclesAType
 */
class VehiclesAType
{

    /**
     * The type of vehicle for the provider.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType\VehiclesAType\VehicleAType[]
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Adds as vehicle
     *
     * The type of vehicle for the provider.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType\VehiclesAType\VehicleAType
     * $vehicle
     */
    public function addToVehicle(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType\VehiclesAType\VehicleAType $vehicle
    ) {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * The type of vehicle for the provider.
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
     * The type of vehicle for the provider.
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
     * The type of vehicle for the provider.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * The type of vehicle for the provider.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\VehicleVendorSupplierAType\VehiclesAType\VehicleAType[]
     * $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

