<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType;

/**
 * Class representing OnLocationServicesAType
 */
class OnLocationServicesAType
{

    /**
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     * $onLocationService
     */
    private $onLocationService = null;

    /**
     * Adds as onLocationService
     *
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType
     * $onLocationService
     */
    public function addToOnLocationService(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType $onLocationService
    ) {
        $this->onLocationService[] = $onLocationService;

        return $this;
    }

    /**
     * isset onLocationService
     *
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOnLocationService($index)
    {
        return isset($this->onLocationService[$index]);
    }

    /**
     * unset onLocationService
     *
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOnLocationService($index)
    {
        unset($this->onLocationService[$index]);
    }

    /**
     * Gets as onLocationService
     *
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     */
    public function getOnLocationService()
    {
        return $this->onLocationService;
    }

    /**
     * Sets a new onLocationService
     *
     * Information on one specific on-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     * $onLocationService
     * @return self
     */
    public function setOnLocationService(array $onLocationService)
    {
        $this->onLocationService = $onLocationService;

        return $this;
    }


}

