<?php

namespace Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType;

use Davispeixoto\OpenTravelAlliance\CabinOptionType;

/**
 * Class representing SelectedCabinAType
 */
class SelectedCabinAType extends CabinOptionType
{

    /**
     * Collection of cabin attributes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttributes
     */
    private $cabinAttributes = null;

    /**
     * Adds as cabinAttribute
     *
     * Collection of cabin attributes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType
     * $cabinAttribute
     */
    public function addToCabinAttributes(
        \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType $cabinAttribute
    ) {
        $this->cabinAttributes[] = $cabinAttribute;

        return $this;
    }

    /**
     * isset cabinAttributes
     *
     * Collection of cabin attributes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinAttributes($index)
    {
        return isset($this->cabinAttributes[$index]);
    }

    /**
     * unset cabinAttributes
     *
     * Collection of cabin attributes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinAttributes($index)
    {
        unset($this->cabinAttributes[$index]);
    }

    /**
     * Gets as cabinAttributes
     *
     * Collection of cabin attributes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     */
    public function getCabinAttributes()
    {
        return $this->cabinAttributes;
    }

    /**
     * Sets a new cabinAttributes
     *
     * Collection of cabin attributes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType\CabinAttributeAType[]
     * $cabinAttributes
     * @return self
     */
    public function setCabinAttributes(array $cabinAttributes)
    {
        $this->cabinAttributes = $cabinAttributes;

        return $this;
    }


}

