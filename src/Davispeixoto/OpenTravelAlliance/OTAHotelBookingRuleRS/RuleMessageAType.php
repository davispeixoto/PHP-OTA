<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS;

/**
 * Class representing RuleMessageAType
 */
class RuleMessageAType
{

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @property string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @property string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @property string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @property string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @property string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @property string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @property string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @property integer $tTIcode
     */
    private $tTIcode = null;

    /**
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @property string $infoSource
     */
    private $infoSource = null;

    /**
     * The state code in which the hotel property is located.
     *
     * @property string $stateProv
     */
    private $stateProv = null;

    /**
     * The postal code (zip code) of the hotel property.
     *
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * The code of the country in which the hotel property is located.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * The commission percentage that applies to this hotel property.
     *
     * @property float $commissionPercent
     */
    private $commissionPercent = null;

    /**
     * Specifies the check-in and check-out dates and the booking code or room type to
     * which the booking rules apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType
     * $statusApplication
     */
    private $statusApplication = null;

    /**
     * Specifies the number of adults and children to which the booking rules apply.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * A collection of booking rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     */
    private $bookingRules = null;

    /**
     * Advisory text related to the booking rules.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $advisoryText
     */
    private $advisoryText = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code
     * is decided between vendors. This attribute is optional if the hotel is an
     * independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for
     * independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is
     * decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;

        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;

        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo,
     * Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;

        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;

        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;

        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @return integer
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.Example: 123Note: This code is maintained by the Travel
     * Technology Initiative (TTI) and provides a unique way to identify a property
     * across a multiplicity of channels, service providers, tour companies,
     * representation companies and third parties involved in the booking,
     * administration and fulfillment of travel within the hospitality industry. For
     * more information: http://www.tti.org/tticodes.html
     *
     * @param integer $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;

        return $this;
    }

    /**
     * Gets as currencyCode
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
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as infoSource
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;

        return $this;
    }

    /**
     * Gets as stateProv
     *
     * The state code in which the hotel property is located.
     *
     * @return string
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * The state code in which the hotel property is located.
     *
     * @param string $stateProv
     * @return self
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as postalCode
     *
     * The postal code (zip code) of the hotel property.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * The postal code (zip code) of the hotel property.
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Gets as country
     *
     * The code of the country in which the hotel property is located.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The code of the country in which the hotel property is located.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets as commissionPercent
     *
     * The commission percentage that applies to this hotel property.
     *
     * @return float
     */
    public function getCommissionPercent()
    {
        return $this->commissionPercent;
    }

    /**
     * Sets a new commissionPercent
     *
     * The commission percentage that applies to this hotel property.
     *
     * @param float $commissionPercent
     * @return self
     */
    public function setCommissionPercent($commissionPercent)
    {
        $this->commissionPercent = $commissionPercent;

        return $this;
    }

    /**
     * Gets as statusApplication
     *
     * Specifies the check-in and check-out dates and the booking code or room type to
     * which the booking rules apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType
     */
    public function getStatusApplication()
    {
        return $this->statusApplication;
    }

    /**
     * Sets a new statusApplication
     *
     * Specifies the check-in and check-out dates and the booking code or room type to
     * which the booking rules apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType
     * $statusApplication
     * @return self
     */
    public function setStatusApplication(
        \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType $statusApplication
    ) {
        $this->statusApplication = $statusApplication;

        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Specifies the number of adults and children to which the booking rules apply.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Specifies the number of adults and children to which the booking rules apply.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(\Davispeixoto\OpenTravelAlliance\GuestCountType $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * A collection of booking rules.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType
     * $bookingRule
     */
    public function addToBookingRules(\Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;

        return $this;
    }

    /**
     * isset bookingRules
     *
     * A collection of booking rules.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * A collection of booking rules.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * A collection of booking rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * A collection of booking rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookingRulesType\BookingRuleAType[]
     * $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules)
    {
        $this->bookingRules = $bookingRules;

        return $this;
    }

    /**
     * Gets as advisoryText
     *
     * Advisory text related to the booking rules.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getAdvisoryText()
    {
        return $this->advisoryText;
    }

    /**
     * Sets a new advisoryText
     *
     * Advisory text related to the booking rules.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $advisoryText
     * @return self
     */
    public function setAdvisoryText(\Davispeixoto\OpenTravelAlliance\ParagraphType $advisoryText)
    {
        $this->advisoryText = $advisoryText;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

