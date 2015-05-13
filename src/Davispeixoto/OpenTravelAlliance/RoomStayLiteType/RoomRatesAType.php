<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayLiteType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[] $roomRate
     */
    private $roomRate = null;

    /**
     * Adds as roomRate
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateLiteType $roomRate
     */
    public function addToRoomRate(\Davispeixoto\OpenTravelAlliance\RoomRateLiteType $roomRate)
    {
        $this->roomRate[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRate
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
     * @return \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateLiteType[] $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;

        return $this;
    }


}

