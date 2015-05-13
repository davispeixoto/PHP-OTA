<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\PackageAType;

/**
 * Class representing ItineraryItemsAType
 */
class ItineraryItemsAType
{

    /**
     * Details of the requested package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType[]
     * $itineraryItem
     */
    private $itineraryItem = null;

    /**
     * Adds as itineraryItem
     *
     * Details of the requested package.
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
     * Details of the requested package.
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
     * Details of the requested package.
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
     * Details of the requested package.
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
     * Details of the requested package.
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

