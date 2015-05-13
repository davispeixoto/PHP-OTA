<?php

namespace Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType;

/**
 * Class representing RateRangesAType
 */
class RateRangesAType
{

    /**
     * Provides rate range information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     * $rateRange
     */
    private $rateRange = null;

    /**
     * Adds as rateRange
     *
     * Provides rate range information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType
     * $rateRange
     */
    public function addToRateRange(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange
    ) {
        $this->rateRange[] = $rateRange;

        return $this;
    }

    /**
     * isset rateRange
     *
     * Provides rate range information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateRange($index)
    {
        return isset($this->rateRange[$index]);
    }

    /**
     * unset rateRange
     *
     * Provides rate range information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateRange($index)
    {
        unset($this->rateRange[$index]);
    }

    /**
     * Gets as rateRange
     *
     * Provides rate range information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Provides rate range information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     * $rateRange
     * @return self
     */
    public function setRateRange(array $rateRange)
    {
        $this->rateRange = $rateRange;

        return $this;
    }


}

