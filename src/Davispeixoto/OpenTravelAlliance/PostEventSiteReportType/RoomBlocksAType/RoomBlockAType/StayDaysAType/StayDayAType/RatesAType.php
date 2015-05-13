<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType;

/**
 * Class representing RatesAType
 */
class RatesAType
{

    /**
     * Rate for a particular room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[]
     * $rate
     */
    private $rate = null;

    /**
     * Adds as rate
     *
     * Rate for a particular room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType
     * $rate
     */
    public function addToRate(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType $rate
    ) {
        $this->rate[] = $rate;

        return $this;
    }

    /**
     * isset rate
     *
     * Rate for a particular room type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * Rate for a particular room type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * Rate for a particular room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate for a particular room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType\RatesAType\RateAType[]
     * $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;

        return $this;
    }


}

