<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

/**
 * Class representing SelectedSpecialServicesAType
 */
class SelectedSpecialServicesAType
{

    /**
     * Specifies the Special Service information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     * $selectedSpecialService
     */
    private $selectedSpecialService = null;

    /**
     * Adds as selectedSpecialService
     *
     * Specifies the Special Service information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceType
     * $selectedSpecialService
     */
    public function addToSelectedSpecialService(
        \Davispeixoto\OpenTravelAlliance\SpecialServiceType $selectedSpecialService
    ) {
        $this->selectedSpecialService[] = $selectedSpecialService;

        return $this;
    }

    /**
     * isset selectedSpecialService
     *
     * Specifies the Special Service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedSpecialService($index)
    {
        return isset($this->selectedSpecialService[$index]);
    }

    /**
     * unset selectedSpecialService
     *
     * Specifies the Special Service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedSpecialService($index)
    {
        unset($this->selectedSpecialService[$index]);
    }

    /**
     * Gets as selectedSpecialService
     *
     * Specifies the Special Service information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     */
    public function getSelectedSpecialService()
    {
        return $this->selectedSpecialService;
    }

    /**
     * Sets a new selectedSpecialService
     *
     * Specifies the Special Service information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecialServiceType[]
     * $selectedSpecialService
     * @return self
     */
    public function setSelectedSpecialService(array $selectedSpecialService)
    {
        $this->selectedSpecialService = $selectedSpecialService;

        return $this;
    }


}

