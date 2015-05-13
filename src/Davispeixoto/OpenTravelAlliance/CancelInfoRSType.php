<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CancelInfoRSType
 *
 * Contains cancellation rule and reservation identification information.
 * XSD Type: CancelInfoRSType
 */
class CancelInfoRSType
{

    /**
     * CancelRules MAY contain a collection of cancellation rules that apply to the
     * cancellation of the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelRulesType $cancelRules
     */
    private $cancelRules = null;

    /**
     * The UniqueID MUST contain the supplier's cancellation reference for the
     * reservation being cancelled.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as cancelRules
     *
     * CancelRules MAY contain a collection of cancellation rules that apply to the
     * cancellation of the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelRulesType
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
     * @param \Davispeixoto\OpenTravelAlliance\CancelRulesType $cancelRules
     * @return self
     */
    public function setCancelRules(\Davispeixoto\OpenTravelAlliance\CancelRulesType $cancelRules)
    {
        $this->cancelRules = $cancelRules;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The UniqueID MUST contain the supplier's cancellation reference for the
     * reservation being cancelled.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
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
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

