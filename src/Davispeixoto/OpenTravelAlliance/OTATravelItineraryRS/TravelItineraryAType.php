<?php

namespace Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS;

/**
 * Class representing TravelItineraryAType
 */
class TravelItineraryAType
{

    /**
     * Controlling system's reference to this itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $itineraryRef
     */
    private $itineraryRef = null;

    /**
     * Information for all customers associated with this itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\CustomerInfosAType
     * $customerInfos
     */
    private $customerInfos = null;

    /**
     * Itinerary reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItineraryInfoType $itineraryInfo
     */
    private $itineraryInfo = null;

    /**
     * Associated itinerary information such as theatre tickets, museum entries,
     * conference tickets, sporting event, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AssociatedContentType
     * $associatedContent
     */
    private $associatedContent = null;

    /**
     * Total cost associated with the entire itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelCostType $travelCost
     */
    private $travelCost = null;

    /**
     * Free text remarks associated with the itinerary (non-customer, non-item).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\RemarksAType
     * $remarks
     */
    private $remarks = null;

    /**
     * Information on the last entity to modify this Itinerary and when this occurred.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccessesType $updatedBy
     */
    private $updatedBy = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as itineraryRef
     *
     * Controlling system's reference to this itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getItineraryRef()
    {
        return $this->itineraryRef;
    }

    /**
     * Sets a new itineraryRef
     *
     * Controlling system's reference to this itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $itineraryRef
     * @return self
     */
    public function setItineraryRef(\Davispeixoto\OpenTravelAlliance\UniqueIDType $itineraryRef)
    {
        $this->itineraryRef = $itineraryRef;

        return $this;
    }

    /**
     * Gets as customerInfos
     *
     * Information for all customers associated with this itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\CustomerInfosAType
     */
    public function getCustomerInfos()
    {
        return $this->customerInfos;
    }

    /**
     * Sets a new customerInfos
     *
     * Information for all customers associated with this itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\CustomerInfosAType
     * $customerInfos
     * @return self
     */
    public function setCustomerInfos(
        \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\CustomerInfosAType $customerInfos
    ) {
        $this->customerInfos = $customerInfos;

        return $this;
    }

    /**
     * Gets as itineraryInfo
     *
     * Itinerary reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItineraryInfoType
     */
    public function getItineraryInfo()
    {
        return $this->itineraryInfo;
    }

    /**
     * Sets a new itineraryInfo
     *
     * Itinerary reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItineraryInfoType $itineraryInfo
     * @return self
     */
    public function setItineraryInfo(\Davispeixoto\OpenTravelAlliance\ItineraryInfoType $itineraryInfo)
    {
        $this->itineraryInfo = $itineraryInfo;

        return $this;
    }

    /**
     * Gets as associatedContent
     *
     * Associated itinerary information such as theatre tickets, museum entries,
     * conference tickets, sporting event, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AssociatedContentType
     */
    public function getAssociatedContent()
    {
        return $this->associatedContent;
    }

    /**
     * Sets a new associatedContent
     *
     * Associated itinerary information such as theatre tickets, museum entries,
     * conference tickets, sporting event, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AssociatedContentType $associatedContent
     * @return self
     */
    public function setAssociatedContent(\Davispeixoto\OpenTravelAlliance\AssociatedContentType $associatedContent)
    {
        $this->associatedContent = $associatedContent;

        return $this;
    }

    /**
     * Gets as travelCost
     *
     * Total cost associated with the entire itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelCostType
     */
    public function getTravelCost()
    {
        return $this->travelCost;
    }

    /**
     * Sets a new travelCost
     *
     * Total cost associated with the entire itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelCostType $travelCost
     * @return self
     */
    public function setTravelCost(\Davispeixoto\OpenTravelAlliance\TravelCostType $travelCost)
    {
        $this->travelCost = $travelCost;

        return $this;
    }

    /**
     * Gets as remarks
     *
     * Free text remarks associated with the itinerary (non-customer, non-item).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\RemarksAType
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * Free text remarks associated with the itinerary (non-customer, non-item).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\RemarksAType
     * $remarks
     * @return self
     */
    public function setRemarks(
        \Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType\RemarksAType $remarks
    ) {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Gets as updatedBy
     *
     * Information on the last entity to modify this Itinerary and when this occurred.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccessesType
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Sets a new updatedBy
     *
     * Information on the last entity to modify this Itinerary and when this occurred.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccessesType $updatedBy
     * @return self
     */
    public function setUpdatedBy(\Davispeixoto\OpenTravelAlliance\AccessesType $updatedBy)
    {
        $this->updatedBy = $updatedBy;

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

