<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType\VehiclesAType;

use Davispeixoto\OpenTravelAlliance\VehicleCoreType;

/**
 * Class representing VehicleAType
 */
class VehicleAType extends VehicleCoreType
{

    /**
     * To specify if this vehicle type is allowed, required, excluded, or included for
     * an additional driver.
     *
     * @property string $includeExclude
     */
    private $includeExclude = null;

    /**
     * Gets as includeExclude
     *
     * To specify if this vehicle type is allowed, required, excluded, or included for
     * an additional driver.
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
     * To specify if this vehicle type is allowed, required, excluded, or included for
     * an additional driver.
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

