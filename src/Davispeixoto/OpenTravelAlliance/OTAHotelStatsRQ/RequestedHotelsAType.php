<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ;

/**
 * Class representing RequestedHotelsAType
 */
class RequestedHotelsAType
{

    /**
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType[]
     * $requestedHotel
     */
    private $requestedHotel = null;

    /**
     * Adds as requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType
     * $requestedHotel
     */
    public function addToRequestedHotel(
        \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType $requestedHotel
    ) {
        $this->requestedHotel[] = $requestedHotel;

        return $this;
    }

    /**
     * isset requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequestedHotel($index)
    {
        return isset($this->requestedHotel[$index]);
    }

    /**
     * unset requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequestedHotel($index)
    {
        unset($this->requestedHotel[$index]);
    }

    /**
     * Gets as requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType[]
     */
    public function getRequestedHotel()
    {
        return $this->requestedHotel;
    }

    /**
     * Sets a new requestedHotel
     *
     * Identifies each hotel or set of hotels for which reports are being requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelStatsRQ\RequestedHotelsAType\RequestedHotelAType[]
     * $requestedHotel
     * @return self
     */
    public function setRequestedHotel(array $requestedHotel)
    {
        $this->requestedHotel = $requestedHotel;

        return $this;
    }


}

