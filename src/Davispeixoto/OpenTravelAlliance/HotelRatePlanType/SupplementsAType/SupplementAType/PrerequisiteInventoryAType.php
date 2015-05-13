<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType;

/**
 * Class representing PrerequisiteInventoryAType
 */
class PrerequisiteInventoryAType
{

    /**
     * A code defining an inventory item which must be booked for this supplement to
     * apply.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * The inventory type of the item identified by the code in InvCode.
     *
     * @property string $invType
     */
    private $invType = null;

    /**
     * Gets as invCode
     *
     * A code defining an inventory item which must be booked for this supplement to
     * apply.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * A code defining an inventory item which must be booked for this supplement to
     * apply.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;

        return $this;
    }

    /**
     * Gets as invType
     *
     * The inventory type of the item identified by the code in InvCode.
     *
     * @return string
     */
    public function getInvType()
    {
        return $this->invType;
    }

    /**
     * Sets a new invType
     *
     * The inventory type of the item identified by the code in InvCode.
     *
     * @param string $invType
     * @return self
     */
    public function setInvType($invType)
    {
        $this->invType = $invType;

        return $this;
    }


}

