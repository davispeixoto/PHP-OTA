<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType;

/**
 * Class representing ScheduleAType
 */
class ScheduleAType
{

    /**
     * The start and end date/time and optionally the duration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType\SummaryAType
     * $summary
     */
    private $summary = null;

    /**
     * Detailed schedule information for up to one year.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationScheduleType[] $detail
     */
    private $detail = null;

    /**
     * Gets as summary
     *
     * The start and end date/time and optionally the duration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType\SummaryAType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * The start and end date/time and optionally the duration.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType\SummaryAType
     * $summary
     * @return self
     */
    public function setSummary(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType\SummaryAType $summary
    ) {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Adds as detail
     *
     * Detailed schedule information for up to one year.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType $detail
     */
    public function addToDetail(\Davispeixoto\OpenTravelAlliance\OperationScheduleType $detail)
    {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * isset detail
     *
     * Detailed schedule information for up to one year.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Detailed schedule information for up to one year.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Detailed schedule information for up to one year.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationScheduleType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Detailed schedule information for up to one year.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationScheduleType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}

