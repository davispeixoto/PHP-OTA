<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialRemarkType;

/**
 * Class representing FlightRefNumberAType
 */
class FlightRefNumberAType
{

    /**
     * A reference pointer used to link a flight number to the search or response.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A reference pointer used to link a flight number to the search or response.
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
     * A reference pointer used to link a flight number to the search or response.
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

