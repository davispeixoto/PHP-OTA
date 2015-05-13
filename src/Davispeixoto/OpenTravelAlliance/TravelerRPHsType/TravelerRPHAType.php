<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerRPHsType;

/**
 * Class representing TravelerRPHAType
 */
class TravelerRPHAType
{

    /**
     * A pointer to identify a traveler defined elsewhere in this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A pointer to identify a traveler defined elsewhere in this message.
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
     * A pointer to identify a traveler defined elsewhere in this message.
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

