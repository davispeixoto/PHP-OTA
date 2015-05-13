<?php

namespace Davispeixoto\OpenTravelAlliance\SellableProductsType;

/**
 * Class representing SellableProductAType
 */
class SellableProductAType
{

    /**
     * This is a reference placeholder, used as an index for this sellable product.
     *
     * @property string $rPH
     */
    private $rPH = null;

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
     * An enumerated type that indicates whether this is a new inventory item or an
     * update of an existing inventory item. Values: New, Delta modification, Full
     * overlay modification.
     *
     * @property string $invNotifType
     */
    private $invNotifType = null;

    /**
     * An enumerated type that indicates the status of the inventory item, ie: whether
     * this notification is an initial announcement of a new inventory item, an update
     * of an active (bookable) inventory item, or a notification of an inventory item
     * that is no longer in effect. Values: Initial, Active, Deactivated.
     *
     * @property string $invStatusType
     */
    private $invStatusType = null;

    /**
     * The identification of the inventory grouping. Whether to use the
     * sending/querying or the receiving/responding system's identification depends on
     * which system is doing the translating.
     *
     * @property string $invGroupingCode
     */
    private $invGroupingCode = null;

    /**
     * The order which the items should be acknowledged by the receiving entity.
     *
     * @property integer $orderSequence
     */
    private $orderSequence = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     * $destinationSystemCodes
     */
    private $destinationSystemCodes = null;

    /**
     * Guest room information if this sellable product is a guest room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestRoomType $guestRoom
     */
    private $guestRoom = null;

    /**
     * Meeting room information if this sellable product is a meeting room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomsType $meetingRooms
     */
    private $meetingRooms = null;

    /**
     * Inventory block information if this sellable product is an inventory block.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\InventoryBlockAType
     * $inventoryBlock
     */
    private $inventoryBlock = null;

    /**
     * Description of the sellable product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * The SellableProduct class defines the inventoriable item for this rate plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as rPH
     *
     * This is a reference placeholder, used as an index for this sellable product.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * This is a reference placeholder, used as an index for this sellable product.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

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
     * Gets as invNotifType
     *
     * An enumerated type that indicates whether this is a new inventory item or an
     * update of an existing inventory item. Values: New, Delta modification, Full
     * overlay modification.
     *
     * @return string
     */
    public function getInvNotifType()
    {
        return $this->invNotifType;
    }

    /**
     * Sets a new invNotifType
     *
     * An enumerated type that indicates whether this is a new inventory item or an
     * update of an existing inventory item. Values: New, Delta modification, Full
     * overlay modification.
     *
     * @param string $invNotifType
     * @return self
     */
    public function setInvNotifType($invNotifType)
    {
        $this->invNotifType = $invNotifType;

        return $this;
    }

    /**
     * Gets as invStatusType
     *
     * An enumerated type that indicates the status of the inventory item, ie: whether
     * this notification is an initial announcement of a new inventory item, an update
     * of an active (bookable) inventory item, or a notification of an inventory item
     * that is no longer in effect. Values: Initial, Active, Deactivated.
     *
     * @return string
     */
    public function getInvStatusType()
    {
        return $this->invStatusType;
    }

    /**
     * Sets a new invStatusType
     *
     * An enumerated type that indicates the status of the inventory item, ie: whether
     * this notification is an initial announcement of a new inventory item, an update
     * of an active (bookable) inventory item, or a notification of an inventory item
     * that is no longer in effect. Values: Initial, Active, Deactivated.
     *
     * @param string $invStatusType
     * @return self
     */
    public function setInvStatusType($invStatusType)
    {
        $this->invStatusType = $invStatusType;

        return $this;
    }

    /**
     * Gets as invGroupingCode
     *
     * The identification of the inventory grouping. Whether to use the
     * sending/querying or the receiving/responding system's identification depends on
     * which system is doing the translating.
     *
     * @return string
     */
    public function getInvGroupingCode()
    {
        return $this->invGroupingCode;
    }

