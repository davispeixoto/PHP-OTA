<?php

namespace Davispeixoto\OpenTravelAlliance\RailChargesType;

/**
 * Class representing ChargesAType
 */
class ChargesAType
{

    /**
     * Detailed information on one specific charge.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charge
     */
    private $charge = null;

    /**
     * Adds as charge
     *
     * Detailed information on one specific charge.
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
     * Detailed information on one specific charge.
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
     * Detailed information on one specific charge.
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
     * Detailed information on one specific charge.
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
     * Detailed information on one specific charge.
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

