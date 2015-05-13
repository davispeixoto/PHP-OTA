<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS;

/**
 * Class representing TravelChoicesAType
 */
class TravelChoicesAType
{

    /**
     * Details of a travel choice.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType[]
     * $travelItem
     */
    private $travelItem = null;

    /**
     * Adds as travelItem
     *
     * Details of a travel choice.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType
     * $travelItem
     */
    public function addToTravelItem(
        \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType $travelItem
    ) {
        $this->travelItem[] = $travelItem;

        return $this;
    }

    /**
     * isset travelItem
     *
     * Details of a travel choice.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelItem($index)
    {
        return isset($this->travelItem[$index]);
    }

    /**
     * unset travelItem
     *
     * Details of a travel choice.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelItem($index)
    {
        unset($this->travelItem[$index]);
    }

    /**
     * Gets as travelItem
     *
     * Details of a travel choice.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType[]
     */
    public function getTravelItem()
    {
        return $this->travelItem;
    }

    /**
     * Sets a new travelItem
     *
     * Details of a travel choice.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType[]
     * $travelItem
     * @return self
     */
    public function setTravelItem(array $travelItem)
    {
        $this->travelItem = $travelItem;

        return $this;
    }


}

