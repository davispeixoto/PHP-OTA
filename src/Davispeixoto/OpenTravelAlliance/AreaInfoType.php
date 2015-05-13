<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AreaInfoType
 *
 * Defines well-known locations and attractions of local interest in the
 * geographical area of the hotel facility as well as other area hotels.
 * XSD Type: AreaInfoType
 */
class AreaInfoType
{

    /**
     * A collection of reference points.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AreaInfoType\RefPointsAType
     * $refPoints
     */
    private $refPoints = null;

    /**
     * A collection of Attraction objects identifying the local interest attractions in
     * the vicinity of this hotel facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AreaInfoType\AttractionsAType
     * $attractions
     */
    private $attractions = null;

    /**
     * A collection of Recreation objects identifying the different types of recreation
     * facilities available to the guest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType
     * $recreations
     */
    private $recreations = null;

    /**
     * Collection of other area hotels.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType
     * $otherHotels
     */
    private $otherHotels = null;

    /**
     * Gets as refPoints
     *
     * A collection of reference points.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AreaInfoType\RefPointsAType
     */
    public function getRefPoints()
    {
        return $this->refPoints;
    }

    /**
     * Sets a new refPoints
     *
     * A collection of reference points.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AreaInfoType\RefPointsAType $refPoints
     * @return self
     */
    public function setRefPoints(\Davispeixoto\OpenTravelAlliance\AreaInfoType\RefPointsAType $refPoints)
    {
        $this->refPoints = $refPoints;

        return $this;
    }

    /**
     * Gets as attractions
     *
     * A collection of Attraction objects identifying the local interest attractions in
     * the vicinity of this hotel facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AreaInfoType\AttractionsAType
     */
    public function getAttractions()
    {
        return $this->attractions;
    }

    /**
     * Sets a new attractions
     *
     * A collection of Attraction objects identifying the local interest attractions in
     * the vicinity of this hotel facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AreaInfoType\AttractionsAType
     * $attractions
     * @return self
     */
    public function setAttractions(\Davispeixoto\OpenTravelAlliance\AreaInfoType\AttractionsAType $attractions)
    {
        $this->attractions = $attractions;

        return $this;
    }

    /**
     * Gets as recreations
     *
     * A collection of Recreation objects identifying the different types of recreation
     * facilities available to the guest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType
     */
    public function getRecreations()
    {
        return $this->recreations;
    }

    /**
     * Sets a new recreations
     *
     * A collection of Recreation objects identifying the different types of recreation
     * facilities available to the guest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType
     * $recreations
     * @return self
     */
    public function setRecreations(\Davispeixoto\OpenTravelAlliance\AreaInfoType\RecreationsAType $recreations)
    {
        $this->recreations = $recreations;

        return $this;
    }

    /**
     * Gets as otherHotels
     *
     * Collection of other area hotels.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType
     */
    public function getOtherHotels()
    {
        return $this->otherHotels;
    }

    /**
     * Sets a new otherHotels
     *
     * Collection of other area hotels.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType
     * $otherHotels
     * @return self
     */
    public function setOtherHotels(\Davispeixoto\OpenTravelAlliance\AreaInfoType\OtherHotelsAType $otherHotels)
    {
        $this->otherHotels = $otherHotels;

        return $this;
    }


}

