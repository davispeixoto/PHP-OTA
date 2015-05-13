<?php

namespace Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType;

/**
 * Class representing CabinAttributesAType
 */
class CabinAttributesAType
{

    /**
     * List of attributes associated with all cabins in the specified category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttribute
     */
    private $cabinAttribute = null;

    /**
     * Adds as cabinAttribute
     *
     * List of attributes associated with all cabins in the specified category.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType
     * $cabinAttribute
     */
    public function addToCabinAttribute(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType $cabinAttribute
    ) {
        $this->cabinAttribute[] = $cabinAttribute;

        return $this;
    }

    /**
     * isset cabinAttribute
     *
     * List of attributes associated with all cabins in the specified category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinAttribute($index)
    {
        return isset($this->cabinAttribute[$index]);
    }

    /**
     * unset cabinAttribute
     *
     * List of attributes associated with all cabins in the specified category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinAttribute($index)
    {
        unset($this->cabinAttribute[$index]);
    }

    /**
     * Gets as cabinAttribute
     *
     * List of attributes associated with all cabins in the specified category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     */
    public function getCabinAttribute()
    {
        return $this->cabinAttribute;
    }

    /**
     * Sets a new cabinAttribute
     *
     * List of attributes associated with all cabins in the specified category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttribute
     * @return self
     */
    public function setCabinAttribute(array $cabinAttribute)
    {
        $this->cabinAttribute = $cabinAttribute;

        return $this;
    }


}

