<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAAirPriceRS
 */
class OTAAirPriceRS
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
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SuccessType[] $success
     */
    private $success = null;

    /**
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Provides priced itinerary information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     * $pricedItineraries
     */
    private $pricedItineraries = null;

    /**
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Pricing information which applies to all the priced itineraries.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType[]
     * $pricingOverview
     */
    private $pricingOverview = null;

    /**
     * Provides information concerning an airline private fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PrivateFareInfoAType[]
     * $privateFareInfo
     */
    private $privateFareInfo = null;

    /**
     * A collection of errors that occurred during the processing of a message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ErrorType[] $errors
     */
    private $errors = null;

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
     * Adds as success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SuccessType $success
     */
    public function addToSuccess(\Davispeixoto\OpenTravelAlliance\SuccessType $success)
    {
        $this->success[] = $success;

        return $this;
    }

    /**
     * isset success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSuccess($index)
    {
        return isset($this->success[$index]);
    }

    /**
     * unset success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSuccess($index)
    {
        unset($this->success[$index]);
    }

    /**
     * Gets as success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SuccessType[]
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SuccessType[] $success
     * @return self
     */
    public function setSuccess(array $success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Adds as pricedItinerary
     *
     * Provides priced itinerary information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType
     * $pricedItinerary
     */
    public function addToPricedItineraries(
        \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType $pricedItinerary
    ) {
        $this->pricedItineraries[] = $pricedItinerary;

        return $this;
    }

    /**
     * isset pricedItineraries
     *
     * Provides priced itinerary information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedItineraries($index)
    {
        return isset($this->pricedItineraries[$index]);
    }

    /**
     * unset pricedItineraries
     *
     * Provides priced itinerary information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedItineraries($index)
    {
        unset($this->pricedItineraries[$index]);
    }

    /**
     * Gets as pricedItineraries
     *
     * Provides priced itinerary information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     */
    public function getPricedItineraries()
    {
        return $this->pricedItineraries;
    }

    /**
     * Sets a new pricedItineraries
     *
     * Provides priced itinerary information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PricedItinerariesType\PricedItineraryAType[]
     * $pricedItineraries
     * @return self
     */
    public function setPricedItineraries(array $pricedItineraries)
    {
        $this->pricedItineraries = $pricedItineraries;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Used to identify the PNR containing the itinerary that was priced.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Adds as pricingOverview
     *
     * Pricing information which applies to all the priced itineraries.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType
     * $pricingOverview
     */
    public function addToPricingOverview(
        \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType $pricingOverview
    ) {
        $this->pricingOverview[] = $pricingOverview;

        return $this;
    }

    /**
     * isset pricingOverview
     *
     * Pricing information which applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingOverview($index)
    {
        return isset($this->pricingOverview[$index]);
    }

    /**
     * unset pricingOverview
     *
     * Pricing information which applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingOverview($index)
    {
        unset($this->pricingOverview[$index]);
    }

    /**
     * Gets as pricingOverview
     *
     * Pricing information which applies to all the priced itineraries.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType[]
     */
    public function getPricingOverview()
    {
        return $this->pricingOverview;
    }

    /**
     * Sets a new pricingOverview
     *
     * Pricing information which applies to all the priced itineraries.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType[]
     * $pricingOverview
     * @return self
     */
    public function setPricingOverview(array $pricingOverview)
    {
        $this->pricingOverview = $pricingOverview;

        return $this;
    }

    /**
     * Adds as privateFareInfo
     *
     * Provides information concerning an airline private fare.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PrivateFareInfoAType
     * $privateFareInfo
     */
    public function addToPrivateFareInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PrivateFareInfoAType $privateFareInfo
    ) {
        $this->privateFareInfo[] = $privateFareInfo;

        return $this;
    }

    /**
     * isset privateFareInfo
     *
     * Provides information concerning an airline private fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrivateFareInfo($index)
    {
        return isset($this->privateFareInfo[$index]);
    }

    /**
     * unset privateFareInfo
     *
     * Provides information concerning an airline private fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrivateFareInfo($index)
    {
        unset($this->privateFareInfo[$index]);
    }

    /**
     * Gets as privateFareInfo
     *
     * Provides information concerning an airline private fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PrivateFareInfoAType[]
     */
    public function getPrivateFareInfo()
    {
        return $this->privateFareInfo;
    }

    /**
     * Sets a new privateFareInfo
     *
     * Provides information concerning an airline private fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PrivateFareInfoAType[]
     * $privateFareInfo
     * @return self
     */
    public function setPrivateFareInfo(array $privateFareInfo)
    {
        $this->privateFareInfo = $privateFareInfo;

        return $this;
    }

    /**
     * Adds as error
     *
     * A collection of errors that occurred during the processing of a message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType $error
     */
    public function addToErrors(\Davispeixoto\OpenTravelAlliance\ErrorType $error)
    {
        $this->errors[] = $error;

        return $this;
    }

    /**
     * isset errors
     *
     * A collection of errors that occurred during the processing of a message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * A collection of errors that occurred during the processing of a message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * A collection of errors that occurred during the processing of a message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * A collection of errors that occurred during the processing of a message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;

        return $this;
    }


}

