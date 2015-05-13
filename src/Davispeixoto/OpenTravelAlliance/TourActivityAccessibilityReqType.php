<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityAccessibilityReqType
 *
 * Physically challenged accessibility preferences.
 * XSD Type: TourActivityAccessibilityReqType
 */
class TourActivityAccessibilityReqType
{

    /**
     * If TRUE, one or more participants have limited mobility.
     *
     * @property boolean $mobilityInd
     */
    private $mobilityInd = null;

    /**
     * If TRUE, one or more participants have limited or no sight and may have a
     * service animal.
     *
     * @property boolean $sightInd
     */
    private $sightInd = null;

    /**
     * Gets as mobilityInd
     *
     * If TRUE, one or more participants have limited mobility.
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
     * If TRUE, one or more participants have limited mobility.
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
     * If TRUE, one or more participants have limited or no sight and may have a
     * service animal.
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
     * If TRUE, one or more participants have limited or no sight and may have a
     * service animal.
     *
     * @param boolean $sightInd
     * @return self
     */
    public function setSightInd($sightInd)
    {
        $this->sightInd = $sightInd;

        return $this;
    }


}

