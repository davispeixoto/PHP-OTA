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
     * @param scalar $index
     * @return boolean
     */
    public function issetTax($index)
    {
        if (isset($index)) {
            return isset($this->tax[$index]);
        }
    }

    /**
     * unset tax
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
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

