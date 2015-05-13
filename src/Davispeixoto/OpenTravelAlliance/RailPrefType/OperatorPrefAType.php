<?php

namespace Davispeixoto\OpenTravelAlliance\RailPrefType;

use Davispeixoto\OpenTravelAlliance\NetworkCodeType;

/**
 * Class representing OperatorPrefAType
 */
class OperatorPrefAType extends NetworkCodeType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * A unique ID (reference place holder) used to identify this rail operator in
     * other elements within this schema.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *  Preferred
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID (reference place holder) used to identify this rail operator in
     * other elements within this schema.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID (reference place holder) used to identify this rail operator in
     * other elements within this schema.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

