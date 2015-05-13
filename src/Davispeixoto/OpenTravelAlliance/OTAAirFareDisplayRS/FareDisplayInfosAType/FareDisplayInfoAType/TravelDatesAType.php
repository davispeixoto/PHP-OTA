<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType;

/**
 * Class representing TravelDatesAType
 */
class TravelDatesAType
{

    /**
     * The departure date used for the fare display.
     *
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * The arrival date used for the fare display.
     *
     * @property \DateTime $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * If true, blackout dates apply.
     *
     * @property boolean $blackoutDatesInd
     */
    private $blackoutDatesInd = null;

    /**
     * Gets as departureDate
     *
     * The departure date used for the fare display.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date used for the fare display.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as arrivalDate
     *
     * The arrival date used for the fare display.
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * The arrival date used for the fare display.
     *
     * @param \DateTime $arrivalDate
     * @return self
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Gets as blackoutDatesInd
     *
     * If true, blackout dates apply.
     *
     * @return boolean
     */
    public function getBlackoutDatesInd()
    {
        return $this->blackoutDatesInd;
    }

    /**
     * Sets a new blackoutDatesInd
     *
     * If true, blackout dates apply.
     *
     * @param boolean $blackoutDatesInd
     * @return self
     */
    public function setBlackoutDatesInd($blackoutDatesInd)
    {
        $this->blackoutDatesInd = $blackoutDatesInd;

        return $this;
    }


}

