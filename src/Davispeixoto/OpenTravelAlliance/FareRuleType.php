<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareRuleType
 */
class FareRuleType extends PassengerPriceType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PriceRule[] $priceRule
     */
    private $priceRule = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TotalFare $totalFare
     */
    private $totalFare = null;

    /**
     * Adds as priceRule
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PriceRule $priceRule
     */
    public function addToPriceRule(\Davispeixoto\OpenTravelAlliance\PriceRule $priceRule)
    {
        $this->priceRule[] = $priceRule;

        return $this;
    }

    /**
     * isset priceRule
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPriceRule($index)
    {
        return isset($this->priceRule[$index]);
    }

    /**
     * unset priceRule
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPriceRule($index)
    {
        unset($this->priceRule[$index]);
    }

    /**
     * Gets as priceRule
     *
     * @return \Davispeixoto\OpenTravelAlliance\PriceRule[]
     */
    public function getPriceRule()
    {
        return $this->priceRule;
    }

    /**
     * Sets a new priceRule
     *
     * @param \Davispeixoto\OpenTravelAlliance\PriceRule[] $priceRule
     * @return self
     */
    public function setPriceRule(array $priceRule)
    {
        $this->priceRule = $priceRule;

        return $this;
    }

    /**
     * Gets as totalFare
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalFare
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalFare $totalFare
     * @return self
     */
    public function setTotalFare(\Davispeixoto\OpenTravelAlliance\TotalFare $totalFare)
    {
        $this->totalFare = $totalFare;

        return $this;
    }


}

