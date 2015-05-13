<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeType;

/**
 * Class representing ChargeAType
 */
class ChargeAType
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
     * If true, taxes are included in this charge.
     *
     * @property boolean $taxInclusive
     */
    private $taxInclusive = null;

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
     * A unique ID that identifies the golfer that this charge is associated with.
     *
     * @property string $golferRPH
     */
    private $golferRPH = null;

    /**
     * A collection of one or more taxes associated with a specific charge.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     */
    private $taxAmounts = null;

    /**
     * Text description of the fees in a given language.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of players, a percentage, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\CalculationAType[]
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
     * If true, taxes are included in this charge.
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
     * If true, taxes are included in this charge.
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
     * Gets as golferRPH
     *
     * A unique ID that identifies the golfer that this charge is associated with.
     *
     * @return string
     */
    public function getGolferRPH()
    {
        return $this->golferRPH;
    }

    /**
     * Sets a new golferRPH
     *
     * A unique ID that identifies the golfer that this charge is associated with.
     *
     * @param string $golferRPH
     * @return self
     */
    public function setGolferRPH($golferRPH)
    {
        $this->golferRPH = $golferRPH;

        return $this;
    }

    /**
     * Adds as taxAmount
     *
     * A collection of one or more taxes associated with a specific charge.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\TaxAmountsAType\TaxAmountAType
     * $taxAmount
     */
    public function addToTaxAmounts(
        \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\TaxAmountsAType\TaxAmountAType $taxAmount
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
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\TaxAmountsAType\TaxAmountAType[]
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
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\TaxAmountsAType\TaxAmountAType[]
     * $taxAmounts
     * @return self
     */
    public function setTaxAmounts(array $taxAmounts)
    {
        $this->taxAmounts = $taxAmounts;

        return $this;
    }

    /**
     * Adds as description
     *
     * Text description of the fees in a given language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Text description of the fees in a given language.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Text description of the fees in a given language.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Text description of the fees in a given language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description of the fees in a given language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of players, a percentage, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\CalculationAType
     * $calculation
     */
    public function addToCalculation(
        \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\CalculationAType $calculation
    ) {
        $this->calculation[] = $calculation;

        return $this;
    }

    /**
     * isset calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of players, a percentage, etc.
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
     * multiplied by the number of players, a percentage, etc.
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
     * multiplied by the number of players, a percentage, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\CalculationAType[]
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Sets a new calculation
     *
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of players, a percentage, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\ChargeAType\CalculationAType[]
     * $calculation
     * @return self
     */
    public function setCalculation(array $calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }


}

