<?php

namespace Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType;

/**
 * Class representing ProfileRPHAType
 */
class ProfileRPHAType
{

    /**
     * A unique reference to the guest profile.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A unique reference to the guest profile.
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
     * A unique reference to the guest profile.
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

