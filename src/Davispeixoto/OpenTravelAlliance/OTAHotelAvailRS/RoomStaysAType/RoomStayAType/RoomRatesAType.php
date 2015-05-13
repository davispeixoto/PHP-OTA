<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * RoomRate MUST specify the details of an available room rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     */
    private $roomRate = null;

    /**
     * Adds as roomRate
     *
     * RoomRate MUST specify the details of an available room rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType $roomRate
    ) {
        $this->roomRate[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRate
     *
     * RoomRate MUST specify the details of an available room rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * RoomRate MUST specify the details of an available room rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * RoomRate MUST specify the details of an available room rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * RoomRate MUST specify the details of an available room rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;

        return $this;
    }


}

