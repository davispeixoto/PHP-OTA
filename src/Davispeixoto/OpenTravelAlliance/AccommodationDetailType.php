<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationDetailType
 *
 * Provides accommodation location, dates and classifications
 * XSD Type: AccommodationDetailType
 */
class AccommodationDetailType extends AccommodationInfoType
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
     * The number of available beds for the stay at a property.
     *
     * @property integer $bedQuantity
     */
    private $bedQuantity = null;

    /**
     * Used to indicate whether or not the travel associated with the package is
     * available with this accommodation.
     *
     * @property boolean $travelOKFlag
     */
    private $travelOKFlag = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\FacilityChoicesType $facilityChoices
     */
    private $facilityChoices = null;

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
     * Gets as bedQuantity
     *
     * The number of available beds for the stay at a property.
     *
     * @return integer
     */
    public function getBedQuantity()
    {
        return $this->bedQuantity;
    }

    /**
     * Sets a new bedQuantity
     *
     * The number of available beds for the stay at a property.
     *
     * @param integer $bedQuantity
     * @return self
     */
    public function setBedQuantity($bedQuantity)
    {
        $this->bedQuantity = $bedQuantity;

        return $this;
    }

    /**
     * Gets as travelOKFlag
     *
     * Used to indicate whether or not the travel associated with the package is
     * available with this accommodation.
     *
     * @return boolean
     */
    public function getTravelOKFlag()
    {
        return $this->travelOKFlag;
    }

    /**
     * Sets a new travelOKFlag
     *
     * Used to indicate whether or not the travel associated with the package is
     * available with this accommodation.
     *
     * @param boolean $travelOKFlag
     * @return self
     */
    public function setTravelOKFlag($travelOKFlag)
    {
        $this->travelOKFlag = $travelOKFlag;

        return $this;
    }

    /**
     * Gets as facilityChoices
     *
     * @return \Davispeixoto\OpenTravelAlliance\FacilityChoicesType
     */
    public function getFacilityChoices()
    {
        return $this->facilityChoices;
    }

    /**
     * Sets a new facilityChoices
     *
     * @param \Davispeixoto\OpenTravelAlliance\FacilityChoicesType $facilityChoices
     * @return self
     */
    public function setFacilityChoices(\Davispeixoto\OpenTravelAlliance\FacilityChoicesType $facilityChoices)
    {
        $this->facilityChoices = $facilityChoices;

        return $this;
    }


}

