<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType\InventoriesAType;

/**
 * Class representing InventoryAType
 */
class InventoryAType
{

    /**
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @property string $invCodeApplication
     */
    private $invCodeApplication = null;

    /**
     * Code that identifies an inventory item.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
     *
     * @property string $invType
     */
    private $invType = null;

    /**
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @property string $invTypeCode
     */
    private $invTypeCode = null;

    /**
     * Simple indicator to detect if inventory is a room.
     *
     * @property boolean $isRoom
     */
    private $isRoom = null;

    /**
     * When true, the offer applies to the defined inventory. When false, the offer
     * does not apply to the defined inventory.
     *
     * @property boolean $appliesToIndicator
     */
    private $appliesToIndicator = null;

    /**
     * Gets as invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @return string
     */
    public function getInvCodeApplication()
    {
        return $this->invCodeApplication;
    }

    /**
     * Sets a new invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which
     * can be inventoried or a group of items which can be inventoried. Values are:
     * Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @param string $invCodeApplication
     * @return self
     */
    public function setInvCodeApplication($invCodeApplication)
    {
        $this->invCodeApplication = $invCodeApplication;

        return $this;
    }

    /**
     * Gets as invCode
     *
     * Code that identifies an inventory item.
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
     * Code that identifies an inventory item.
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
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
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
     * A value that indicates the type of inventory for which this request is made. If
     * the inventory item is a room, typical values could be double, king, etc.
     *
     * @param string $invType
     * @return self
     */
    public function setInvType($invType)
    {
        $this->invType = $invType;

        return $this;
    }

    /**
     * Gets as invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @return string
     */
    public function getInvTypeCode()
    {
        return $this->invTypeCode;
    }

    /**
     * Sets a new invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical
     * values could be room type code, e.g.: A1K, A1Q etc. Values may use the
     * OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @param string $invTypeCode
     * @return self
     */
    public function setInvTypeCode($invTypeCode)
    {
        $this->invTypeCode = $invTypeCode;

        return $this;
    }

    /**
     * Gets as isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @return boolean
     */
    public function getIsRoom()
    {
        return $this->isRoom;
    }

    /**
     * Sets a new isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @param boolean $isRoom
     * @return self
     */
    public function setIsRoom($isRoom)
    {
        $this->isRoom = $isRoom;

        return $this;
    }

    /**
     * Gets as appliesToIndicator
     *
     * When true, the offer applies to the defined inventory. When false, the offer
     * does not apply to the defined inventory.
     *
     * @return boolean
     */
    public function getAppliesToIndicator()
    {
        return $this->appliesToIndicator;
    }

    /**
     * Sets a new appliesToIndicator
     *
     * When true, the offer applies to the defined inventory. When false, the offer
     * does not apply to the defined inventory.
     *
     * @param boolean $appliesToIndicator
     * @return self
     */
    public function setAppliesToIndicator($appliesToIndicator)
    {
        $this->appliesToIndicator = $appliesToIndicator;

        return $this;
    }


}

