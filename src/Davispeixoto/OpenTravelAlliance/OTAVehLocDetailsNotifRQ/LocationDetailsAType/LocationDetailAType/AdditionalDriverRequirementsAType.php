<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

use Davispeixoto\OpenTravelAlliance\VehicleAdditionalDriverRequirementsType;

/**
 * Class representing AdditionalDriverRequirementsAType
 */
class AdditionalDriverRequirementsAType extends VehicleAdditionalDriverRequirementsType
{

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
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
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
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

