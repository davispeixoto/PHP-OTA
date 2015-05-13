<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAAirBookRQ
 */
class OTAAirBookRQ
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
     * Specifies an action to be taken following the booking.
     *
     * @property string $resStatus
     */
    private $resStatus = null;

    /**
     * When true, pricing and booking of flights is requested. When false, only booking
     * of flights is requested.
     *
     * @property boolean $priceInd
     */
    private $priceInd = null;

    /**
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * A collection of all flight segments requested for booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType
     * $priceInfo
     */
    private $priceInfo = null;

    /**
     * All traveler information relevant to a booking request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo
     */
    private $travelerInfo = null;

    /**
     * All payment information relevant to a booking request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Information used to specify the ticketing arrangement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\TicketingAType[]
     * $ticketing
     */
    private $ticketing = null;

    /**
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\QueueAType[] $queue
     */
    private $queue = null;

    /**
     * This is used for PNR record locator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDType[] $eMDInfo
     */
    private $eMDInfo = null;

    /**
     * Information about an independent charitable donation made with the air booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DonationType $donationInformation
     */
    private $donationInformation = null;

    /**
     * Merchandising offers associated with the fare or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Gets as resStatus
     *
     * Specifies an action to be taken following the booking.
     *
     * @return string
     */
    public function getResStatus()
    {
        return $this->resStatus;
    }

    /**
     * Sets a new resStatus
     *
     * Specifies an action to be taken following the booking.
     *
     * @param string $resStatus
     * @return self
     */
    public function setResStatus($resStatus)
    {
        $this->resStatus = $resStatus;

        return $this;
    }

    /**
     * Gets as priceInd
     *
     * When true, pricing and booking of flights is requested. When false, only booking
     * of flights is requested.
     *
     * @return boolean
     */
    public function getPriceInd()
    {
        return $this->priceInd;
    }

    /**
     * Sets a new priceInd
     *
     * When true, pricing and booking of flights is requested. When false, only booking
     * of flights is requested.
     *
     * @param boolean $priceInd
     * @return self
     */
    public function setPriceInd($priceInd)
    {
        $this->priceInd = $priceInd;

        return $this;
    }

    /**
     * Adds as source
     *
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
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
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
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
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
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
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
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
     * This identifes the party making the booking request. Trading partners are open
     * to define their own UniqueID.
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
     * Gets as airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * A collection of all flight segments requested for booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Gets as priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType
     */
    public function getPriceInfo()
    {
        return $this->priceInfo;
    }

    /**
     * Sets a new priceInfo
     *
     * Pricing information for the air itinerary to be booked e.g. this data could come
     * from the OTA_AirPriceRS data.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType $priceInfo
     * @return self
     */
    public function setPriceInfo(\Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\PriceInfoAType $priceInfo)
    {
        $this->priceInfo = $priceInfo;

        return $this;
    }

    /**
     * Gets as travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerInfoType
     */
    public function getTravelerInfo()
    {
        return $this->travelerInfo;
    }

    /**
     * Sets a new travelerInfo
     *
     * All traveler information relevant to a booking request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo
     * @return self
     */
    public function setTravelerInfo(\Davispeixoto\OpenTravelAlliance\TravelerInfoType $travelerInfo)
    {
        $this->travelerInfo = $travelerInfo;

        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FulfillmentType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * All payment information relevant to a booking request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment
     * @return self
     */
    public function setFulfillment(\Davispeixoto\OpenTravelAlliance\FulfillmentType $fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }

    /**
     * Adds as ticketing
     *
     * Information used to specify the ticketing arrangement.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\TicketingAType $ticketing
     */
    public function addToTicketing(\Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\TicketingAType $ticketing)
    {
        $this->ticketing[] = $ticketing;

        return $this;
    }

    /**
     * isset ticketing
     *
     * Information used to specify the ticketing arrangement.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketing($index)
    {
        return isset($this->ticketing[$index]);
    }

    /**
     * unset ticketing
     *
     * Information used to specify the ticketing arrangement.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketing($index)
    {
        unset($this->ticketing[$index]);
    }

    /**
     * Gets as ticketing
     *
     * Information used to specify the ticketing arrangement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\TicketingAType[]
     */
    public function getTicketing()
    {
        return $this->ticketing;
    }

    /**
     * Sets a new ticketing
     *
     * Information used to specify the ticketing arrangement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\TicketingAType[] $ticketing
     * @return self
     */
    public function setTicketing(array $ticketing)
    {
        $this->ticketing = $ticketing;

        return $this;
    }

    /**
     * Adds as queue
     *
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\QueueAType $queue
     */
    public function addToQueue(\Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\QueueAType $queue)
    {
        $this->queue[] = $queue;

        return $this;
    }

    /**
     * isset queue
     *
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQueue($index)
    {
        return isset($this->queue[$index]);
    }

    /**
     * unset queue
     *
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQueue($index)
    {
        unset($this->queue[$index]);
    }

    /**
     * Gets as queue
     *
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\QueueAType[]
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Specifies information necessary to place this booking on a particular host
     * system queue.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBookRQ\QueueAType[] $queue
     * @return self
     */
    public function setQueue(array $queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * This is used for PNR record locator.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * This is used for PNR record locator.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Adds as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo
     */
    public function addToEMDInfo(\Davispeixoto\OpenTravelAlliance\EMDType $eMDInfo)
    {
        $this->eMDInfo[] = $eMDInfo;

        return $this;
    }

    /**
     * isset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEMDInfo($index)
    {
        return isset($this->eMDInfo[$index]);
    }

    /**
     * unset eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEMDInfo($index)
    {
        unset($this->eMDInfo[$index]);
    }

    /**
     * Gets as eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDType[]
     */
    public function getEMDInfo()
    {
        return $this->eMDInfo;
    }

    /**
     * Sets a new eMDInfo
     *
     * Provides the electronic miscellaneous document information for a previously
     * issued EMD.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDType[] $eMDInfo
     * @return self
     */
    public function setEMDInfo(array $eMDInfo)
    {
        $this->eMDInfo = $eMDInfo;

        return $this;
    }

    /**
     * Gets as donationInformation
     *
     * Information about an independent charitable donation made with the air booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DonationType
     */
    public function getDonationInformation()
    {
        return $this->donationInformation;
    }

    /**
     * Sets a new donationInformation
     *
     * Information about an independent charitable donation made with the air booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DonationType $donationInformation
     * @return self
     */
    public function setDonationInformation(\Davispeixoto\OpenTravelAlliance\DonationType $donationInformation)
    {
        $this->donationInformation = $donationInformation;

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

