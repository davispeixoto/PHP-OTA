<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAAirGetOfferRQ
 */
class OTAAirGetOfferRQ
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
     * The maximum number of offers desired in the response.This is typically used to
     * constrain the offer results, allowing the processing engine to return the most
     * relevant offers. It is recommended that you confirm that your trading partners
     * support this functionality before implementing.
     *
     * @property integer $maxOfferQty
     */
    private $maxOfferQty = null;

    /**
     * Point of Sale identification that identifies the party or connection channel
     * making the request and is used for message authentication. Terminal, entity,
     * position, channel information and message password may be included.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\POSAType $pOS
     */
    private $pOS = null;

    /**
     * Offer pricing structure request information, including display and pricing
     * currency overrides. If no display or pricing currency information is provided,
     * the display and pricing currency will default to the value in POS/Source/
     * @ISOCurrency.The ticketing currency code is set in the ISOCurrency attribute in
     * POS/Source.
     *
     * If no DisplayCurrency or PricingCurrency codes are provided, the display and
     * pricing currency will default to the value in POS/Source/@ISOCurrency.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\PriceStructureAType
     * $priceStructure
     */
    private $priceStructure = null;

    /**
     * A container with request criteria used to determine the ancillary offer
     * response. Note that the structure of the elements allows criteria to be
     * specified for the entire trip or by individual traveler and/or arranger.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType
     * $requestCriterion
     */
    private $requestCriterion = null;

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
     * Gets as maxOfferQty
     *
     * The maximum number of offers desired in the response.This is typically used to
     * constrain the offer results, allowing the processing engine to return the most
     * relevant offers. It is recommended that you confirm that your trading partners
     * support this functionality before implementing.
     *
     * @return integer
     */
    public function getMaxOfferQty()
    {
        return $this->maxOfferQty;
    }

    /**
     * Sets a new maxOfferQty
     *
     * The maximum number of offers desired in the response.This is typically used to
     * constrain the offer results, allowing the processing engine to return the most
     * relevant offers. It is recommended that you confirm that your trading partners
     * support this functionality before implementing.
     *
     * @param integer $maxOfferQty
     * @return self
     */
    public function setMaxOfferQty($maxOfferQty)
    {
        $this->maxOfferQty = $maxOfferQty;

        return $this;
    }

    /**
     * Gets as pOS
     *
     * Point of Sale identification that identifies the party or connection channel
     * making the request and is used for message authentication. Terminal, entity,
     * position, channel information and message password may be included.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\POSAType
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of Sale identification that identifies the party or connection channel
     * making the request and is used for message authentication. Terminal, entity,
     * position, channel information and message password may be included.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\POSAType $pOS
     * @return self
     */
    public function setPOS(\Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\POSAType $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as priceStructure
     *
     * Offer pricing structure request information, including display and pricing
     * currency overrides. If no display or pricing currency information is provided,
     * the display and pricing currency will default to the value in POS/Source/
     * @ISOCurrency.The ticketing currency code is set in the ISOCurrency attribute in
     * POS/Source.
     *
     * If no DisplayCurrency or PricingCurrency codes are provided, the display and
     * pricing currency will default to the value in POS/Source/@ISOCurrency.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\PriceStructureAType
     */
    public function getPriceStructure()
    {
        return $this->priceStructure;
    }

    /**
     * Sets a new priceStructure
     *
     * Offer pricing structure request information, including display and pricing
     * currency overrides. If no display or pricing currency information is provided,
     * the display and pricing currency will default to the value in POS/Source/
     * @ISOCurrency.The ticketing currency code is set in the ISOCurrency attribute in
     * POS/Source.
     *
     * If no DisplayCurrency or PricingCurrency codes are provided, the display and
     * pricing currency will default to the value in POS/Source/@ISOCurrency.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\PriceStructureAType
     * $priceStructure
     * @return self
     */
    public function setPriceStructure(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\PriceStructureAType $priceStructure
    ) {
        $this->priceStructure = $priceStructure;

        return $this;
    }

    /**
     * Gets as requestCriterion
     *
     * A container with request criteria used to determine the ancillary offer
     * response. Note that the structure of the elements allows criteria to be
     * specified for the entire trip or by individual traveler and/or arranger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType
     */
    public function getRequestCriterion()
    {
        return $this->requestCriterion;
    }

    /**
     * Sets a new requestCriterion
     *
     * A container with request criteria used to determine the ancillary offer
     * response. Note that the structure of the elements allows criteria to be
     * specified for the entire trip or by individual traveler and/or arranger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType
     * $requestCriterion
     * @return self
     */
    public function setRequestCriterion(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType $requestCriterion
    ) {
        $this->requestCriterion = $requestCriterion;

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

