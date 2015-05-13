<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRQ;

/**
 * Class representing PassengerListItemsAType
 */
class PassengerListItemsAType
{

    /**
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItem
     */
    private $passengerListItem = null;

    /**
     * Adds as passengerListItem
     *
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
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
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
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
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
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
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
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
     * Details of a passenger or of a quantity of generic passengers e.g. 2 children
     * aged 5. When used in this way, Age is essential for children but may be omitted
     * for adults.
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

