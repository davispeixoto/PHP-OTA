<?php

namespace Davispeixoto\OpenTravelAlliance\AssociatedContentType;

/**
 * Class representing AssocItemsAType
 */
class AssocItemsAType
{

    /**
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\AssocItemAType[]
     * $assocItem
     */
    private $assocItem = null;

    /**
     * Cost of a single associated item.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItinPricingType $pricing
     */
    private $pricing = null;

    /**
     * Remarks, OSIs, Seat Requests etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\SpecialRequestDetailsAType
     * $specialRequestDetails
     */
    private $specialRequestDetails = null;

    /**
     * Adds as assocItem
     *
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\AssocItemAType
     * $assocItem
     */
    public function addToAssocItem(
        \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\AssocItemAType $assocItem
    ) {
        $this->assocItem[] = $assocItem;

        return $this;
    }

    /**
     * isset assocItem
     *
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAssocItem($index)
    {
        return isset($this->assocItem[$index]);
    }

    /**
     * unset assocItem
     *
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAssocItem($index)
    {
        unset($this->assocItem[$index]);
    }

    /**
     * Gets as assocItem
     *
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\AssocItemAType[]
     */
    public function getAssocItem()
    {
        return $this->assocItem;
    }

    /**
     * Sets a new assocItem
     *
     * Itinerary associated item (e.g. Travel Insurance).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\AssocItemAType[]
     * $assocItem
     * @return self
     */
    public function setAssocItem(array $assocItem)
    {
        $this->assocItem = $assocItem;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Cost of a single associated item.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItinPricingType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Cost of a single associated item.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItinPricingType $pricing
     * @return self
     */
    public function setPricing(\Davispeixoto\OpenTravelAlliance\ItinPricingType $pricing)
    {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Gets as specialRequestDetails
     *
     * Remarks, OSIs, Seat Requests etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\SpecialRequestDetailsAType
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
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\SpecialRequestDetailsAType
     * $specialRequestDetails
     * @return self
     */
    public function setSpecialRequestDetails(
        \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType\SpecialRequestDetailsAType $specialRequestDetails
    ) {
        $this->specialRequestDetails = $specialRequestDetails;

        return $this;
    }


}

