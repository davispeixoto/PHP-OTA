<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAVehCheckOutRQ
 */
class OTAVehCheckOutRQ
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
     * This is the rental customer's information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\DriverTypeAType[]
     * $driverType
     */
    private $driverType = null;

    /**
     * Typically this is used to provide the actual return date, time, and location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     * $pickUpReturnDetails
     */
    private $pickUpReturnDetails = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     */
    private $vendorPref = null;

    /**
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     */
    private $vehPref = null;

    /**
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehMakeModelAType
     * $vehMakeModel
     */
    private $vehMakeModel = null;

    /**
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehIdentityAType
     * $vehIdentity
     */
    private $vehIdentity = null;

    /**
     * Details of the Vehicle that needs to be checked out for the customer who is
     * renting the vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType
     * $vehDetailsOut
     */
    private $vehDetailsOut = null;

    /**
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RateQualifierAType
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * This is used when a requestor wishes to override the published price. If the
     * price is not known or will not be overriden, a CoveragePref is used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    private $pricedCoverage = null;

    /**
     * Collection of special equipment preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * Defines information on a specific charge associated with the rental of a vehicle
     * along with the purpose of the charge (e.g. pre-paid fuel). This does not include
     * insurance (see priced coverages).
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    private $fee = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified.
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
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RentalPaymentAmountAType[]
     * $rentalPaymentAmount
     */
    private $rentalPaymentAmount = null;

    /**
     * A collection of remarks.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $remarks
     */
    private $remarks = null;

    /**
     * Identifies the supplemental information associated with the request for the
     * checkout of a rental vehicle.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType
     * $vehRentalAdditionalInfo
     */
    private $vehRentalAdditionalInfo = null;

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
     * Gets as customer
     *
     * This is the rental customer's information.
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
     * This is the rental customer's information.
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
     * Adds as driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\DriverTypeAType
     * $driverType
     */
    public function addToDriverType(\Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\DriverTypeAType $driverType)
    {
        $this->driverType[] = $driverType;

        return $this;
    }

    /**
     * isset driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDriverType($index)
    {
        return isset($this->driverType[$index]);
    }

    /**
     * unset driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDriverType($index)
    {
        unset($this->driverType[$index]);
    }

    /**
     * Gets as driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Indicates the number of people of each age category associated with this
     * request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\DriverTypeAType[]
     * $driverType
     * @return self
     */
    public function setDriverType(array $driverType)
    {
        $this->driverType = $driverType;

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
     * Gets as vendorPref
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref
     * @return self
     */
    public function setVendorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $vendorPref)
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * Gets as vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehiclePrefType
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission,
     * air conditioning.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref
     * @return self
     */
    public function setVehPref(\Davispeixoto\OpenTravelAlliance\VehiclePrefType $vehPref)
    {
        $this->vehPref = $vehPref;

        return $this;
    }

    /**
     * Gets as vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehMakeModelAType
     */
    public function getVehMakeModel()
    {
        return $this->vehMakeModel;
    }

    /**
     * Sets a new vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be
     * used for the SIPP code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehMakeModelAType
     * $vehMakeModel
     * @return self
     */
    public function setVehMakeModel(\Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehMakeModelAType $vehMakeModel)
    {
        $this->vehMakeModel = $vehMakeModel;

        return $this;
    }

    /**
     * Gets as vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehIdentityAType
     */
    public function getVehIdentity()
    {
        return $this->vehIdentity;
    }

    /**
     * Sets a new vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehIdentityAType
     * $vehIdentity
     * @return self
     */
    public function setVehIdentity(\Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\VehIdentityAType $vehIdentity)
    {
        $this->vehIdentity = $vehIdentity;

        return $this;
    }

    /**
     * Gets as vehDetailsOut
     *
     * Details of the Vehicle that needs to be checked out for the customer who is
     * renting the vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType
     */
    public function getVehDetailsOut()
    {
        return $this->vehDetailsOut;
    }

    /**
     * Sets a new vehDetailsOut
     *
     * Details of the Vehicle that needs to be checked out for the customer who is
     * renting the vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType $vehDetailsOut
     * @return self
     */
    public function setVehDetailsOut(\Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType $vehDetailsOut)
    {
        $this->vehDetailsOut = $vehDetailsOut;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RateQualifierAType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates of interest to the customer, along with any discount
     * number or promotional codes that may affect the rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RateQualifierAType
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may infuence this rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(\Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate = $rentalRate;

        return $this;
    }

    /**
     * Gets as pricedCoverage
     *
     * This is used when a requestor wishes to override the published price. If the
     * price is not known or will not be overriden, a CoveragePref is used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType
     */
    public function getPricedCoverage()
    {
        return $this->pricedCoverage;
    }

    /**
     * Sets a new pricedCoverage
     *
     * This is used when a requestor wishes to override the published price. If the
     * price is not known or will not be overriden, a CoveragePref is used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     * @return self
     */
    public function setPricedCoverage(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverage = $pricedCoverage;

        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Collection of special equipment preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType
     * $specialEquipPref
     */
    public function addToSpecialEquipPrefs(
        \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
    ) {
        $this->specialEquipPrefs[] = $specialEquipPref;

        return $this;
    }

    /**
     * isset specialEquipPrefs
     *
     * Collection of special equipment preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipPrefs($index)
    {
        return isset($this->specialEquipPrefs[$index]);
    }

    /**
     * unset specialEquipPrefs
     *
     * Collection of special equipment preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipPrefs($index)
    {
        unset($this->specialEquipPrefs[$index]);
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Collection of special equipment preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Collection of special equipment preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     * $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;

        return $this;
    }

    /**
     * Gets as fee
     *
     * Defines information on a specific charge associated with the rental of a vehicle
     * along with the purpose of the charge (e.g. pre-paid fuel). This does not include
     * insurance (see priced coverages).
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Defines information on a specific charge associated with the rental of a vehicle
     * along with the purpose of the charge (e.g. pre-paid fuel). This does not include
     * insurance (see priced coverages).
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     * @return self
     */
    public function setFee(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Gets as confID
     *
     * A confirmation number by which this reservation can be uniquely identified.
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
     * A confirmation number by which this reservation can be uniquely identified.
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
     * Adds as rentalPaymentAmount
     *
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RentalPaymentAmountAType
     * $rentalPaymentAmount
     */
    public function addToRentalPaymentAmount(
        \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RentalPaymentAmountAType $rentalPaymentAmount
    ) {
        $this->rentalPaymentAmount[] = $rentalPaymentAmount;

        return $this;
    }

    /**
     * isset rentalPaymentAmount
     *
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRentalPaymentAmount($index)
    {
        return isset($this->rentalPaymentAmount[$index]);
    }

    /**
     * unset rentalPaymentAmount
     *
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRentalPaymentAmount($index)
    {
        unset($this->rentalPaymentAmount[$index]);
    }

    /**
     * Gets as rentalPaymentAmount
     *
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RentalPaymentAmountAType[]
     */
    public function getRentalPaymentAmount()
    {
        return $this->rentalPaymentAmount;
    }

    /**
     * Sets a new rentalPaymentAmount
     *
     * This element may reflect a charge or reserve to a form of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehCheckOutRQ\RentalPaymentAmountAType[]
     * $rentalPaymentAmount
     * @return self
     */
    public function setRentalPaymentAmount(array $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount = $rentalPaymentAmount;

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
     * Gets as vehRentalAdditionalInfo
     *
     * Identifies the supplemental information associated with the request for the
     * checkout of a rental vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType
     */
    public function getVehRentalAdditionalInfo()
    {
        return $this->vehRentalAdditionalInfo;
    }

    /**
     * Sets a new vehRentalAdditionalInfo
     *
     * Identifies the supplemental information associated with the request for the
     * checkout of a rental vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType
     * $vehRentalAdditionalInfo
     * @return self
     */
    public function setVehRentalAdditionalInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType $vehRentalAdditionalInfo
    ) {
        $this->vehRentalAdditionalInfo = $vehRentalAdditionalInfo;

        return $this;
    }


}

