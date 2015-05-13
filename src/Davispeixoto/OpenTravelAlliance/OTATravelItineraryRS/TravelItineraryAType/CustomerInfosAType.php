<?php

namespace Davispeixoto\OpenTravelAlliance\OTATravelItineraryRS\TravelItineraryAType;

/**
 * Class representing CustomerInfosAType
 */
class CustomerInfosAType
{

    /**
     * Information for each customer associated with this itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerInfoType[] $customerInfo
     */
    private $customerInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as customerInfo
     *
     * Information for each customer associated with this itinerary.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomerInfoType $customerInfo
     */
    public function addToCustomerInfo(\Davispeixoto\OpenTravelAlliance\CustomerInfoType $customerInfo)
    {
        $this->customerInfo[] = $customerInfo;

        return $this;
    }

    /**
     * isset customerInfo
     *
     * Information for each customer associated with this itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerInfo($index)
    {
        return isset($this->customerInfo[$index]);
    }

    /**
     * unset customerInfo
     *
     * Information for each customer associated with this itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerInfo($index)
    {
        unset($this->customerInfo[$index]);
    }

    /**
     * Gets as customerInfo
     *
     * Information for each customer associated with this itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerInfoType[]
     */
    public function getCustomerInfo()
    {
        return $this->customerInfo;
    }

    /**
     * Sets a new customerInfo
     *
     * Information for each customer associated with this itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerInfoType[] $customerInfo
     * @return self
     */
    public function setCustomerInfo(array $customerInfo)
    {
        $this->customerInfo = $customerInfo;

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

