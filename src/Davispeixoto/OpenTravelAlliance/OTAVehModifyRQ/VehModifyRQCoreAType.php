<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehModifyRQ;

use Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType;

/**
 * Class representing VehModifyRQCoreAType
 */
class VehModifyRQCoreAType extends VehicleModifyRQCoreType
{

    /**
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionActionType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @property string $modifyType
     */
    private $modifyType = null;

    /**
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @property integer $indexNumber
     */
    private $indexNumber = null;

    /**
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * When true, indicates that critical options have changed since the reservation
     * was made or modified.
     *
     * @property boolean $optionChangeIndicator
     */
    private $optionChangeIndicator = null;

    /**
     * Gets as modifyType
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionActionType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @return string
     */
    public function getModifyType()
    {
        return $this->modifyType;
    }

    /**
     * Sets a new modifyType
     *
     * Used to specify the status of the reservation with either one of the
     * enumerations in TransactionActionType or an UpperCaseAlphaLength1to2 such as the
     * IATA status code.
     *
     * @param string $modifyType
     * @return self
     */
    public function setModifyType($modifyType)
    {
        $this->modifyType = $modifyType;

        return $this;
    }

    /**
     * Gets as indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @return integer
     */
    public function getIndexNumber()
    {
        return $this->indexNumber;
    }

    /**
     * Sets a new indexNumber
     *
     * A unique number (e.g., segment number or index number) used to further identify
     * a booked item within a list of booked items in a multi-segment PNR. Typically
     * not used in messages to car suppliers.
     *
     * @param integer $indexNumber
     * @return self
     */
    public function setIndexNumber($indexNumber)
    {
        $this->indexNumber = $indexNumber;

        return $this;
    }

    /**
     * Gets as action
     *
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Gets as optionChangeIndicator
     *
     * When true, indicates that critical options have changed since the reservation
     * was made or modified.
     *
     * @return boolean
     */
    public function getOptionChangeIndicator()
    {
        return $this->optionChangeIndicator;
    }

    /**
     * Sets a new optionChangeIndicator
     *
     * When true, indicates that critical options have changed since the reservation
     * was made or modified.
     *
     * @param boolean $optionChangeIndicator
     * @return self
     */
    public function setOptionChangeIndicator($optionChangeIndicator)
    {
        $this->optionChangeIndicator = $optionChangeIndicator;

        return $this;
    }


}

