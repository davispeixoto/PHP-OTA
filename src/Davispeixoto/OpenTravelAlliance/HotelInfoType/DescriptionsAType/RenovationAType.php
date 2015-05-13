<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\DescriptionsAType;

/**
 * Class representing RenovationAType
 */
class RenovationAType
{

    /**
     * Indicates that renovation is planned but dates are not finalized.
     *
     * @property boolean $immediatePlans
     */
    private $immediatePlans = null;

    /**
     * Allows for a percent completion to be sent with each area being renovated.
     *
     * @property float $percentOfRenovationCompleted
     */
    private $percentOfRenovationCompleted = null;

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
     * Describes the specific area or areas of a hotel being renovated.
     *
     * @property string $areaText
     */
    private $areaText = null;

    /**
     * The year or month and year the renovation was completed or is due to be
     * completed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     * $renovationCompletionDate
     */
    private $renovationCompletionDate = null;

    /**
     * Multimedia information about the renovation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the renovation.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as immediatePlans
     *
     * Indicates that renovation is planned but dates are not finalized.
     *
     * @return boolean
     */
    public function getImmediatePlans()
    {
        return $this->immediatePlans;
    }

    /**
     * Sets a new immediatePlans
     *
     * Indicates that renovation is planned but dates are not finalized.
     *
     * @param boolean $immediatePlans
     * @return self
     */
    public function setImmediatePlans($immediatePlans)
    {
        $this->immediatePlans = $immediatePlans;

        return $this;
    }

    /**
     * Gets as percentOfRenovationCompleted
     *
     * Allows for a percent completion to be sent with each area being renovated.
     *
     * @return float
     */
    public function getPercentOfRenovationCompleted()
    {
        return $this->percentOfRenovationCompleted;
    }

    /**
     * Sets a new percentOfRenovationCompleted
     *
     * Allows for a percent completion to be sent with each area being renovated.
     *
     * @param float $percentOfRenovationCompleted
     * @return self
     */
    public function setPercentOfRenovationCompleted($percentOfRenovationCompleted)
    {
        $this->percentOfRenovationCompleted = $percentOfRenovationCompleted;

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
     * Gets as areaText
     *
     * Describes the specific area or areas of a hotel being renovated.
     *
     * @return string
     */
    public function getAreaText()
    {
        return $this->areaText;
    }

    /**
     * Sets a new areaText
     *
     * Describes the specific area or areas of a hotel being renovated.
     *
     * @param string $areaText
     * @return self
     */
    public function setAreaText($areaText)
    {
        $this->areaText = $areaText;

        return $this;
    }

    /**
     * Gets as renovationCompletionDate
     *
     * The year or month and year the renovation was completed or is due to be
     * completed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     */
    public function getRenovationCompletionDate()
    {
        return $this->renovationCompletionDate;
    }

    /**
     * Sets a new renovationCompletionDate
     *
     * The year or month and year the renovation was completed or is due to be
     * completed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType
     * $renovationCompletionDate
     * @return self
     */
    public function setRenovationCompletionDate(
        \Davispeixoto\OpenTravelAlliance\YearOrYearMonthType $renovationCompletionDate
    ) {
        $this->renovationCompletionDate = $renovationCompletionDate;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the renovation.
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
     * Multimedia information about the renovation.
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
     * Gets as descriptiveText
     *
     * Descriptive text that describes the renovation.
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
     * Descriptive text that describes the renovation.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }


}

