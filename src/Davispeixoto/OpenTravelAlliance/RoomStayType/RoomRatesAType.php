<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * When true, indicates more rates exist. When false, all rate information is
     * provided.
     *
     * @property boolean $moreRatesExistInd
     */
    private $moreRatesExistInd = null;

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     */
    private $roomRate = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as moreRatesExistInd
     *
     * When true, indicates more rates exist. When false, all rate information is
     * provided.
     *
     * @return boolean
     */
    public function getMoreRatesExistInd()
    {
        return $this->moreRatesExistInd;
    }

    /**
     * Sets a new moreRatesExistInd
     *
     * When true, indicates more rates exist. When false, all rate information is
     * provided.
     *
     * @param boolean $moreRatesExistInd
     * @return self
     */
    public function setMoreRatesExistInd($moreRatesExistInd)
    {
        $this->moreRatesExistInd = $moreRatesExistInd;

        return $this;
    }

    /**
     * Adds as roomRate
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRate(\Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType $roomRate)
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

