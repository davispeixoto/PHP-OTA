<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTATourActivityCancelRQ
 */
class OTATourActivityCancelRQ
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
     * Point of sale information for the requestor of the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Detailed contact information if a third-party company and/or individual is
     * requesting this reservation cancellation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     */
    private $contactDetail = null;

    /**
     * The confirmation number for the booked reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ConfirmationAType
     * $confirmation
     */
    private $confirmation = null;

    /**
     * Core information about the tour and/or activity being cancelled, including ID(s)
     * and name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType[]
     * $participantInfo
     */
    private $participantInfo = null;

    /**
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\PaymentInfoAType[]
     * $paymentInfo
     */
    private $paymentInfo = null;

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
     * Point of sale information for the requestor of the reservation.
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
     * Point of sale information for the requestor of the reservation.
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
     * Point of sale information for the requestor of the reservation.
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
     * Point of sale information for the requestor of the reservation.
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
     * Point of sale information for the requestor of the reservation.
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
     * Gets as contactDetail
     *
     * Detailed contact information if a third-party company and/or individual is
     * requesting this reservation cancellation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }

    /**
     * Sets a new contactDetail
     *
     * Detailed contact information if a third-party company and/or individual is
     * requesting this reservation cancellation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     * @return self
     */
    public function setContactDetail(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail)
    {
        $this->contactDetail = $contactDetail;

        return $this;
    }

    /**
     * Gets as confirmation
     *
     * The confirmation number for the booked reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ConfirmationAType
     */
    public function getConfirmation()
    {
        return $this->confirmation;
    }

    /**
     * Sets a new confirmation
     *
     * The confirmation number for the booked reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ConfirmationAType
     * $confirmation
     * @return self
     */
    public function setConfirmation(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ConfirmationAType $confirmation
    ) {
        $this->confirmation = $confirmation;

        return $this;
    }

    /**
     * Gets as basicInfo
     *
     * Core information about the tour and/or activity being cancelled, including ID(s)
     * and name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\BasicInfoAType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core information about the tour and/or activity being cancelled, including ID(s)
     * and name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(\Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\BasicInfoAType $basicInfo)
    {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Adds as participantInfo
     *
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType
     * $participantInfo
     */
    public function addToParticipantInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType $participantInfo
    ) {
        $this->participantInfo[] = $participantInfo;

        return $this;
    }

    /**
     * isset participantInfo
     *
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantInfo($index)
    {
        return isset($this->participantInfo[$index]);
    }

    /**
     * unset participantInfo
     *
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantInfo($index)
    {
        unset($this->participantInfo[$index]);
    }

    /**
     * Gets as participantInfo
     *
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType[]
     */
    public function getParticipantInfo()
    {
        return $this->participantInfo;
    }

    /**
     * Sets a new participantInfo
     *
     * Individual participant and participant category details. This can be used to
     * pass participant information for verification purposes or to associate with
     * payment information for any cancellation fees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType[]
     * $participantInfo
     * @return self
     */
    public function setParticipantInfo(array $participantInfo)
    {
        $this->participantInfo = $participantInfo;

        return $this;
    }

    /**
     * Adds as paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\PaymentInfoAType
     * $paymentInfo
     */
    public function addToPaymentInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\PaymentInfoAType $paymentInfo
    ) {
        $this->paymentInfo[] = $paymentInfo;

        return $this;
    }

    /**
     * isset paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentInfo($index)
    {
        return isset($this->paymentInfo[$index]);
    }

    /**
     * unset paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentInfo($index)
    {
        unset($this->paymentInfo[$index]);
    }

    /**
     * Gets as paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\PaymentInfoAType[]
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * Payment details that may be associated with an individual participant, a
     * participant category and/or a group. This can be used to pass credit card
     * information for verification purposes or to use for any cancellation fees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\PaymentInfoAType[]
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(array $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

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

