<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TaxItemType
 *
 * Defines a tax item on an invoice
 * XSD Type: TaxItemType
 */
class TaxItemType
{

    /**
     * A short description of the tax item.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * A code identifying the taxable status of an item e.g. E (Exempt), S (Standard)
     * etc..
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A percentage rate of tax.
     *
     * @property float $rate
     */
    private $rate = null;

    /**
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxItemType\TaxAmountAType[]
     * $taxAmount
     */
    private $taxAmount = null;

    /**
     * Gets as description
     *
     * A short description of the tax item.
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
     * A short description of the tax item.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as code
     *
     * A code identifying the taxable status of an item e.g. E (Exempt), S (Standard)
     * etc..
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code identifying the taxable status of an item e.g. E (Exempt), S (Standard)
     * etc..
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as rate
     *
     * A percentage rate of tax.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * A percentage rate of tax.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Adds as taxAmount
     *
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TaxItemType\TaxAmountAType $taxAmount
     */
    public function addToTaxAmount(\Davispeixoto\OpenTravelAlliance\TaxItemType\TaxAmountAType $taxAmount)
    {
        $this->taxAmount[] = $taxAmount;

        return $this;
    }

    /**
     * isset taxAmount
     *
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxAmount($index)
    {
        return isset($this->taxAmount[$index]);
    }

    /**
     * unset taxAmount
     *
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxAmount($index)
    {
        unset($this->taxAmount[$index]);
    }

    /**
     * Gets as taxAmount
     *
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxItemType\TaxAmountAType[]
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * An amount of tax payable; may be repeated for multiple currencies e.g. GBP and
     * Euros..
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxItemType\TaxAmountAType[] $taxAmount
     * @return self
     */
    public function setTaxAmount(array $taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }


}

