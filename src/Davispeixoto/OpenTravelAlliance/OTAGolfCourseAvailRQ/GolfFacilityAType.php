<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfCourseAvailRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing GolfFacilityAType
 */
class GolfFacilityAType extends UniqueIDType
{

    /**
     * One or more tee time(s) to request availability for.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeAvailType[] $teeTime
     */
    private $teeTime = null;

    /**
     * Adds as teeTime
     *
     * One or more tee time(s) to request availability for.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeAvailType $teeTime
     */
    public function addToTeeTime(\Davispeixoto\OpenTravelAlliance\TeeTimeAvailType $teeTime)
    {
        $this->teeTime[] = $teeTime;

        return $this;
    }

    /**
     * isset teeTime
     *
     * One or more tee time(s) to request availability for.
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
     * One or more tee time(s) to request availability for.
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
     * One or more tee time(s) to request availability for.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeAvailType[]
     */
    public function getTeeTime()
    {
        return $this->teeTime;
    }

    /**
     * Sets a new teeTime
     *
     * One or more tee time(s) to request availability for.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeAvailType[] $teeTime
     * @return self
     */
    public function setTeeTime(array $teeTime)
    {
        $this->teeTime = $teeTime;

        return $this;
    }


}

