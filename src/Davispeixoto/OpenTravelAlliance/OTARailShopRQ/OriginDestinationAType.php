<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailShopRQ;

use Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType extends RailOriginDestinationSummaryType
{

    /**
     * The unique identifier for a passenger specified in PassengerType/ @RPH.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * A unique identifier assigned for this outbound segment that is used to associate
     * the outbound segment elsewhere in this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @property integer $maxConnections
     */
    private $maxConnections = null;

    /**
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @property string $trainTypeCode
     */
    private $trainTypeCode = null;

    /**
     * Gets as passengerRPH
     *
     * The unique identifier for a passenger specified in PassengerType/ @RPH.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * The unique identifier for a passenger specified in PassengerType/ @RPH.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique identifier assigned for this outbound segment that is used to associate
     * the outbound segment elsewhere in this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique identifier assigned for this outbound segment that is used to associate
     * the outbound segment elsewhere in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as maxConnections
     *
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @return integer
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * Sets a new maxConnections
     *
     * Indicates the maximum number of connections (if 0, then direct).
     *
     * @param integer $maxConnections
     * @return self
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * Gets as trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @return string
     */
    public function getTrainTypeCode()
    {
        return $this->trainTypeCode;
    }

    /**
     * Sets a new trainTypeCode
     *
     * The type of train to include in the response. Refer to OpenTravel code list
     * Train Type Code (TTC).
     *
     * @param string $trainTypeCode
     * @return self
     */
    public function setTrainTypeCode($trainTypeCode)
    {
        $this->trainTypeCode = $trainTypeCode;

        return $this;
    }


}

