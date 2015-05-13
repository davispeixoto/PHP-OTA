<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS;

/**
 * Class representing DisplayQueueAType
 */
class DisplayQueueAType
{

    /**
     * Container for air queue item elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType
     * $queueItems
     */
    private $queueItems = null;

    /**
     * Container for air reservation elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     * $airReservations
     */
    private $airReservations = null;

    /**
     * Gets as queueItems
     *
     * Container for air queue item elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType
     */
    public function getQueueItems()
    {
        return $this->queueItems;
    }

    /**
     * Sets a new queueItems
     *
     * Container for air queue item elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType
     * $queueItems
     * @return self
     */
    public function setQueueItems(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\QueueItemsAType $queueItems
    ) {
        $this->queueItems = $queueItems;

        return $this;
    }

    /**
     * Adds as airReservation
     *
     * Container for air reservation elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType
     * $airReservation
     */
    public function addToAirReservations(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType $airReservation
    ) {
        $this->airReservations[] = $airReservation;

        return $this;
    }

    /**
     * isset airReservations
     *
     * Container for air reservation elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirReservations($index)
    {
        return isset($this->airReservations[$index]);
    }

    /**
     * unset airReservations
     *
     * Container for air reservation elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirReservations($index)
    {
        unset($this->airReservations[$index]);
    }

    /**
     * Gets as airReservations
     *
     * Container for air reservation elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     */
    public function getAirReservations()
    {
        return $this->airReservations;
    }

    /**
     * Sets a new airReservations
     *
     * Container for air reservation elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     * $airReservations
     * @return self
     */
    public function setAirReservations(array $airReservations)
    {
        $this->airReservations = $airReservations;

        return $this;
    }


}

