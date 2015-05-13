<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACruiseCategoryAvailRS
 */
class OTACruiseCategoryAvailRS
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
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @property boolean $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SuccessType $success
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
     * Requested sailing information. Currency in which the fares are being returned.
     * Specifies the available inclusive package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Fare and associated categories information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType[]
     * $fareOption
     */
    private $fareOption = null;

    /**
     * Collection of cruise taxes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     */
    private $fee = null;

    /**
     * Advisory information returned by the cruise line.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     */
    private $information = null;

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
     * Gets as moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @return boolean
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * If true, this indicates more items are available. If false, no more items are
     * available.
     *
     * @param boolean $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;

        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * A reference to the last response returned. Originally set in the response
     * message and will be used in the next query for more details.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

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
     * Gets as success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     * Returning an empty element of this type indicates success.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SuccessType
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
     * @param \Davispeixoto\OpenTravelAlliance\SuccessType $success
     * @return self
     */
    public function setSuccess(\Davispeixoto\OpenTravelAlliance\SuccessType $success)
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
     * Gets as sailingInfo
     *
     * Requested sailing information. Currency in which the fares are being returned.
     * Specifies the available inclusive package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Requested sailing information. Currency in which the fares are being returned.
     * Specifies the available inclusive package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Adds as fareOption
     *
     * Fare and associated categories information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType
     * $fareOption
     */
    public function addToFareOption(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType $fareOption
    ) {
        $this->fareOption[] = $fareOption;

        return $this;
    }

    /**
     * isset fareOption
     *
     * Fare and associated categories information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareOption($index)
    {
        return isset($this->fareOption[$index]);
    }

    /**
     * unset fareOption
     *
     * Fare and associated categories information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareOption($index)
    {
        unset($this->fareOption[$index]);
    }

    /**
     * Gets as fareOption
     *
     * Fare and associated categories information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType[]
     */
    public function getFareOption()
    {
        return $this->fareOption;
    }

    /**
     * Sets a new fareOption
     *
     * Fare and associated categories information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRS\FareOptionAType[]
     * $fareOption
     * @return self
     */
    public function setFareOption(array $fareOption)
    {
        $this->fareOption = $fareOption;

        return $this;
    }

    /**
     * Gets as taxes
     *
     * Collection of cruise taxes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Collection of cruise taxes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxesType $taxes
     * @return self
     */
    public function setTaxes(\Davispeixoto\OpenTravelAlliance\TaxesType $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Specifies additional charges. (e.g., port charges, port services fee).
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Adds as information
     *
     * Advisory information returned by the cruise line.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $information
     */
    public function addToInformation(\Davispeixoto\OpenTravelAlliance\ParagraphType $information)
    {
        $this->information[] = $information;

        return $this;
    }

    /**
     * isset information
     *
     * Advisory information returned by the cruise line.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * Advisory information returned by the cruise line.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * Advisory information returned by the cruise line.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Advisory information returned by the cruise line.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;

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

