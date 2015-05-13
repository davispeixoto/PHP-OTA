<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

use Davispeixoto\OpenTravelAlliance\AirTaxType;

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
     * @property AirTaxType[] $tax
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
     * @param AirTaxType $tax
     */
    public function addToTax(AirTaxType $tax)
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
        if (isset($index)) {
            return isset($this->tax[$index]);
        }

        return false;
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
        if (isset($index)) {
            unset($this->tax[$index]);
        }
    }

    /**
     * Gets as tax
     *
     * Any individual tax applied to the fare
     *
     * @return AirTaxType[]
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
     * @param AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

