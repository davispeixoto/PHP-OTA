<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing DatesAType
 */
class DatesAType
{

    /**
     * Specifies event date and associated location information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     * $date
     */
    private $date = null;

    /**
     * Adds as date
     *
     * Specifies event date and associated location information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType
     * $date
     */
    public function addToDate(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType $date
    ) {
        $this->date[] = $date;

        return $this;
    }

    /**
     * isset date
     *
     * Specifies event date and associated location information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Specifies event date and associated location information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Specifies event date and associated location information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Specifies event date and associated location information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType[]
     * $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }


}

