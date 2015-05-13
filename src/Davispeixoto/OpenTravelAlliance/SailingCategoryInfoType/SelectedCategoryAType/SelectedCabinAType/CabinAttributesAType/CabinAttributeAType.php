<?php

namespace Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType\SelectedCategoryAType\SelectedCabinAType\CabinAttributesAType;

/**
 * Class representing CabinAttributeAType
 */
class CabinAttributeAType
{

    /**
     * Specifies the type of cabin requested. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @property string $cabinAttributeCode
     */
    private $cabinAttributeCode = null;

    /**
     * Gets as cabinAttributeCode
     *
     * Specifies the type of cabin requested. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @return string
     */
    public function getCabinAttributeCode()
    {
        return $this->cabinAttributeCode;
    }

    /**
     * Sets a new cabinAttributeCode
     *
     * Specifies the type of cabin requested. Refer to OpenTravel Code List Cabin
     * Filters (CBF).
     *
     * @param string $cabinAttributeCode
     * @return self
     */
    public function setCabinAttributeCode($cabinAttributeCode)
    {
        $this->cabinAttributeCode = $cabinAttributeCode;

        return $this;
    }


}

