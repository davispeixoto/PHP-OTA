<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyAccountRS;

use Davispeixoto\OpenTravelAlliance\AccountInfoType;

/**
 * Class representing AccountInfoAType
 */
class AccountInfoAType extends AccountInfoType
{

    /**
     * The action that has been applied to the account information.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Further account information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyAccountRS\AccountInfoAType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Gets as action
     *
     * The action that has been applied to the account information.
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
     * The action that has been applied to the account information.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * Further account information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyAccountRS\AccountInfoAType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Further account information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTALoyaltyAccountRS\AccountInfoAType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTALoyaltyAccountRS\AccountInfoAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }


}

