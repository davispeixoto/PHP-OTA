<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseAvailRS;

/**
 * Class representing GolfFacilityAType
 */
class GolfFacilityAType
{

    /**
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo
     */
    private $facilityInfo = null;

    /**
     * One or more tee time(s) with availability and pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType[] $teeTime
     */
    private $teeTime = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as facilityInfo
     *
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfFacilityType
     */
    public function getFacilityInfo()
    {
        return $this->facilityInfo;
    }

    /**
     * Sets a new facilityInfo
     *
     * Information that describes the golf facility, including the unique facility ID.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo
     * @return self
     */
    public function setFacilityInfo(\Davispeixoto\OpenTravelAlliance\GolfFacilityType $facilityInfo)
    {
        $this->facilityInfo = $facilityInfo;

        return $this;
    }

    /**
     * Adds as teeTime
     *
     * One or more tee time(s) with availability and pricing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType $teeTime
     */
    public function addToTeeTime(\Davispeixoto\OpenTravelAlliance\TeeTimeType $teeTime)
    {
        $this->teeTime[] = $teeTime;

        return $this;
    }

    /**
     * isset teeTime
     *
     * One or more tee time(s) with availability and pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeeTime($index)
    {
        return isset($this->teeTime[$index]);
    }

    /**
     * unset teeTime
     *
     * One or more tee time(s) with availability and pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeeTime($index)
    {
        unset($this->teeTime[$index]);
    }

    /**
     * Gets as teeTime
     *
     * One or more tee time(s) with availability and pricing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType[]
     */
    public function getTeeTime()
    {
        return $this->teeTime;
    }

    /**
     * Sets a new teeTime
     *
     * One or more tee time(s) with availability and pricing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType[] $teeTime
     * @return self
     */
    public function setTeeTime(array $teeTime)
    {
        $this->teeTime = $teeTime;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

