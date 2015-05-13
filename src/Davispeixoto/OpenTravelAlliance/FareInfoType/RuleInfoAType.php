<?php

namespace Davispeixoto\OpenTravelAlliance\FareInfoType;

use Davispeixoto\OpenTravelAlliance\RuleInfoType;

/**
 * Class representing RuleInfoAType
 */
class RuleInfoAType extends RuleInfoType
{

    /**
     * To specify if the trip is one way or roundtrip.
     *
     * @property string $tripType
     */
    private $tripType = null;

    /**
     * If true, the fare rule being requested is for all airline fares for the
     * specified city pair. If false, it is not.
     *
     * @property boolean $moneySaverInd
     */
    private $moneySaverInd = null;

    /**
     * Gets as tripType
     *
     * To specify if the trip is one way or roundtrip.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * To specify if the trip is one way or roundtrip.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;

        return $this;
    }

    /**
     * Gets as moneySaverInd
     *
     * If true, the fare rule being requested is for all airline fares for the
     * specified city pair. If false, it is not.
     *
     * @return boolean
     */
    public function getMoneySaverInd()
    {
        return $this->moneySaverInd;
    }

    /**
     * Sets a new moneySaverInd
     *
     * If true, the fare rule being requested is for all airline fares for the
     * specified city pair. If false, it is not.
     *
     * @param boolean $moneySaverInd
     * @return self
     */
    public function setMoneySaverInd($moneySaverInd)
    {
        $this->moneySaverInd = $moneySaverInd;

        return $this;
    }


}

