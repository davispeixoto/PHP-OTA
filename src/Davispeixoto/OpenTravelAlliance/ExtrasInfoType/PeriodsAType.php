<?php

namespace Davispeixoto\OpenTravelAlliance\ExtrasInfoType;

/**
 * Class representing PeriodsAType
 */
class PeriodsAType
{

    /**
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @property \Davispeixoto\OpenTravelAlliance\PeriodPriceType[] $period
     */
    private $period = null;

    /**
     * Adds as period
     *
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PeriodPriceType $period
     */
    public function addToPeriod(\Davispeixoto\OpenTravelAlliance\PeriodPriceType $period)
    {
        $this->period[] = $period;

        return $this;
    }

    /**
     * isset period
     *
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @return \Davispeixoto\OpenTravelAlliance\PeriodPriceType[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * The price of the Extra per unit (which may be person, room, car etc,) and/or
     * duration
     *
     * @param \Davispeixoto\OpenTravelAlliance\PeriodPriceType[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;

        return $this;
    }


}

