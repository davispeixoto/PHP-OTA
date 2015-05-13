<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing BlackoutDatesAType
 */
class BlackoutDatesAType
{

    /**
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     * $blackoutDate
     */
    private $blackoutDate = null;

    /**
     * Adds as blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType
     * $blackoutDate
     */
    public function addToBlackoutDate(
        \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType $blackoutDate
    ) {
        $this->blackoutDate[] = $blackoutDate;

        return $this;
    }

    /**
     * isset blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBlackoutDate($index)
    {
        return isset($this->blackoutDate[$index]);
    }

    /**
     * unset blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBlackoutDate($index)
    {
        unset($this->blackoutDate[$index]);
    }

    /**
     * Gets as blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     */
    public function getBlackoutDate()
    {
        return $this->blackoutDate;
    }

    /**
     * Sets a new blackoutDate
     *
     * A Blackout Date during which the hotel cannot guarantee rates and rooms
     * availability due to peak occupancy.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\BlackoutDatesAType\BlackoutDateAType[]
     * $blackoutDate
     * @return self
     */
    public function setBlackoutDate(array $blackoutDate)
    {
        $this->blackoutDate = $blackoutDate;

        return $this;
    }


}

