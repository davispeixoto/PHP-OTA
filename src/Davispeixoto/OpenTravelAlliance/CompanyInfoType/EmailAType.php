<?php

namespace Davispeixoto\OpenTravelAlliance\CompanyInfoType;

use Davispeixoto\OpenTravelAlliance\EmailType;

/**
 * Class representing EmailAType
 */
class EmailAType extends EmailType
{

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }


}

