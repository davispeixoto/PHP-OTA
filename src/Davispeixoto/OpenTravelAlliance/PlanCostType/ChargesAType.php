<?php

namespace Davispeixoto\OpenTravelAlliance\PlanCostType;

/**
 * Class representing ChargesAType
 */
class ChargesAType
{

    /**
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     */
    private $charge = null;

    /**
     * Adds as charge
     *
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charge[] = $charge;

        return $this;
    }

    /**
     * isset charge
     *
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Contains a description and value of a single additional charge to the cost of
     * the plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }


}

