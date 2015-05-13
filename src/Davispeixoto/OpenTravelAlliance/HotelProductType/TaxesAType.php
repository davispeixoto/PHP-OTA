<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TaxType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TaxType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\TaxType $tax)
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
     * @return \Davispeixoto\OpenTravelAlliance\TaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

