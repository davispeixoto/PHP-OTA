<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AssociatedContentType
 *
 * Associated content is content (items) associated with the itinerary, but not
 * being part of an itinerary. Examples of itinerary associated items are, travel
 * insurance, maps, and city information.
 * XSD Type: AssociatedContentType
 */
class AssociatedContentType
{

    /**
     * Collection of Itinerary associated items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType
     * $assocItems
     */
    private $assocItems = null;

    /**
     * Cost of ALL associated items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItinPricingType $pricing
     */
    private $pricing = null;

    /**
     * Remarks, OSIs, Seat Requests etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\SpecialRequestDetailsAType
     * $specialRequestDetails
     */
    private $specialRequestDetails = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as assocItems
     *
     * Collection of Itinerary associated items.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType
     */
    public function getAssocItems()
    {
        return $this->assocItems;
    }

    /**
     * Sets a new assocItems
     *
     * Collection of Itinerary associated items.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType
     * $assocItems
     * @return self
     */
    public function setAssocItems(\Davispeixoto\OpenTravelAlliance\AssociatedContentType\AssocItemsAType $assocItems)
    {
        $this->assocItems = $assocItems;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Cost of ALL associated items.
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
     * Cost of ALL associated items.
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
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\SpecialRequestDetailsAType
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
     * \Davispeixoto\OpenTravelAlliance\AssociatedContentType\SpecialRequestDetailsAType
     * $specialRequestDetails
     * @return self
     */
    public function setSpecialRequestDetails(
        \Davispeixoto\OpenTravelAlliance\AssociatedContentType\SpecialRequestDetailsAType $specialRequestDetails
    ) {
        $this->specialRequestDetails = $specialRequestDetails;

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

