<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * The total of all the taxes.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Any individual tax applied to the fare
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Gets as amount
     *
     * The total of all the taxes.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The total of all the taxes.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Adds as tax
     *
     * Any individual tax applied to the fare
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\AirTaxType $tax)
    {
        $this->tax[] = $tax;

        return $this;
    }

    /**
     * isset tax
     *
     * Any individual tax applied to the fare
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * Any individual tax applied to the fare
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * Any individual tax applied to the fare
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Any individual tax applied to the fare
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

