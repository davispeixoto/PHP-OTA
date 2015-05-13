<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

use Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType;

/**
 * Class representing AdditionalFeesAType
 */
class AdditionalFeesAType extends VehicleLocationAdditionalFeesType
{

    /**
     * Identifies the type of additional fee. Refer to OpenTravel Code List Vehicle
     * Charge Type (VCP).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * The identification of the tax or surcharge policy that may be returned in the
     * notification in case of warnings or errors.
     *
     * @property string $recordID
     */
    private $recordID = null;

    /**
     * The policy number for the additional fee.
     *
     * @property string $policyNumber
     */
    private $policyNumber = null;

    /**
     * Text information concerning the additional fee.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $additionalFeeInfo
     */
    private $additionalFeeInfo = null;

    /**
     * Gets as type
     *
     * Identifies the type of additional fee. Refer to OpenTravel Code List Vehicle
     * Charge Type (VCP).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of additional fee. Refer to OpenTravel Code List Vehicle
     * Charge Type (VCP).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
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
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
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
     * Gets as recordID
     *
     * The identification of the tax or surcharge policy that may be returned in the
     * notification in case of warnings or errors.
     *
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * Sets a new recordID
     *
     * The identification of the tax or surcharge policy that may be returned in the
     * notification in case of warnings or errors.
     *
     * @param string $recordID
     * @return self
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }

    /**
     * Gets as policyNumber
     *
     * The policy number for the additional fee.
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * The policy number for the additional fee.
     *
     * @param string $policyNumber
     * @return self
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Gets as additionalFeeInfo
     *
     * Text information concerning the additional fee.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getAdditionalFeeInfo()
    {
        return $this->additionalFeeInfo;
    }

    /**
     * Sets a new additionalFeeInfo
     *
     * Text information concerning the additional fee.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $additionalFeeInfo
     * @return self
     */
    public function setAdditionalFeeInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $additionalFeeInfo)
    {
        $this->additionalFeeInfo = $additionalFeeInfo;

        return $this;
    }


}

