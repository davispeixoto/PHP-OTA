<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing FareInfoType
 *
 * Rules for this priced option.
 * XSD Type: FareInfoType
 */
class FareInfoType
{

    /**
     * If true, this is a negotiated fare.
     *
     * @property boolean $negotiatedFareInd
     */
    private $negotiatedFareInd = null;

    /**
     * A code used to identify the negotiated fare.
     *
     * @property string $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * The ATPCO category code for this negotiated fare.
     *
     * @property string $aTPCONegCategoryCode
     */
    private $aTPCONegCategoryCode = null;

    /**
     * The ISO 4217 currency code associated with the fare rule information.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The tariff number for the rule.
     *
     * @property string $tariffNumber
     */
    private $tariffNumber = null;

    /**
     * The number associated with the fare rule.
     *
     * @property string $ruleNumber
     */
    private $ruleNumber = null;

    /**
     * The routing number applicable to this fare.
     *
     * @property integer $routingNumber
     */
    private $routingNumber = null;

    /**
     * The number of cities applicable to this fare.
     *
     * @property integer $nbrOfCities
     */
    private $nbrOfCities = null;

    /**
     * Departure Date for this priced fare.
     *
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\FareReferenceAType[]
     * $fareReference
     */
    private $fareReference = null;

    /**
     * Information regarding restrictions governing use of the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\RuleInfoAType $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * The airline that filed the fare(s).
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     */
    private $filingAirline = null;

    /**
     * The marketing airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Departure point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Date information applicable to the fare rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\DateAType[] $date
     */
    private $date = null;

    /**
     * Fares and related information for this fare rule.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType[]
     * $fareInfo
     */
    private $fareInfo = null;

    /**
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage off the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\DiscountPricingAType
     * $discountPricing
     */
    private $discountPricing = null;

    /**
     * A city code valid for this fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\CityAType[] $city
     */
    private $city = null;

    /**
     * An airport code valid for this fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareInfoType\AirportAType[] $airport
     */
    private $airport = null;

    /**
     * Gets as negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @return boolean
     */
    public function getNegotiatedFareInd()
    {
        return $this->negotiatedFareInd;
    }

    /**
     * Sets a new negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @param boolean $negotiatedFareInd
     * @return self
     */
    public function setNegotiatedFareInd($negotiatedFareInd)
    {
        $this->negotiatedFareInd = $negotiatedFareInd;

        return $this;
    }

    /**
     * Gets as negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @return string
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @param string $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode($negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;

        return $this;
    }

    /**
     * Gets as aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @return string
     */
    public function getATPCONegCategoryCode()
    {
        return $this->aTPCONegCategoryCode;
    }

