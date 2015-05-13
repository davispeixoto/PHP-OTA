<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType;

use Davispeixoto\OpenTravelAlliance\VehicleType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType[]
     * $vehRentalDetails
     */
    private $vehRentalDetails = null;

    /**
     * Adds as vehRentalDetails
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType
     * $vehRentalDetails
     */
    public function addToVehRentalDetails(\Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType $vehRentalDetails)
    {
        $this->vehRentalDetails[] = $vehRentalDetails;

        return $this;
    }

    /**
     * isset vehRentalDetails
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehRentalDetails($index)
    {
        return isset($this->vehRentalDetails[$index]);
    }

    /**
     * unset vehRentalDetails
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehRentalDetails($index)
    {
        unset($this->vehRentalDetails[$index]);
    }

    /**
     * Gets as vehRentalDetails
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType[]
     */
    public function getVehRentalDetails()
    {
        return $this->vehRentalDetails;
    }

    /**
     * Sets a new vehRentalDetails
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType[]
     * $vehRentalDetails
     * @return self
     */
    public function setVehRentalDetails(array $vehRentalDetails)
    {
        $this->vehRentalDetails = $vehRentalDetails;

        return $this;
    }


}

