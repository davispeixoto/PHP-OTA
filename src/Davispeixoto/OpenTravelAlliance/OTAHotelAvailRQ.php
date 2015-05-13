<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAHotelAvailRQ
 */
class OTAHotelAvailRQ
{

    /**
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Test or Production target system indicator.
     *
     * @property string $target
     */
    private $target = null;

    /**
     * The name of the Test or Production system.
     *
     * @property string $targetName
     */
    private $targetName = null;

    /**
     * The OpenTravel message version indicated by a decimal value.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @property integer $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @property string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @property boolean $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @property string $correlationID
     */
    private $correlationID = null;

    /**
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * A boolean flag that indicates the return of summary information in the response.
     *
     * @property boolean $summaryOnly
     */
    private $summaryOnly = null;

    /**
     * Defines the sort order of the returned property information.
     *
     * @property string $sortOrder
     */
    private $sortOrder = null;

    /**
     * A boolean flag that indicates the response should include ONLY those rates that
     * are available in the date range specified, or whether rates that are NOT
     * available should be shown. True returns only available rates; False returns all
     * rates.
     *
     * @property boolean $availRatesOnly
     */
    private $availRatesOnly = null;

    /**
     * When true, the response should include rooms with an availability status of 'on
     * request'. When false, the response should not include rooms with an availability
     * status of 'on request'.
     *
     * @property boolean $onRequestInd
     */
    private $onRequestInd = null;

    /**
     * A boolean flag that indicates the response message should send back only the
     * best rate available at the hotel property, as there could be multiple room types
     * and rates that meet the requested criteria (e.g.: rate range). Allowing that the
     * term "best rate" is subjective, the intent means the lowest rate that meets the
     * category of the input criteria, and may have the effect of limiting the return
     * to one rate quote as opposed to multiples.
     *
     * @property boolean $bestOnly
     */
    private $bestOnly = null;

    /**
     * A boolean flag that indicates the response message should send back only those
     * rates that are available within the range of the minimum and maximum amount
     * specified.
     *
     * @property boolean $rateRangeOnly
     */
    private $rateRangeOnly = null;

    /**
     * A boolean flag that indicates the response message should send back only those
     * rates that are an exact match to the requested criteria.
     *
     * @property boolean $exactMatchOnly
     */
    private $exactMatchOnly = null;

    /**
     * A boolean flag that indicates the response message should include availability
     * and rates that do not span the complete stay.
     *
     * @property boolean $allowPartialAvail
     */
    private $allowPartialAvail = null;

    /**
     * The code specifying the currency in which the response should be sent. Use ISO
     * 4217, three alpha code.
     *
     * @property string $requestedCurrency
     */
    private $requestedCurrency = null;

    /**
     * When true, indicates that response should only incude rates that match requested
     * currency.
     *
     * @property boolean $requestedCurrencyIndicator
     */
    private $requestedCurrencyIndicator = null;

    /**
     * When true, indicates that this is an availibility request for a modification to
     * an existing reservation.
     *  false
     *
     * @property boolean $isModify
     */
    private $isModify = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * @property string $searchCacheLevel
     */
    private $searchCacheLevel = null;

    /**
     * A boolean flag that indicates the response message should return only HotelStay
     * information. If true, no RoomStay information will be returned.
     *
     * @property boolean $hotelStayOnly
     */
    private $hotelStayOnly = null;

    /**
     * If true, the response message should contain room rate details.
     *
     * @property boolean $rateDetailsInd
     */
    private $rateDetailsInd = null;

    /**
     * If "true", then a link to a map will be returned in the response which indicates
     * the position of the matching hotel(s).
     *
     * @property boolean $mapRequired
     */
    private $mapRequired = null;

    /**
     * Map height in pixels.
     *
     * @property integer $mapHeight
     */
    private $mapHeight = null;

    /**
     * Map width in pixels.
     *
     * @property integer $mapWidth
     */
    private $mapWidth = null;

    /**
     * When true, indicates duplicate properties should be returned.
     *
     * @property boolean $duplicateInd
     */
    private $duplicateInd = null;

    /**
     * Indicates the type of pricing to return at the HotelStay level in the
     * availability results, such as None and Average.
     *
     * @property string $pricingMethod
     */
    private $pricingMethod = null;

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * A collection of AvailRequestSegment. Each segment includes a collection of
     * criteria that requests a bookable entity, which may include designated rate
     * plans, room types, amenities or services, and the request can be used for guest
     * rooms or other inventory items for which availability is sought. Each segment
     * would be presumed to have a unique date range for each request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType
     * $availRequestSegments
     */
    private $availRequestSegments = null;

