<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType;

use Davispeixoto\OpenTravelAlliance\CabinOptionType;

/**
 * Class representing CabinOptionAType
 */
class CabinOptionAType extends CabinOptionType
{

    /**
     * Collection of cabin filters.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     * $cabinFilters
     */
    private $cabinFilters = null;

    /**
     * Adds as cabinFilter
     *
     * Collection of cabin filters.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType
     * $cabinFilter
     */
    public function addToCabinFilters(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType $cabinFilter
    ) {
        $this->cabinFilters[] = $cabinFilter;

        return $this;
    }

    /**
     * isset cabinFilters
     *
     * Collection of cabin filters.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinFilters($index)
    {
        return isset($this->cabinFilters[$index]);
    }

    /**
     * unset cabinFilters
     *
     * Collection of cabin filters.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinFilters($index)
    {
        unset($this->cabinFilters[$index]);
    }

    /**
     * Gets as cabinFilters
     *
     * Collection of cabin filters.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     */
    public function getCabinFilters()
    {
        return $this->cabinFilters;
    }

    /**
     * Sets a new cabinFilters
     *
     * Collection of cabin filters.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS\CabinOptionsAType\CabinOptionAType\CabinFiltersAType\CabinFilterAType[]
     * $cabinFilters
     * @return self
     */
    public function setCabinFilters(array $cabinFilters)
    {
        $this->cabinFilters = $cabinFilters;

        return $this;
    }


}

