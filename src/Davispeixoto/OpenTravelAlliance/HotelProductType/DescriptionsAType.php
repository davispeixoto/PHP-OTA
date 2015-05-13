<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{

    /**
     * Descriptive information for the product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * Adds as description
     *
     * Descriptive information for the product.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType
     * $description
     */
    public function addToDescription(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType $description
    ) {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Descriptive information for the product.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Descriptive information for the product.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Descriptive information for the product.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information for the product.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\DescriptionsAType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

