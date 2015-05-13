<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehResNotifRQ\ReservationsAType\ReservationAType;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * To specify the action to be taken.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as action
     *
     * To specify the action to be taken.
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
     * To specify the action to be taken.
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

