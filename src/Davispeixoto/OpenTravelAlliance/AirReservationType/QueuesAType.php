<?php

namespace Davispeixoto\OpenTravelAlliance\AirReservationType;

/**
 * Class representing QueuesAType
 */
class QueuesAType
{

    /**
     * Specifies queue information for this booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     * $queue
     */
    private $queue = null;

    /**
     * Adds as queue
     *
     * Specifies queue information for this booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType
     * $queue
     */
    public function addToQueue(\Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType $queue)
    {
        $this->queue[] = $queue;

        return $this;
    }

    /**
     * isset queue
     *
     * Specifies queue information for this booking.
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
     * Specifies queue information for this booking.
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
     * Specifies queue information for this booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Specifies queue information for this booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirReservationType\QueuesAType\QueueAType[]
     * $queue
     * @return self
     */
    public function setQueue(array $queue)
    {
        $this->queue = $queue;

        return $this;
    }


}

