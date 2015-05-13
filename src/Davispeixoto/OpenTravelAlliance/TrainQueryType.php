<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TrainQueryType
 *
 * Defines information to do a query by train operator or specific train
 * information.
 * XSD Type: TrainQueryType
 */
class TrainQueryType
{

    /**
     * A specific train and network code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainIdentificationType $train
     */
    private $train = null;

    /**
     * The network code of a rail operator defined by International Union of Railways
     * (UIC.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\NetworkCodeType $networkCode
     */
    private $networkCode = null;

    /**
     * Gets as train
     *
     * A specific train and network code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainIdentificationType
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Sets a new train
     *
     * A specific train and network code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainIdentificationType $train
     * @return self
     */
    public function setTrain(\Davispeixoto\OpenTravelAlliance\TrainIdentificationType $train)
    {
        $this->train = $train;

        return $this;
    }

    /**
     * Gets as networkCode
     *
     * The network code of a rail operator defined by International Union of Railways
     * (UIC.)
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
     * The network code of a rail operator defined by International Union of Railways
     * (UIC.)
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

