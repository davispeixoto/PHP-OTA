<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehModifyRQ;

use Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType;

/**
 * Class representing VehModifyRQInfoAType
 */
class VehModifyRQInfoAType extends VehicleModifyRQAdditionalInfoType
{

    /**
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as action
     *
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * Identifies an action (add, delete, replace, etc.) to be taken on the information
     * in the child elements.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }


}

