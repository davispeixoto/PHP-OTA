<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTAVehRateRuleRS
 */
class OTAVehRateRuleRS
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
     * An element that is not intended to contain any data. The mere presence of a
     * success element within the response message indicates that the incoming request
     * message was processed successfully.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SuccessType $success
     */
    private $success = null;

    /**
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Contains rental dates, times, and locations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehRentalCoreAType
     * $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on one specific vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehicleAType
     * $vehicle
     */
    private $vehicle = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RentalRateAType[]
     * $rentalRate
     */
    private $rentalRate = null;

    /**
     * The anticipated total cost of a reservation, the sum of the individual charges,
     * optional charges and associated fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\TotalChargeAType
     * $totalCharge
     */
    private $totalCharge = null;

    /**
     * Collection of rules pertaining to the rental rate and/or vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType
     * $rateRules
     */
    private $rateRules = null;

    /**
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this vehicle quotation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * A collection of coverages, along with associated price and details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\LocationDetailsAType[]
     * $locationDetails
     */
    private $locationDetails = null;

    /**
     * A collection of vendor messages related to the rental rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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
     * Gets as success
     *
     * An element that is not intended to contain any data. The mere presence of a
     * success element within the response message indicates that the incoming request
     * message was processed successfully.
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
     * An element that is not intended to contain any data. The mere presence of a
     * success element within the response message indicates that the incoming request
     * message was processed successfully.
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
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
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
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
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
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
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
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
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
     * Indicates that the recipient of the request message identified one or more
     * business-level warnings/errors, but the message itself was successfully
     * processed.
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
     * Gets as vehRentalCore
     *
     * Contains rental dates, times, and locations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehRentalCoreAType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Contains rental dates, times, and locations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehRentalCoreAType
     * $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehRentalCoreAType $vehRentalCore
    ) {
        $this->vehRentalCore = $vehRentalCore;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Information on one specific vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information on one specific vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Adds as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RentalRateAType
     * $rentalRate
     */
    public function addToRentalRate(\Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RentalRateAType $rentalRate)
    {
        $this->rentalRate[] = $rentalRate;

        return $this;
    }

    /**
     * isset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRentalRate($index)
    {
        return isset($this->rentalRate[$index]);
    }

    /**
     * unset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRentalRate($index)
    {
        unset($this->rentalRate[$index]);
    }

    /**
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can
     * include the distance and the base rental cost, along with information on the
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RentalRateAType[]
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
     * various factors that may influence this rate. This element may repeat to allow
     * different distances to be made available for different charges. For example,
     * $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RentalRateAType[]
     * $rentalRate
     * @return self
     */
    public function setRentalRate(array $rentalRate)
    {
        $this->rentalRate = $rentalRate;

        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges,
     * optional charges and associated fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges,
     * optional charges and associated fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\TotalChargeAType
     * $totalCharge
     * @return self
     */
    public function setTotalCharge(\Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\TotalChargeAType $totalCharge)
    {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Gets as rateRules
     *
     * Collection of rules pertaining to the rental rate and/or vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType
     */
    public function getRateRules()
    {
        return $this->rateRules;
    }

    /**
     * Sets a new rateRules
     *
     * Collection of rules pertaining to the rental rate and/or vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType
     * $rateRules
     * @return self
     */
    public function setRateRules(\Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\RateRulesAType $rateRules)
    {
        $this->rateRules = $rateRules;

        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquips(\Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the
     * charges associated with this equipment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleEquipmentPricedType[]
     * $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;

        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;

        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages)
    {
        $this->pricedCoverages = $pricedCoverages;

        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\LocationDetailsAType
     * $locationDetails
     */
    public function addToLocationDetails(
        \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\LocationDetailsAType $locationDetails
    ) {
        $this->locationDetails[] = $locationDetails;

        return $this;
    }

    /**
     * isset locationDetails
     *
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\LocationDetailsAType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Information on the rental location (pick up or drop off), including address,
     * telephone, directions, hours of operations, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS\LocationDetailsAType[]
     * $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails)
    {
        $this->locationDetails = $locationDetails;

        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of vendor messages related to the rental rate.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Davispeixoto\OpenTravelAlliance\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;

        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of vendor messages related to the rental rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of vendor messages related to the rental rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of vendor messages related to the rental rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of vendor messages related to the rental rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages)
    {
        $this->vendorMessages = $vendorMessages;

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
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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
     * Indicates that an error occurred in the processing of the incoming request
     * message. An error is defined as a malformed XML message that could not be
     * processed.
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

