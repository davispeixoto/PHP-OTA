<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ;

/**
 * Class representing PassengerListItemsAType
 */
class PassengerListItemsAType
{

    /**
     * Details of a passenger booking this holiday package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItem
     */
    private $passengerListItem = null;

    /**
     * Adds as passengerListItem
     *
     * Details of a passenger booking this holiday package.
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
     * Details of a passenger booking this holiday package.
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
     * Details of a passenger booking this holiday package.
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
     * Details of a passenger booking this holiday package.
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
     * Details of a passenger booking this holiday package.
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

