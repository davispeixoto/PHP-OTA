<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType;

/**
 * Class representing TaxAmountAType
 */
class TaxAmountAType
{

    /**
     * The total amount of the tax.
     *
     * @property float $total
     */
    private $total = null;

    /**
     * A code for the tax that is agreed upon between trading partners.
     *
     * @property string $taxCode
     */
    private $taxCode = null;

    /**
     * A percentage of the defined charge amount that this tax represents.
     *
     * @property float $percentage
     */
    private $percentage = null;

    /**
     * A description of the tax.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as total
     *
     * The total amount of the tax.
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount of the tax.
     *
     * @param float $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Gets as taxCode
     *
     * A code for the tax that is agreed upon between trading partners.
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * A code for the tax that is agreed upon between trading partners.
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;

        return $this;
    }

    /**
     * Gets as percentage
     *
     * A percentage of the defined charge amount that this tax represents.
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * A percentage of the defined charge amount that this tax represents.
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the tax.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the tax.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

