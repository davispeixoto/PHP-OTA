<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ;

/**
 * Class representing SearchTravInfoAType
 */
class SearchTravInfoAType
{

    /**
     * The minimum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @property integer $minTravelers
     */
    private $minTravelers = null;

    /**
     * The maximum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @property integer $maxTravelers
     */
    private $maxTravelers = null;

    /**
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $searchTravelers
     */
    private $searchTravelers = null;

    /**
     * Citizenship information about the traveling group (if all travelers are of same
     * citizenship type.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\CountryNameType $citizenCountryName
     */
    private $citizenCountryName = null;

    /**
     * Residency information about the traveling group (if all travelers are from same
     * country of residence.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\CountryNameType $residenceCountryName
     */
    private $residenceCountryName = null;

    /**
     * Container of objects used to associate traveling group with larger organizations
     * (travel clubs, employers, etc).
     *
     * @property \Davispeixoto\OpenTravelAlliance\BoundedAffiliationsType $affiliations
     */
    private $affiliations = null;

    /**
     * Gets as minTravelers
     *
     * The minimum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @return integer
     */
    public function getMinTravelers()
    {
        return $this->minTravelers;
    }

    /**
     * Sets a new minTravelers
     *
     * The minimum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @param integer $minTravelers
     * @return self
     */
    public function setMinTravelers($minTravelers)
    {
        $this->minTravelers = $minTravelers;

        return $this;
    }

    /**
     * Gets as maxTravelers
     *
     * The maximum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @return integer
     */
    public function getMaxTravelers()
    {
        return $this->maxTravelers;
    }

    /**
     * Sets a new maxTravelers
     *
     * The maximum size of the group of travelers for which the coverage search is
     * being performed.
     *
     * @param integer $maxTravelers
     * @return self
     */
    public function setMaxTravelers($maxTravelers)
    {
        $this->maxTravelers = $maxTravelers;

        return $this;
    }

    /**
     * Adds as searchTraveler
     *
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType $searchTraveler
     */
    public function addToSearchTravelers(\Davispeixoto\OpenTravelAlliance\SearchTravelerType $searchTraveler)
    {
        $this->searchTravelers[] = $searchTraveler;

        return $this;
    }

    /**
     * isset searchTravelers
     *
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSearchTravelers($index)
    {
        return isset($this->searchTravelers[$index]);
    }

    /**
     * unset searchTravelers
     *
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSearchTravelers($index)
    {
        unset($this->searchTravelers[$index]);
    }

    /**
     * Gets as searchTravelers
     *
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SearchTravelerType[]
     */
    public function getSearchTravelers()
    {
        return $this->searchTravelers;
    }

    /**
     * Sets a new searchTravelers
     *
     * Collection of individual traveler objects containing information about each
     * traveler pertaining to the insurance search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SearchTravelerType[] $searchTravelers
     * @return self
     */
    public function setSearchTravelers(array $searchTravelers)
    {
        $this->searchTravelers = $searchTravelers;

        return $this;
    }

    /**
     * Gets as citizenCountryName
     *
     * Citizenship information about the traveling group (if all travelers are of same
     * citizenship type.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\CountryNameType
     */
    public function getCitizenCountryName()
    {
        return $this->citizenCountryName;
    }

    /**
     * Sets a new citizenCountryName
     *
     * Citizenship information about the traveling group (if all travelers are of same
     * citizenship type.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\CountryNameType $citizenCountryName
     * @return self
     */
    public function setCitizenCountryName(\Davispeixoto\OpenTravelAlliance\CountryNameType $citizenCountryName)
    {
        $this->citizenCountryName = $citizenCountryName;

        return $this;
    }

    /**
     * Gets as residenceCountryName
     *
     * Residency information about the traveling group (if all travelers are from same
     * country of residence.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\CountryNameType
     */
    public function getResidenceCountryName()
    {
        return $this->residenceCountryName;
    }

    /**
     * Sets a new residenceCountryName
     *
     * Residency information about the traveling group (if all travelers are from same
     * country of residence.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\CountryNameType $residenceCountryName
     * @return self
     */
    public function setResidenceCountryName(\Davispeixoto\OpenTravelAlliance\CountryNameType $residenceCountryName)
    {
        $this->residenceCountryName = $residenceCountryName;

        return $this;
    }

    /**
     * Gets as affiliations
     *
     * Container of objects used to associate traveling group with larger organizations
     * (travel clubs, employers, etc).
     *
     * @return \Davispeixoto\OpenTravelAlliance\BoundedAffiliationsType
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * Sets a new affiliations
     *
     * Container of objects used to associate traveling group with larger organizations
     * (travel clubs, employers, etc).
     *
     * @param \Davispeixoto\OpenTravelAlliance\BoundedAffiliationsType $affiliations
     * @return self
     */
    public function setAffiliations(\Davispeixoto\OpenTravelAlliance\BoundedAffiliationsType $affiliations)
    {
        $this->affiliations = $affiliations;

        return $this;
    }


}

