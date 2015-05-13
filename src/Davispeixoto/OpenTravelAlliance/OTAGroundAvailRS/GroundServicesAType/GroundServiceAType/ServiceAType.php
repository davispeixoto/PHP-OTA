<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType;

use Davispeixoto\OpenTravelAlliance\GroundServiceDetailType;

/**
 * Class representing ServiceAType
 */
class ServiceAType extends GroundServiceDetailType
{

    /**
     * Vehicle make and model information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType\VehicleMakeModelAType
     * $vehicleMakeModel
     */
    private $vehicleMakeModel = null;

    /**
     * Gets as vehicleMakeModel
     *
     * Vehicle make and model information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType\VehicleMakeModelAType
     */
    public function getVehicleMakeModel()
    {
        return $this->vehicleMakeModel;
    }

    /**
     * Sets a new vehicleMakeModel
     *
     * Vehicle make and model information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType\VehicleMakeModelAType
     * $vehicleMakeModel
     * @return self
     */
    public function setVehicleMakeModel(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType\ServiceAType\VehicleMakeModelAType $vehicleMakeModel
    ) {
        $this->vehicleMakeModel = $vehicleMakeModel;

        return $this;
    }


}

