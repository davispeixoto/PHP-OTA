<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing LocationCategoriesAType
 */
class LocationCategoriesAType
{

    /**
     * Preferred event location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationGeneralType $location
     */
    private $location = null;

    /**
     * Used to define the preferences or requirements regarding an event location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[]
     * $category
     */
    private $category = null;

    /**
     * Gets as location
     *
     * Preferred event location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationGeneralType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Preferred event location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationGeneralType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\LocationGeneralType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType
     * $category
     */
    public function addToCategory(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType $category
    ) {
        $this->category[] = $category;

        return $this;
    }

    /**
     * isset category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[]
     * $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;

        return $this;
    }


}

