<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ;

/**
 * Class representing CriteriaAType
 */
class CriteriaAType
{

    /**
     * The ID of the facility or course.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The full or partial name of the golf facility or course.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Address and geocoding information for the golf facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\LocationAType
     * $location
     */
    private $location = null;

    /**
     * Reference point information for a proximity search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\ProximityAType[]
     * $proximity
     */
    private $proximity = null;

    /**
     * Facility course description and features information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\FeaturesAType
     * $features
     */
    private $features = null;

    /**
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[] $amenities
     */
    private $amenities = null;

    /**
     * Gets as iD
     *
     * The ID of the facility or course.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The ID of the facility or course.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as name
     *
     * The full or partial name of the golf facility or course.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The full or partial name of the golf facility or course.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as location
     *
     * Address and geocoding information for the golf facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\LocationAType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Address and geocoding information for the golf facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\LocationAType
     * $location
     * @return self
     */
    public function setLocation(
        \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\LocationAType $location
    ) {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as proximity
     *
     * Reference point information for a proximity search.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\ProximityAType
     * $proximity
     */
    public function addToProximity(
        \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\ProximityAType $proximity
    ) {
        $this->proximity[] = $proximity;

        return $this;
    }

    /**
     * isset proximity
     *
     * Reference point information for a proximity search.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProximity($index)
    {
        return isset($this->proximity[$index]);
    }

    /**
     * unset proximity
     *
     * Reference point information for a proximity search.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProximity($index)
    {
        unset($this->proximity[$index]);
    }

    /**
     * Gets as proximity
     *
     * Reference point information for a proximity search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\ProximityAType[]
     */
    public function getProximity()
    {
        return $this->proximity;
    }

    /**
     * Sets a new proximity
     *
     * Reference point information for a proximity search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\ProximityAType[]
     * $proximity
     * @return self
     */
    public function setProximity(array $proximity)
    {
        $this->proximity = $proximity;

        return $this;
    }

    /**
     * Gets as features
     *
     * Facility course description and features information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\FeaturesAType
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Facility course description and features information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\FeaturesAType
     * $features
     * @return self
     */
    public function setFeatures(
        \Davispeixoto\OpenTravelAlliance\OTAGolfCourseSearchRQ\CriteriaAType\FeaturesAType $features
    ) {
        $this->features = $features;

        return $this;
    }

    /**
     * Adds as amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType $amenities
     */
    public function addToAmenities(\Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType $amenities)
    {
        $this->amenities[] = $amenities;

        return $this;
    }

    /**
     * isset amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * Amenities available at the golf facility. Note, these amenities typically apply
     * to all tee times at the facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAmenitySummaryType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

        return $this;
    }


}

