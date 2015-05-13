<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTARailPriceRQ
 */
class OTARailPriceRQ
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
     * A rail itinerary to be priced.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType
     * $railItinerary
     */
    private $railItinerary = null;

    /**
     * The PNR address of the booking which needs to be priced, optionally including
     * train segments (that have already been booked) and a fare basis code to be used
     * to price the train segments in the PNR.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType
     * $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $paymentForm
     */
    private $paymentForm = null;

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
     * Gets as railItinerary
     *
     * A rail itinerary to be priced.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType
     */
    public function getRailItinerary()
    {
        return $this->railItinerary;
    }

    /**
     * Sets a new railItinerary
     *
     * A rail itinerary to be priced.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType
     * $railItinerary
     * @return self
     */
    public function setRailItinerary(\Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType $railItinerary)
    {
        $this->railItinerary = $railItinerary;

        return $this;
    }

    /**
     * Gets as bookingReferenceID
     *
     * The PNR address of the booking which needs to be priced, optionally including
     * train segments (that have already been booked) and a fare basis code to be used
     * to price the train segments in the PNR.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The PNR address of the booking which needs to be priced, optionally including
     * train segments (that have already been booked) and a fare basis code to be used
     * to price the train segments in the PNR.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType
     * $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType $bookingReferenceID
    ) {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType
     * $passengerInfo
     */
    public function addToPassengerInfo(\Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Specific passenger information, including passenger type, rate qualifier and
     * other passenger details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerCategoryDetailType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
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
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
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
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
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
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
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
     * Rate qualifying information for all travelers, such as travel purpose, promotion
     * codes and rate category that may affect the fare.
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
     * Adds as paymentForm
     *
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentForm
     */
    public function addToPaymentForm(\Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;

        return $this;
    }

    /**
     * isset paymentForm
     *
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Information about the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm)
    {
        $this->paymentForm = $paymentForm;

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

