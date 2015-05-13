<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType;

use Davispeixoto\OpenTravelAlliance\SourceType;

/**
 * Class representing HistoryInfoAType
 */
class HistoryInfoAType extends SourceType
{

    /**
     * @property \DateTime $lastModified
     */
    private $lastModified = null;

    /**
     * Collection of changed items.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType[]
     * $items
     */
    private $items = null;

    /**
     * Gets as lastModified
     *
     * @return \DateTime
     */
    public function getLastModified()
    {
        return $this->lastModified;
    }

    /**
     * Sets a new lastModified
     *
     * @param \DateTime $lastModified
     * @return self
     */
    public function setLastModified(\DateTime $lastModified)
    {
        $this->lastModified = $lastModified;

        return $this;
    }

    /**
     * Adds as items
     *
     * Collection of changed items.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType
     * $items
     */
    public function addToItems(
        \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType $items
    ) {
        $this->items[] = $items;

        return $this;
    }

    /**
     * isset items
     *
     * Collection of changed items.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItems($index)
    {
        return isset($this->items[$index]);
    }

    /**
     * unset items
     *
     * Collection of changed items.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItems($index)
    {
        unset($this->items[$index]);
    }

    /**
     * Gets as items
     *
     * Collection of changed items.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Sets a new items
     *
     * Collection of changed items.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType[]
     * $items
     * @return self
     */
    public function setItems(array $items)
    {
        $this->items = $items;

        return $this;
    }


}

