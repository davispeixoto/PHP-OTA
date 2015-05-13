<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType;

/**
 * Class representing DaySummariesAType
 */
class DaySummariesAType
{

    /**
     * A container for the previous event detail data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[]
     * $daySummary
     */
    private $daySummary = null;

    /**
     * Adds as daySummary
     *
     * A container for the previous event detail data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType
     * $daySummary
     */
    public function addToDaySummary(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType $daySummary
    ) {
        $this->daySummary[] = $daySummary;

        return $this;
    }

    /**
     * isset daySummary
     *
     * A container for the previous event detail data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDaySummary($index)
    {
        return isset($this->daySummary[$index]);
    }

    /**
     * unset daySummary
     *
     * A container for the previous event detail data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDaySummary($index)
    {
        unset($this->daySummary[$index]);
    }

    /**
     * Gets as daySummary
     *
     * A container for the previous event detail data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[]
     */
    public function getDaySummary()
    {
        return $this->daySummary;
    }

    /**
     * Sets a new daySummary
     *
     * A container for the previous event detail data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[]
     * $daySummary
     * @return self
     */
    public function setDaySummary(array $daySummary)
    {
        $this->daySummary = $daySummary;

        return $this;
    }


}

