<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailAvailScheduleQueryType
 *
 * Defines rail availability and schedule search criteria, including
 * origin-destination information and train number and network code.
 * XSD Type: RailAvailScheduleQueryType
 */
class RailAvailScheduleQueryType
{

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
     * Information on the locations between which schedules and/or availability are to
     * be checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType
     * $originDestinationInformation
     */
    private $originDestinationInformation = null;

    /**
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainQueryType[] $railSearchCriteria
     */
    private $railSearchCriteria = null;

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

    /**
     * Gets as originDestinationInformation
     *
     * Information on the locations between which schedules and/or availability are to
     * be checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType
     */
    public function getOriginDestinationInformation()
    {
        return $this->originDestinationInformation;
    }

    /**
     * Sets a new originDestinationInformation
     *
     * Information on the locations between which schedules and/or availability are to
     * be checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType
     * $originDestinationInformation
     * @return self
     */
    public function setOriginDestinationInformation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType $originDestinationInformation
    ) {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }

    /**
     * Adds as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TrainQueryType $railSearchCriteria
     */
    public function addToRailSearchCriteria(\Davispeixoto\OpenTravelAlliance\TrainQueryType $railSearchCriteria)
    {
        $this->railSearchCriteria[] = $railSearchCriteria;

        return $this;
    }

    /**
     * isset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailSearchCriteria($index)
    {
        return isset($this->railSearchCriteria[$index]);
    }

    /**
     * unset railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailSearchCriteria($index)
    {
        unset($this->railSearchCriteria[$index]);
    }

    /**
     * Gets as railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainQueryType[]
     */
    public function getRailSearchCriteria()
    {
        return $this->railSearchCriteria;
    }

    /**
     * Sets a new railSearchCriteria
     *
     * The rail search criteria which may be a train number/ network code combination
     * or just a network code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainQueryType[] $railSearchCriteria
     * @return self
     */
    public function setRailSearchCriteria(array $railSearchCriteria)
    {
        $this->railSearchCriteria = $railSearchCriteria;

        return $this;
    }


}

