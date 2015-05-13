<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityChargeType
 *
 * Base price and taxes associated with the tour and/or activity.
 * XSD Type: TourActivityChargeType
 */
class TourActivityChargeType
{

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * If TRUE, taxes are included in this charge.
     *
     * @property boolean $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * A description of the charge.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * If true, a guarantee payment or hold is required.
     *
     * @property boolean $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * When true, the rate has been converted to a different currency.
     *
     * @property boolean $rateConvertInd
     */
    private $rateConvertInd = null;

    /**
     * The maximum amount that will be charged.
     *
     * @property float $maxCharge
     */
    private $maxCharge = null;

    /**
     * The minimum amount that will be charged.
     *
     * @property float $minCharge
     */
    private $minCharge = null;

    /**
     * A collection of one or more taxes associated with a specific charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     */
    private $taxAmounts = null;

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as taxInclusive
     *
     * If TRUE, taxes are included in this charge.
     *
     * @return boolean
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * If TRUE, taxes are included in this charge.
     *
     * @param boolean $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the charge.
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
     * A description of the charge.
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
     * Gets as guaranteedInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @return boolean
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @param boolean $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;

        return $this;
    }

    /**
     * Gets as rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @return boolean
     */
    public function getRateConvertInd()
    {
        return $this->rateConvertInd;
    }

    /**
     * Sets a new rateConvertInd
     *
     * When true, the rate has been converted to a different currency.
     *
     * @param boolean $rateConvertInd
     * @return self
     */
    public function setRateConvertInd($rateConvertInd)
    {
        $this->rateConvertInd = $rateConvertInd;

        return $this;
    }

    /**
     * Gets as maxCharge
     *
     * The maximum amount that will be charged.
     *
     * @return float
     */
    public function getMaxCharge()
    {
        return $this->maxCharge;
    }

    /**
     * Sets a new maxCharge
     *
     * The maximum amount that will be charged.
     *
     * @param float $maxCharge
     * @return self
     */
    public function setMaxCharge($maxCharge)
    {
        $this->maxCharge = $maxCharge;

        return $this;
    }

    /**
     * Gets as minCharge
     *
     * The minimum amount that will be charged.
     *
     * @return float
     */
    public function getMinCharge()
    {
        return $this->minCharge;
    }

    /**
     * Sets a new minCharge
     *
     * The minimum amount that will be charged.
     *
     * @param float $minCharge
     * @return self
     */
    public function setMinCharge($minCharge)
    {
        $this->minCharge = $minCharge;

        return $this;
    }

    /**
     * Adds as taxAmount
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType\TaxAmountAType
     * $taxAmount
     */
    public function addToTaxAmounts(
        \Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
    ) {
        $this->taxAmounts[] = $taxAmount;

        return $this;
    }

    /**
     * isset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxAmounts($index)
    {
        return isset($this->taxAmounts[$index]);
    }

    /**
     * unset taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxAmounts($index)
    {
        unset($this->taxAmounts[$index]);
    }

    /**
     * Gets as taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType\TaxAmountAType[]
     */
    public function getTaxAmounts()
    {
        return $this->taxAmounts;
    }

    /**
     * Sets a new taxAmounts
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityChargeType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     * @return self
     */
    public function setTaxAmounts(array $taxAmounts)
    {
        $this->taxAmounts = $taxAmounts;

        return $this;
    }


}

