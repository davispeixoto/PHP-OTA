<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType;

/**
 * Class representing EventBudgetAType
 */
class EventBudgetAType
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
     * Used to indicate the specific budget being described for the event. Apex added
     *
     * @property string $budgetType
     */
    private $budgetType = null;

    /**
     * If true, tax is included in the budget. If false, the budget does not include
     * taxes. Apex added.
     *
     * @property boolean $includesTaxInd
     */
    private $includesTaxInd = null;

    /**
     * If true, service fees are included in the budget. If false, the budget does not
     * include service fees. Apex added
     *
     * @property boolean $includesServiceFeesInd
     */
    private $includesServiceFeesInd = null;

    /**
     * If true, gratuity is included in the budget. If false, the budget does not
     * include gratuity. Apex added
     *
     * @property boolean $includesGratuityInd
     */
    private $includesGratuityInd = null;

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
     * Gets as budgetType
     *
     * Used to indicate the specific budget being described for the event. Apex added
     *
     * @return string
     */
    public function getBudgetType()
    {
        return $this->budgetType;
    }

    /**
     * Sets a new budgetType
     *
     * Used to indicate the specific budget being described for the event. Apex added
     *
     * @param string $budgetType
     * @return self
     */
    public function setBudgetType($budgetType)
    {
        $this->budgetType = $budgetType;

        return $this;
    }

    /**
     * Gets as includesTaxInd
     *
     * If true, tax is included in the budget. If false, the budget does not include
     * taxes. Apex added.
     *
     * @return boolean
     */
    public function getIncludesTaxInd()
    {
        return $this->includesTaxInd;
    }

    /**
     * Sets a new includesTaxInd
     *
     * If true, tax is included in the budget. If false, the budget does not include
     * taxes. Apex added.
     *
     * @param boolean $includesTaxInd
     * @return self
     */
    public function setIncludesTaxInd($includesTaxInd)
    {
        $this->includesTaxInd = $includesTaxInd;

        return $this;
    }

    /**
     * Gets as includesServiceFeesInd
     *
     * If true, service fees are included in the budget. If false, the budget does not
     * include service fees. Apex added
     *
     * @return boolean
     */
    public function getIncludesServiceFeesInd()
    {
        return $this->includesServiceFeesInd;
    }

    /**
     * Sets a new includesServiceFeesInd
     *
     * If true, service fees are included in the budget. If false, the budget does not
     * include service fees. Apex added
     *
     * @param boolean $includesServiceFeesInd
     * @return self
     */
    public function setIncludesServiceFeesInd($includesServiceFeesInd)
    {
        $this->includesServiceFeesInd = $includesServiceFeesInd;

        return $this;
    }

    /**
     * Gets as includesGratuityInd
     *
     * If true, gratuity is included in the budget. If false, the budget does not
     * include gratuity. Apex added
     *
     * @return boolean
     */
    public function getIncludesGratuityInd()
    {
        return $this->includesGratuityInd;
    }

    /**
     * Sets a new includesGratuityInd
     *
     * If true, gratuity is included in the budget. If false, the budget does not
     * include gratuity. Apex added
     *
     * @param boolean $includesGratuityInd
     * @return self
     */
    public function setIncludesGratuityInd($includesGratuityInd)
    {
        $this->includesGratuityInd = $includesGratuityInd;

        return $this;
    }


}

