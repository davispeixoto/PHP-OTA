<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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

