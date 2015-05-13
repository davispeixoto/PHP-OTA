<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing GroundServiceChargesType
 *
 * Charge details related to a vehicle/ ground transportation service.
 * XSD Type: GroundServiceChargesType
 */
class GroundServiceChargesType
{

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * When true, the rate has been converted to a different currency.
     *
     * @property boolean $rateConvertInd
     */
    private $rateConvertInd = null;

    /**
     * If true, taxes are included in this charge.
     *
     * @property boolean $taxInclusiveInd
     */
    private $taxInclusiveInd = null;

    /**
     * A description of the charge.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * If true, a guarantee payment or hold is required.
     *
     * @property boolean $guaranteeInd
     */
    private $guaranteeInd = null;

    /**
     * If true, this amount is included in the base ground transportation rate.
     *
     * @property boolean $includedInRateInd
     */
    private $includedInRateInd = null;

    /**
     * If true, this surcharge or tax is required in the ground transportation
     * reservation.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * A charge purpose type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListVehChargePurposeType
     * $chargePurpose
     */
    private $chargePurpose = null;

    /**
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\MinMaxAType
     * $minMax
     */
    private $minMax = null;

    /**
     * Information on how this charge was calculated, for example, a daily rate
     * multiplied by the number of days, a percentage, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\CalculationAType[]
     * $calculation
     */
    private $calculation = null;

    /**
     * Detailed information on one specific tax associated with a specific charge
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\TaxesAType[]
     * $taxes
     */
    private $taxes = null;

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
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * particular currency.The ISO 4217 standard "minor unit" is typically used when
     * the amount provided includes the minor unit of currency without a decimal point
     * (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * Gets as taxInclusiveInd
     *
     * If true, taxes are included in this charge.
     *
     * @return boolean
     */
    public function getTaxInclusiveInd()
    {
        return $this->taxInclusiveInd;
    }

    /**
     * Sets a new taxInclusiveInd
     *
     * If true, taxes are included in this charge.
     *
     * @param boolean $taxInclusiveInd
     * @return self
     */
    public function setTaxInclusiveInd($taxInclusiveInd)
    {
        $this->taxInclusiveInd = $taxInclusiveInd;

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
     * Gets as guaranteeInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @return boolean
     */
    public function getGuaranteeInd()
    {
        return $this->guaranteeInd;
    }

    /**
     * Sets a new guaranteeInd
     *
     * If true, a guarantee payment or hold is required.
     *
     * @param boolean $guaranteeInd
     * @return self
     */
    public function setGuaranteeInd($guaranteeInd)
    {
        $this->guaranteeInd = $guaranteeInd;

        return $this;
    }

    /**
     * Gets as includedInRateInd
     *
     * If true, this amount is included in the base ground transportation rate.
     *
     * @return boolean
     */
    public function getIncludedInRateInd()
    {
        return $this->includedInRateInd;
    }

    /**
     * Sets a new includedInRateInd
     *
     * If true, this amount is included in the base ground transportation rate.
     *
     * @param boolean $includedInRateInd
     * @return self
     */
    public function setIncludedInRateInd($includedInRateInd)
    {
        $this->includedInRateInd = $includedInRateInd;

        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * If true, this surcharge or tax is required in the ground transportation
     * reservation.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, this surcharge or tax is required in the ground transportation
     * reservation.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }

    /**
     * Gets as chargePurpose
     *
     * A charge purpose type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListVehChargePurposeType
     */
    public function getChargePurpose()
    {
        return $this->chargePurpose;
    }

    /**
     * Sets a new chargePurpose
     *
     * A charge purpose type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListVehChargePurposeType $chargePurpose
     * @return self
     */
    public function setChargePurpose(\Davispeixoto\OpenTravelAlliance\ListVehChargePurposeType $chargePurpose)
    {
        $this->chargePurpose = $chargePurpose;

        return $this;
    }

    /**
     * Gets as minMax
     *
     * Information on any minimum or maximum amounts, if appropriate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\MinMaxAType
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
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\MinMaxAType
     * $minMax
     * @return self
     */
    public function setMinMax(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\MinMaxAType $minMax)
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\CalculationAType
     * $calculation
     */
    public function addToCalculation(
        \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\CalculationAType $calculation
    ) {
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\CalculationAType[]
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\CalculationAType[]
     * $calculation
     * @return self
     */
    public function setCalculation(array $calculation)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * Adds as taxes
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\TaxesAType
     * $taxes
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\TaxesAType $taxes)
    {
        $this->taxes[] = $taxes;

        return $this;
    }

    /**
     * isset taxes
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\TaxesAType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Detailed information on one specific tax associated with a specific charge
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceChargesType\TaxesAType[]
     * $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }


}

