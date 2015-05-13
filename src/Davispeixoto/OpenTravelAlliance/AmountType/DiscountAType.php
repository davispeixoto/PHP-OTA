<?php

namespace Davispeixoto\OpenTravelAlliance\AmountType;

use Davispeixoto\OpenTravelAlliance\DiscountType;

/**
 * Class representing DiscountAType
 */
class DiscountAType extends DiscountType
{

    /**
     * Used to identify the monetary amount to which the discount applies.
     *
     * @property string $appliesTo
     */
    private $appliesTo = null;

    /**
     * Used to identify the specific item referred to by the AppliesTo attribute.
     *
     * @property string $itemRPH
     */
    private $itemRPH = null;

    /**
     * Gets as appliesTo
     *
     * Used to identify the monetary amount to which the discount applies.
     *
     * @return string
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * Used to identify the monetary amount to which the discount applies.
     *
     * @param string $appliesTo
     * @return self
     */
    public function setAppliesTo($appliesTo)
    {
        $this->appliesTo = $appliesTo;

        return $this;
    }

    /**
     * Gets as itemRPH
     *
     * Used to identify the specific item referred to by the AppliesTo attribute.
     *
     * @return string
     */
    public function getItemRPH()
    {
        return $this->itemRPH;
    }

    /**
     * Sets a new itemRPH
     *
     * Used to identify the specific item referred to by the AppliesTo attribute.
     *
     * @param string $itemRPH
     * @return self
     */
    public function setItemRPH($itemRPH)
    {
        $this->itemRPH = $itemRPH;

        return $this;
    }


}

