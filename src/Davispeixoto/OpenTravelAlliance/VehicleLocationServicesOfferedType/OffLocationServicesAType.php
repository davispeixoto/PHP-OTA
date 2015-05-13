<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType;

/**
 * Class representing OffLocationServicesAType
 */
class OffLocationServicesAType
{

    /**
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     * $offLocationService
     */
    private $offLocationService = null;

    /**
     * Adds as offLocationService
     *
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType
     * $offLocationService
     */
    public function addToOffLocationService(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType $offLocationService
    ) {
        $this->offLocationService[] = $offLocationService;

        return $this;
    }

    /**
     * isset offLocationService
     *
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocationService($index)
    {
        return isset($this->offLocationService[$index]);
    }

    /**
     * unset offLocationService
     *
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocationService($index)
    {
        unset($this->offLocationService[$index]);
    }

    /**
     * Gets as offLocationService
     *
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     */
    public function getOffLocationService()
    {
        return $this->offLocationService;
    }

    /**
     * Sets a new offLocationService
     *
     * Information on one specific off-location service, including the description, the
     * hours during which this service is offered, and any charges that may be
     * associated with this service.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     * $offLocationService
     * @return self
     */
    public function setOffLocationService(array $offLocationService)
    {
        $this->offLocationService = $offLocationService;

        return $this;
    }


}

