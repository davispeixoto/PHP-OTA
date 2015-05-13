<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTARailShopRQ
 */
class OTARailShopRQ
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
     * Point of Sale Identification.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Passenger type and category information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PassengerTypeAType[]
     * $passengerType
     */
    private $passengerType = null;

    /**
     * Global preferences for all origin and destination locations for both outbound
     * and return trips. Note that these preferences may be overridden in the
     * OriginDestination/Preferences element.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PreferencesAType
     * $preferences
     */
    private $preferences = null;

    /**
     * Multimodal offer influencers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RailSearchCriteriaAType[]
     * $railSearchCriteria
     */
    private $railSearchCriteria = null;

    /**
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RateQualifierAType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Fare basis code(s) that apply to the whole trip.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\FareBasisCodeAType[]
     * $fareBasisCode
     */
    private $fareBasisCode = null;

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
     * Adds as source
     *
     * Point of Sale Identification.
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
     * Point of Sale Identification.
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
     * Point of Sale Identification.
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
     * Point of Sale Identification.
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
     * Point of Sale Identification.
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
     * Adds as originDestination
     *
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Information about the outbound (and optional return and connecting locations)
     * between which availability and low fares available are to be checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Passenger type and category information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PassengerTypeAType
     * $passengerType
     */
    public function addToPassengerType(\Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PassengerTypeAType $passengerType)
    {
        $this->passengerType[] = $passengerType;

        return $this;
    }

    /**
     * isset passengerType
     *
     * Passenger type and category information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Passenger type and category information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Passenger type and category information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PassengerTypeAType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Passenger type and category information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PassengerTypeAType[]
     * $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType)
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Gets as preferences
     *
     * Global preferences for all origin and destination locations for both outbound
     * and return trips. Note that these preferences may be overridden in the
     * OriginDestination/Preferences element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PreferencesAType
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Sets a new preferences
     *
     * Global preferences for all origin and destination locations for both outbound
     * and return trips. Note that these preferences may be overridden in the
     * OriginDestination/Preferences element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PreferencesAType
     * $preferences
     * @return self
     */
    public function setPreferences(\Davispeixoto\OpenTravelAlliance\OTARailShopRQ\PreferencesAType $preferences)
    {
        $this->preferences = $preferences;

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
     * Adds as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RailSearchCriteriaAType
     * $railSearchCriteria
     */
    public function addToRailSearchCriteria(
        \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RailSearchCriteriaAType $railSearchCriteria
    ) {
        $this->railSearchCriteria[] = $railSearchCriteria;

        return $this;
    }

    /**
     * isset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailSearchCriteria($index)
    {
        return isset($this->railSearchCriteria[$index]);
    }

    /**
     * unset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailSearchCriteria($index)
    {
        unset($this->railSearchCriteria[$index]);
    }

    /**
     * Gets as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RailSearchCriteriaAType[]
     */
    public function getRailSearchCriteria()
    {
        return $this->railSearchCriteria;
    }

    /**
     * Sets a new railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination,
     * just a network code and maximum connections and train type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RailSearchCriteriaAType[]
     * $railSearchCriteria
     * @return self
     */
    public function setRailSearchCriteria(array $railSearchCriteria)
    {
        $this->railSearchCriteria = $railSearchCriteria;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RateQualifierAType
     * $rateQualifier
     */
    public function addToRateQualifier(\Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RateQualifierAType $rateQualifier)
    {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of fares of interest to the traveler, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\RateQualifierAType[]
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Adds as fareBasisCode
     *
     * Fare basis code(s) that apply to the whole trip.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\FareBasisCodeAType
     * $fareBasisCode
     */
    public function addToFareBasisCode(\Davispeixoto\OpenTravelAlliance\OTARailShopRQ\FareBasisCodeAType $fareBasisCode)
    {
        $this->fareBasisCode[] = $fareBasisCode;

        return $this;
    }

    /**
     * isset fareBasisCode
     *
     * Fare basis code(s) that apply to the whole trip.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareBasisCode($index)
    {
        return isset($this->fareBasisCode[$index]);
    }

    /**
     * unset fareBasisCode
     *
     * Fare basis code(s) that apply to the whole trip.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareBasisCode($index)
    {
        unset($this->fareBasisCode[$index]);
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code(s) that apply to the whole trip.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\FareBasisCodeAType[]
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code(s) that apply to the whole trip.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailShopRQ\FareBasisCodeAType[]
     * $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(array $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

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

