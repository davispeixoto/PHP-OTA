<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS;

/**
 * Class representing SpecialServicesAType
 */
class SpecialServicesAType
{

    /**
     * Contains the specific special service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType[]
     * $specialService
     */
    private $specialService = null;

    /**
     * Adds as specialService
     *
     * Contains the specific special service information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType
     * $specialService
     */
    public function addToSpecialService(
        \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType $specialService
    ) {
        $this->specialService[] = $specialService;

        return $this;
    }

    /**
     * isset specialService
     *
     * Contains the specific special service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialService($index)
    {
        return isset($this->specialService[$index]);
    }

    /**
     * unset specialService
     *
     * Contains the specific special service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialService($index)
    {
        unset($this->specialService[$index]);
    }

    /**
     * Gets as specialService
     *
     * Contains the specific special service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType[]
     */
    public function getSpecialService()
    {
        return $this->specialService;
    }

    /**
     * Sets a new specialService
     *
     * Contains the specific special service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseSpecialServiceAvailRS\SpecialServicesAType\SpecialServiceAType[]
     * $specialService
     * @return self
     */
    public function setSpecialService(array $specialService)
    {
        $this->specialService = $specialService;

        return $this;
    }


}

