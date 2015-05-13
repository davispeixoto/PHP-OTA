<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType;

/**
 * Class representing RequestedReportAType
 */
class RequestedReportAType
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
     * Hotel fiscal date for statistics.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $fiscalDate
     */
    private $fiscalDate = null;

    /**
     * Identifies the type of statistics collected. Each ReportCode corresponds to a
     * set of category summaries based upon a predetermined agreement.
     *
     * @property string $reportCode
     */
    private $reportCode = null;

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
     * Gets as fiscalDate
     *
     * Hotel fiscal date for statistics.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getFiscalDate()
    {
        return $this->fiscalDate;
    }

    /**
     * Sets a new fiscalDate
     *
     * Hotel fiscal date for statistics.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $fiscalDate
     * @return self
     */
    public function setFiscalDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $fiscalDate)
    {
        $this->fiscalDate = $fiscalDate;

        return $this;
    }

    /**
     * Gets as reportCode
     *
     * Identifies the type of statistics collected. Each ReportCode corresponds to a
     * set of category summaries based upon a predetermined agreement.
     *
     * @return string
     */
    public function getReportCode()
    {
        return $this->reportCode;
    }

    /**
     * Sets a new reportCode
     *
     * Identifies the type of statistics collected. Each ReportCode corresponds to a
     * set of category summaries based upon a predetermined agreement.
     *
     * @param string $reportCode
     * @return self
     */
    public function setReportCode($reportCode)
    {
        $this->reportCode = $reportCode;

        return $this;
    }


}

