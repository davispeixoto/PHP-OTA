<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType;

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
     * When True, the associated site was not included as part of the original Request
     * message, but is being included as part of the Response message as an alternate
     * location.
     *
     * @property boolean $crossSellIndicator
     */
    private $crossSellIndicator = null;

    /**
     * Indicates how many events of a similar size this location has hosted in the past
     * year.
     *
     * @property integer $similarEventCount
     */
    private $similarEventCount = null;

    /**
     * This is used to send information about the data that will be returned,
     * specifically when and in what delivery mode.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RFPResponseDetailType $responseType
     */
    private $responseType = null;

    /**
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType
     * $contactInfos
     */
    private $contactInfos = null;

    /**
     * A collection of inquiry dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType
     * $dates
     */
    private $dates = null;

    /**
     * This holds information from a specific site on the requested data.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     */
    private $comment = null;

    /**
     * This is a UniqueID for this site for this request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID
     */
    private $siteID = null;

    /**
     * A collection of Insurance Information
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType
     * $insuranceInfos
     */
    private $insuranceInfos = null;

    /**
     * A collection of recommendation references.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     * $references
     */
    private $references = null;

    /**
     * Collection of additional information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     */
    private $additionalInfos = null;

    /**
     * A container for collecting answers to custom questions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $answers
     */
    private $answers = null;

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
     * Gets as crossSellIndicator
     *
     * When True, the associated site was not included as part of the original Request
     * message, but is being included as part of the Response message as an alternate
     * location.
     *
     * @return boolean
     */
    public function getCrossSellIndicator()
    {
        return $this->crossSellIndicator;
    }

    /**
     * Sets a new crossSellIndicator
     *
     * When True, the associated site was not included as part of the original Request
     * message, but is being included as part of the Response message as an alternate
     * location.
     *
     * @param boolean $crossSellIndicator
     * @return self
     */
    public function setCrossSellIndicator($crossSellIndicator)
    {
        $this->crossSellIndicator = $crossSellIndicator;

        return $this;
    }

    /**
     * Gets as similarEventCount
     *
     * Indicates how many events of a similar size this location has hosted in the past
     * year.
     *
     * @return integer
     */
    public function getSimilarEventCount()
    {
        return $this->similarEventCount;
    }

    /**
     * Sets a new similarEventCount
     *
     * Indicates how many events of a similar size this location has hosted in the past
     * year.
     *
     * @param integer $similarEventCount
     * @return self
     */
    public function setSimilarEventCount($similarEventCount)
    {
        $this->similarEventCount = $similarEventCount;

        return $this;
    }

    /**
     * Gets as responseType
     *
     * This is used to send information about the data that will be returned,
     * specifically when and in what delivery mode.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RFPResponseDetailType
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * This is used to send information about the data that will be returned,
     * specifically when and in what delivery mode.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RFPResponseDetailType $responseType
     * @return self
     */
    public function setResponseType(\Davispeixoto\OpenTravelAlliance\RFPResponseDetailType $responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * A collection of contacts (e.g. a catering manager, national sales office,
     * management company, franchisee)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType
     * $contactInfos
     * @return self
     */
    public function setContactInfos(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ContactInfosAType $contactInfos
    ) {
        $this->contactInfos = $contactInfos;

        return $this;
    }

    /**
     * Gets as dates
     *
     * A collection of inquiry dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * A collection of inquiry dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType
     * $dates
     * @return self
     */
    public function setDates(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\DatesAType $dates
    ) {
        $this->dates = $dates;

        return $this;
    }

    /**
     * Adds as comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This holds information from a specific site on the requested data.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as siteID
     *
     * This is a UniqueID for this site for this request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getSiteID()
    {
        return $this->siteID;
    }

    /**
     * Sets a new siteID
     *
     * This is a UniqueID for this site for this request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID
     * @return self
     */
    public function setSiteID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $siteID)
    {
        $this->siteID = $siteID;

        return $this;
    }

    /**
     * Gets as insuranceInfos
     *
     * A collection of Insurance Information
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType
     */
    public function getInsuranceInfos()
    {
        return $this->insuranceInfos;
    }

    /**
     * Sets a new insuranceInfos
     *
     * A collection of Insurance Information
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType
     * $insuranceInfos
     * @return self
     */
    public function setInsuranceInfos(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType $insuranceInfos
    ) {
        $this->insuranceInfos = $insuranceInfos;

        return $this;
    }

    /**
     * Adds as reference
     *
     * A collection of recommendation references.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType
     * $reference
     */
    public function addToReferences(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType $reference
    ) {
        $this->references[] = $reference;

        return $this;
    }

    /**
     * isset references
     *
     * A collection of recommendation references.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReferences($index)
    {
        return isset($this->references[$index]);
    }

    /**
     * unset references
     *
     * A collection of recommendation references.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReferences($index)
    {
        unset($this->references[$index]);
    }

    /**
     * Gets as references
     *
     * A collection of recommendation references.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Sets a new references
     *
     * A collection of recommendation references.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\ReferencesAType\ReferenceAType[]
     * $references
     * @return self
     */
    public function setReferences(array $references)
    {
        $this->references = $references;

        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * Collection of additional information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType
     * $additionalInfo
     */
    public function addToAdditionalInfos(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
    ) {
        $this->additionalInfos[] = $additionalInfo;

        return $this;
    }

    /**
     * isset additionalInfos
     *
     * Collection of additional information.
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
     * Collection of additional information.
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
     * Collection of additional information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * Collection of additional information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     * $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos)
    {
        $this->additionalInfos = $additionalInfos;

        return $this;
    }

    /**
     * Adds as answer
     *
     * A container for collecting answers to custom questions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType $answer
     */
    public function addToAnswers(\Davispeixoto\OpenTravelAlliance\CustomQuestionType $answer)
    {
        $this->answers[] = $answer;

        return $this;
    }

    /**
     * isset answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnswers($index)
    {
        return isset($this->answers[$index]);
    }

    /**
     * unset answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnswers($index)
    {
        unset($this->answers[$index]);
    }

    /**
     * Gets as answers
     *
     * A container for collecting answers to custom questions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomQuestionType[]
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Sets a new answers
     *
     * A container for collecting answers to custom questions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $answers
     * @return self
     */
    public function setAnswers(array $answers)
    {
        $this->answers = $answers;

        return $this;
    }


}

