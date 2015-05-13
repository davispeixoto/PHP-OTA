<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\PackageInfoAType;

/**
 * Class representing ItineraryItemsAType
 */
class ItineraryItemsAType
{

    /**
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType[]
     * $itineraryItem
     */
    private $itineraryItem = null;

    /**
     * Adds as itineraryItem
     *
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType $itineraryItem
     */
    public function addToItineraryItem(\Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType $itineraryItem)
    {
        $this->itineraryItem[] = $itineraryItem;

        return $this;
    }

    /**
     * isset itineraryItem
     *
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
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
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
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
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType[]
     */
    public function getItineraryItem()
    {
        return $this->itineraryItem;
    }

    /**
     * Sets a new itineraryItem
     *
     * An item of package itinerary - typically a flight, accommodation or car rental
     * arrangement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType[]
     * $itineraryItem
     * @return self
     */
    public function setItineraryItem(array $itineraryItem)
    {
        $this->itineraryItem = $itineraryItem;

        return $this;
    }


}

