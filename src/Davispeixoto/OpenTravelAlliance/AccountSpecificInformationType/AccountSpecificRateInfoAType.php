<?php

namespace Davispeixoto\OpenTravelAlliance\AccountSpecificInformationType;

/**
 * Class representing AccountSpecificRateInfoAType
 */
class AccountSpecificRateInfoAType
{

    /**
     * If true indicates that the client rate is based on a minimum room night target
     * for next year's program.
     *
     * @property boolean $roomNightTargetIndicator
     */
    private $roomNightTargetIndicator = null;

    /**
     * Defines minimum room nights.
     *
     * @property integer $roomNightTargetQuantity
     */
    private $roomNightTargetQuantity = null;

    /**
     * Allows you to pass the number of room nights previously produced.
     *
     * @property integer $roomNightProductionQuantity
     */
    private $roomNightProductionQuantity = null;

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
     * This means the account specific rate is available to that organization's
     * subsidiary employees.
     *
     * @property boolean $subsidiaryEmpRateIndicator
     */
    private $subsidiaryEmpRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's
     * employees for personal use.
     *
     * @property boolean $personalUseRateIndicator
     */
    private $personalUseRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's
     * contractors or consultants.
     *
     * @property boolean $contractorsRateIndicator
     */
    private $contractorsRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's
     * retirees.
     *
     * @property boolean $retireeRateIndicator
     */
    private $retireeRateIndicator = null;

    /**
     * Gets as roomNightTargetIndicator
     *
     * If true indicates that the client rate is based on a minimum room night target
     * for next year's program.
     *
     * @return boolean
     */
    public function getRoomNightTargetIndicator()
    {
        return $this->roomNightTargetIndicator;
    }

    /**
     * Sets a new roomNightTargetIndicator
     *
     * If true indicates that the client rate is based on a minimum room night target
     * for next year's program.
     *
     * @param boolean $roomNightTargetIndicator
     * @return self
     */
    public function setRoomNightTargetIndicator($roomNightTargetIndicator)
    {
        $this->roomNightTargetIndicator = $roomNightTargetIndicator;

        return $this;
    }

    /**
     * Gets as roomNightTargetQuantity
     *
     * Defines minimum room nights.
     *
     * @return integer
     */
    public function getRoomNightTargetQuantity()
    {
        return $this->roomNightTargetQuantity;
    }

    /**
     * Sets a new roomNightTargetQuantity
     *
     * Defines minimum room nights.
     *
     * @param integer $roomNightTargetQuantity
     * @return self
     */
    public function setRoomNightTargetQuantity($roomNightTargetQuantity)
    {
        $this->roomNightTargetQuantity = $roomNightTargetQuantity;

        return $this;
    }

    /**
     * Gets as roomNightProductionQuantity
     *
     * Allows you to pass the number of room nights previously produced.
     *
     * @return integer
     */
    public function getRoomNightProductionQuantity()
    {
        return $this->roomNightProductionQuantity;
    }

    /**
     * Sets a new roomNightProductionQuantity
     *
     * Allows you to pass the number of room nights previously produced.
     *
     * @param integer $roomNightProductionQuantity
     * @return self
     */
    public function setRoomNightProductionQuantity($roomNightProductionQuantity)
    {
        $this->roomNightProductionQuantity = $roomNightProductionQuantity;

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
     * Gets as subsidiaryEmpRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * subsidiary employees.
     *
     * @return boolean
     */
    public function getSubsidiaryEmpRateIndicator()
    {
        return $this->subsidiaryEmpRateIndicator;
    }

    /**
     * Sets a new subsidiaryEmpRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * subsidiary employees.
     *
     * @param boolean $subsidiaryEmpRateIndicator
     * @return self
     */
    public function setSubsidiaryEmpRateIndicator($subsidiaryEmpRateIndicator)
    {
        $this->subsidiaryEmpRateIndicator = $subsidiaryEmpRateIndicator;

        return $this;
    }

    /**
     * Gets as personalUseRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * employees for personal use.
     *
     * @return boolean
     */
    public function getPersonalUseRateIndicator()
    {
        return $this->personalUseRateIndicator;
    }

    /**
     * Sets a new personalUseRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * employees for personal use.
     *
     * @param boolean $personalUseRateIndicator
     * @return self
     */
    public function setPersonalUseRateIndicator($personalUseRateIndicator)
    {
        $this->personalUseRateIndicator = $personalUseRateIndicator;

        return $this;
    }

    /**
     * Gets as contractorsRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * contractors or consultants.
     *
     * @return boolean
     */
    public function getContractorsRateIndicator()
    {
        return $this->contractorsRateIndicator;
    }

    /**
     * Sets a new contractorsRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * contractors or consultants.
     *
     * @param boolean $contractorsRateIndicator
     * @return self
     */
    public function setContractorsRateIndicator($contractorsRateIndicator)
    {
        $this->contractorsRateIndicator = $contractorsRateIndicator;

        return $this;
    }

    /**
     * Gets as retireeRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * retirees.
     *
     * @return boolean
     */
    public function getRetireeRateIndicator()
    {
        return $this->retireeRateIndicator;
    }

    /**
     * Sets a new retireeRateIndicator
     *
     * This means the account specific rate is available to that organization's
     * retirees.
     *
     * @param boolean $retireeRateIndicator
     * @return self
     */
    public function setRetireeRateIndicator($retireeRateIndicator)
    {
        $this->retireeRateIndicator = $retireeRateIndicator;

        return $this;
    }


}

