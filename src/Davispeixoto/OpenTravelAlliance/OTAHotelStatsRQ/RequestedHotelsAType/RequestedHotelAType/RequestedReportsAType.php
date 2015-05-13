<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType;

/**
 * Class representing RequestedReportsAType
 */
class RequestedReportsAType
{

    /**
     * Identifies a report being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[]
     * $requestedReport
     */
    private $requestedReport = null;

    /**
     * Adds as requestedReport
     *
     * Identifies a report being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType
     * $requestedReport
     */
    public function addToRequestedReport(
        \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType $requestedReport
    ) {
        $this->requestedReport[] = $requestedReport;

        return $this;
    }

    /**
     * isset requestedReport
     *
     * Identifies a report being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestedReport($index)
    {
        return isset($this->requestedReport[$index]);
    }

    /**
     * unset requestedReport
     *
     * Identifies a report being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestedReport($index)
    {
        unset($this->requestedReport[$index]);
    }

    /**
     * Gets as requestedReport
     *
     * Identifies a report being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[]
     */
    public function getRequestedReport()
    {
        return $this->requestedReport;
    }

    /**
     * Sets a new requestedReport
     *
     * Identifies a report being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[]
     * $requestedReport
     * @return self
     */
    public function setRequestedReport(array $requestedReport)
    {
        $this->requestedReport = $requestedReport;

        return $this;
    }


}

