<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RefPointsType
 *
 * Reference points in relation to/from the current entity.
 * XSD Type: RefPointsType
 */
class RefPointsType
{

    /**
     * Provides information on the location of an area attraction.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[]
     * $refPoint
     */
    private $refPoint = null;

    /**
     * Adds as refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType $refPoint
     */
    public function addToRefPoint(\Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType $refPoint)
    {
        $this->refPoint[] = $refPoint;

        return $this;
    }

    /**
     * isset refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPoint($index)
    {
        return isset($this->refPoint[$index]);
    }

    /**
     * unset refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPoint($index)
    {
        unset($this->refPoint[$index]);
    }

    /**
     * Gets as refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[]
     */
    public function getRefPoint()
    {
        return $this->refPoint;
    }

    /**
     * Sets a new refPoint
     *
     * Provides information on the location of an area attraction.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RefPointsType\RefPointAType[] $refPoint
     * @return self
     */
    public function setRefPoint(array $refPoint)
    {
        $this->refPoint = $refPoint;

        return $this;
    }


}

