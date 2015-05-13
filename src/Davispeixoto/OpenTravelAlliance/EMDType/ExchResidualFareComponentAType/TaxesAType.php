<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
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

