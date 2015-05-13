<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

use Davispeixoto\OpenTravelAlliance\OperationSchedulesType;

/**
 * Class representing OperationSchedulesAType
 */
class OperationSchedulesAType extends OperationSchedulesType
{

    /**
     * The policy number for this information.
     *
     * @property string $policyNumber
     */
    private $policyNumber = null;

    /**
     * Free text information concerning the hours of operation.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as policyNumber
     *
     * The policy number for this information.
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * The policy number for this information.
     *
     * @param string $policyNumber
     * @return self
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Gets as text
     *
     * Free text information concerning the hours of operation.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Free text information concerning the hours of operation.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

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

