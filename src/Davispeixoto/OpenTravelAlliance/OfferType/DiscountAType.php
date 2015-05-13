<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
{

    /**
     * The number of nights required to be booked in order to apply the discount (this
     * may be the extact number of nights required or the minimum number of nights
     * required).
     *
     * @property integer $nightsRequired
     */
    private $nightsRequired = null;

    /**
     * The number of nights discounted for each multiple of NightsRequired.
     *
     * @property integer $nightsDiscounted
     */
    private $nightsDiscounted = null;

    /**
     * This defines the pattern for the night(s) the discount applies (e.g., if
     * NightsRequired="7" and the NightsDiscounted="1" then DiscountPattern="NNNNNNY"
     * or DiscountPattern="0000001" when the discount is applied to the last night).
     *
     * @property string $discountPattern
     */
    private $discountPattern = null;

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
     * Defines the percentage which is deducted from the rate amounts if this offer is
     * applicable.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Defines the unit per which the unit the discount applies (e.g., per person per
     * stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $chargeUnitCode
     */
    private $chargeUnitCode = null;

    /**
     * Gets as nightsRequired
     *
     * The number of nights required to be booked in order to apply the discount (this
     * may be the extact number of nights required or the minimum number of nights
     * required).
     *
     * @return integer
     */
    public function getNightsRequired()
    {
        return $this->nightsRequired;
    }

    /**
     * Sets a new nightsRequired
     *
     * The number of nights required to be booked in order to apply the discount (this
     * may be the extact number of nights required or the minimum number of nights
     * required).
     *
     * @param integer $nightsRequired
     * @return self
     */
    public function setNightsRequired($nightsRequired)
    {
        $this->nightsRequired = $nightsRequired;

        return $this;
    }

    /**
     * Gets as nightsDiscounted
     *
     * The number of nights discounted for each multiple of NightsRequired.
     *
     * @return integer
     */
    public function getNightsDiscounted()
    {
        return $this->nightsDiscounted;
    }

    /**
     * Sets a new nightsDiscounted
     *
     * The number of nights discounted for each multiple of NightsRequired.
     *
     * @param integer $nightsDiscounted
     * @return self
     */
    public function setNightsDiscounted($nightsDiscounted)
    {
        $this->nightsDiscounted = $nightsDiscounted;

        return $this;
    }

    /**
     * Gets as discountPattern
     *
     * This defines the pattern for the night(s) the discount applies (e.g., if
     * NightsRequired="7" and the NightsDiscounted="1" then DiscountPattern="NNNNNNY"
     * or DiscountPattern="0000001" when the discount is applied to the last night).
     *
     * @return string
     */
    public function getDiscountPattern()
    {
        return $this->discountPattern;
    }

    /**
     * Sets a new discountPattern
     *
     * This defines the pattern for the night(s) the discount applies (e.g., if
     * NightsRequired="7" and the NightsDiscounted="1" then DiscountPattern="NNNNNNY"
     * or DiscountPattern="0000001" when the discount is applied to the last night).
     *
     * @param string $discountPattern
     * @return self
     */
    public function setDiscountPattern($discountPattern)
    {
        $this->discountPattern = $discountPattern;

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
     * Gets as percent
     *
     * Defines the percentage which is deducted from the rate amounts if this offer is
     * applicable.
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
     * Defines the percentage which is deducted from the rate amounts if this offer is
     * applicable.
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
     * Gets as chargeUnitCode
     *
     * Defines the unit per which the unit the discount applies (e.g., per person per
     * stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeUnitCode()
    {
        return $this->chargeUnitCode;
    }

    /**
     * Sets a new chargeUnitCode
     *
     * Defines the unit per which the unit the discount applies (e.g., per person per
     * stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeUnitCode
     * @return self
     */
    public function setChargeUnitCode($chargeUnitCode)
    {
        $this->chargeUnitCode = $chargeUnitCode;

        return $this;
    }


}

