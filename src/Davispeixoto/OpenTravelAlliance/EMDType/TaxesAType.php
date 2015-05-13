<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing TaxesAType
 */

use Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType;

class TaxesAType
{

    /**
     * The tax applicable to the ticket/document.
     *
     * @property TaxAType[] $tax
     */
    private $tax = null;

    /**
     * Adds as tax
     *
     * The tax applicable to the ticket/document.
     *
     * @return self
     * @param TaxAType $tax
     */
    public function addToTax(TaxAType $tax)
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
        if (isset($index)) {
            return isset($this->tax[$index]);
        }

        return false;
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
        if (isset($index)) {
            unset($this->tax[$index]);
        }
    }

    /**
     * Gets as tax
     *
     * The tax applicable to the ticket/document.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\EMDType\TaxesAType\TaxAType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

