<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgCostRS;

/**
 * Class representing AvailableExtrasAType
 */
class AvailableExtrasAType
{

    /**
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ExtrasInfoType[] $availableExtra
     */
    private $availableExtra = null;

    /**
     * Adds as availableExtra
     *
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType $availableExtra
     */
    public function addToAvailableExtra(\Davispeixoto\OpenTravelAlliance\ExtrasInfoType $availableExtra)
    {
        $this->availableExtra[] = $availableExtra;

        return $this;
    }

    /**
     * isset availableExtra
     *
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableExtra($index)
    {
        return isset($this->availableExtra[$index]);
    }

    /**
     * unset availableExtra
     *
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableExtra($index)
    {
        unset($this->availableExtra[$index]);
    }

    /**
     * Gets as availableExtra
     *
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ExtrasInfoType[]
     */
    public function getAvailableExtra()
    {
        return $this->availableExtra;
    }

    /**
     * Sets a new availableExtra
     *
     * Details of an extra which is bookable with the selected holiday package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ExtrasInfoType[] $availableExtra
     * @return self
     */
    public function setAvailableExtra(array $availableExtra)
    {
        $this->availableExtra = $availableExtra;

        return $this;
    }


}

