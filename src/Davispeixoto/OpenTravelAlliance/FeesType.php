<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FeesType
 *
 * A collection of fees.
 * XSD Type: FeesType
 */
class FeesType
{

    /**
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     */
    private $fee = null;

    /**
     * Adds as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}