    /**
     * Sets a new invGroupingCode
     *
     * The identification of the inventory grouping. Whether to use the
     * sending/querying or the receiving/responding system's identification depends on
     * which system is doing the translating.
     *
     * @param string $invGroupingCode
     * @return self
     */
    public function setInvGroupingCode($invGroupingCode)
    {
        $this->invGroupingCode = $invGroupingCode;

        return $this;
    }

    /**
     * Gets as orderSequence
     *
     * The order which the items should be acknowledged by the receiving entity.
     *
     * @return integer
     */
    public function getOrderSequence()
    {
        return $this->orderSequence;
    }

    /**
     * Sets a new orderSequence
     *
     * The order which the items should be acknowledged by the receiving entity.
     *
     * @param integer $orderSequence
     * @return self
     */
    public function setOrderSequence($orderSequence)
    {
        $this->orderSequence = $orderSequence;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType
     * $destinationSystemCode
     */
    public function addToDestinationSystemCodes(
        \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType $destinationSystemCode
    ) {
        $this->destinationSystemCodes[] = $destinationSystemCode;

        return $this;
    }

    /**
     * isset destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinationSystemCodes($index)
    {
        return isset($this->destinationSystemCodes[$index]);
    }

    /**
     * unset destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinationSystemCodes($index)
    {
        unset($this->destinationSystemCodes[$index]);
    }

    /**
     * Gets as destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     */
    public function getDestinationSystemCodes()
    {
        return $this->destinationSystemCodes;
    }

    /**
     * Sets a new destinationSystemCodes
     *
     * A collection of destination system codes. These are systems for which this
     * Sellable product is targeted.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
     * $destinationSystemCodes
     * @return self
     */
    public function setDestinationSystemCodes(array $destinationSystemCodes)
    {
        $this->destinationSystemCodes = $destinationSystemCodes;

        return $this;
    }

    /**
     * Gets as guestRoom
     *
     * Guest room information if this sellable product is a guest room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestRoomType
     */
    public function getGuestRoom()
    {
        return $this->guestRoom;
    }

    /**
     * Sets a new guestRoom
     *
     * Guest room information if this sellable product is a guest room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestRoomType $guestRoom
     * @return self
     */
    public function setGuestRoom(\Davispeixoto\OpenTravelAlliance\GuestRoomType $guestRoom)
    {
        $this->guestRoom = $guestRoom;

        return $this;
    }

    /**
     * Gets as meetingRooms
     *
     * Meeting room information if this sellable product is a meeting room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomsType
     */
    public function getMeetingRooms()
    {
        return $this->meetingRooms;
    }

    /**
     * Sets a new meetingRooms
     *
     * Meeting room information if this sellable product is a meeting room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomsType $meetingRooms
     * @return self
     */
    public function setMeetingRooms(\Davispeixoto\OpenTravelAlliance\MeetingRoomsType $meetingRooms)
    {
        $this->meetingRooms = $meetingRooms;

        return $this;
    }

    /**
     * Gets as inventoryBlock
     *
     * Inventory block information if this sellable product is an inventory block.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\InventoryBlockAType
     */
    public function getInventoryBlock()
    {
        return $this->inventoryBlock;
    }

    /**
     * Sets a new inventoryBlock
     *
     * Inventory block information if this sellable product is an inventory block.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\InventoryBlockAType
     * $inventoryBlock
     * @return self
     */
    public function setInventoryBlock(
        \Davispeixoto\OpenTravelAlliance\SellableProductsType\SellableProductAType\InventoryBlockAType $inventoryBlock
    ) {
        $this->inventoryBlock = $inventoryBlock;

        return $this;
    }

    /**
     * Gets as description
     *
     * Description of the sellable product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the sellable product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The SellableProduct class defines the inventoriable item for this rate plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The SellableProduct class defines the inventoriable item for this rate plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

