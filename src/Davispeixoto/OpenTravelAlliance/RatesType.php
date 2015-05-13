<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RatesType
 *
 * Room rate plan information, including cancellation policy and totals.
 * XSD Type: RatesType
 */
class RatesType
{

    /**
     * Rate MUST specify the details of the room rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateType $rate
     */
    private $rate = null;

    /**
     * Gets as rate
     *
     * Rate MUST specify the details of the room rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateType
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate MUST specify the details of the room rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateType $rate
     * @return self
     */
    public function setRate(\Davispeixoto\OpenTravelAlliance\RateType $rate)
    {
        $this->rate = $rate;

        return $this;
    }


}

