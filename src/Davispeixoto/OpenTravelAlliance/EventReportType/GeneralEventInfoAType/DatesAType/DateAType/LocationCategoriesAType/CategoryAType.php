<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing CategoryAType
 */
class CategoryAType extends FormattedTextTextType
{

    /**
     * Refer to OpenTravel Code table Location Category Codes (LOC).
     *
     * @property string $locationCategoryCode
     */
    private $locationCategoryCode = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as locationCategoryCode
     *
     * Refer to OpenTravel Code table Location Category Codes (LOC).
     *
     * @return string
     */
    public function getLocationCategoryCode()
    {
        return $this->locationCategoryCode;
    }

    /**
     * Sets a new locationCategoryCode
     *
     * Refer to OpenTravel Code table Location Category Codes (LOC).
     *
     * @param string $locationCategoryCode
     * @return self
     */
    public function setLocationCategoryCode($locationCategoryCode)
    {
        $this->locationCategoryCode = $locationCategoryCode;

        return $this;
    }

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

