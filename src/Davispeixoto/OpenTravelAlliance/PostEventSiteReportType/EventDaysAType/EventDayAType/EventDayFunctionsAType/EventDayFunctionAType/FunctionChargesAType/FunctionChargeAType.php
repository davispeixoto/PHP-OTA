<?php

namespace Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType;

/**
 * Class representing FunctionChargeAType
 */
class FunctionChargeAType
{

    /**
     * This describes charges related to a function (e.g. set-up; room rental;
     * break-out; breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code
     * List Event Charge (EVT).
     *
     * @property string $functionChargeCode
     */
    private $functionChargeCode = null;

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
     * @property \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * Gets as functionChargeCode
     *
     * This describes charges related to a function (e.g. set-up; room rental;
     * break-out; breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code
     * List Event Charge (EVT).
     *
     * @return string
     */
    public function getFunctionChargeCode()
    {
        return $this->functionChargeCode;
    }

    /**
     * Sets a new functionChargeCode
     *
     * This describes charges related to a function (e.g. set-up; room rental;
     * break-out; breakfast; lunch; dinner; miscellaneous). Refer to OpenTravel Code
     * List Event Charge (EVT).
     *
     * @param string $functionChargeCode
     * @return self
     */
    public function setFunctionChargeCode($functionChargeCode)
    {
        $this->functionChargeCode = $functionChargeCode;

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
     * @return \Davispeixoto\OpenTravelAlliance\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Davispeixoto\OpenTravelAlliance\TaxesType $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Gets as comment
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

