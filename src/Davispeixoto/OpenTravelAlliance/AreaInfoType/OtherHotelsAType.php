<?php

namespace Davispeixoto\OpenTravelAlliance\AreaInfoType;

/**
 * Class representing OtherHotelsAType
 */
class OtherHotelsAType
{

    /**
     * The date and time when OtherHotels was last updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Provides information on other area hotels.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType\OtherHotelAType[]
     * $otherHotel
     */
    private $otherHotel = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when OtherHotels was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when OtherHotels was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Adds as otherHotel
     *
     * Provides information on other area hotels.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType\OtherHotelAType
     * $otherHotel
     */
    public function addToOtherHotel(
        \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType\OtherHotelAType $otherHotel
    ) {
        $this->otherHotel[] = $otherHotel;

        return $this;
    }

    /**
     * isset otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOtherHotel($index)
    {
        return isset($this->otherHotel[$index]);
    }

    /**
     * unset otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOtherHotel($index)
    {
        unset($this->otherHotel[$index]);
    }

    /**
     * Gets as otherHotel
     *
     * Provides information on other area hotels.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType\OtherHotelAType[]
     */
    public function getOtherHotel()
    {
        return $this->otherHotel;
    }

    /**
     * Sets a new otherHotel
     *
     * Provides information on other area hotels.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType\OtherHotelAType[]
     * $otherHotel
     * @return self
     */
    public function setOtherHotel(array $otherHotel)
    {
        $this->otherHotel = $otherHotel;

        return $this;
    }


}

