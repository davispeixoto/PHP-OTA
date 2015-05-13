<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

use Davispeixoto\OpenTravelAlliance\TourActivitySupplierType;

/**
 * Class representing SupplierOperatorPrefAType
 */
class SupplierOperatorPrefAType extends TourActivitySupplierType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

