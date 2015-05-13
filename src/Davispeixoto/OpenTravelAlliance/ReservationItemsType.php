<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ReservationItemsType
 *
 * Travel segment (air, vehicle, hotel, rail, cruise, tour, general and package),
 * pricing and special request information.
 * XSD Type: ReservationItemsType
 */
class ReservationItemsType
{

    /**
     * If TRUE, indicates items are in chronological order. If FALSE, indicates items
     * are not in chronological order.
     *
     * @property boolean $chronoOrdered
     */
    private $chronoOrdered = null;

    /**
     * A single reservation item (e.g. Hotel, Car, Air, Package).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemAType[]
     * $item
     */
    private $item = null;

    /**
     * Cost of a single reservation item.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemPricingAType[]
     * $itemPricing
     */
    private $itemPricing = null;

    /**
     * Remarks, OSIs, Seat Requests etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReservationItemsType\SpecialRequestDetailsAType
     * $specialRequestDetails
     */
    private $specialRequestDetails = null;

    /**
     * Gets as chronoOrdered
     *
     * If TRUE, indicates items are in chronological order. If FALSE, indicates items
     * are not in chronological order.
     *
     * @return boolean
     */
    public function getChronoOrdered()
    {
        return $this->chronoOrdered;
    }

    /**
     * Sets a new chronoOrdered
     *
     * If TRUE, indicates items are in chronological order. If FALSE, indicates items
     * are not in chronological order.
     *
     * @param boolean $chronoOrdered
     * @return self
     */
    public function setChronoOrdered($chronoOrdered)
    {
        $this->chronoOrdered = $chronoOrdered;

        return $this;
    }

    /**
     * Adds as item
     *
     * A single reservation item (e.g. Hotel, Car, Air, Package).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemAType $item
     */
    public function addToItem(\Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemAType $item)
    {
        $this->item[] = $item;

        return $this;
    }

    /**
     * isset item
     *
     * A single reservation item (e.g. Hotel, Car, Air, Package).
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
     * A single reservation item (e.g. Hotel, Car, Air, Package).
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
     * A single reservation item (e.g. Hotel, Car, Air, Package).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemAType[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * A single reservation item (e.g. Hotel, Car, Air, Package).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemAType[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Adds as itemPricing
     *
     * Cost of a single reservation item.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemPricingAType
     * $itemPricing
     */
    public function addToItemPricing(
        \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemPricingAType $itemPricing
    ) {
        $this->itemPricing[] = $itemPricing;

        return $this;
    }

    /**
     * isset itemPricing
     *
     * Cost of a single reservation item.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemPricing($index)
    {
        return isset($this->itemPricing[$index]);
    }

    /**
     * unset itemPricing
     *
     * Cost of a single reservation item.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemPricing($index)
    {
        unset($this->itemPricing[$index]);
    }

    /**
     * Gets as itemPricing
     *
     * Cost of a single reservation item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemPricingAType[]
     */
    public function getItemPricing()
    {
        return $this->itemPricing;
    }

    /**
     * Sets a new itemPricing
     *
     * Cost of a single reservation item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationItemsType\ItemPricingAType[]
     * $itemPricing
     * @return self
     */
    public function setItemPricing(array $itemPricing)
    {
        $this->itemPricing = $itemPricing;

        return $this;
    }

    /**
     * Gets as specialRequestDetails
     *
     * Remarks, OSIs, Seat Requests etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReservationItemsType\SpecialRequestDetailsAType
     */
    public function getSpecialRequestDetails()
    {
        return $this->specialRequestDetails;
    }

    /**
     * Sets a new specialRequestDetails
     *
     * Remarks, OSIs, Seat Requests etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReservationItemsType\SpecialRequestDetailsAType
     * $specialRequestDetails
     * @return self
     */
    public function setSpecialRequestDetails(
        \Davispeixoto\OpenTravelAlliance\ReservationItemsType\SpecialRequestDetailsAType $specialRequestDetails
    ) {
        $this->specialRequestDetails = $specialRequestDetails;

        return $this;
    }


}

