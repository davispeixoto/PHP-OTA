<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockType;

/**
 * Class representing TaxInformationAType
 */
class TaxInformationAType
{

    /**
     * Tax information for the entire group.Example: RoomExempt
     *
     * @property string $taxType
     */
    private $taxType = null;

    /**
     * Tax status reason.Example: VAT program participation.
     *
     * @property string $taxReason
     */
    private $taxReason = null;

    /**
     * Tax Certificate number.Example: 99-99999999
     *
     * @property string $taxID
     */
    private $taxID = null;

    /**
     * Gets as taxType
     *
     * Tax information for the entire group.Example: RoomExempt
     *
     * @return string
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * Tax information for the entire group.Example: RoomExempt
     *
     * @param string $taxType
     * @return self
     */
    public function setTaxType($taxType)
    {
        $this->taxType = $taxType;

        return $this;
    }

    /**
     * Gets as taxReason
     *
     * Tax status reason.Example: VAT program participation.
     *
     * @return string
     */
    public function getTaxReason()
    {
        return $this->taxReason;
    }

    /**
     * Sets a new taxReason
     *
     * Tax status reason.Example: VAT program participation.
     *
     * @param string $taxReason
     * @return self
     */
    public function setTaxReason($taxReason)
    {
        $this->taxReason = $taxReason;

        return $this;
    }

    /**
     * Gets as taxID
     *
     * Tax Certificate number.Example: 99-99999999
     *
     * @return string
     */
    public function getTaxID()
    {
        return $this->taxID;
    }

    /**
     * Sets a new taxID
     *
     * Tax Certificate number.Example: 99-99999999
     *
     * @param string $taxID
     * @return self
     */
    public function setTaxID($taxID)
    {
        $this->taxID = $taxID;

        return $this;
    }


}

