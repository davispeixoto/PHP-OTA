<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS;

/**
 * Class representing GroundServicesAType
 */
class GroundServicesAType
{

    /**
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType[]
     * $groundService
     */
    private $groundService = null;

    /**
     * Adds as groundService
     *
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType
     * $groundService
     */
    public function addToGroundService(
        \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType $groundService
    ) {
        $this->groundService[] = $groundService;

        return $this;
    }

    /**
     * isset groundService
     *
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroundService($index)
    {
        return isset($this->groundService[$index]);
    }

    /**
     * unset groundService
     *
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroundService($index)
    {
        unset($this->groundService[$index]);
    }

    /**
     * Gets as groundService
     *
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType[]
     */
    public function getGroundService()
    {
        return $this->groundService;
    }

    /**
     * Sets a new groundService
     *
     * Available service information, including type of service, vehicle details,
     * service restrictions, charges and fees and payment rules.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundAvailRS\GroundServicesAType\GroundServiceAType[]
     * $groundService
     * @return self
     */
    public function setGroundService(array $groundService)
    {
        $this->groundService = $groundService;

        return $this;
    }


}

