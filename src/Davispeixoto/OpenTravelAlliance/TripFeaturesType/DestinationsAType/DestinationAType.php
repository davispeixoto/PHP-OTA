<?php

namespace Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType;

use Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing DestinationAType
 */
class DestinationAType extends AddressType
{

    /**
     * @property \DateTime $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * @property \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * An identifier of an area as defined by a reservation system.
     *
     * @property string $areaID
     */
    private $areaID = null;

    /**
     * Gets as arrivalDate
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
     * @param \DateTime $arrivalDate
     * @return self
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Gets as departureDate
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
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;

        return $this;
    }


}

