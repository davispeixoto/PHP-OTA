<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TrainSegmentSummaryType
 *
 * Defines train segment summary information, including departure and arrival
 * stations, departure and arrival dates/times, and train identification
 * information.
 * XSD Type: TrainSegmentSummaryType
 */
class TrainSegmentSummaryType
{

    /**
     * Train departure station information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation
     */
    private $departureStation = null;

    /**
     * Train arrival station information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation
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
     * Train identification information, including a train number and a train network
     * code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     * $trainIdentification
     */
    private $trainIdentification = null;

    /**
     * Gets as departureStation
     *
     * Train departure station information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationDetailsType
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * Sets a new departureStation
     *
     * Train departure station information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation
     * @return self
     */
    public function setDepartureStation(\Davispeixoto\OpenTravelAlliance\StationDetailsType $departureStation)
    {
        $this->departureStation = $departureStation;

        return $this;
    }

    /**
     * Gets as arrivalStation
     *
     * Train arrival station information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationDetailsType
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * Sets a new arrivalStation
     *
     * Train arrival station information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation
     * @return self
     */
    public function setArrivalStation(\Davispeixoto\OpenTravelAlliance\StationDetailsType $arrivalStation)
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
     * Train identification information, including a train number and a train network
     * code.
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
     * Train identification information, including a train number and a train network
     * code.
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

