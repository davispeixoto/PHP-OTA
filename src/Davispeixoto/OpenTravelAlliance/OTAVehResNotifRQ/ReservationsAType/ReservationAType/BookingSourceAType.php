<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType;

/**
 * Class representing BookingSourceAType
 */
class BookingSourceAType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     * $source
     */
    private $source = null;

    /**
     * Adds as source
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType
     * $source
     */
    public function addToSource(
        \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType $source
    ) {
        $this->source[] = $source;

        return $this;
    }

    /**
     * isset source
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType\BookingSourceAType\SourceAType[]
     * $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;

        return $this;
    }


}

