<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType;

/**
 * Class representing VehicleInfosAType
 */
class VehicleInfosAType
{

    /**
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     * $vehicleInfo
     */
    private $vehicleInfo = null;

    /**
     * Adds as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType
     * $vehicleInfo
     */
    public function addToVehicleInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType $vehicleInfo
    ) {
        $this->vehicleInfo[] = $vehicleInfo;

        return $this;
    }

    /**
     * isset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicleInfo($index)
    {
        return isset($this->vehicleInfo[$index]);
    }

    /**
     * unset vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicleInfo($index)
    {
        unset($this->vehicleInfo[$index]);
    }

    /**
     * Gets as vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     */
    public function getVehicleInfo()
    {
        return $this->vehicleInfo;
    }

    /**
     * Sets a new vehicleInfo
     *
     * Textual description about one specific aspect of the vehicles, for example,
     * advanced booking needs, etc
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType\VehicleInfosAType\VehicleInfoAType[]
     * $vehicleInfo
     * @return self
     */
    public function setVehicleInfo(array $vehicleInfo)
    {
        $this->vehicleInfo = $vehicleInfo;

        return $this;
    }


}

