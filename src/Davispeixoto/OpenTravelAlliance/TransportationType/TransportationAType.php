<?php

namespace Davispeixoto\OpenTravelAlliance\TransportationType;

/**
 * Class representing TransportationAType
 */
class TransportationAType
{

    /**
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @property string $notificationRequired
     */
    private $notificationRequired = null;

    /**
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @property string $transportationCode
     */
    private $transportationCode = null;

    /**
     * Refer to OpenTravel Codelist Charge Type (CHG).
     *
     * @property string $chargeUnit
     */
    private $chargeUnit = null;

    /**
     * When true there is no additional charge for transportation.
     *
     * @property boolean $included
     */
    private $included = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Descriptive information about the mode of transportation.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The normal (average) travel time required to get to or from the location,
     * measured in minutes.
     *
     * @property string $typicalTravelTime
     */
    private $typicalTravelTime = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * This attribute is used to explicitly define whether the type of transportation
     * applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with TransportationCode.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Multimedia information about the transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Collection of operation schedules for the transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Descriptive text that describes the transportation.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as notificationRequired
     *
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @return string
     */
    public function getNotificationRequired()
    {
        return $this->notificationRequired;
    }

    /**
     * Sets a new notificationRequired
     *
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @param string $notificationRequired
     * @return self
     */
    public function setNotificationRequired($notificationRequired)
    {
        $this->notificationRequired = $notificationRequired;

        return $this;
    }

    /**
     * Gets as transportationCode
     *
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @return string
     */
    public function getTransportationCode()
    {
        return $this->transportationCode;
    }

    /**
     * Sets a new transportationCode
     *
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @param string $transportationCode
     * @return self
     */
    public function setTransportationCode($transportationCode)
    {
        $this->transportationCode = $transportationCode;

        return $this;
    }

    /**
     * Gets as chargeUnit
     *
     * Refer to OpenTravel Codelist Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeUnit()
    {
        return $this->chargeUnit;
    }

    /**
     * Sets a new chargeUnit
     *
     * Refer to OpenTravel Codelist Charge Type (CHG).
     *
     * @param string $chargeUnit
     * @return self
     */
    public function setChargeUnit($chargeUnit)
    {
        $this->chargeUnit = $chargeUnit;

        return $this;
    }

    /**
     * Gets as included
     *
     * When true there is no additional charge for transportation.
     *
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * Sets a new included
     *
     * When true there is no additional charge for transportation.
     *
     * @param boolean $included
     * @return self
     */
    public function setIncluded($included)
    {
        $this->included = $included;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information about the mode of transportation.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information about the mode of transportation.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as typicalTravelTime
     *
     * The normal (average) travel time required to get to or from the location,
     * measured in minutes.
     *
     * @return string
     */
    public function getTypicalTravelTime()
    {
        return $this->typicalTravelTime;
    }

    /**
     * Sets a new typicalTravelTime
     *
     * The normal (average) travel time required to get to or from the location,
     * measured in minutes.
     *
     * @param string $typicalTravelTime
     * @return self
     */
    public function setTypicalTravelTime($typicalTravelTime)
    {
        $this->typicalTravelTime = $typicalTravelTime;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the type of transportation
     * applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with TransportationCode.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether the type of transportation
     * applies. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with TransportationCode.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * Collection of operation schedules for the transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Collection of operation schedules for the transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the transportation.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the transportation.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

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

