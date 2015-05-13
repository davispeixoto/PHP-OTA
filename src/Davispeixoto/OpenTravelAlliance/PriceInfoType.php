<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PriceInfoType
 *
 * Specifies price info. Contains information that qualifies the amount priced.
 * XSD Type: PriceInfoType
 */
class PriceInfoType
{

    /**
     * Contains the occupancy pricing breakdown code. This code specifies the type of
     * passenger such as adult, child or infant. Refer to OpenTravel Code List Age
     * Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Contains the type of breakdown for the occupancy pricing (e.g., 1/2 = First and
     * second guest price; 3GT = Third guest price; 4GT = Fourth guest price; MGT =
     * Additional guest price; SGL = Single; DBL = Double; TPL = Triple; QUA = Quad;
     * QUI = Quin; and CAB = Cabin).
     *
     * @property string $breakdownType
     */
    private $breakdownType = null;

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
     * Specifies the basis for the price. Refer to OpenTravel Code List Charge Type
     * (CHG).
     *
     * @property string $chargeTypeCode
     */
    private $chargeTypeCode = null;

    /**
     * Free text that describes the price.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $priceDescription
     */
    private $priceDescription = null;

    /**
     * Gets as ageQualifyingCode
     *
     * Contains the occupancy pricing breakdown code. This code specifies the type of
     * passenger such as adult, child or infant. Refer to OpenTravel Code List Age
     * Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * Contains the occupancy pricing breakdown code. This code specifies the type of
     * passenger such as adult, child or infant. Refer to OpenTravel Code List Age
     * Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;

        return $this;
    }

    /**
     * Gets as breakdownType
     *
     * Contains the type of breakdown for the occupancy pricing (e.g., 1/2 = First and
     * second guest price; 3GT = Third guest price; 4GT = Fourth guest price; MGT =
     * Additional guest price; SGL = Single; DBL = Double; TPL = Triple; QUA = Quad;
     * QUI = Quin; and CAB = Cabin).
     *
     * @return string
     */
    public function getBreakdownType()
    {
        return $this->breakdownType;
    }

    /**
     * Sets a new breakdownType
     *
     * Contains the type of breakdown for the occupancy pricing (e.g., 1/2 = First and
     * second guest price; 3GT = Third guest price; 4GT = Fourth guest price; MGT =
     * Additional guest price; SGL = Single; DBL = Double; TPL = Triple; QUA = Quad;
     * QUI = Quin; and CAB = Cabin).
     *
     * @param string $breakdownType
     * @return self
     */
    public function setBreakdownType($breakdownType)
    {
        $this->breakdownType = $breakdownType;

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
     * Gets as chargeTypeCode
     *
     * Specifies the basis for the price. Refer to OpenTravel Code List Charge Type
     * (CHG).
     *
     * @return string
     */
    public function getChargeTypeCode()
    {
        return $this->chargeTypeCode;
    }

    /**
     * Sets a new chargeTypeCode
     *
     * Specifies the basis for the price. Refer to OpenTravel Code List Charge Type
     * (CHG).
     *
     * @param string $chargeTypeCode
     * @return self
     */
    public function setChargeTypeCode($chargeTypeCode)
    {
        $this->chargeTypeCode = $chargeTypeCode;

        return $this;
    }

    /**
     * Gets as priceDescription
     *
     * Free text that describes the price.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getPriceDescription()
    {
        return $this->priceDescription;
    }

    /**
     * Sets a new priceDescription
     *
     * Free text that describes the price.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $priceDescription
     * @return self
     */
    public function setPriceDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $priceDescription)
    {
        $this->priceDescription = $priceDescription;

        return $this;
    }


}

