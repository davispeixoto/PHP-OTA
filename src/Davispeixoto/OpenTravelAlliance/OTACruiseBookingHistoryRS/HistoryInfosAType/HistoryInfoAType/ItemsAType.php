<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType;

/**
 * Class representing ItemsAType
 */
class ItemsAType
{

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * History item details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType\ItemAType[]
     * $item
     */
    private $item = null;

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Provides the code identifying the item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Adds as item
     *
     * History item details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType\ItemAType
     * $item
     */
    public function addToItem(
        \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType\ItemAType $item
    ) {
        $this->item[] = $item;

        return $this;
    }

    /**
     * isset item
     *
     * History item details.
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
     * History item details.
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
     * History item details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * History item details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType\ItemAType[]
     * $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }


}

