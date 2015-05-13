<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType;

/**
 * Class representing SiteAType
 */
class SiteAType
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
     * Used to provide an approximate date for a site inspection.
     *
     * @property integer $approxSiteInspectionDate
     */
    private $approxSiteInspectionDate = null;

    /**
     * The number of antipicated attendees for the site inspection.
     *
     * @property integer $siteInspectionAttendeeQuantity
     */
    private $siteInspectionAttendeeQuantity = null;

    /**
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     * $promotions
     */
    private $promotions = null;

    /**
     * A collection of additional information requests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     */
    private $additionalInfos = null;

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
     * Gets as approxSiteInspectionDate
     *
     * Used to provide an approximate date for a site inspection.
     *
     * @return integer
     */
    public function getApproxSiteInspectionDate()
    {
        return $this->approxSiteInspectionDate;
    }

    /**
     * Sets a new approxSiteInspectionDate
     *
     * Used to provide an approximate date for a site inspection.
     *
     * @param integer $approxSiteInspectionDate
     * @return self
     */
    public function setApproxSiteInspectionDate($approxSiteInspectionDate)
    {
        $this->approxSiteInspectionDate = $approxSiteInspectionDate;

        return $this;
    }

    /**
     * Gets as siteInspectionAttendeeQuantity
     *
     * The number of antipicated attendees for the site inspection.
     *
     * @return integer
     */
    public function getSiteInspectionAttendeeQuantity()
    {
        return $this->siteInspectionAttendeeQuantity;
    }

    /**
     * Sets a new siteInspectionAttendeeQuantity
     *
     * The number of antipicated attendees for the site inspection.
     *
     * @param integer $siteInspectionAttendeeQuantity
     * @return self
     */
    public function setSiteInspectionAttendeeQuantity($siteInspectionAttendeeQuantity)
    {
        $this->siteInspectionAttendeeQuantity = $siteInspectionAttendeeQuantity;

        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo
     */
    public function addToContactInfos(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;

        return $this;
    }

    /**
     * isset contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee, etc.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos)
    {
        $this->contactInfos = $contactInfos;

        return $this;
    }

    /**
     * Adds as promotion
     *
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType
     * $promotion
     */
    public function addToPromotions(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType $promotion
    ) {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * isset promotions
     *
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotions($index)
    {
        return isset($this->promotions[$index]);
    }

    /**
     * unset promotions
     *
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotions($index)
    {
        unset($this->promotions[$index]);
    }

    /**
     * Gets as promotions
     *
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Sets a new promotions
     *
     * A collection of promotions that have similar date criteria as the meeting dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType[]
     * $promotions
     * @return self
     */
    public function setPromotions(array $promotions)
    {
        $this->promotions = $promotions;

        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * A collection of additional information requests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType
     * $additionalInfo
     */
    public function addToAdditionalInfos(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
    ) {
        $this->additionalInfos[] = $additionalInfo;

        return $this;
    }

    /**
     * isset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalInfos($index)
    {
        return isset($this->additionalInfos[$index]);
    }

    /**
     * unset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalInfos($index)
    {
        unset($this->additionalInfos[$index]);
    }

    /**
     * Gets as additionalInfos
     *
     * A collection of additional information requests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos)
    {
        $this->additionalInfos = $additionalInfos;

        return $this;
    }


}

