<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType;

/**
 * Class representing SurchargesAType
 */
class SurchargesAType
{

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
     * This element is used to describe one specific surcharge that may apply.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[]
     * $surcharge
     */
    private $surcharge = null;

    /**
     * General information about the additional surcharges that may apply.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

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
     * Adds as surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType
     * $surcharge
     */
    public function addToSurcharge(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType $surcharge
    ) {
        $this->surcharge[] = $surcharge;

        return $this;
    }

    /**
     * isset surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSurcharge($index)
    {
        return isset($this->surcharge[$index]);
    }

    /**
     * unset surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSurcharge($index)
    {
        unset($this->surcharge[$index]);
    }

    /**
     * Gets as surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[]
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[]
     * $surcharge
     * @return self
     */
    public function setSurcharge(array $surcharge)
    {
        $this->surcharge = $surcharge;

        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional surcharges that may apply.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the additional surcharges that may apply.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

        return $this;
    }


}

