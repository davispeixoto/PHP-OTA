<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAAirBaggageRQ
 */
class OTAAirBaggageRQ
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
     * Point of Sale.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\POSAType $pOS
     */
    private $pOS = null;

    /**
     * Message level processing directives.OpenTravel Best Practice: Information
     * Message Level Processing Directives: For messages that have message level
     * processing directives specified, and also have child elements with attributes
     * where the same information may be specified, the child attributes are assumed to
     * inherit the message level processing directives UNLESS child-level information
     * has been specified (which then overrides the message-level directives, but ONLY
     * for the child-level specification.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\ProcessingInfoAType
     * $processingInfo
     */
    private $processingInfo = null;

    /**
     * Baggage information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\BaggageAType[]
     * $baggage
     */
    private $baggage = null;

    /**
     * Associated company information for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $company
     */
    private $company = null;

    /**
     * Optional services associated with electronic miscellaneous documents.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EMDLiteType[] $eMD
     */
    private $eMD = null;

    /**
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType[]
     * $fareInfo
     */
    private $fareInfo = null;

    /**
     * Flight segment information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     * $flightSegment
     */
    private $flightSegment = null;

    /**
     * Traveler loyalty program information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\LoyaltyProgramAType[]
     * $loyaltyProgram
     */
    private $loyaltyProgram = null;

    /**
     * Merchandising offers associated with the fare or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

    /**
     * PNR information for the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PNRAType $pNR
     */
    private $pNR = null;

    /**
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType[]
     * $pricingInfo
     */
    private $pricingInfo = null;

    /**
     * Service family information used to filter response results.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType[]
     * $serviceFamily
     */
    private $serviceFamily = null;

    /**
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\TravelerTypeAType[]
     * $travelerType
     */
    private $travelerType = null;

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
     * Gets as pOS
     *
     * Point of Sale.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\POSAType
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of Sale.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\POSAType $pOS
     * @return self
     */
    public function setPOS(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\POSAType $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as processingInfo
     *
     * Message level processing directives.OpenTravel Best Practice: Information
     * Message Level Processing Directives: For messages that have message level
     * processing directives specified, and also have child elements with attributes
     * where the same information may be specified, the child attributes are assumed to
     * inherit the message level processing directives UNLESS child-level information
     * has been specified (which then overrides the message-level directives, but ONLY
     * for the child-level specification.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\ProcessingInfoAType
     */
    public function getProcessingInfo()
    {
        return $this->processingInfo;
    }

    /**
     * Sets a new processingInfo
     *
     * Message level processing directives.OpenTravel Best Practice: Information
     * Message Level Processing Directives: For messages that have message level
     * processing directives specified, and also have child elements with attributes
     * where the same information may be specified, the child attributes are assumed to
     * inherit the message level processing directives UNLESS child-level information
     * has been specified (which then overrides the message-level directives, but ONLY
     * for the child-level specification.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\ProcessingInfoAType
     * $processingInfo
     * @return self
     */
    public function setProcessingInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\ProcessingInfoAType $processingInfo
    ) {
        $this->processingInfo = $processingInfo;

        return $this;
    }

    /**
     * Adds as baggage
     *
     * Baggage information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\BaggageAType $baggage
     */
    public function addToBaggage(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\BaggageAType $baggage)
    {
        $this->baggage[] = $baggage;

        return $this;
    }

    /**
     * isset baggage
     *
     * Baggage information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaggage($index)
    {
        return isset($this->baggage[$index]);
    }

    /**
     * unset baggage
     *
     * Baggage information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaggage($index)
    {
        unset($this->baggage[$index]);
    }

    /**
     * Gets as baggage
     *
     * Baggage information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\BaggageAType[]
     */
    public function getBaggage()
    {
        return $this->baggage;
    }

    /**
     * Sets a new baggage
     *
     * Baggage information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\BaggageAType[] $baggage
     * @return self
     */
    public function setBaggage(array $baggage)
    {
        $this->baggage = $baggage;

        return $this;
    }

    /**
     * Gets as company
     *
     * Associated company information for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * Associated company information for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $company
     * @return self
     */
    public function setCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Adds as eMD
     *
     * Optional services associated with electronic miscellaneous documents.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType $eMD
     */
    public function addToEMD(\Davispeixoto\OpenTravelAlliance\EMDLiteType $eMD)
    {
        $this->eMD[] = $eMD;

        return $this;
    }

    /**
     * isset eMD
     *
     * Optional services associated with electronic miscellaneous documents.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEMD($index)
    {
        return isset($this->eMD[$index]);
    }

    /**
     * unset eMD
     *
     * Optional services associated with electronic miscellaneous documents.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEMD($index)
    {
        unset($this->eMD[$index]);
    }

    /**
     * Gets as eMD
     *
     * Optional services associated with electronic miscellaneous documents.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EMDLiteType[]
     */
    public function getEMD()
    {
        return $this->eMD;
    }

    /**
     * Sets a new eMD
     *
     * Optional services associated with electronic miscellaneous documents.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EMDLiteType[] $eMD
     * @return self
     */
    public function setEMD(array $eMD)
    {
        $this->eMD = $eMD;

        return $this;
    }

    /**
     * Adds as fareInfo
     *
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType $fareInfo
     */
    public function addToFareInfo(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType $fareInfo)
    {
        $this->fareInfo[] = $fareInfo;

        return $this;
    }

    /**
     * isset fareInfo
     *
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
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
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
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
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Checked bag(s) included fare reference information.Note: Provides a reference
     * for fares that include checked bags as some baggage allowances and charges are
     * based on a fare code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\FareInfoAType[]
     * $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }

    /**
     * Adds as flightSegment
     *
     * Flight segment information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment
     */
    public function addToFlightSegment(\Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment)
    {
        $this->flightSegment[] = $flightSegment;

        return $this;
    }

    /**
     * isset flightSegment
     *
     * Flight segment information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * Flight segment information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * Flight segment information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * Flight segment information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[] $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\LoyaltyProgramAType
     * $loyaltyProgram
     */
    public function addToLoyaltyProgram(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\LoyaltyProgramAType $loyaltyProgram
    ) {
        $this->loyaltyProgram[] = $loyaltyProgram;

        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\LoyaltyProgramAType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\LoyaltyProgramAType[]
     * $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram)
    {
        $this->loyaltyProgram = $loyaltyProgram;

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
     * Gets as pNR
     *
     * PNR information for the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PNRAType
     */
    public function getPNR()
    {
        return $this->pNR;
    }

    /**
     * Sets a new pNR
     *
     * PNR information for the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PNRAType $pNR
     * @return self
     */
    public function setPNR(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PNRAType $pNR)
    {
        $this->pNR = $pNR;

        return $this;
    }

    /**
     * Adds as pricingInfo
     *
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType
     * $pricingInfo
     */
    public function addToPricingInfo(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType $pricingInfo)
    {
        $this->pricingInfo[] = $pricingInfo;

        return $this;
    }

    /**
     * isset pricingInfo
     *
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingInfo($index)
    {
        return isset($this->pricingInfo[$index]);
    }

    /**
     * unset pricingInfo
     *
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingInfo($index)
    {
        unset($this->pricingInfo[$index]);
    }

    /**
     * Gets as pricingInfo
     *
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType[]
     */
    public function getPricingInfo()
    {
        return $this->pricingInfo;
    }

    /**
     * Sets a new pricingInfo
     *
     * Pricing information including ticket information, optional charges,
     * restrictions, negotiated fares, private fares and original issuer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\PricingInfoAType[]
     * $pricingInfo
     * @return self
     */
    public function setPricingInfo(array $pricingInfo)
    {
        $this->pricingInfo = $pricingInfo;

        return $this;
    }

    /**
     * Adds as serviceFamily
     *
     * Service family information used to filter response results.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType
     * $serviceFamily
     */
    public function addToServiceFamily(\Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType $serviceFamily)
    {
        $this->serviceFamily[] = $serviceFamily;

        return $this;
    }

    /**
     * isset serviceFamily
     *
     * Service family information used to filter response results.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceFamily($index)
    {
        return isset($this->serviceFamily[$index]);
    }

    /**
     * unset serviceFamily
     *
     * Service family information used to filter response results.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceFamily($index)
    {
        unset($this->serviceFamily[$index]);
    }

    /**
     * Gets as serviceFamily
     *
     * Service family information used to filter response results.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType[]
     */
    public function getServiceFamily()
    {
        return $this->serviceFamily;
    }

    /**
     * Sets a new serviceFamily
     *
     * Service family information used to filter response results.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AncillaryServiceDetailType[]
     * $serviceFamily
     * @return self
     */
    public function setServiceFamily(array $serviceFamily)
    {
        $this->serviceFamily = $serviceFamily;

        return $this;
    }

    /**
     * Adds as travelerType
     *
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\TravelerTypeAType
     * $travelerType
     */
    public function addToTravelerType(\Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\TravelerTypeAType $travelerType)
    {
        $this->travelerType[] = $travelerType;

        return $this;
    }

    /**
     * isset travelerType
     *
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerType($index)
    {
        return isset($this->travelerType[$index]);
    }

    /**
     * unset travelerType
     *
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerType($index)
    {
        unset($this->travelerType[$index]);
    }

    /**
     * Gets as travelerType
     *
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\TravelerTypeAType[]
     */
    public function getTravelerType()
    {
        return $this->travelerType;
    }

    /**
     * Sets a new travelerType
     *
     * Traveler type and quantity information.Note: This contains the number of
     * travelers and their age classification if traveler details are not known.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ\TravelerTypeAType[]
     * $travelerType
     * @return self
     */
    public function setTravelerType(array $travelerType)
    {
        $this->travelerType = $travelerType;

        return $this;
    }


}

