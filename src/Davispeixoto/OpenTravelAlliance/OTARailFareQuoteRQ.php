<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTARailFareQuoteRQ
 */
class OTARailFareQuoteRQ
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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specific criteria for qualifying fare options.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\FareQuoteCriteriaAType[]
     * $fareQuoteCriteria
     */
    private $fareQuoteCriteria = null;

    /**
     * Up to 9 requested fare basis codes.
     *
     * @property string[] $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Traveler preferences including accommodation and class codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\TravelerPrefAType[]
     * $travelerPref
     */
    private $travelerPref = null;

    /**
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\PassengerCategoryAType[]
     * $passengerCategory
     */
    private $passengerCategory = null;

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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
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
     * Point of Sale Identification for the transaction initiator that includes the
     * identification information of the party that has made the reservation request
     * and optional information, such as an agency number assigned by IATA, ARC, ESRP
     * or TID.
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
     * Adds as fareQuoteCriteria
     *
     * Specific criteria for qualifying fare options.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\FareQuoteCriteriaAType
     * $fareQuoteCriteria
     */
    public function addToFareQuoteCriteria(
        \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\FareQuoteCriteriaAType $fareQuoteCriteria
    ) {
        $this->fareQuoteCriteria[] = $fareQuoteCriteria;

        return $this;
    }

    /**
     * isset fareQuoteCriteria
     *
     * Specific criteria for qualifying fare options.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareQuoteCriteria($index)
    {
        return isset($this->fareQuoteCriteria[$index]);
    }

    /**
     * unset fareQuoteCriteria
     *
     * Specific criteria for qualifying fare options.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareQuoteCriteria($index)
    {
        unset($this->fareQuoteCriteria[$index]);
    }

    /**
     * Gets as fareQuoteCriteria
     *
     * Specific criteria for qualifying fare options.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\FareQuoteCriteriaAType[]
     */
    public function getFareQuoteCriteria()
    {
        return $this->fareQuoteCriteria;
    }

    /**
     * Sets a new fareQuoteCriteria
     *
     * Specific criteria for qualifying fare options.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\FareQuoteCriteriaAType[]
     * $fareQuoteCriteria
     * @return self
     */
    public function setFareQuoteCriteria(array $fareQuoteCriteria)
    {
        $this->fareQuoteCriteria = $fareQuoteCriteria;

        return $this;
    }

    /**
     * Adds as fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @return self
     * @param string $fareBasisCode
     */
    public function addToFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode[] = $fareBasisCode;

        return $this;
    }

    /**
     * isset fareBasisCode
     *
     * Up to 9 requested fare basis codes.
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
     * Up to 9 requested fare basis codes.
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
     * Up to 9 requested fare basis codes.
     *
     * @return string[]
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Up to 9 requested fare basis codes.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(array $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Adds as travelerPref
     *
     * Traveler preferences including accommodation and class codes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\TravelerPrefAType
     * $travelerPref
     */
    public function addToTravelerPref(
        \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\TravelerPrefAType $travelerPref
    ) {
        $this->travelerPref[] = $travelerPref;

        return $this;
    }

    /**
     * isset travelerPref
     *
     * Traveler preferences including accommodation and class codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerPref($index)
    {
        return isset($this->travelerPref[$index]);
    }

    /**
     * unset travelerPref
     *
     * Traveler preferences including accommodation and class codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerPref($index)
    {
        unset($this->travelerPref[$index]);
    }

    /**
     * Gets as travelerPref
     *
     * Traveler preferences including accommodation and class codes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\TravelerPrefAType[]
     */
    public function getTravelerPref()
    {
        return $this->travelerPref;
    }

    /**
     * Sets a new travelerPref
     *
     * Traveler preferences including accommodation and class codes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\TravelerPrefAType[]
     * $travelerPref
     * @return self
     */
    public function setTravelerPref(array $travelerPref)
    {
        $this->travelerPref = $travelerPref;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier
     */
    public function addToRateQualifier(\Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier)
    {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
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
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
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
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifying information such as travel purpose, promotion codes and rate
     * category that may affect the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType[] $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Adds as passengerCategory
     *
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\PassengerCategoryAType
     * $passengerCategory
     */
    public function addToPassengerCategory(
        \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\PassengerCategoryAType $passengerCategory
    ) {
        $this->passengerCategory[] = $passengerCategory;

        return $this;
    }

    /**
     * isset passengerCategory
     *
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerCategory($index)
    {
        return isset($this->passengerCategory[$index]);
    }

    /**
     * unset passengerCategory
     *
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerCategory($index)
    {
        unset($this->passengerCategory[$index]);
    }

    /**
     * Gets as passengerCategory
     *
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\PassengerCategoryAType[]
     */
    public function getPassengerCategory()
    {
        return $this->passengerCategory;
    }

    /**
     * Sets a new passengerCategory
     *
     * Passenger type, category and quantity information, including occupation,
     * passenger qualifying codes, rate qualifiers and disability requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailFareQuoteRQ\PassengerCategoryAType[]
     * $passengerCategory
     * @return self
     */
    public function setPassengerCategory(array $passengerCategory)
    {
        $this->passengerCategory = $passengerCategory;

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

