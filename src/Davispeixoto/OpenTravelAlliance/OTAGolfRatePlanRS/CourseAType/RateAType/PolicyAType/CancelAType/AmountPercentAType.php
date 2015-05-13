<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType\CancelAType;

/**
 * Class representing AmountPercentAType
 */
class AmountPercentAType
{

    /**
     * Indicates whether taxes are included when figuring the base amount.
     *
     * @property boolean $taxInclusiveInd
     */
    private $taxInclusiveInd = null;

    /**
     * Indicates whether fees, such as those imposed by a travel agency or other
     * booking agent, are included when figuring cancel penalties.
     *
     * @property boolean $feesInclusiveInd
     */
    private $feesInclusiveInd = null;

    /**
     * Provides the basis for how the amount of the guarantee is calculated.
     *
     * @property string $basisType
     */
    private $basisType = null;

    /**
     * The percentage used to calculate the amount.
     *
     * @property float $percent
     */
    private $percent = null;

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
     * A collection of taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Gets as taxInclusiveInd
     *
     * Indicates whether taxes are included when figuring the base amount.
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
     * Indicates whether taxes are included when figuring the base amount.
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
     * Gets as feesInclusiveInd
     *
     * Indicates whether fees, such as those imposed by a travel agency or other
     * booking agent, are included when figuring cancel penalties.
     *
     * @return boolean
     */
    public function getFeesInclusiveInd()
    {
        return $this->feesInclusiveInd;
    }

    /**
     * Sets a new feesInclusiveInd
     *
     * Indicates whether fees, such as those imposed by a travel agency or other
     * booking agent, are included when figuring cancel penalties.
     *
     * @param boolean $feesInclusiveInd
     * @return self
     */
    public function setFeesInclusiveInd($feesInclusiveInd)
    {
        $this->feesInclusiveInd = $feesInclusiveInd;

        return $this;
    }

    /**
     * Gets as basisType
     *
     * Provides the basis for how the amount of the guarantee is calculated.
     *
     * @return string
     */
    public function getBasisType()
    {
        return $this->basisType;
    }

    /**
     * Sets a new basisType
     *
     * Provides the basis for how the amount of the guarantee is calculated.
     *
     * @param string $basisType
     * @return self
     */
    public function setBasisType($basisType)
    {
        $this->basisType = $basisType;

        return $this;
    }

    /**
     * Gets as percent
     *
     * The percentage used to calculate the amount.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percentage used to calculate the amount.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

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
     * Gets as taxes
     *
     * A collection of taxes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Davispeixoto\OpenTravelAlliance\TaxesType $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }


}

