<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRS;

/**
 * Class representing CancelInfoRSAType
 */
class CancelInfoRSAType
{

    /**
     * CancelRules MAY contain a collection of cancellation rules that apply to the
     * cancellation of the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType
     * $cancelRules
     */
    private $cancelRules = null;

    /**
     * The UniqueID MUST contain the supplier's cancellation reference for the
     * reservation being cancelled.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\UniqueIDAType
     * $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as cancelRules
     *
     * CancelRules MAY contain a collection of cancellation rules that apply to the
     * cancellation of the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType
     */
    public function getCancelRules()
    {
        return $this->cancelRules;
    }

    /**
     * Sets a new cancelRules
     *
     * CancelRules MAY contain a collection of cancellation rules that apply to the
     * cancellation of the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType
     * $cancelRules
     * @return self
     */
    public function setCancelRules(
        \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType $cancelRules
    ) {
        $this->cancelRules = $cancelRules;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The UniqueID MUST contain the supplier's cancellation reference for the
     * reservation being cancelled.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\UniqueIDAType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The UniqueID MUST contain the supplier's cancellation reference for the
     * reservation being cancelled.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\UniqueIDAType
     * $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\UniqueIDAType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

