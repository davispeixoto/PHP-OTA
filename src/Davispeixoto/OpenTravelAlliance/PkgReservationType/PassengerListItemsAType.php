<?php

namespace Davispeixoto\OpenTravelAlliance\PkgReservationType;

/**
 * Class representing PassengerListItemsAType
 */
class PassengerListItemsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItem
     */
    private $passengerListItem = null;

    /**
     * Adds as passengerListItem
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType
     * $passengerListItem
     */
    public function addToPassengerListItem(\Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType $passengerListItem)
    {
        $this->passengerListItem[] = $passengerListItem;

        return $this;
    }

    /**
     * isset passengerListItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerListItem($index)
    {
        return isset($this->passengerListItem[$index]);
    }

    /**
     * unset passengerListItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerListItem($index)
    {
        unset($this->passengerListItem[$index]);
    }

    /**
     * Gets as passengerListItem
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     */
    public function getPassengerListItem()
    {
        return $this->passengerListItem;
    }

    /**
     * Sets a new passengerListItem
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItem
     * @return self
     */
    public function setPassengerListItem(array $passengerListItem)
    {
        $this->passengerListItem = $passengerListItem;

        return $this;
    }


}

