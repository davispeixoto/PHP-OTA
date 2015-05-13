<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType;

/**
 * Class representing PickupReturnRulesAType
 */
class PickupReturnRulesAType
{

    /**
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestPickupAType[]
     * $earliestPickup
     */
    private $earliestPickup = null;

    /**
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestPickupAType[]
     * $latestPickup
     */
    private $latestPickup = null;

    /**
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestReturnAType[]
     * $earliestReturn
     */
    private $earliestReturn = null;

    /**
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestReturnAType[]
     * $latestReturn
     */
    private $latestReturn = null;

    /**
     * Adds as earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestPickupAType
     * $earliestPickup
     */
    public function addToEarliestPickup(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestPickupAType $earliestPickup
    ) {
        $this->earliestPickup[] = $earliestPickup;

        return $this;
    }

    /**
     * isset earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEarliestPickup($index)
    {
        return isset($this->earliestPickup[$index]);
    }

    /**
     * unset earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEarliestPickup($index)
    {
        unset($this->earliestPickup[$index]);
    }

    /**
     * Gets as earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestPickupAType[]
     */
    public function getEarliestPickup()
    {
        return $this->earliestPickup;
    }

    /**
     * Sets a new earliestPickup
     *
     * The earliest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestPickupAType[]
     * $earliestPickup
     * @return self
     */
    public function setEarliestPickup(array $earliestPickup)
    {
        $this->earliestPickup = $earliestPickup;

        return $this;
    }

    /**
     * Adds as latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestPickupAType
     * $latestPickup
     */
    public function addToLatestPickup(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestPickupAType $latestPickup
    ) {
        $this->latestPickup[] = $latestPickup;

        return $this;
    }

    /**
     * isset latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLatestPickup($index)
    {
        return isset($this->latestPickup[$index]);
    }

    /**
     * unset latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLatestPickup($index)
    {
        unset($this->latestPickup[$index]);
    }

    /**
     * Gets as latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestPickupAType[]
     */
    public function getLatestPickup()
    {
        return $this->latestPickup;
    }

    /**
     * Sets a new latestPickup
     *
     * The latest day and time a vehicle can be picked up to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestPickupAType[]
     * $latestPickup
     * @return self
     */
    public function setLatestPickup(array $latestPickup)
    {
        $this->latestPickup = $latestPickup;

        return $this;
    }

    /**
     * Adds as earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestReturnAType
     * $earliestReturn
     */
    public function addToEarliestReturn(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestReturnAType $earliestReturn
    ) {
        $this->earliestReturn[] = $earliestReturn;

        return $this;
    }

    /**
     * isset earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEarliestReturn($index)
    {
        return isset($this->earliestReturn[$index]);
    }

    /**
     * unset earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEarliestReturn($index)
    {
        unset($this->earliestReturn[$index]);
    }

    /**
     * Gets as earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestReturnAType[]
     */
    public function getEarliestReturn()
    {
        return $this->earliestReturn;
    }

    /**
     * Sets a new earliestReturn
     *
     * The earliest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\EarliestReturnAType[]
     * $earliestReturn
     * @return self
     */
    public function setEarliestReturn(array $earliestReturn)
    {
        $this->earliestReturn = $earliestReturn;

        return $this;
    }

    /**
     * Adds as latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestReturnAType
     * $latestReturn
     */
    public function addToLatestReturn(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestReturnAType $latestReturn
    ) {
        $this->latestReturn[] = $latestReturn;

        return $this;
    }

    /**
     * isset latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLatestReturn($index)
    {
        return isset($this->latestReturn[$index]);
    }

    /**
     * unset latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLatestReturn($index)
    {
        unset($this->latestReturn[$index]);
    }

    /**
     * Gets as latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestReturnAType[]
     */
    public function getLatestReturn()
    {
        return $this->latestReturn;
    }

    /**
     * Sets a new latestReturn
     *
     * The latest day and time a vehicle can be returned to qualify for a specific
     * rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType\PickupReturnRulesAType\LatestReturnAType[]
     * $latestReturn
     * @return self
     */
    public function setLatestReturn(array $latestReturn)
    {
        $this->latestReturn = $latestReturn;

        return $this;
    }


}

