<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType;

/**
 * Class representing TaxesAType
 */

use Davispeixoto\OpenTravelAlliance\AirTaxType;

class TaxesAType
{

    /**
     * @property AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
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
     * @param int $index
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
     * @param int $index
     * @return void
     */
    public function unsetTax($index)
    {
        if (isset($index) && array_key_exists($index, $this->tax)) {
            unset($this->tax[$index]);
        }
    }

    /**
     * Gets as tax
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     * @return self
     */
    public function setTax(Array $tax)
    {
        $this->tax = $tax;

        return $this;
    }
}
