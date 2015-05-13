<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType;

/**
 * Class representing VehRentLocInfosAType
 */
class VehRentLocInfosAType
{

    /**
     * Descriptive information of one specific aspect of the rental location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     * $vehRentLocInfo
     */
    private $vehRentLocInfo = null;

    /**
     * Adds as vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType
     * $vehRentLocInfo
     */
    public function addToVehRentLocInfo(\Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType $vehRentLocInfo)
    {
        $this->vehRentLocInfo[] = $vehRentLocInfo;

        return $this;
    }

    /**
     * isset vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehRentLocInfo($index)
    {
        return isset($this->vehRentLocInfo[$index]);
    }

    /**
     * unset vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehRentLocInfo($index)
    {
        unset($this->vehRentLocInfo[$index]);
    }

    /**
     * Gets as vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     */
    public function getVehRentLocInfo()
    {
        return $this->vehRentLocInfo;
    }

    /**
     * Sets a new vehRentLocInfo
     *
     * Descriptive information of one specific aspect of the rental location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     * $vehRentLocInfo
     * @return self
     */
    public function setVehRentLocInfo(array $vehRentLocInfo)
    {
        $this->vehRentLocInfo = $vehRentLocInfo;

        return $this;
    }


}

