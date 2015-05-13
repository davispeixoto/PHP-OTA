<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ;

/**
 * Class representing SeatMapRequestsAType
 */
class SeatMapRequestsAType
{

    /**
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType[]
     * $seatMapRequest
     */
    private $seatMapRequest = null;

    /**
     * Adds as seatMapRequest
     *
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType
     * $seatMapRequest
     */
    public function addToSeatMapRequest(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType $seatMapRequest
    ) {
        $this->seatMapRequest[] = $seatMapRequest;

        return $this;
    }

    /**
     * isset seatMapRequest
     *
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatMapRequest($index)
    {
        return isset($this->seatMapRequest[$index]);
    }

    /**
     * unset seatMapRequest
     *
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatMapRequest($index)
    {
        unset($this->seatMapRequest[$index]);
    }

    /**
     * Gets as seatMapRequest
     *
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType[]
     */
    public function getSeatMapRequest()
    {
        return $this->seatMapRequest;
    }

    /**
     * Sets a new seatMapRequest
     *
     * The number of flight segments for which the Seat Map is requested for. If an
     * itinerary consists of multiple flight segments then corresponding number of
     * SeatMapRequest elements will be sent in the request. If there is a gauge change
     * (equipment change) within a flight segment an error response is expected. In
     * such a case two different Seat MapRequest elements need to be sent requesting
     * seatmap for two flight segments for different gauges.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType[]
     * $seatMapRequest
     * @return self
     */
    public function setSeatMapRequest(array $seatMapRequest)
    {
        $this->seatMapRequest = $seatMapRequest;

        return $this;
    }


}

