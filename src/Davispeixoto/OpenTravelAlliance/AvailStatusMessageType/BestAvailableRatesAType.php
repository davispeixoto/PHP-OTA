<?php

namespace Davispeixoto\OpenTravelAlliance\AvailStatusMessageType;

/**
 * Class representing BestAvailableRatesAType
 */
class BestAvailableRatesAType
{

    /**
     * The details of a best available rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     * $bestAvailableRate
     */
    private $bestAvailableRate = null;

    /**
     * Adds as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType
     * $bestAvailableRate
     */
    public function addToBestAvailableRate(
        \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
    ) {
        $this->bestAvailableRate[] = $bestAvailableRate;

        return $this;
    }

    /**
     * isset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBestAvailableRate($index)
    {
        return isset($this->bestAvailableRate[$index]);
    }

    /**
     * unset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBestAvailableRate($index)
    {
        unset($this->bestAvailableRate[$index]);
    }

    /**
     * Gets as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRate()
    {
        return $this->bestAvailableRate;
    }

    /**
     * Sets a new bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     * $bestAvailableRate
     * @return self
     */
    public function setBestAvailableRate(array $bestAvailableRate)
    {
        $this->bestAvailableRate = $bestAvailableRate;

        return $this;
    }


}

