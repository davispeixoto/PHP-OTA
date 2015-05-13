<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleChargeType
 *
 * Identifies specific charges.
 * XSD Type: VehicleChargeType
 */
class VehicleChargeType
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
     * If TRUE, a guarantee payment or hold is required.
     *
     * @property boolean $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * An indication if this amount is included in the base vehicle rate, or is an
     * additonal cost.
     *  false
     *
     * @property boolean $includedInRate
     */
    private $includedInRate = null;

    /**
     * When true, indicates the item's charges are included in the estimated total
     * amount (in TotalCharge) and when false, the item is not included in the
     * estimated total amount.
     *
     * @property boolean $includedInEstTotalInd
     */
    private $includedInEstTotalInd = null;

    /**
     * When true, the rate has been converted to a different currency.
     *
     * @property boolean $rateConvertInd
     */
    private $rateConvertInd = null;

    /**
     * A collection of one or more taxes associated with a specific charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     */
    private $taxAmounts = null;

    /**
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType\MinMaxAType $minMax
     */
    private $minMax = null;

    /**
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType\CalculationAType[]
     * $calculation
     */
    private $calculation = null;

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
     * If TRUE, a guarantee payment or hold is required.
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
     * If TRUE, a guarantee payment or hold is required.
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
     * Gets as includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an
     * additonal cost.
     *  false
     *
     * @return boolean
     */
    public function getIncludedInRate()
    {
        return $this->includedInRate;
    }

    /**
     * Sets a new includedInRate
     *
     * An indication if this amount is included in the base vehicle rate, or is an
     * additonal cost.
     *  false
     *
     * @param boolean $includedInRate
     * @return self
     */
    public function setIncludedInRate($includedInRate)
    {
        $this->includedInRate = $includedInRate;

        return $this;
    }

    /**
     * Gets as includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total
     * amount (in TotalCharge) and when false, the item is not included in the
     * estimated total amount.
     *
     * @return boolean
     */
    public function getIncludedInEstTotalInd()
    {
        return $this->includedInEstTotalInd;
    }

    /**
     * Sets a new includedInEstTotalInd
     *
     * When true, indicates the item's charges are included in the estimated total
     * amount (in TotalCharge) and when false, the item is not included in the
     * estimated total amount.
     *
     * @param boolean $includedInEstTotalInd
     * @return self
     */
    public function setIncludedInEstTotalInd($includedInEstTotalInd)
    {
        $this->includedInEstTotalInd = $includedInEstTotalInd;

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
     * Adds as taxAmount
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleChargeType\TaxAmountsAType\TaxAmountAType
     * $taxAmount
     */
    public function addToTaxAmounts(
        \Davispeixoto\OpenTravelAlliance\VehicleChargeType\TaxAmountsAType\TaxAmountAType $taxAmount
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
     * \Davispeixoto\OpenTravelAlliance\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\VehicleChargeType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     * @return self
     */
    public function setTaxAmounts(array $taxAmounts)
    {
        $this->taxAmounts = $taxAmounts;

        return $this;
    }

    /**
     * Gets as minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType\MinMaxAType
     */
    public function getMinMax()
    {
        return $this->minMax;
    }

    /**
     * Sets a new minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType\MinMaxAType $minMax
     * @return self
     */
    public function setMinMax(\Davispeixoto\OpenTravelAlliance\VehicleChargeType\MinMaxAType $minMax)
    {
        $this->minMax = $minMax;

        return $this;
    }

    /**
     * Adds as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType\CalculationAType
     * $calculation
     */
    public function addToCalculation(\Davispeixoto\OpenTravelAlliance\VehicleChargeType\CalculationAType $calculation)
    {
        $this->calculation[] = $calculation;

        return $this;
    }

    /**
     * isset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCalculation($index)
    {
        return isset($this->calculation[$index]);
    }

    /**
     * unset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCalculation($index)
    {
        unset($this->calculation[$index]);
    }

    /**
     * Gets as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType\CalculationAType[]
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType\CalculationAType[]
     * $calculation
     * @return self
     */
    public function setCalculation(array $calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }


}

