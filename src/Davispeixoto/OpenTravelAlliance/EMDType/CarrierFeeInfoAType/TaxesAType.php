<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType\CarrierFeeInfoAType;

use Davispeixoto\OpenTravelAlliance\AirTaxType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * A tax applicable to a carrier fee or to the carrier fee tax.
     *
     * @property AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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
     * A tax applicable to a carrier fee or to the carrier fee tax.
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

