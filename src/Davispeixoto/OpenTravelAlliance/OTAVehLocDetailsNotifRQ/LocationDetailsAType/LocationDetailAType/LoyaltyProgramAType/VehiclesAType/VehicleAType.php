<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\LoyaltyProgramAType\VehiclesAType;

use Davispeixoto\OpenTravelAlliance\VehicleCoreType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleCoreType
{

    /**
     * To specify if the frequent renter program is required, allowed, excluded, or
     * included for this vehicle type.
     *
     * @property string $includeExclude
     */
    private $includeExclude = null;

    /**
     * Gets as includeExclude
     *
     * To specify if the frequent renter program is required, allowed, excluded, or
     * included for this vehicle type.
     *
     * @return string
     */
    public function getIncludeExclude()
    {
        return $this->includeExclude;
    }

    /**
     * Sets a new includeExclude
     *
     * To specify if the frequent renter program is required, allowed, excluded, or
     * included for this vehicle type.
     *
     * @param string $includeExclude
     * @return self
     */
    public function setIncludeExclude($includeExclude)
    {
        $this->includeExclude = $includeExclude;

        return $this;
    }


}

