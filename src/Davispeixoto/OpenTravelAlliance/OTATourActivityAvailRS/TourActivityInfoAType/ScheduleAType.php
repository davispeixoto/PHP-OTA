<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType;

/**
 * Class representing ScheduleAType
 */
class ScheduleAType
{

    /**
     * Indicates the number of inventory items (e.g. seats) available.
     *
     * @property integer $availableQty
     */
    private $availableQty = null;

    /**
     * The start and end date/time and optionally the duration.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\SummaryAType
     * $summary
     */
    private $summary = null;

    /**
     * Detailed schedule information for up to one year.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\DetailAType[]
     * $detail
     */
    private $detail = null;

    /**
     * Gets as availableQty
     *
     * Indicates the number of inventory items (e.g. seats) available.
     *
     * @return integer
     */
    public function getAvailableQty()
    {
        return $this->availableQty;
    }

    /**
     * Sets a new availableQty
     *
     * Indicates the number of inventory items (e.g. seats) available.
     *
     * @param integer $availableQty
     * @return self
     */
    public function setAvailableQty($availableQty)
    {
        $this->availableQty = $availableQty;

        return $this;
    }

    /**
     * Gets as summary
     *
     * The start and end date/time and optionally the duration.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\SummaryAType
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\SummaryAType
     * $summary
     * @return self
     */
    public function setSummary(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\SummaryAType $summary
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\DetailAType
     * $detail
     */
    public function addToDetail(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\DetailAType $detail
    ) {
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\DetailAType[]
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType\DetailAType[]
     * $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}

