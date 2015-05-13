<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType;

/**
 * Class representing StayDaysAType
 */
class StayDaysAType
{

    /**
     * This is used to identify the first day of the room block.
     *
     * @property string $firstStayDayOfWeek
     */
    private $firstStayDayOfWeek = null;

    /**
     * A container for the DayNumber.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType[]
     * $stayDay
     */
    private $stayDay = null;

    /**
     * Gets as firstStayDayOfWeek
     *
     * This is used to identify the first day of the room block.
     *
     * @return string
     */
    public function getFirstStayDayOfWeek()
    {
        return $this->firstStayDayOfWeek;
    }

    /**
     * Sets a new firstStayDayOfWeek
     *
     * This is used to identify the first day of the room block.
     *
     * @param string $firstStayDayOfWeek
     * @return self
     */
    public function setFirstStayDayOfWeek($firstStayDayOfWeek)
    {
        $this->firstStayDayOfWeek = $firstStayDayOfWeek;

        return $this;
    }

    /**
     * Adds as stayDay
     *
     * A container for the DayNumber.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType
     * $stayDay
     */
    public function addToStayDay(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType $stayDay
    ) {
        $this->stayDay[] = $stayDay;

        return $this;
    }

    /**
     * isset stayDay
     *
     * A container for the DayNumber.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayDay($index)
    {
        return isset($this->stayDay[$index]);
    }

    /**
     * unset stayDay
     *
     * A container for the DayNumber.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayDay($index)
    {
        unset($this->stayDay[$index]);
    }

    /**
     * Gets as stayDay
     *
     * A container for the DayNumber.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType[]
     */
    public function getStayDay()
    {
        return $this->stayDay;
    }

    /**
     * Sets a new stayDay
     *
     * A container for the DayNumber.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType\StayDaysAType\StayDayAType[]
     * $stayDay
     * @return self
     */
    public function setStayDay(array $stayDay)
    {
        $this->stayDay = $stayDay;

        return $this;
    }


}

