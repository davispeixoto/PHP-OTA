<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItinPricingType
 *
 * Pricing information for the travel itinerary.
 * XSD Type: ItinPricingType
 */
class ItinPricingType
{

    /**
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @property string[] $itemRPHList
     */
    private $itemRPHList = null;

    /**
     * Reference to associated itinerary item (e.g. Travel Insurance).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItinPricingType\AssociatedItemRPHAType
     * $associatedItemRPH
     */
    private $associatedItemRPH = null;

    /**
     * Cost of this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItinPricingType\CostAType $cost
     */
    private $cost = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as itemRPHList
     *
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @return self
     * @param string $itemRPHList
     */
    public function addToItemRPHList($itemRPHList)
    {
        $this->itemRPHList[] = $itemRPHList;

        return $this;
    }

    /**
     * isset itemRPHList
     *
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemRPHList($index)
    {
        return isset($this->itemRPHList[$index]);
    }

    /**
     * unset itemRPHList
     *
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemRPHList($index)
    {
        unset($this->itemRPHList[$index]);
    }

    /**
     * Gets as itemRPHList
     *
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @return string[]
     */
    public function getItemRPHList()
    {
        return $this->itemRPHList;
    }

    /**
     * Sets a new itemRPHList
     *
     * Reference to itinerary reservation item (e.g. Car, Hotel, Air, Package).
     *
     * @param string $itemRPHList
     * @return self
     */
    public function setItemRPHList(array $itemRPHList)
    {
        $this->itemRPHList = $itemRPHList;

        return $this;
    }

    /**
     * Gets as associatedItemRPH
     *
     * Reference to associated itinerary item (e.g. Travel Insurance).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItinPricingType\AssociatedItemRPHAType
     */
    public function getAssociatedItemRPH()
    {
        return $this->associatedItemRPH;
    }

    /**
     * Sets a new associatedItemRPH
     *
     * Reference to associated itinerary item (e.g. Travel Insurance).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItinPricingType\AssociatedItemRPHAType
     * $associatedItemRPH
     * @return self
     */
    public function setAssociatedItemRPH(
        \Davispeixoto\OpenTravelAlliance\ItinPricingType\AssociatedItemRPHAType $associatedItemRPH
    ) {
        $this->associatedItemRPH = $associatedItemRPH;

        return $this;
    }

    /**
     * Gets as cost
     *
     * Cost of this pricing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItinPricingType\CostAType
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Sets a new cost
     *
     * Cost of this pricing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItinPricingType\CostAType $cost
     * @return self
     */
    public function setCost(\Davispeixoto\OpenTravelAlliance\ItinPricingType\CostAType $cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

