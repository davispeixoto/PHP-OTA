<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TrainIdentificationType
 *
 * Defines train identification information, including a train number and a train
 * network code.
 * XSD Type: TrainIdentificationType
 */
class TrainIdentificationType
{

    /**
     * The unique number that identifies the train.
     *
     * @property string $trainNumber
     */
    private $trainNumber = null;

    /**
     * The network code of a rail operator defined by UIC (International Union of
     * Railways.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode
     */
    private $networkCode = null;

    /**
     * Gets as trainNumber
     *
     * The unique number that identifies the train.
     *
     * @return string
     */
    public function getTrainNumber()
    {
        return $this->trainNumber;
    }

    /**
     * Sets a new trainNumber
     *
     * The unique number that identifies the train.
     *
     * @param string $trainNumber
     * @return self
     */
    public function setTrainNumber($trainNumber)
    {
        $this->trainNumber = $trainNumber;

        return $this;
    }

    /**
     * Gets as networkCode
     *
     * The network code of a rail operator defined by UIC (International Union of
     * Railways.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\NetworkCodeType
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Sets a new networkCode
     *
     * The network code of a rail operator defined by UIC (International Union of
     * Railways.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode
     * @return self
     */
    public function setNetworkCode(\Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode)
    {
        $this->networkCode = $networkCode;

        return $this;
    }


}

