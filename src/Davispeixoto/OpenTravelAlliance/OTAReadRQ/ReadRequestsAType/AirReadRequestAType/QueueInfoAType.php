<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType;

/**
 * Class representing QueueInfoAType
 */
class QueueInfoAType
{

    /**
     * If true, only the first item on the queue is to be returned. If false, all items
     * on the queue are to be returned.
     *
     * @property boolean $firstItemOnlyInd
     */
    private $firstItemOnlyInd = null;

    /**
     * If true, items are to be removed from the queue after display. If false, items
     * are to remain on the queue after display. If this attribute is omitted, items on
     * the queue are to be retained on the queue.
     *
     * @property boolean $removeFromQueueInd
     */
    private $removeFromQueueInd = null;

    /**
     * Option to define if the full booking file data need to be returned. If true, all
     * booking file info is returned. If false, only the condensed info is returned.
     *
     * @property boolean $fullDataInd
     */
    private $fullDataInd = null;

    /**
     * Bookings modified after this start date or date time should be returned. If used
     * in conjunction with an end date, only bookings modified within that date range
     * should be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate
     */
    private $startDate = null;

    /**
     * Bookings modified before this end date or date time should be returned. If used
     * in conjunction with a start date, only bookings modified within that date range
     * should be returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $endDate
     */
    private $endDate = null;

    /**
     * Specifies queue information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType\QueueAType[]
     * $queue
     */
    private $queue = null;

    /**
     * Gets as firstItemOnlyInd
     *
     * If true, only the first item on the queue is to be returned. If false, all items
     * on the queue are to be returned.
     *
     * @return boolean
     */
    public function getFirstItemOnlyInd()
    {
        return $this->firstItemOnlyInd;
    }

    /**
     * Sets a new firstItemOnlyInd
     *
     * If true, only the first item on the queue is to be returned. If false, all items
     * on the queue are to be returned.
     *
     * @param boolean $firstItemOnlyInd
     * @return self
     */
    public function setFirstItemOnlyInd($firstItemOnlyInd)
    {
        $this->firstItemOnlyInd = $firstItemOnlyInd;

        return $this;
    }

    /**
     * Gets as removeFromQueueInd
     *
     * If true, items are to be removed from the queue after display. If false, items
     * are to remain on the queue after display. If this attribute is omitted, items on
     * the queue are to be retained on the queue.
     *
     * @return boolean
     */
    public function getRemoveFromQueueInd()
    {
        return $this->removeFromQueueInd;
    }

    /**
     * Sets a new removeFromQueueInd
     *
     * If true, items are to be removed from the queue after display. If false, items
     * are to remain on the queue after display. If this attribute is omitted, items on
     * the queue are to be retained on the queue.
     *
     * @param boolean $removeFromQueueInd
     * @return self
     */
    public function setRemoveFromQueueInd($removeFromQueueInd)
    {
        $this->removeFromQueueInd = $removeFromQueueInd;

        return $this;
    }

    /**
     * Gets as fullDataInd
     *
     * Option to define if the full booking file data need to be returned. If true, all
     * booking file info is returned. If false, only the condensed info is returned.
     *
     * @return boolean
     */
    public function getFullDataInd()
    {
        return $this->fullDataInd;
    }

    /**
     * Sets a new fullDataInd
     *
     * Option to define if the full booking file data need to be returned. If true, all
     * booking file info is returned. If false, only the condensed info is returned.
     *
     * @param boolean $fullDataInd
     * @return self
     */
    public function setFullDataInd($fullDataInd)
    {
        $this->fullDataInd = $fullDataInd;

        return $this;
    }

    /**
     * Gets as startDate
     *
     * Bookings modified after this start date or date time should be returned. If used
     * in conjunction with an end date, only bookings modified within that date range
     * should be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * Bookings modified after this start date or date time should be returned. If used
     * in conjunction with an end date, only bookings modified within that date range
     * should be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate
     * @return self
     */
    public function setStartDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets as endDate
     *
     * Bookings modified before this end date or date time should be returned. If used
     * in conjunction with a start date, only bookings modified within that date range
     * should be returned.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * Bookings modified before this end date or date time should be returned. If used
     * in conjunction with a start date, only bookings modified within that date range
     * should be returned.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $endDate
     * @return self
     */
    public function setEndDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Adds as queue
     *
     * Specifies queue information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType\QueueAType
     * $queue
     */
    public function addToQueue(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType\QueueAType $queue
    ) {
        $this->queue[] = $queue;

        return $this;
    }

    /**
     * isset queue
     *
     * Specifies queue information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQueue($index)
    {
        return isset($this->queue[$index]);
    }

    /**
     * unset queue
     *
     * Specifies queue information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQueue($index)
    {
        unset($this->queue[$index]);
    }

    /**
     * Gets as queue
     *
     * Specifies queue information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType\QueueAType[]
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Specifies queue information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\AirReadRequestAType\QueueInfoAType\QueueAType[]
     * $queue
     * @return self
     */
    public function setQueue(array $queue)
    {
        $this->queue = $queue;

        return $this;
    }


}