    /**
     * Sets a new aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @param string $aTPCONegCategoryCode
     * @return self
     */
    public function setATPCONegCategoryCode($aTPCONegCategoryCode)
    {
        $this->aTPCONegCategoryCode = $aTPCONegCategoryCode;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The ISO 4217 currency code associated with the fare rule information.
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
     * The ISO 4217 currency code associated with the fare rule information.
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
     * Gets as tariffNumber
     *
     * The tariff number for the rule.
     *
     * @return string
     */
    public function getTariffNumber()
    {
        return $this->tariffNumber;
    }

    /**
     * Sets a new tariffNumber
     *
     * The tariff number for the rule.
     *
     * @param string $tariffNumber
     * @return self
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;

        return $this;
    }

    /**
     * Gets as ruleNumber
     *
     * The number associated with the fare rule.
     *
     * @return string
     */
    public function getRuleNumber()
    {
        return $this->ruleNumber;
    }

    /**
     * Sets a new ruleNumber
     *
     * The number associated with the fare rule.
     *
     * @param string $ruleNumber
     * @return self
     */
    public function setRuleNumber($ruleNumber)
    {
        $this->ruleNumber = $ruleNumber;

        return $this;
    }

    /**
     * Gets as routingNumber
     *
     * The routing number applicable to this fare.
     *
     * @return integer
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * Sets a new routingNumber
     *
     * The routing number applicable to this fare.
     *
     * @param integer $routingNumber
     * @return self
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }

    /**
     * Gets as nbrOfCities
     *
     * The number of cities applicable to this fare.
     *
     * @return integer
     */
    public function getNbrOfCities()
    {
        return $this->nbrOfCities;
    }

    /**
     * Sets a new nbrOfCities
     *
     * The number of cities applicable to this fare.
     *
     * @param integer $nbrOfCities
     * @return self
     */
    public function setNbrOfCities($nbrOfCities)
    {
        $this->nbrOfCities = $nbrOfCities;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * Departure Date for this priced fare.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * Departure Date for this priced fare.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Adds as fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\FareReferenceAType
     * $fareReference
     */
    public function addToFareReference(\Davispeixoto\OpenTravelAlliance\FareInfoType\FareReferenceAType $fareReference)
    {
        $this->fareReference[] = $fareReference;

        return $this;
    }

    /**
     * isset fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareReference($index)
    {
        return isset($this->fareReference[$index]);
    }

    /**
     * unset fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareReference($index)
    {
        unset($this->fareReference[$index]);
    }

    /**
     * Gets as fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\FareReferenceAType[]
     */
    public function getFareReference()
    {
        return $this->fareReference;
    }

    /**
     * Sets a new fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket
     * designator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\FareReferenceAType[]
     * $fareReference
     * @return self
     */
    public function setFareReference(array $fareReference)
    {
        $this->fareReference = $fareReference;

        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\RuleInfoAType $ruleInfo
     * @return self
     */
    public function setRuleInfo(\Davispeixoto\OpenTravelAlliance\FareInfoType\RuleInfoAType $ruleInfo)
    {
        $this->ruleInfo = $ruleInfo;

        return $this;
    }

    /**
     * Gets as filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFilingAirline()
    {
        return $this->filingAirline;
    }

    /**
     * Sets a new filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline
     * @return self
     */
    public function setFilingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $filingAirline)
    {
        $this->filingAirline = $filingAirline;

        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * The marketing airline.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline
     */
    public function addToMarketingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline)
    {
        $this->marketingAirline[] = $marketingAirline;

        return $this;
    }

    /**
     * isset marketingAirline
     *
     * The marketing airline.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingAirline($index)
    {
        return isset($this->marketingAirline[$index]);
    }

    /**
     * unset marketingAirline
     *
     * The marketing airline.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingAirline($index)
    {
        unset($this->marketingAirline[$index]);
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure point of flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(\Davispeixoto\OpenTravelAlliance\LocationType $departureAirport)
    {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * Adds as date
     *
     * Date information applicable to the fare rules.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\DateAType $date
     */
    public function addToDate(\Davispeixoto\OpenTravelAlliance\FareInfoType\DateAType $date)
    {
        $this->date[] = $date;

        return $this;
    }

    /**
     * isset date
     *
     * Date information applicable to the fare rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date information applicable to the fare rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date information applicable to the fare rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date information applicable to the fare rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Adds as fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType $fareInfo
     */
    public function addToFareInfo(\Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType $fareInfo)
    {
        $this->fareInfo[] = $fareInfo;

        return $this;
    }

    /**
     * isset fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareInfo($index)
    {
        return isset($this->fareInfo[$index]);
    }

    /**
     * unset fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareInfo($index)
    {
        unset($this->fareInfo[$index]);
    }

    /**
     * Gets as fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\FareInfoAType[] $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }

    /**
     * Gets as discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage off the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\DiscountPricingAType
     */
    public function getDiscountPricing()
    {
        return $this->discountPricing;
    }

    /**
     * Sets a new discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage off the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\DiscountPricingAType
     * $discountPricing
     * @return self
     */
    public function setDiscountPricing(
        \Davispeixoto\OpenTravelAlliance\FareInfoType\DiscountPricingAType $discountPricing
    ) {
        $this->discountPricing = $discountPricing;

        return $this;
    }

    /**
     * Adds as city
     *
     * A city code valid for this fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\CityAType $city
     */
    public function addToCity(\Davispeixoto\OpenTravelAlliance\FareInfoType\CityAType $city)
    {
        $this->city[] = $city;

        return $this;
    }

    /**
     * isset city
     *
     * A city code valid for this fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCity($index)
    {
        return isset($this->city[$index]);
    }

    /**
     * unset city
     *
     * A city code valid for this fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCity($index)
    {
        unset($this->city[$index]);
    }

    /**
     * Gets as city
     *
     * A city code valid for this fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\CityAType[]
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * A city code valid for this fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\CityAType[] $city
     * @return self
     */
    public function setCity(array $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Adds as airport
     *
     * An airport code valid for this fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\AirportAType $airport
     */
    public function addToAirport(\Davispeixoto\OpenTravelAlliance\FareInfoType\AirportAType $airport)
    {
        $this->airport[] = $airport;

        return $this;
    }

    /**
     * isset airport
     *
     * An airport code valid for this fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirport($index)
    {
        return isset($this->airport[$index]);
    }

    /**
     * unset airport
     *
     * An airport code valid for this fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirport($index)
    {
        unset($this->airport[$index]);
    }

    /**
     * Gets as airport
     *
     * An airport code valid for this fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareInfoType\AirportAType[]
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Sets a new airport
     *
     * An airport code valid for this fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareInfoType\AirportAType[] $airport
     * @return self
     */
    public function setAirport(array $airport)
    {
        $this->airport = $airport;

        return $this;
    }


}

