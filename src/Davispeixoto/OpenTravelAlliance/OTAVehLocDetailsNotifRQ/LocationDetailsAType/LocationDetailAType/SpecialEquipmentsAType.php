<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing SpecialEquipmentsAType
 */
class SpecialEquipmentsAType
{

    /**
     * The policy number for special equipment.
     *
     * @property string $policyNumber
     */
    private $policyNumber = null;

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

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
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipment
     */
    private $specialEquipment = null;

    /**
     * Gets as policyNumber
     *
     * The policy number for special equipment.
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
     * The policy number for special equipment.
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
     * Adds as specialEquipment
     *
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType\SpecialEquipmentAType
     * $specialEquipment
     */
    public function addToSpecialEquipment(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType\SpecialEquipmentAType $specialEquipment
    ) {
        $this->specialEquipment[] = $specialEquipment;

        return $this;
    }

    /**
     * isset specialEquipment
     *
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipment($index)
    {
        return isset($this->specialEquipment[$index]);
    }

    /**
     * unset specialEquipment
     *
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipment($index)
    {
        unset($this->specialEquipment[$index]);
    }

    /**
     * Gets as specialEquipment
     *
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     */
    public function getSpecialEquipment()
    {
        return $this->specialEquipment;
    }

    /**
     * Sets a new specialEquipment
     *
     * Information that describes a piece of special equipment, any restrictions
     * associated with it and charges that may apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipment
     * @return self
     */
    public function setSpecialEquipment(array $specialEquipment)
    {
        $this->specialEquipment = $specialEquipment;

        return $this;
    }


}

