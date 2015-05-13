<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelPostEventNotifRQ;

/**
 * Class representing EventReportsAType
 */
class EventReportsAType
{

    /**
     * Provides the actual event information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EventReportType[] $eventReport
     */
    private $eventReport = null;

    /**
     * Adds as eventReport
     *
     * Provides the actual event information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EventReportType $eventReport
     */
    public function addToEventReport(\Davispeixoto\OpenTravelAlliance\EventReportType $eventReport)
    {
        $this->eventReport[] = $eventReport;

        return $this;
    }

    /**
     * isset eventReport
     *
     * Provides the actual event information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEventReport($index)
    {
        return isset($this->eventReport[$index]);
    }

    /**
     * unset eventReport
     *
     * Provides the actual event information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEventReport($index)
    {
        unset($this->eventReport[$index]);
    }

    /**
     * Gets as eventReport
     *
     * Provides the actual event information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EventReportType[]
     */
    public function getEventReport()
    {
        return $this->eventReport;
    }

    /**
     * Sets a new eventReport
     *
     * Provides the actual event information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EventReportType[] $eventReport
     * @return self
     */
    public function setEventReport(array $eventReport)
    {
        $this->eventReport = $eventReport;

        return $this;
    }


}

