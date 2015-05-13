<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType;

/**
 * Class representing LocationCategoriesAType
 */
class LocationCategoriesAType
{

    /**
     * Preferred event location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType
     * $location
     */
    private $location = null;

    /**
     * Used to define the preferences or requirements regarding an event location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[]
     * $category
     */
    private $category = null;

    /**
     * Gets as location
     *
     * Preferred event location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType
     * $location
     * @return self
     */
    public function setLocation(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType $location
    ) {
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
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType
     * $category
     */
    public function addToCategory(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType $category
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
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[]
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
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[]
     * $category
     * @return self
     */
    public function setCategory(array $category)
    {
        $this->category = $category;

        return $this;
    }


}

