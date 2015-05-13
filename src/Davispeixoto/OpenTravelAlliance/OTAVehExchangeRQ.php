<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAVehExchangeRQ
 */
class OTAVehExchangeRQ
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
     * Identifies the reason for the transaction.
     *
     * @property string $rentalActionCode
     */
    private $rentalActionCode = null;

    /**
     * This is a code that represents the status of the rental agreement. Refer to the
     * enumerated list and annotations for additional information.
     *
     * @property string $rentalAgreementStatusCode
     */
    private $rentalAgreementStatusCode = null;

    /**
     * Used to request the version of the payload message desired for the response.
     *
     * @property string $reqRespVersion
     */
    private $reqRespVersion = null;

    /**
     * Describes the source of the transaction such as kiosk id or counter agent id.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified. In
     * some cases the ConfID may be used in lieu of a ContractID, dependent on business
     * needs.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confID
     */
    private $confID = null;

    /**
     * A contract number by which this rental can be uniquely identified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID
     */
    private $contractID = null;

    /**
     * This is the rental customer's information and typically is not needed to be
     * passed in this message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Typically this is used to provide the actual return date, time, and location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     * $pickUpReturnDetails
     */
    private $pickUpReturnDetails = null;

    /**
     * Location where the vehicle was exchanged.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\ExchangeLocationAType
     * $exchangeLocation
     */
    private $exchangeLocation = null;

    /**
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\VehicleAType[]
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Collection of adjustments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargeType[]
     * $adjustmentDetails
     */
    private $adjustmentDetails = null;

    /**
     * Used to indicate reasons for vehicle exchange.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $exchangeReason
     */
    private $exchangeReason = null;

    /**
     * A collection of remarks.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remarks
     */
    private $remarks = null;

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
     * Gets as rentalActionCode
     *
     * Identifies the reason for the transaction.
     *
     * @return string
     */
    public function getRentalActionCode()
    {
        return $this->rentalActionCode;
    }

    /**
     * Sets a new rentalActionCode
     *
     * Identifies the reason for the transaction.
     *
     * @param string $rentalActionCode
     * @return self
     */
    public function setRentalActionCode($rentalActionCode)
    {
        $this->rentalActionCode = $rentalActionCode;

        return $this;
    }

    /**
     * Gets as rentalAgreementStatusCode
     *
     * This is a code that represents the status of the rental agreement. Refer to the
     * enumerated list and annotations for additional information.
     *
     * @return string
     */
    public function getRentalAgreementStatusCode()
    {
        return $this->rentalAgreementStatusCode;
    }

    /**
     * Sets a new rentalAgreementStatusCode
     *
     * This is a code that represents the status of the rental agreement. Refer to the
     * enumerated list and annotations for additional information.
     *
     * @param string $rentalAgreementStatusCode
     * @return self
     */
    public function setRentalAgreementStatusCode($rentalAgreementStatusCode)
    {
        $this->rentalAgreementStatusCode = $rentalAgreementStatusCode;

        return $this;
    }

    /**
     * Gets as reqRespVersion
     *
     * Used to request the version of the payload message desired for the response.
     *
     * @return string
     */
    public function getReqRespVersion()
    {
        return $this->reqRespVersion;
    }

    /**
     * Sets a new reqRespVersion
     *
     * Used to request the version of the payload message desired for the response.
     *
     * @param string $reqRespVersion
     * @return self
     */
    public function setReqRespVersion($reqRespVersion)
    {
        $this->reqRespVersion = $reqRespVersion;

        return $this;
    }

    /**
     * Adds as source
     *
     * Describes the source of the transaction such as kiosk id or counter agent id.
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
     * Describes the source of the transaction such as kiosk id or counter agent id.
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
     * Describes the source of the transaction such as kiosk id or counter agent id.
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
     * Describes the source of the transaction such as kiosk id or counter agent id.
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
     * Describes the source of the transaction such as kiosk id or counter agent id.
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
     * Gets as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. In
     * some cases the ConfID may be used in lieu of a ContractID, dependent on business
     * needs.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number by which this reservation can be uniquely identified. In
     * some cases the ConfID may be used in lieu of a ContractID, dependent on business
     * needs.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confID
     * @return self
     */
    public function setConfID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confID)
    {
        $this->confID = $confID;

        return $this;
    }

    /**
     * Gets as contractID
     *
     * A contract number by which this rental can be uniquely identified.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getContractID()
    {
        return $this->contractID;
    }

    /**
     * Sets a new contractID
     *
     * A contract number by which this rental can be uniquely identified.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID
     * @return self
     */
    public function setContractID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID)
    {
        $this->contractID = $contractID;

        return $this;
    }

    /**
     * Gets as customer
     *
     * This is the rental customer's information and typically is not needed to be
     * passed in this message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * This is the rental customer's information and typically is not needed to be
     * passed in this message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Gets as pickUpReturnDetails
     *
     * Typically this is used to provide the actual return date, time, and location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     */
    public function getPickUpReturnDetails()
    {
        return $this->pickUpReturnDetails;
    }

    /**
     * Sets a new pickUpReturnDetails
     *
     * Typically this is used to provide the actual return date, time, and location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     * $pickUpReturnDetails
     * @return self
     */
    public function setPickUpReturnDetails(\Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $pickUpReturnDetails)
    {
        $this->pickUpReturnDetails = $pickUpReturnDetails;

        return $this;
    }

    /**
     * Gets as exchangeLocation
     *
     * Location where the vehicle was exchanged.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\ExchangeLocationAType
     */
    public function getExchangeLocation()
    {
        return $this->exchangeLocation;
    }

    /**
     * Sets a new exchangeLocation
     *
     * Location where the vehicle was exchanged.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\ExchangeLocationAType
     * $exchangeLocation
     * @return self
     */
    public function setExchangeLocation(
        \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\ExchangeLocationAType $exchangeLocation
    ) {
        $this->exchangeLocation = $exchangeLocation;

        return $this;
    }

    /**
     * Adds as vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\VehicleAType $vehicle
     */
    public function addToVehicle(\Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\VehicleAType $vehicle)
    {
        $this->vehicle[] = $vehicle;

        return $this;
    }

    /**
     * isset vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehicle($index)
    {
        return isset($this->vehicle[$index]);
    }

    /**
     * unset vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehicle($index)
    {
        unset($this->vehicle[$index]);
    }

    /**
     * Gets as vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\VehicleAType[]
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being returned and the actual vehicle being given to the
     * customer in exchange.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehExchangeRQ\VehicleAType[] $vehicle
     * @return self
     */
    public function setVehicle(array $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Adds as adjustmentDetail
     *
     * Collection of adjustments.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType $adjustmentDetail
     */
    public function addToAdjustmentDetails(\Davispeixoto\OpenTravelAlliance\VehicleChargeType $adjustmentDetail)
    {
        $this->adjustmentDetails[] = $adjustmentDetail;

        return $this;
    }

    /**
     * isset adjustmentDetails
     *
     * Collection of adjustments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdjustmentDetails($index)
    {
        return isset($this->adjustmentDetails[$index]);
    }

    /**
     * unset adjustmentDetails
     *
     * Collection of adjustments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdjustmentDetails($index)
    {
        unset($this->adjustmentDetails[$index]);
    }

    /**
     * Gets as adjustmentDetails
     *
     * Collection of adjustments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargeType[]
     */
    public function getAdjustmentDetails()
    {
        return $this->adjustmentDetails;
    }

    /**
     * Sets a new adjustmentDetails
     *
     * Collection of adjustments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargeType[] $adjustmentDetails
     * @return self
     */
    public function setAdjustmentDetails(array $adjustmentDetails)
    {
        $this->adjustmentDetails = $adjustmentDetails;

        return $this;
    }

    /**
     * Gets as exchangeReason
     *
     * Used to indicate reasons for vehicle exchange.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getExchangeReason()
    {
        return $this->exchangeReason;
    }

    /**
     * Sets a new exchangeReason
     *
     * Used to indicate reasons for vehicle exchange.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $exchangeReason
     * @return self
     */
    public function setExchangeReason(\Davispeixoto\OpenTravelAlliance\ParagraphType $exchangeReason)
    {
        $this->exchangeReason = $exchangeReason;

        return $this;
    }

    /**
     * Adds as remark
     *
     * A collection of remarks.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $remark
     */
    public function addToRemarks(\Davispeixoto\OpenTravelAlliance\ParagraphType $remark)
    {
        $this->remarks[] = $remark;

        return $this;
    }

    /**
     * isset remarks
     *
     * A collection of remarks.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * A collection of remarks.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * A collection of remarks.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * A collection of remarks.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;

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

