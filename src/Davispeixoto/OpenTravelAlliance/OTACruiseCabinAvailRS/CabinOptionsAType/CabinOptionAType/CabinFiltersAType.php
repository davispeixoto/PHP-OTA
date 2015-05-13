<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType;

/**
 * Class representing CabinFiltersAType
 */
class CabinFiltersAType
{

    /**
     * Used to describe the features of the cabin.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     * $cabinFilter
     */
    private $cabinFilter = null;

    /**
     * Adds as cabinFilter
     *
     * Used to describe the features of the cabin.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType
     * $cabinFilter
     */
    public function addToCabinFilter(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType $cabinFilter
    ) {
        $this->cabinFilter[] = $cabinFilter;

        return $this;
    }

    /**
     * isset cabinFilter
     *
     * Used to describe the features of the cabin.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinFilter($index)
    {
        return isset($this->cabinFilter[$index]);
    }

    /**
     * unset cabinFilter
     *
     * Used to describe the features of the cabin.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinFilter($index)
    {
        unset($this->cabinFilter[$index]);
    }

    /**
     * Gets as cabinFilter
     *
     * Used to describe the features of the cabin.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     */
    public function getCabinFilter()
    {
        return $this->cabinFilter;
    }

    /**
     * Sets a new cabinFilter
     *
     * Used to describe the features of the cabin.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     * $cabinFilter
     * @return self
     */
    public function setCabinFilter(array $cabinFilter)
    {
        $this->cabinFilter = $cabinFilter;

        return $this;
    }


}

