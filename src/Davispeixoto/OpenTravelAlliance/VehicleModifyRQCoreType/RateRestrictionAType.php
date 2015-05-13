<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleModifyRQCoreType;

/**
 * Class representing RateRestrictionAType
 */
class RateRestrictionAType
{

    /**
     * When true indicates the requestor is aware that a fee applies if a cancellation
     * is requested.
     *
     * @property boolean $cancellationPenaltyInd
     */
    private $cancellationPenaltyInd = null;

    /**
     * When true indicates the requestor is aware that a fee applies if a modification
     * is requested.
     *
     * @property boolean $modificationPenaltyInd
     */
    private $modificationPenaltyInd = null;

    /**
     * Gets as cancellationPenaltyInd
     *
     * When true indicates the requestor is aware that a fee applies if a cancellation
     * is requested.
     *
     * @return boolean
     */
    public function getCancellationPenaltyInd()
    {
        return $this->cancellationPenaltyInd;
    }

    /**
     * Sets a new cancellationPenaltyInd
     *
     * When true indicates the requestor is aware that a fee applies if a cancellation
     * is requested.
     *
     * @param boolean $cancellationPenaltyInd
     * @return self
     */
    public function setCancellationPenaltyInd($cancellationPenaltyInd)
    {
        $this->cancellationPenaltyInd = $cancellationPenaltyInd;

        return $this;
    }

    /**
     * Gets as modificationPenaltyInd
     *
     * When true indicates the requestor is aware that a fee applies if a modification
     * is requested.
     *
     * @return boolean
     */
    public function getModificationPenaltyInd()
    {
        return $this->modificationPenaltyInd;
    }

    /**
     * Sets a new modificationPenaltyInd
     *
     * When true indicates the requestor is aware that a fee applies if a modification
     * is requested.
     *
     * @param boolean $modificationPenaltyInd
     * @return self
     */
    public function setModificationPenaltyInd($modificationPenaltyInd)
    {
        $this->modificationPenaltyInd = $modificationPenaltyInd;

        return $this;
    }


}

