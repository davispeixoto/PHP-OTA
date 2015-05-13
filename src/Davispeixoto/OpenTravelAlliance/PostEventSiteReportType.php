<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PostEventSiteReportType
 *
 * Provides event site information.
 * XSD Type: PostEventSiteReportType
 */
class PostEventSiteReportType
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
     * Defines the hotel location category. Refer to OpenTravel Code table Location
     * Category Codes (LOC).
     *
     * @property string $locationCategoryCode
     */
    private $locationCategoryCode = null;

    /**
     * When true, indicates the site is the primary facility for the event.
     *
     * @property boolean $primaryFacilityIndicator
     */
    private $primaryFacilityIndicator = null;

    /**
     * When true, indicates the site is the headquarter hotel for the event.
     *
     * @property boolean $headquarterHotelIndicator
     */
    private $headquarterHotelIndicator = null;

    /**
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @property string $propertyTypeCode
     */
    private $propertyTypeCode = null;

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
     * This is used to send information about the data that will be returned,
     * specifically when and in what delivery mode.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RFPResponseDetailType $responseType
     */
    private $responseType = null;

    /**
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventIDAType[] $eventID
     */
    private $eventID = null;

    /**
     * Date or date range for this event for this site. This date range encompasses any
     * pre-event, published and post event dates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\DateAType
     * $date
     */
    private $date = null;

    /**
     * A collection of contacts associated with a specific site.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     * $contacts
     */
    private $contacts = null;

    /**
     * The number of attendees by type at this site for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\AttendeeInfoAType[]
     * $attendeeInfo
     */
    private $attendeeInfo = null;

    /**
     * A collection of event days.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType
     * $eventDays
     */
    private $eventDays = null;

    /**
     * Describes an event at which products and services are displayed.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType[]
     * $exhibition
     */
    private $exhibition = null;

    /**
     * A collection of room blocks for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType
     * $roomBlocks
     */
    private $roomBlocks = null;

    /**
     * A collection of transportation requirements for this site for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     * $transportations
     */
    private $transportations = null;

    /**
     * Used to provide tax exemption information for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\TaxExemptInfoAType[]
     * $taxExemptInfo
     */
    private $taxExemptInfo = null;

    /**
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

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
     * Gets as locationCategoryCode
     *
     * Defines the hotel location category. Refer to OpenTravel Code table Location
     * Category Codes (LOC).
     *
     * @return string
     */
    public function getLocationCategoryCode()
    {
        return $this->locationCategoryCode;
    }

    /**
     * Sets a new locationCategoryCode
     *
     * Defines the hotel location category. Refer to OpenTravel Code table Location
     * Category Codes (LOC).
     *
     * @param string $locationCategoryCode
     * @return self
     */
    public function setLocationCategoryCode($locationCategoryCode)
    {
        $this->locationCategoryCode = $locationCategoryCode;

        return $this;
    }

    /**
     * Gets as primaryFacilityIndicator
     *
     * When true, indicates the site is the primary facility for the event.
     *
     * @return boolean
     */
    public function getPrimaryFacilityIndicator()
    {
        return $this->primaryFacilityIndicator;
    }

    /**
     * Sets a new primaryFacilityIndicator
     *
     * When true, indicates the site is the primary facility for the event.
     *
     * @param boolean $primaryFacilityIndicator
     * @return self
     */
    public function setPrimaryFacilityIndicator($primaryFacilityIndicator)
    {
        $this->primaryFacilityIndicator = $primaryFacilityIndicator;

        return $this;
    }

    /**
     * Gets as headquarterHotelIndicator
     *
     * When true, indicates the site is the headquarter hotel for the event.
     *
     * @return boolean
     */
    public function getHeadquarterHotelIndicator()
    {
        return $this->headquarterHotelIndicator;
    }

    /**
     * Sets a new headquarterHotelIndicator
     *
     * When true, indicates the site is the headquarter hotel for the event.
     *
     * @param boolean $headquarterHotelIndicator
     * @return self
     */
    public function setHeadquarterHotelIndicator($headquarterHotelIndicator)
    {
        $this->headquarterHotelIndicator = $headquarterHotelIndicator;

        return $this;
    }

    /**
     * Gets as propertyTypeCode
     *
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @return string
     */
    public function getPropertyTypeCode()
    {
        return $this->propertyTypeCode;
    }

    /**
     * Sets a new propertyTypeCode
     *
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @param string $propertyTypeCode
     * @return self
     */
    public function setPropertyTypeCode($propertyTypeCode)
    {
        $this->propertyTypeCode = $propertyTypeCode;

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
     * Adds as eventID
     *
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventIDAType
     * $eventID
     */
    public function addToEventID(\Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventIDAType $eventID)
    {
        $this->eventID[] = $eventID;

        return $this;
    }

    /**
     * isset eventID
     *
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventID($index)
    {
        return isset($this->eventID[$index]);
    }

    /**
     * unset eventID
     *
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventID($index)
    {
        unset($this->eventID[$index]);
    }

    /**
     * Gets as eventID
     *
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventIDAType[]
     */
    public function getEventID()
    {
        return $this->eventID;
    }

    /**
     * Sets a new eventID
     *
     * This is a UniqueID that is associated with an individual event. This element
     * repeats to accommodate the IDs of multiple systems.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventIDAType[]
     * $eventID
     * @return self
     */
    public function setEventID(array $eventID)
    {
        $this->eventID = $eventID;

        return $this;
    }

    /**
     * Gets as date
     *
     * Date or date range for this event for this site. This date range encompasses any
     * pre-event, published and post event dates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\DateAType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date or date range for this event for this site. This date range encompasses any
     * pre-event, published and post event dates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\DateAType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\DateAType $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts associated with a specific site.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType
     * $contact
     */
    public function addToContacts(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType $contact
    ) {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts associated with a specific site.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts associated with a specific site.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts associated with a specific site.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts associated with a specific site.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ContactsAType\ContactAType[]
     * $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Adds as attendeeInfo
     *
     * The number of attendees by type at this site for this event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\AttendeeInfoAType
     * $attendeeInfo
     */
    public function addToAttendeeInfo(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\AttendeeInfoAType $attendeeInfo
    ) {
        $this->attendeeInfo[] = $attendeeInfo;

        return $this;
    }

    /**
     * isset attendeeInfo
     *
     * The number of attendees by type at this site for this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAttendeeInfo($index)
    {
        return isset($this->attendeeInfo[$index]);
    }

    /**
     * unset attendeeInfo
     *
     * The number of attendees by type at this site for this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAttendeeInfo($index)
    {
        unset($this->attendeeInfo[$index]);
    }

    /**
     * Gets as attendeeInfo
     *
     * The number of attendees by type at this site for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\AttendeeInfoAType[]
     */
    public function getAttendeeInfo()
    {
        return $this->attendeeInfo;
    }

    /**
     * Sets a new attendeeInfo
     *
     * The number of attendees by type at this site for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\AttendeeInfoAType[]
     * $attendeeInfo
     * @return self
     */
    public function setAttendeeInfo(array $attendeeInfo)
    {
        $this->attendeeInfo = $attendeeInfo;

        return $this;
    }

    /**
     * Gets as eventDays
     *
     * A collection of event days.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType
     */
    public function getEventDays()
    {
        return $this->eventDays;
    }

    /**
     * Sets a new eventDays
     *
     * A collection of event days.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType
     * $eventDays
     * @return self
     */
    public function setEventDays(\Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\EventDaysAType $eventDays)
    {
        $this->eventDays = $eventDays;

        return $this;
    }

    /**
     * Adds as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType
     * $exhibition
     */
    public function addToExhibition(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType $exhibition
    ) {
        $this->exhibition[] = $exhibition;

        return $this;
    }

    /**
     * isset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExhibition($index)
    {
        return isset($this->exhibition[$index]);
    }

    /**
     * unset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExhibition($index)
    {
        unset($this->exhibition[$index]);
    }

    /**
     * Gets as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType[]
     */
    public function getExhibition()
    {
        return $this->exhibition;
    }

    /**
     * Sets a new exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\ExhibitionAType[]
     * $exhibition
     * @return self
     */
    public function setExhibition(array $exhibition)
    {
        $this->exhibition = $exhibition;

        return $this;
    }

    /**
     * Gets as roomBlocks
     *
     * A collection of room blocks for this event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType
     */
    public function getRoomBlocks()
    {
        return $this->roomBlocks;
    }

    /**
     * Sets a new roomBlocks
     *
     * A collection of room blocks for this event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType
     * $roomBlocks
     * @return self
     */
    public function setRoomBlocks(\Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\RoomBlocksAType $roomBlocks)
    {
        $this->roomBlocks = $roomBlocks;

        return $this;
    }

    /**
     * Adds as transportation
     *
     * A collection of transportation requirements for this site for this event.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType
     * $transportation
     */
    public function addToTransportations(
        \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType $transportation
    ) {
        $this->transportations[] = $transportation;

        return $this;
    }

    /**
     * isset transportations
     *
     * A collection of transportation requirements for this site for this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransportations($index)
    {
        return isset($this->transportations[$index]);
    }

    /**
     * unset transportations
     *
     * A collection of transportation requirements for this site for this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransportations($index)
    {
        unset($this->transportations[$index]);
    }

    /**
     * Gets as transportations
     *
     * A collection of transportation requirements for this site for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     */
    public function getTransportations()
    {
        return $this->transportations;
    }

    /**
     * Sets a new transportations
     *
     * A collection of transportation requirements for this site for this event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TransportationType\TransportationAType[]
     * $transportations
     * @return self
     */
    public function setTransportations(array $transportations)
    {
        $this->transportations = $transportations;

        return $this;
    }

    /**
     * Adds as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\TaxExemptInfoAType
     * $taxExemptInfo
     */
    public function addToTaxExemptInfo(
        \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\TaxExemptInfoAType $taxExemptInfo
    ) {
        $this->taxExemptInfo[] = $taxExemptInfo;

        return $this;
    }

    /**
     * isset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxExemptInfo($index)
    {
        return isset($this->taxExemptInfo[$index]);
    }

    /**
     * unset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxExemptInfo($index)
    {
        unset($this->taxExemptInfo[$index]);
    }

    /**
     * Gets as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\TaxExemptInfoAType[]
     */
    public function getTaxExemptInfo()
    {
        return $this->taxExemptInfo;
    }

    /**
     * Sets a new taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PostEventSiteReportType\TaxExemptInfoAType[]
     * $taxExemptInfo
     * @return self
     */
    public function setTaxExemptInfo(array $taxExemptInfo)
    {
        $this->taxExemptInfo = $taxExemptInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

