<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS;

/**
 * Class representing HistoryInfosAType
 */
class HistoryInfosAType
{

    /**
     * Used to provide history of the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType[]
     * $historyInfo
     */
    private $historyInfo = null;

    /**
     * Adds as historyInfo
     *
     * Used to provide history of the booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType
     * $historyInfo
     */
    public function addToHistoryInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType $historyInfo
    ) {
        $this->historyInfo[] = $historyInfo;

        return $this;
    }

    /**
     * isset historyInfo
     *
     * Used to provide history of the booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHistoryInfo($index)
    {
        return isset($this->historyInfo[$index]);
    }

    /**
     * unset historyInfo
     *
     * Used to provide history of the booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHistoryInfo($index)
    {
        unset($this->historyInfo[$index]);
    }

    /**
     * Gets as historyInfo
     *
     * Used to provide history of the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType[]
     */
    public function getHistoryInfo()
    {
        return $this->historyInfo;
    }

    /**
     * Sets a new historyInfo
     *
     * Used to provide history of the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType[]
     * $historyInfo
     * @return self
     */
    public function setHistoryInfo(array $historyInfo)
    {
        $this->historyInfo = $historyInfo;

        return $this;
    }


}

