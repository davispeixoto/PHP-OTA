<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType\AmountAType;

use Davispeixoto\OpenTravelAlliance\ListLoyaltyPrgCurrencyType;

/**
 * Class representing AlternateCurrencyAType
 */
class AlternateCurrencyAType extends ListLoyaltyPrgCurrencyType
{

    /**
     * Redemption unit quantity.Example: 50000Note: This is the quantity of the
     * specified loyalty currency unit required for payment of this fee.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Gets as quantity
     *
     * Redemption unit quantity.Example: 50000Note: This is the quantity of the
     * specified loyalty currency unit required for payment of this fee.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Redemption unit quantity.Example: 50000Note: This is the quantity of the
     * specified loyalty currency unit required for payment of this fee.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }


}

