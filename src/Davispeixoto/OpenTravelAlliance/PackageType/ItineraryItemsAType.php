<?php

namespace Davispeixoto\OpenTravelAlliance\PackageType;

/**
 * Class representing ItineraryItemsAType
 */
class ItineraryItemsAType
{

    /**
     * Details of a package component.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     * $itineraryItem
     */
    private $itineraryItem = null;

    /**
     * Adds as itineraryItem
     *
     * Details of a package component.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType $itineraryItem
     */
    public function addToItineraryItem(\Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType $itineraryItem)
    {
        $this->itineraryItem[] = $itineraryItem;

        return $this;
    }

    /**
     * isset itineraryItem
     *
     * Details of a package component.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItineraryItem($index)
    {
        return isset($this->itineraryItem[$index]);
    }

    /**
     * unset itineraryItem
     *
     * Details of a package component.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItineraryItem($index)
    {
        unset($this->itineraryItem[$index]);
    }

    /**
     * Gets as itineraryItem
     *
     * Details of a package component.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     */
    public function getItineraryItem()
    {
        return $this->itineraryItem;
    }

    /**
     * Sets a new itineraryItem
     *
     * Details of a package component.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemRequestType[]
     * $itineraryItem
     * @return self
     */
    public function setItineraryItem(array $itineraryItem)
    {
        $this->itineraryItem = $itineraryItem;

        return $this;
    }


}

