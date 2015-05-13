<?php

namespace Davispeixoto\OpenTravelAlliance\EMDLiteType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * The tax applicable to the ticket/document.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[]
     * $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * The tax applicable to the ticket/document.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType $tax)
    {
        $this->tax[] = $tax;

        return $this;
    }

    /**
     * isset tax
     *
     * The tax applicable to the ticket/document.
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
     * The tax applicable to the ticket/document.
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
     * The tax applicable to the ticket/document.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * The tax applicable to the ticket/document.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType\TaxesAType\TaxAType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