    /**
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as target
     *
     * Test or Production target system indicator.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Test or Production target system indicator.
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Gets as targetName
     *
     * The name of the Test or Production system.
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Sets a new targetName
     *
     * The name of the Test or Production system.
     *
     * @param string $targetName
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Gets as version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @return integer
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @param integer $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;

        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @return boolean
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @param boolean $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;

        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;

        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * Gets as altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;

        return $this;
    }

    /**
     * Gets as summaryOnly
     *
     * A boolean flag that indicates the return of summary information in the response.
     *
     * @return boolean
     */
    public function getSummaryOnly()
    {
        return $this->summaryOnly;
    }

    /**
     * Sets a new summaryOnly
     *
     * A boolean flag that indicates the return of summary information in the response.
     *
     * @param boolean $summaryOnly
     * @return self
     */
    public function setSummaryOnly($summaryOnly)
    {
        $this->summaryOnly = $summaryOnly;

        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * Defines the sort order of the returned property information.
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * Defines the sort order of the returned property information.
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Gets as availRatesOnly
     *
     * A boolean flag that indicates the response should include ONLY those rates that
     * are available in the date range specified, or whether rates that are NOT
     * available should be shown. True returns only available rates; False returns all
     * rates.
     *
     * @return boolean
     */
    public function getAvailRatesOnly()
    {
        return $this->availRatesOnly;
    }

    /**
     * Sets a new availRatesOnly
     *
     * A boolean flag that indicates the response should include ONLY those rates that
     * are available in the date range specified, or whether rates that are NOT
     * available should be shown. True returns only available rates; False returns all
     * rates.
     *
     * @param boolean $availRatesOnly
     * @return self
     */
    public function setAvailRatesOnly($availRatesOnly)
    {
        $this->availRatesOnly = $availRatesOnly;

        return $this;
    }

    /**
     * Gets as onRequestInd
     *
     * When true, the response should include rooms with an availability status of 'on
     * request'. When false, the response should not include rooms with an availability
     * status of 'on request'.
     *
     * @return boolean
     */
    public function getOnRequestInd()
    {
        return $this->onRequestInd;
    }

    /**
     * Sets a new onRequestInd
     *
     * When true, the response should include rooms with an availability status of 'on
     * request'. When false, the response should not include rooms with an availability
     * status of 'on request'.
     *
     * @param boolean $onRequestInd
     * @return self
     */
    public function setOnRequestInd($onRequestInd)
    {
        $this->onRequestInd = $onRequestInd;

        return $this;
    }

    /**
     * Gets as bestOnly
     *
     * A boolean flag that indicates the response message should send back only the
     * best rate available at the hotel property, as there could be multiple room types
     * and rates that meet the requested criteria (e.g.: rate range). Allowing that the
     * term "best rate" is subjective, the intent means the lowest rate that meets the
     * category of the input criteria, and may have the effect of limiting the return
     * to one rate quote as opposed to multiples.
     *
     * @return boolean
     */
    public function getBestOnly()
    {
        return $this->bestOnly;
    }

    /**
     * Sets a new bestOnly
     *
     * A boolean flag that indicates the response message should send back only the
     * best rate available at the hotel property, as there could be multiple room types
     * and rates that meet the requested criteria (e.g.: rate range). Allowing that the
     * term "best rate" is subjective, the intent means the lowest rate that meets the
     * category of the input criteria, and may have the effect of limiting the return
     * to one rate quote as opposed to multiples.
     *
     * @param boolean $bestOnly
     * @return self
     */
    public function setBestOnly($bestOnly)
    {
        $this->bestOnly = $bestOnly;

        return $this;
    }

    /**
     * Gets as rateRangeOnly
     *
     * A boolean flag that indicates the response message should send back only those
     * rates that are available within the range of the minimum and maximum amount
     * specified.
     *
     * @return boolean
     */
    public function getRateRangeOnly()
    {
        return $this->rateRangeOnly;
    }

    /**
     * Sets a new rateRangeOnly
     *
     * A boolean flag that indicates the response message should send back only those
     * rates that are available within the range of the minimum and maximum amount
     * specified.
     *
     * @param boolean $rateRangeOnly
     * @return self
     */
    public function setRateRangeOnly($rateRangeOnly)
    {
        $this->rateRangeOnly = $rateRangeOnly;

        return $this;
    }

    /**
     * Gets as exactMatchOnly
     *
     * A boolean flag that indicates the response message should send back only those
     * rates that are an exact match to the requested criteria.
     *
     * @return boolean
     */
    public function getExactMatchOnly()
    {
        return $this->exactMatchOnly;
    }

    /**
     * Sets a new exactMatchOnly
     *
     * A boolean flag that indicates the response message should send back only those
     * rates that are an exact match to the requested criteria.
     *
     * @param boolean $exactMatchOnly
     * @return self
     */
    public function setExactMatchOnly($exactMatchOnly)
    {
        $this->exactMatchOnly = $exactMatchOnly;

        return $this;
    }

    /**
     * Gets as allowPartialAvail
     *
     * A boolean flag that indicates the response message should include availability
     * and rates that do not span the complete stay.
     *
     * @return boolean
     */
    public function getAllowPartialAvail()
    {
        return $this->allowPartialAvail;
    }

    /**
     * Sets a new allowPartialAvail
     *
     * A boolean flag that indicates the response message should include availability
     * and rates that do not span the complete stay.
     *
     * @param boolean $allowPartialAvail
     * @return self
     */
    public function setAllowPartialAvail($allowPartialAvail)
    {
        $this->allowPartialAvail = $allowPartialAvail;

        return $this;
    }

    /**
     * Gets as requestedCurrency
     *
     * The code specifying the currency in which the response should be sent. Use ISO
     * 4217, three alpha code.
     *
     * @return string
     */
    public function getRequestedCurrency()
    {
        return $this->requestedCurrency;
    }

    /**
     * Sets a new requestedCurrency
     *
     * The code specifying the currency in which the response should be sent. Use ISO
     * 4217, three alpha code.
     *
     * @param string $requestedCurrency
     * @return self
     */
    public function setRequestedCurrency($requestedCurrency)
    {
        $this->requestedCurrency = $requestedCurrency;

        return $this;
    }

    /**
     * Gets as requestedCurrencyIndicator
     *
     * When true, indicates that response should only incude rates that match requested
     * currency.
     *
     * @return boolean
     */
    public function getRequestedCurrencyIndicator()
    {
        return $this->requestedCurrencyIndicator;
    }

    /**
     * Sets a new requestedCurrencyIndicator
     *
     * When true, indicates that response should only incude rates that match requested
     * currency.
     *
     * @param boolean $requestedCurrencyIndicator
     * @return self
     */
    public function setRequestedCurrencyIndicator($requestedCurrencyIndicator)
    {
        $this->requestedCurrencyIndicator = $requestedCurrencyIndicator;

        return $this;
    }

    /**
     * Gets as isModify
     *
     * When true, indicates that this is an availibility request for a modification to
     * an existing reservation.
     *  false
     *
     * @return boolean
     */
    public function getIsModify()
    {
        return $this->isModify;
    }

    /**
     * Sets a new isModify
     *
     * When true, indicates that this is an availibility request for a modification to
     * an existing reservation.
     *  false
     *
     * @param boolean $isModify
     * @return self
     */
    public function setIsModify($isModify)
    {
        $this->isModify = $isModify;

        return $this;
    }

    /**
     * Gets as maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @return integer
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @param integer $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }

    /**
     * Gets as searchCacheLevel
     *
     * @return string
     */
    public function getSearchCacheLevel()
    {
        return $this->searchCacheLevel;
    }

    /**
     * Sets a new searchCacheLevel
     *
     * @param string $searchCacheLevel
     * @return self
     */
    public function setSearchCacheLevel($searchCacheLevel)
    {
        $this->searchCacheLevel = $searchCacheLevel;

        return $this;
    }

    /**
     * Gets as hotelStayOnly
     *
     * A boolean flag that indicates the response message should return only HotelStay
     * information. If true, no RoomStay information will be returned.
     *
     * @return boolean
     */
    public function getHotelStayOnly()
    {
        return $this->hotelStayOnly;
    }

    /**
     * Sets a new hotelStayOnly
     *
     * A boolean flag that indicates the response message should return only HotelStay
     * information. If true, no RoomStay information will be returned.
     *
     * @param boolean $hotelStayOnly
     * @return self
     */
    public function setHotelStayOnly($hotelStayOnly)
    {
        $this->hotelStayOnly = $hotelStayOnly;

        return $this;
    }

    /**
     * Gets as rateDetailsInd
     *
     * If true, the response message should contain room rate details.
     *
     * @return boolean
     */
    public function getRateDetailsInd()
    {
        return $this->rateDetailsInd;
    }

    /**
     * Sets a new rateDetailsInd
     *
     * If true, the response message should contain room rate details.
     *
     * @param boolean $rateDetailsInd
     * @return self
     */
    public function setRateDetailsInd($rateDetailsInd)
    {
        $this->rateDetailsInd = $rateDetailsInd;

        return $this;
    }

    /**
     * Gets as mapRequired
     *
     * If "true", then a link to a map will be returned in the response which indicates
     * the position of the matching hotel(s).
     *
     * @return boolean
     */
    public function getMapRequired()
    {
        return $this->mapRequired;
    }

    /**
     * Sets a new mapRequired
     *
     * If "true", then a link to a map will be returned in the response which indicates
     * the position of the matching hotel(s).
     *
     * @param boolean $mapRequired
     * @return self
     */
    public function setMapRequired($mapRequired)
    {
        $this->mapRequired = $mapRequired;

        return $this;
    }

    /**
     * Gets as mapHeight
     *
     * Map height in pixels.
     *
     * @return integer
     */
    public function getMapHeight()
    {
        return $this->mapHeight;
    }

    /**
     * Sets a new mapHeight
     *
     * Map height in pixels.
     *
     * @param integer $mapHeight
     * @return self
     */
    public function setMapHeight($mapHeight)
    {
        $this->mapHeight = $mapHeight;

        return $this;
    }

    /**
     * Gets as mapWidth
     *
     * Map width in pixels.
     *
     * @return integer
     */
    public function getMapWidth()
    {
        return $this->mapWidth;
    }

    /**
     * Sets a new mapWidth
     *
     * Map width in pixels.
     *
     * @param integer $mapWidth
     * @return self
     */
    public function setMapWidth($mapWidth)
    {
        $this->mapWidth = $mapWidth;

        return $this;
    }

    /**
     * Gets as duplicateInd
     *
     * When true, indicates duplicate properties should be returned.
     *
     * @return boolean
     */
    public function getDuplicateInd()
    {
        return $this->duplicateInd;
    }

    /**
     * Sets a new duplicateInd
     *
     * When true, indicates duplicate properties should be returned.
     *
     * @param boolean $duplicateInd
     * @return self
     */
    public function setDuplicateInd($duplicateInd)
    {
        $this->duplicateInd = $duplicateInd;

        return $this;
    }

    /**
     * Gets as pricingMethod
     *
     * Indicates the type of pricing to return at the HotelStay level in the
     * availability results, such as None and Average.
     *
     * @return string
     */
    public function getPricingMethod()
    {
        return $this->pricingMethod;
    }

    /**
     * Sets a new pricingMethod
     *
     * Indicates the type of pricing to return at the HotelStay level in the
     * availability results, such as None and Average.
     *
     * @param string $pricingMethod
     * @return self
     */
    public function setPricingMethod($pricingMethod)
    {
        $this->pricingMethod = $pricingMethod;

        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(\Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer)
    {
        $this->multimodalOffer = $multimodalOffer;

        return $this;
    }

    /**
     * Gets as availRequestSegments
     *
     * A collection of AvailRequestSegment. Each segment includes a collection of
     * criteria that requests a bookable entity, which may include designated rate
     * plans, room types, amenities or services, and the request can be used for guest
     * rooms or other inventory items for which availability is sought. Each segment
     * would be presumed to have a unique date range for each request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType
     */
    public function getAvailRequestSegments()
    {
        return $this->availRequestSegments;
    }

    /**
     * Sets a new availRequestSegments
     *
     * A collection of AvailRequestSegment. Each segment includes a collection of
     * criteria that requests a bookable entity, which may include designated rate
     * plans, room types, amenities or services, and the request can be used for guest
     * rooms or other inventory items for which availability is sought. Each segment
     * would be presumed to have a unique date range for each request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType
     * $availRequestSegments
     * @return self
     */
    public function setAvailRequestSegments(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType $availRequestSegments
    ) {
        $this->availRequestSegments = $availRequestSegments;

        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationIDs(
        \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationIDs[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * Collection of Hotel Reservation IDs associated with a given reservation, used
     * when asking for availability for the purpose of modifying an existing
     * reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationIDsType\HotelReservationIDAType[]
     * $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;

        return $this;
    }


}

