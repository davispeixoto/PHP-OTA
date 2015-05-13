<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAVehLocDetailRS
 */
class OTAVehLocDetailRS
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
     * @property \Davispeixoto\OpenTravelAlliance\SuccessType $success
     */
    private $success = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Information on the vendor associated with this rental location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Information on the rental location, including address, telephone, directions,
     * hours of operations, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetail
     */
    private $locationDetail = null;

    /**
     * Information on the vehicles that are offered for rental at this facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType $vehicles
     */
    private $vehicles = null;

    /**
     * Information on the requirements that are in place with regard to the renting of
     * a vehicle. Such requirements include license requirements, age requirements,
     * payment options, etc. These are requirement that typically must be met by the
     * renter before a rental may commence. This element may also be used to provide
     * Information on the restrictions that are in place with regard to the renting of
     * a vehicle. Such restrictions include geographic restrictions on the use of the
     * vehicle, restrictions on where the vehicle may be returned, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType
     * $requirements
     */
    private $requirements = null;

    /**
     * Information on additional fees, taxes and surcharges that are included in the
     * cost of a rental, when renting from this facility. Different facilities are
     * required to impose different fees and surcharges based upon location and local
     * laws.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType
     * $additionalFees
     */
    private $additionalFees = null;

    /**
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType
     * $liabilities
     */
    private $liabilities = null;

    /**
     * Information on the services offered at the rental location. Services can be
     * either on-location or off-location, and may include the rental of special
     * equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType
     * $servicesOffered
     */
    private $servicesOffered = null;

    /**
     * The pick-up and return dates for the location information requested.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRS\DateAType $date
     */
    private $date = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
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
     * Gets as success
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
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
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
     * Gets as vendor
     *
     * Information on the vendor associated with this rental location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Information on the vendor associated with this rental location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets as locationDetail
     *
     * Information on the rental location, including address, telephone, directions,
     * hours of operations, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     */
    public function getLocationDetail()
    {
        return $this->locationDetail;
    }

    /**
     * Sets a new locationDetail
     *
     * Information on the rental location, including address, telephone, directions,
     * hours of operations, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType
     * $locationDetail
     * @return self
     */
    public function setLocationDetail(\Davispeixoto\OpenTravelAlliance\VehicleLocationDetailsType $locationDetail)
    {
        $this->locationDetail = $locationDetail;

        return $this;
    }

    /**
     * Gets as vehicles
     *
     * Information on the vehicles that are offered for rental at this facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * Information on the vehicles that are offered for rental at this facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType $vehicles
     * @return self
     */
    public function setVehicles(\Davispeixoto\OpenTravelAlliance\VehicleLocationVehiclesType $vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Gets as requirements
     *
     * Information on the requirements that are in place with regard to the renting of
     * a vehicle. Such requirements include license requirements, age requirements,
     * payment options, etc. These are requirement that typically must be met by the
     * renter before a rental may commence. This element may also be used to provide
     * Information on the restrictions that are in place with regard to the renting of
     * a vehicle. Such restrictions include geographic restrictions on the use of the
     * vehicle, restrictions on where the vehicle may be returned, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * Sets a new requirements
     *
     * Information on the requirements that are in place with regard to the renting of
     * a vehicle. Such requirements include license requirements, age requirements,
     * payment options, etc. These are requirement that typically must be met by the
     * renter before a rental may commence. This element may also be used to provide
     * Information on the restrictions that are in place with regard to the renting of
     * a vehicle. Such restrictions include geographic restrictions on the use of the
     * vehicle, restrictions on where the vehicle may be returned, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType
     * $requirements
     * @return self
     */
    public function setRequirements(\Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType $requirements)
    {
        $this->requirements = $requirements;

        return $this;
    }

    /**
     * Gets as additionalFees
     *
     * Information on additional fees, taxes and surcharges that are included in the
     * cost of a rental, when renting from this facility. Different facilities are
     * required to impose different fees and surcharges based upon location and local
     * laws.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType
     */
    public function getAdditionalFees()
    {
        return $this->additionalFees;
    }

    /**
     * Sets a new additionalFees
     *
     * Information on additional fees, taxes and surcharges that are included in the
     * cost of a rental, when renting from this facility. Different facilities are
     * required to impose different fees and surcharges based upon location and local
     * laws.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType
     * $additionalFees
     * @return self
     */
    public function setAdditionalFees(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType $additionalFees
    ) {
        $this->additionalFees = $additionalFees;

        return $this;
    }

    /**
     * Gets as liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType
     */
    public function getLiabilities()
    {
        return $this->liabilities;
    }

    /**
     * Sets a new liabilities
     *
     * Information on the financial liabilities assumed by the renter when renting from
     * this facility, along with optional coverage to reduce the financial liabilities.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType
     * $liabilities
     * @return self
     */
    public function setLiabilities(\Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType $liabilities)
    {
        $this->liabilities = $liabilities;

        return $this;
    }

    /**
     * Gets as servicesOffered
     *
     * Information on the services offered at the rental location. Services can be
     * either on-location or off-location, and may include the rental of special
     * equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType
     */
    public function getServicesOffered()
    {
        return $this->servicesOffered;
    }

    /**
     * Sets a new servicesOffered
     *
     * Information on the services offered at the rental location. Services can be
     * either on-location or off-location, and may include the rental of special
     * equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType
     * $servicesOffered
     * @return self
     */
    public function setServicesOffered(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType $servicesOffered
    ) {
        $this->servicesOffered = $servicesOffered;

        return $this;
    }

    /**
     * Gets as date
     *
     * The pick-up and return dates for the location information requested.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRS\DateAType
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The pick-up and return dates for the location information requested.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRS\DateAType $date
     * @return self
     */
    public function setDate(\Davispeixoto\OpenTravelAlliance\OTAVehLocDetailRS\DateAType $date)
    {
        $this->date = $date;

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

    /**
     * Adds as error
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
     * @return \Davispeixoto\OpenTravelAlliance\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
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

