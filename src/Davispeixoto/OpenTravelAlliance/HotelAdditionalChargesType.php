<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelAdditionalChargesType
 *
 *
 * XSD Type: HotelAdditionalChargesType
 */
class HotelAdditionalChargesType
{

    /**
     * Total additional charges before taxes.
     *
     * @property float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * Total additional charges after taxes.
     *
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
     * Amenities or services to which a charge applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType\AdditionalChargeAType[]
     * $additionalCharge
     */
    private $additionalCharge = null;

    /**
     * Gets as amountBeforeTax
     *
     * Total additional charges before taxes.
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
     * Total additional charges before taxes.
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
     * Total additional charges after taxes.
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
     * Total additional charges after taxes.
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
     * Adds as additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType\AdditionalChargeAType
     * $additionalCharge
     */
    public function addToAdditionalCharge(
        \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType\AdditionalChargeAType $additionalCharge
    ) {
        $this->additionalCharge[] = $additionalCharge;

        return $this;
    }

    /**
     * isset additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalCharge($index)
    {
        return isset($this->additionalCharge[$index]);
    }

    /**
     * unset additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalCharge($index)
    {
        unset($this->additionalCharge[$index]);
    }

    /**
     * Gets as additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType\AdditionalChargeAType[]
     */
    public function getAdditionalCharge()
    {
        return $this->additionalCharge;
    }

    /**
     * Sets a new additionalCharge
     *
     * Amenities or services to which a charge applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType\AdditionalChargeAType[]
     * $additionalCharge
     * @return self
     */
    public function setAdditionalCharge(array $additionalCharge)
    {
        $this->additionalCharge = $additionalCharge;

        return $this;
    }


}

