<?php

namespace Davispeixoto\OpenTravelAlliance\AmountType;

/**
 * Class representing AdditionalGuestAmountsAType
 */
class AdditionalGuestAmountsAType
{

    /**
     * @property float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * @property float $amountAfterTax
     */
    private $amountAfterTax = null;

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
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     * $additionalGuestAmount
     */
    private $additionalGuestAmount = null;

    /**
     * Gets as amountBeforeTax
     *
     * @return float
     */
    public function getAmountBeforeTax()
    {
        return $this->amountBeforeTax;
    }

    /**
     * Sets a new amountBeforeTax
     *
     * @param float $amountBeforeTax
     * @return self
     */
    public function setAmountBeforeTax($amountBeforeTax)
    {
        $this->amountBeforeTax = $amountBeforeTax;

        return $this;
    }

    /**
     * Gets as amountAfterTax
     *
     * @return float
     */
    public function getAmountAfterTax()
    {
        return $this->amountAfterTax;
    }

    /**
     * Sets a new amountAfterTax
     *
     * @param float $amountAfterTax
     * @return self
     */
    public function setAmountAfterTax($amountAfterTax)
    {
        $this->amountAfterTax = $amountAfterTax;

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
     * Adds as additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType
     * $additionalGuestAmount
     */
    public function addToAdditionalGuestAmount(
        \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType $additionalGuestAmount
    ) {
        $this->additionalGuestAmount[] = $additionalGuestAmount;

        return $this;
    }

    /**
     * isset additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalGuestAmount($index)
    {
        return isset($this->additionalGuestAmount[$index]);
    }

    /**
     * unset additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalGuestAmount($index)
    {
        unset($this->additionalGuestAmount[$index]);
    }

    /**
     * Gets as additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     */
    public function getAdditionalGuestAmount()
    {
        return $this->additionalGuestAmount;
    }

    /**
     * Sets a new additionalGuestAmount
     *
     * Collection of incremental charges per age qualifying code for additional guests.
     * Amount charged for additional occupant is with respect to age group of the base
     * guests.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AdditionalGuestAmountType[]
     * $additionalGuestAmount
     * @return self
     */
    public function setAdditionalGuestAmount(array $additionalGuestAmount)
    {
        $this->additionalGuestAmount = $additionalGuestAmount;

        return $this;
    }


}

