<?php

namespace Davispeixoto\OpenTravelAlliance\StatisticApplicationSetType;

/**
 * Class representing ReportSummariesAType
 *
 * Container for ReportSummary elements of type ParagraphType.
 */
class ReportSummariesAType
{

    /**
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $reportSummary
     */
    private $reportSummary = null;

    /**
     * Adds as reportSummary
     *
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $reportSummary
     */
    public function addToReportSummary(\Davispeixoto\OpenTravelAlliance\ParagraphType $reportSummary)
    {
        $this->reportSummary[] = $reportSummary;

        return $this;
    }

    /**
     * isset reportSummary
     *
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReportSummary($index)
    {
        return isset($this->reportSummary[$index]);
    }

    /**
     * unset reportSummary
     *
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReportSummary($index)
    {
        unset($this->reportSummary[$index]);
    }

    /**
     * Gets as reportSummary
     *
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getReportSummary()
    {
        return $this->reportSummary;
    }

    /**
     * Sets a new reportSummary
     *
     * This element has text information, included with the data in the report as
     * needed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $reportSummary
     * @return self
     */
    public function setReportSummary(array $reportSummary)
    {
        $this->reportSummary = $reportSummary;

        return $this;
    }


}

