<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseCabinAvailRS;

/**
 * Class representing DiningAType
 */
class DiningAType
{

    /**
     * Dining service. Typical values are: first, second, third, open.
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * Provides status of the sitting. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * Sets a new sitting
     *
     * Dining service. Typical values are: first, second, third, open.
     *
     * @param string $sitting
     * @return self
     */
    public function setSitting($sitting)
    {
        $this->sitting = $sitting;

        return $this;
    }

    /**
     * Gets as status
     *
     * Provides status of the sitting. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Provides status of the sitting. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


}

