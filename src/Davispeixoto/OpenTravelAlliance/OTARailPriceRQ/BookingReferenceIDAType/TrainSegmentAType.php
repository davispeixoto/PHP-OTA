<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\BookingReferenceIDAType;

/**
 * Class representing TrainSegmentAType
 */
class TrainSegmentAType
{

    /**
     * Used to specify the fare basis code to be used in pricing for these train
     * segments or existing segments in the PNR.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Departure train station.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureStation
     */
    private $departureStation = null;

    /**
     * Arrival train station.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * Train identification including a train number and train network code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     * $trainIdentification
     */
    private $trainIdentification = null;

    /**
     * The departure date and optionally a time period that can be applied before
     * and/or after the departure date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TimeInstantType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Gets as fareBasisCode
     *
     * Used to specify the fare basis code to be used in pricing for these train
     * segments or existing segments in the PNR.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Used to specify the fare basis code to be used in pricing for these train
     * segments or existing segments in the PNR.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Gets as departureStation
     *
     * Departure train station.
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
     * Departure train station.
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
     * Arrival train station.
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
     * Arrival train station.
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
     * Gets as trainIdentification
     *
     * Train identification including a train number and train network code.
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
     * Train identification including a train number and train network code.
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


}

