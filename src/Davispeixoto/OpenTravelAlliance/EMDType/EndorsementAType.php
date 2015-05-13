<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing EndorsementAType
 */
class EndorsementAType
{

    /**
     * Remarks provided to ensure common understanding between the passenger and an
     * airline when a fare is restricted.
     *
     * @property string $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * Remarks provided to ensure common understanding between the passenger and an
     * airline when a fare is restricted.
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Remarks provided to ensure common understanding between the passenger and an
     * airline when a fare is restricted.
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }


}

