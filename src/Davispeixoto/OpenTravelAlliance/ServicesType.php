<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ServicesType
 *
 * A collection of Service objects. This is the collection of all services
 * associated with any part of this reservation (the reservation in its entirety,
 * one or more guests, or one or more room stays). Which services are attributable
 * to which part is determined by each object's ServiceRPHs collection.
 * XSD Type: ServicesType
 */
class ServicesType
{

    /**
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ServiceType[] $service
     */
    private $service = null;

    /**
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ServicesType\ServiceCategoryAType[]
     * $serviceCategory
     */
    private $serviceCategory = null;

    /**
     * Adds as service
     *
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ServiceType $service
     */
    public function addToService(\Davispeixoto\OpenTravelAlliance\ServiceType $service)
    {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
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
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
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
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ServiceType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * A Service object represents a non-room product provided to guests. Service
     * products may have associated inventory and charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ServiceType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Adds as serviceCategory
     *
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ServicesType\ServiceCategoryAType
     * $serviceCategory
     */
    public function addToServiceCategory(
        \Davispeixoto\OpenTravelAlliance\ServicesType\ServiceCategoryAType $serviceCategory
    ) {
        $this->serviceCategory[] = $serviceCategory;

        return $this;
    }

    /**
     * isset serviceCategory
     *
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetServiceCategory($index)
    {
        return isset($this->serviceCategory[$index]);
    }

    /**
     * unset serviceCategory
     *
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetServiceCategory($index)
    {
        unset($this->serviceCategory[$index]);
    }

    /**
     * Gets as serviceCategory
     *
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ServicesType\ServiceCategoryAType[]
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * Sets a new serviceCategory
     *
     * Hotel systems often group multiple services into a single category. This refers
     * to that category that is specific to the hotel CRS/PMS.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ServicesType\ServiceCategoryAType[]
     * $serviceCategory
     * @return self
     */
    public function setServiceCategory(array $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;

        return $this;
    }


}

