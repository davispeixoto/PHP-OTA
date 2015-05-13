<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BusInfoType
 *
 * Defines bus Information.
 * XSD Type: BusInfoType
 */
class BusInfoType
{

    /**
     * The amount of time the bus is delayed (in seconds.)
     *
     * @property integer $delayTime
     */
    private $delayTime = null;

    /**
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code
     * (TSC).
     *
     * @property string $scheduleCode
     */
    private $scheduleCode = null;

    /**
     * Identification and classification information of the bus.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BusIdentificationType $bus
     */
    private $bus = null;

    /**
     * The validate dates for the bus information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BusInfoType\ValidDateAType $validDate
     */
    private $validDate = null;

    /**
     * Gets as delayTime
     *
     * The amount of time the bus is delayed (in seconds.)
     *
     * @return integer
     */
    public function getDelayTime()
    {
        return $this->delayTime;
    }

    /**
     * Sets a new delayTime
     *
     * The amount of time the bus is delayed (in seconds.)
     *
     * @param integer $delayTime
     * @return self
     */
    public function setDelayTime($delayTime)
    {
        $this->delayTime = $delayTime;

        return $this;
    }

    /**
     * Gets as scheduleCode
     *
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code
     * (TSC).
     *
     * @return string
     */
    public function getScheduleCode()
    {
        return $this->scheduleCode;
    }

    /**
     * Sets a new scheduleCode
     *
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code
     * (TSC).
     *
     * @param string $scheduleCode
     * @return self
     */
    public function setScheduleCode($scheduleCode)
    {
        $this->scheduleCode = $scheduleCode;

        return $this;
    }

    /**
     * Gets as bus
     *
     * Identification and classification information of the bus.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BusIdentificationType
     */
    public function getBus()
    {
        return $this->bus;
    }

    /**
     * Sets a new bus
     *
     * Identification and classification information of the bus.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BusIdentificationType $bus
     * @return self
     */
    public function setBus(\Davispeixoto\OpenTravelAlliance\BusIdentificationType $bus)
    {
        $this->bus = $bus;

        return $this;
    }

    /**
     * Gets as validDate
     *
     * The validate dates for the bus information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BusInfoType\ValidDateAType
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * The validate dates for the bus information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BusInfoType\ValidDateAType $validDate
     * @return self
     */
    public function setValidDate(\Davispeixoto\OpenTravelAlliance\BusInfoType\ValidDateAType $validDate)
    {
        $this->validDate = $validDate;

        return $this;
    }


}

