<?php

namespace Davispeixoto\OpenTravelAlliance\OTADestActivityResRS;

/**
 * Class representing ReservationResponseItemsAType
 */
class ReservationResponseItemsAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType[]
     * $item
     */
    private $item = null;

    /**
     * Adds as item
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType $item
     */
    public function addToItem(\Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * isset item
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * @return \Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * @param \Davispeixoto\OpenTravelAlliance\DestActivityResResponseItemType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }


}

