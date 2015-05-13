<?php

namespace Davispeixoto\OpenTravelAlliance\AirReservationType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing BookingReferenceIDAType
 */
class BookingReferenceIDAType extends UniqueIDType
{

    /**
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @property string[] $flightRefNumberRPHList
     */
    private $flightRefNumberRPHList = null;

    /**
     * Adds as flightRefNumberRPHList
     *
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @return self
     * @param string $flightRefNumberRPHList
     */
    public function addToFlightRefNumberRPHList($flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList[] = $flightRefNumberRPHList;

        return $this;
    }

    /**
     * isset flightRefNumberRPHList
     *
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightRefNumberRPHList($index)
    {
        return isset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * unset flightRefNumberRPHList
     *
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightRefNumberRPHList($index)
    {
        unset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * Gets as flightRefNumberRPHList
     *
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @return string[]
     */
    public function getFlightRefNumberRPHList()
    {
        return $this->flightRefNumberRPHList;
    }

    /**
     * Sets a new flightRefNumberRPHList
     *
     * This provides a list of flight segment RPHs associated with a specific Booking
     * Reference ID.
     *
     * @param string $flightRefNumberRPHList
     * @return self
     */
    public function setFlightRefNumberRPHList(array $flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList = $flightRefNumberRPHList;

        return $this;
    }


}

