<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{

    /**
     * A code representing a business rule that determines the charges for a guest
     * based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without
     * Adult). This attribute allows for an increase in rate by occupant class. Refer
     * to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Defines the age of a guest.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @property integer $count
     */
    private $count = null;

    /**
     * Defines the age range category or bucket a guest can be booked into. This is
     * typically used in conjunction with the age qualifying code to further define the
     * applicable age range.
     *
     * @property string $ageBucket
     */
    private $ageBucket = null;

    /**
     * A number qualifying the passenger price e.g. 1 with an Age Qualifying Code of 8
     * (Child) indicates a 1st child price; 2 = 2nd child price and so on.
     *
     * @property integer $priceQualifier
     */
    private $priceQualifier = null;

    /**
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @property string $priceBasis
     */
    private $priceBasis = null;

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
     * Gets as ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest
     * based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without
     * Adult). This attribute allows for an increase in rate by occupant class. Refer
     * to OpenTravel Code List Age Qualifying Code (AQC).
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
     * A code representing a business rule that determines the charges for a guest
     * based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without
     * Adult). This attribute allows for an increase in rate by occupant class. Refer
     * to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Gets as age
     *
     * Defines the age of a guest.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Defines the age of a guest.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @param integer $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into. This is
     * typically used in conjunction with the age qualifying code to further define the
     * applicable age range.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into. This is
     * typically used in conjunction with the age qualifying code to further define the
     * applicable age range.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;

        return $this;
    }

    /**
     * Gets as priceQualifier
     *
     * A number qualifying the passenger price e.g. 1 with an Age Qualifying Code of 8
     * (Child) indicates a 1st child price; 2 = 2nd child price and so on.
     *
     * @return integer
     */
    public function getPriceQualifier()
    {
        return $this->priceQualifier;
    }

    /**
     * Sets a new priceQualifier
     *
     * A number qualifying the passenger price e.g. 1 with an Age Qualifying Code of 8
     * (Child) indicates a 1st child price; 2 = 2nd child price and so on.
     *
     * @param integer $priceQualifier
     * @return self
     */
    public function setPriceQualifier($priceQualifier)
    {
        $this->priceQualifier = $priceQualifier;

        return $this;
    }

    /**
     * Gets as priceBasis
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @return string
     */
    public function getPriceBasis()
    {
        return $this->priceBasis;
    }

    /**
     * Sets a new priceBasis
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per
     * person, Per night, Per person per night, Per use.
     *
     * @param string $priceBasis
     * @return self
     */
    public function setPriceBasis($priceBasis)
    {
        $this->priceBasis = $priceBasis;

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


}

