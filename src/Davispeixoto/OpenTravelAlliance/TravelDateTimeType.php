<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelDateTimeType
 *
 * Date and time of trip that allows specifying a time window before and after the
 * given date.
 * XSD Type: TravelDateTimeType
 */
class TravelDateTimeType
{

    /**
     * The departure date and optionally a time period that can be applied before
     * and/or after the departure date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeInstantType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and optionally a time period that can be applied before and/or
     * after the arrival date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeInstantType $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Gets as departureDateTime
     *
     * The departure date and optionally a time period that can be applied before
     * and/or after the departure date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeInstantType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date and optionally a time period that can be applied before
     * and/or after the departure date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeInstantType $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\Davispeixoto\OpenTravelAlliance\TimeInstantType $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or
     * after the arrival date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TimeInstantType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or
     * after the arrival date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TimeInstantType $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\Davispeixoto\OpenTravelAlliance\TimeInstantType $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }


}

