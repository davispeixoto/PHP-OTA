<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAAirAvailRQ
 */
class OTAAirAvailRQ
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
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Indicates the same flight number on the same airline regardless of number of
     * stops in most cases.
     *  false
     *
     * @property boolean $directFlightsOnly
     */
    private $directFlightsOnly = null;

    /**
     * Information regarding the number of stops made.
     *
     * @property integer $numberStops
     */
    private $numberStops = null;

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * A collection of information that specifies how the message processing should
     * occur or how the data should be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Information on the locations between which availability is to be checked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType[]
     * $originDestinationInformation
     */
    private $originDestinationInformation = null;

    /**
     * Information used to specify a flight for which availability is to be checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     * $specificFlightInfo
     */
    private $specificFlightInfo = null;

    /**
     * Air Availability Request preference information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     */
    private $travelPreferences = null;

    /**
     * Used to specify passenger and fare information for which availability is to be
     * checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType
     * $travelerInfoSummary
     */
    private $travelerInfoSummary = null;

    /**
     * The flight segment information contained in the passenger's current booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     * $bookedFlightSegment
     */
    private $bookedFlightSegment = null;

    /**
     * Merchandising offers associated with the fare or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

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
     * Gets as directFlightsOnly
     *
     * Indicates the same flight number on the same airline regardless of number of
     * stops in most cases.
     *  false
     *
     * @return boolean
     */
    public function getDirectFlightsOnly()
    {
        return $this->directFlightsOnly;
    }

    /**
     * Sets a new directFlightsOnly
     *
     * Indicates the same flight number on the same airline regardless of number of
     * stops in most cases.
     *  false
     *
     * @param boolean $directFlightsOnly
     * @return self
     */
    public function setDirectFlightsOnly($directFlightsOnly)
    {
        $this->directFlightsOnly = $directFlightsOnly;

        return $this;
    }

    /**
     * Gets as numberStops
     *
     * Information regarding the number of stops made.
     *
     * @return integer
     */
    public function getNumberStops()
    {
        return $this->numberStops;
    }

    /**
     * Sets a new numberStops
     *
     * Information regarding the number of stops made.
     *
     * @param integer $numberStops
     * @return self
     */
    public function setNumberStops($numberStops)
    {
        $this->numberStops = $numberStops;

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
     * Gets as processingInfo
     *
     * A collection of information that specifies how the message processing should
     * occur or how the data should be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * A collection of information that specifies how the message processing should
     * occur or how the data should be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

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
     * Adds as originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType
     * $originDestinationInformation
     */
    public function addToOriginDestinationInformation(
        \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType $originDestinationInformation
    ) {
        $this->originDestinationInformation[] = $originDestinationInformation;

        return $this;
    }

    /**
     * isset originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationInformation($index)
    {
        return isset($this->originDestinationInformation[$index]);
    }

    /**
     * unset originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationInformation($index)
    {
        unset($this->originDestinationInformation[$index]);
    }

    /**
     * Gets as originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType[]
     */
    public function getOriginDestinationInformation()
    {
        return $this->originDestinationInformation;
    }

    /**
     * Sets a new originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirAvailRQ\OriginDestinationInformationAType[]
     * $originDestinationInformation
     * @return self
     */
    public function setOriginDestinationInformation(array $originDestinationInformation)
    {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }

    /**
     * Gets as specificFlightInfo
     *
     * Information used to specify a flight for which availability is to be checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     */
    public function getSpecificFlightInfo()
    {
        return $this->specificFlightInfo;
    }

    /**
     * Sets a new specificFlightInfo
     *
     * Information used to specify a flight for which availability is to be checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     * $specificFlightInfo
     * @return self
     */
    public function setSpecificFlightInfo(\Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType $specificFlightInfo)
    {
        $this->specificFlightInfo = $specificFlightInfo;

        return $this;
    }

    /**
     * Gets as travelPreferences
     *
     * Air Availability Request preference information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType
     */
    public function getTravelPreferences()
    {
        return $this->travelPreferences;
    }

    /**
     * Sets a new travelPreferences
     *
     * Air Availability Request preference information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     * @return self
     */
    public function setTravelPreferences(\Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences)
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }

    /**
     * Gets as travelerInfoSummary
     *
     * Used to specify passenger and fare information for which availability is to be
     * checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType
     */
    public function getTravelerInfoSummary()
    {
        return $this->travelerInfoSummary;
    }

    /**
     * Sets a new travelerInfoSummary
     *
     * Used to specify passenger and fare information for which availability is to be
     * checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType
     * $travelerInfoSummary
     * @return self
     */
    public function setTravelerInfoSummary(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType $travelerInfoSummary
    ) {
        $this->travelerInfoSummary = $travelerInfoSummary;

        return $this;
    }

    /**
     * Adds as bookedFlightSegment
     *
     * The flight segment information contained in the passenger's current booking.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType
     * $bookedFlightSegment
     */
    public function addToBookedFlightSegment(
        \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $bookedFlightSegment
    ) {
        $this->bookedFlightSegment[] = $bookedFlightSegment;

        return $this;
    }

    /**
     * isset bookedFlightSegment
     *
     * The flight segment information contained in the passenger's current booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookedFlightSegment($index)
    {
        return isset($this->bookedFlightSegment[$index]);
    }

    /**
     * unset bookedFlightSegment
     *
     * The flight segment information contained in the passenger's current booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookedFlightSegment($index)
    {
        unset($this->bookedFlightSegment[$index]);
    }

    /**
     * Gets as bookedFlightSegment
     *
     * The flight segment information contained in the passenger's current booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     */
    public function getBookedFlightSegment()
    {
        return $this->bookedFlightSegment;
    }

    /**
     * Sets a new bookedFlightSegment
     *
     * The flight segment information contained in the passenger's current booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     * $bookedFlightSegment
     * @return self
     */
    public function setBookedFlightSegment(array $bookedFlightSegment)
    {
        $this->bookedFlightSegment = $bookedFlightSegment;

        return $this;
    }

    /**
     * Gets as offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     * @return self
     */
    public function setOffer(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}

