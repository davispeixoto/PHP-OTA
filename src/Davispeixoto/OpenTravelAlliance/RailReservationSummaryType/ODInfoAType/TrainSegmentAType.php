<?php

namespace Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType;

/**
 * Class representing TrainSegmentAType
 *
 * Defines train segment summary information, including departure and arrival
 * stations, departure and arrival dates/times, and train identification
 * information.
 */
class TrainSegmentAType
{

    /**
     * Train departure station location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureStation
     */
    private $departureStation = null;

    /**
     * Train arrival station location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * The departure date and time.
     *
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and time.
     *
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Train identification information, including a train type code, a train number
     * and a train network code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     * $trainIdentification
     */
    private $trainIdentification = null;

    /**
     * Gets as departureStation
     *
     * Train departure station location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * Sets a new departureStation
     *
     * Train departure station location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureStation
     * @return self
     */
    public function setDepartureStation(\Davispeixoto\OpenTravelAlliance\LocationType $departureStation)
    {
        $this->departureStation = $departureStation;

        return $this;
    }

    /**
     * Gets as arrivalStation
     *
     * Train arrival station location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * Sets a new arrivalStation
     *
     * Train arrival station location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation
     * @return self
     */
    public function setArrivalStation(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation)
    {
        $this->arrivalStation = $arrivalStation;

        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * The departure date and time.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date and time.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and time.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date and time.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as trainIdentification
     *
     * Train identification information, including a train type code, a train number
     * and a train network code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     */
    public function getTrainIdentification()
    {
        return $this->trainIdentification;
    }

    /**
     * Sets a new trainIdentification
     *
     * Train identification information, including a train type code, a train number
     * and a train network code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     * $trainIdentification
     * @return self
     */
    public function setTrainIdentification(
        \Davispeixoto\OpenTravelAlliance\TrainIdentificationType $trainIdentification
    ) {
        $this->trainIdentification = $trainIdentification;

        return $this;
    }


}

