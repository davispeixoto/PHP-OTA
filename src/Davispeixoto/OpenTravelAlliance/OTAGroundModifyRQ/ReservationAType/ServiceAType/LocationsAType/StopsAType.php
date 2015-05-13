<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType;

/**
 * Class representing StopsAType
 */
class StopsAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType\StopAType[]
     * $stop
     */
    private $stop = null;

    /**
     * Adds as stop
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType\StopAType
     * $stop
     */
    public function addToStop(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType\StopAType $stop
    ) {
        $this->stop[] = $stop;

        return $this;
    }

    /**
     * isset stop
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStop($index)
    {
        return isset($this->stop[$index]);
    }

    /**
     * unset stop
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStop($index)
    {
        unset($this->stop[$index]);
    }

    /**
     * Gets as stop
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType\StopAType[]
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Sets a new stop
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType\LocationsAType\StopsAType\StopAType[]
     * $stop
     * @return self
     */
    public function setStop(array $stop)
    {
        $this->stop = $stop;

        return $this;
    }


}
