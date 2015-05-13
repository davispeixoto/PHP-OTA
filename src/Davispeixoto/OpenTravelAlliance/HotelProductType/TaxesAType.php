<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

use Davispeixoto\OpenTravelAlliance\TaxType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * @property TaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * @return self
     * @param TaxType $tax
     */
    public function addToTax(TaxType $tax)
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
     * @return TaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param TaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

