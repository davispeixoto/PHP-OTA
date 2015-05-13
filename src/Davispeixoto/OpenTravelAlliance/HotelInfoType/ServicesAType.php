<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{

    /**
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * Adds as service
     *
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType
     * $service
     */
    public function addToService(\Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * A hotel service or amenity available to the guest such as a business center,
     * concierge, valet parking, massage, newspapers, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType\ServiceAType[]
     * $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }


}

