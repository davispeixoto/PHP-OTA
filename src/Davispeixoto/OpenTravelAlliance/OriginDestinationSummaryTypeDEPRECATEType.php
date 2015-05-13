<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OriginDestinationSummaryTypeDEPRECATEType
 *
 * Defines summary information about the rail origin and destination.
 * XSD Type: OriginDestinationSummaryType_DEPRECATE
 */
class OriginDestinationSummaryTypeDEPRECATEType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Train info in each train segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TrainInfoType[] $trainInfo
     */
    private $trainInfo = null;

    /**
     * Gets as originLocation
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Gets as departureDateTime
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
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
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
     * Adds as trainInfo
     *
     * Train info in each train segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TrainInfoType $trainInfo
     */
    public function addToTrainInfo(\Davispeixoto\OpenTravelAlliance\TrainInfoType $trainInfo)
    {
        $this->trainInfo[] = $trainInfo;

        return $this;
    }

    /**
     * isset trainInfo
     *
     * Train info in each train segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrainInfo($index)
    {
        return isset($this->trainInfo[$index]);
    }

    /**
     * unset trainInfo
     *
     * Train info in each train segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrainInfo($index)
    {
        unset($this->trainInfo[$index]);
    }

    /**
     * Gets as trainInfo
     *
     * Train info in each train segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TrainInfoType[]
     */
    public function getTrainInfo()
    {
        return $this->trainInfo;
    }

    /**
     * Sets a new trainInfo
     *
     * Train info in each train segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TrainInfoType[] $trainInfo
     * @return self
     */
    public function setTrainInfo(array $trainInfo)
    {
        $this->trainInfo = $trainInfo;

        return $this;
    }


}

