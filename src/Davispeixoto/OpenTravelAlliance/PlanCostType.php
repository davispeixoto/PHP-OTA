<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PlanCostType
 *
 * Contains information about the total price of the insurance plan.
 * XSD Type: PlanCostType
 */
class PlanCostType
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
     * Cost for the insurance coverage alone (excluding any fees/taxes).
     *
     * @property \Davispeixoto\OpenTravelAlliance\PlanCostType\BasePremiumAType
     * $basePremium
     */
    private $basePremium = null;

    /**
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $charges
     */
    private $charges = null;

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
     * Gets as basePremium
     *
     * Cost for the insurance coverage alone (excluding any fees/taxes).
     *
     * @return \Davispeixoto\OpenTravelAlliance\PlanCostType\BasePremiumAType
     */
    public function getBasePremium()
    {
        return $this->basePremium;
    }

    /**
     * Sets a new basePremium
     *
     * Cost for the insurance coverage alone (excluding any fees/taxes).
     *
     * @param \Davispeixoto\OpenTravelAlliance\PlanCostType\BasePremiumAType
     * $basePremium
     * @return self
     */
    public function setBasePremium(\Davispeixoto\OpenTravelAlliance\PlanCostType\BasePremiumAType $basePremium)
    {
        $this->basePremium = $basePremium;

        return $this;
    }

    /**
     * Adds as charge
     *
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToCharges(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charges[] = $charge;

        return $this;
    }

    /**
     * isset charges
     *
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharges($index)
    {
        return isset($this->charges[$index]);
    }

    /**
     * unset charges
     *
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharges($index)
    {
        unset($this->charges[$index]);
    }

    /**
     * Gets as charges
     *
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * Sets a new charges
     *
     * A container for any additional charges to the cost of the insurance plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $charges
     * @return self
     */
    public function setCharges(array $charges)
    {
        $this->charges = $charges;

        return $this;
    }


}

