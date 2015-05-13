<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\SearchTravInfoAType;

/**
 * Class representing SearchTravelersAType
 */
class SearchTravelersAType
{

    /**
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $searchTraveler
     */
    private $searchTraveler = null;

    /**
     * Adds as searchTraveler
     *
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType $searchTraveler
     */
    public function addToSearchTraveler(\Davispeixoto\OpenTravelAlliance\SearchTravelerType $searchTraveler)
    {
        $this->searchTraveler[] = $searchTraveler;

        return $this;
    }

    /**
     * isset searchTraveler
     *
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSearchTraveler($index)
    {
        return isset($this->searchTraveler[$index]);
    }

    /**
     * unset searchTraveler
     *
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSearchTraveler($index)
    {
        unset($this->searchTraveler[$index]);
    }

    /**
     * Gets as searchTraveler
     *
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchTravelerType[]
     */
    public function getSearchTraveler()
    {
        return $this->searchTraveler;
    }

    /**
     * Sets a new searchTraveler
     *
     * Represents general information about a single traveler for which insurance
     * coverage is being sought.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $searchTraveler
     * @return self
     */
    public function setSearchTraveler(array $searchTraveler)
    {
        $this->searchTraveler = $searchTraveler;

        return $this;
    }


}

