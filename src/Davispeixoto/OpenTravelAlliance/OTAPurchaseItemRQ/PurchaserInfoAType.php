<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRQ;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing PurchaserInfoAType
 */
class PurchaserInfoAType extends ContactPersonType
{

    /**
     * Customer loyalty information for the purchaser.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRQ\PurchaserInfoAType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Gets as custLoyalty
     *
     * Customer loyalty information for the purchaser.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRQ\PurchaserInfoAType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Customer loyalty information for the purchaser.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRQ\PurchaserInfoAType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTAPurchaseItemRQ\PurchaserInfoAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }


}

