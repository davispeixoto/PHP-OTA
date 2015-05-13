<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityAccessibilityType
 *
 * Physically challenged accessibility services.
 * XSD Type: TourActivityAccessibilityType
 */
class TourActivityAccessibilityType
{

    /**
     * If TRUE, this tour and/or activity may accommodate individuals with limited
     * mobility.
     *
     * @property boolean $mobilityInd
     */
    private $mobilityInd = null;

    /**
     * If TRUE, this tour and/or activity may accommodate individuals with limited or
     * no sight. This includes individuals with service dogs.
     *
     * @property boolean $sightInd
     */
    private $sightInd = null;

    /**
     * Comments about physically challenged accessibility services.
     *
     * @property string[] $comment
     */
    private $comment = null;

    /**
     * Gets as mobilityInd
     *
     * If TRUE, this tour and/or activity may accommodate individuals with limited
     * mobility.
     *
     * @return boolean
     */
    public function getMobilityInd()
    {
        return $this->mobilityInd;
    }

    /**
     * Sets a new mobilityInd
     *
     * If TRUE, this tour and/or activity may accommodate individuals with limited
     * mobility.
     *
     * @param boolean $mobilityInd
     * @return self
     */
    public function setMobilityInd($mobilityInd)
    {
        $this->mobilityInd = $mobilityInd;

        return $this;
    }

    /**
     * Gets as sightInd
     *
     * If TRUE, this tour and/or activity may accommodate individuals with limited or
     * no sight. This includes individuals with service dogs.
     *
     * @return boolean
     */
    public function getSightInd()
    {
        return $this->sightInd;
    }

    /**
     * Sets a new sightInd
     *
     * If TRUE, this tour and/or activity may accommodate individuals with limited or
     * no sight. This includes individuals with service dogs.
     *
     * @param boolean $sightInd
     * @return self
     */
    public function setSightInd($sightInd)
    {
        $this->sightInd = $sightInd;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments about physically challenged accessibility services.
     *
     * @return self
     * @param string $comment
     */
    public function addToComment($comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Comments about physically challenged accessibility services.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments about physically challenged accessibility services.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments about physically challenged accessibility services.
     *
     * @return string[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments about physically challenged accessibility services.
     *
     * @param string[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

