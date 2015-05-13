<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateRuleRS;

use Davispeixoto\OpenTravelAlliance\VehicleRentalRateType;

/**
 * Class representing RentalRateAType
 */
class RentalRateAType extends VehicleRentalRateType
{

    /**
     * When true, a written confimation may be provided for this rental rate.
     *
     * @property boolean $writtenConfInd
     */
    private $writtenConfInd = null;

    /**
     * Indicates the status of the rate.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as writtenConfInd
     *
     * When true, a written confimation may be provided for this rental rate.
     *
     * @return boolean
     */
    public function getWrittenConfInd()
    {
        return $this->writtenConfInd;
    }

    /**
     * Sets a new writtenConfInd
     *
     * When true, a written confimation may be provided for this rental rate.
     *
     * @param boolean $writtenConfInd
     * @return self
     */
    public function setWrittenConfInd($writtenConfInd)
    {
        $this->writtenConfInd = $writtenConfInd;

        return $this;
    }

    /**
     * Gets as status
     *
     * Indicates the status of the rate.
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
     * Indicates the status of the rate.
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

