<?php

namespace Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType;

/**
 * Class representing CabinAttributesAType
 */
class CabinAttributesAType
{

    /**
     * List of attributes associated with this cabin.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttribute
     */
    private $cabinAttribute = null;

    /**
     * Adds as cabinAttribute
     *
     * List of attributes associated with this cabin.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType
     * $cabinAttribute
     */
    public function addToCabinAttribute(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType $cabinAttribute
    ) {
        $this->cabinAttribute[] = $cabinAttribute;

        return $this;
    }

    /**
     * isset cabinAttribute
     *
     * List of attributes associated with this cabin.
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
     * List of attributes associated with this cabin.
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
     * List of attributes associated with this cabin.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     */
    public function getCabinAttribute()
    {
        return $this->cabinAttribute;
    }

    /**
     * Sets a new cabinAttribute
     *
     * List of attributes associated with this cabin.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttribute
     * @return self
     */
    public function setCabinAttribute(array $cabinAttribute)
    {
        $this->cabinAttribute = $cabinAttribute;

        return $this;
    }


}

