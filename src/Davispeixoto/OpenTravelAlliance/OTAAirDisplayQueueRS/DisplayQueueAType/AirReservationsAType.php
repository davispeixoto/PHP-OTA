<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType;

/**
 * Class representing AirReservationsAType
 */
class AirReservationsAType
{

    /**
     * Specifies the full booking file data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     * $airReservation
     */
    private $airReservation = null;

    /**
     * Adds as airReservation
     *
     * Specifies the full booking file data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType
     * $airReservation
     */
    public function addToAirReservation(
        \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType $airReservation
    ) {
        $this->airReservation[] = $airReservation;

        return $this;
    }

    /**
     * isset airReservation
     *
     * Specifies the full booking file data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirReservation($index)
    {
        return isset($this->airReservation[$index]);
    }

    /**
     * unset airReservation
     *
     * Specifies the full booking file data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirReservation($index)
    {
        unset($this->airReservation[$index]);
    }

    /**
     * Gets as airReservation
     *
     * Specifies the full booking file data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     */
    public function getAirReservation()
    {
        return $this->airReservation;
    }

    /**
     * Sets a new airReservation
     *
     * Specifies the full booking file data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDisplayQueueRS\DisplayQueueAType\AirReservationsAType\AirReservationAType[]
     * $airReservation
     * @return self
     */
    public function setAirReservation(array $airReservation)
    {
        $this->airReservation = $airReservation;

        return $this;
    }


}

