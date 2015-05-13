<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookingHistoryRS\HistoryInfosAType\HistoryInfoAType\ItemsAType;

use Davispeixoto\OpenTravelAlliance\ParagraphType;

/**
 * Class representing ItemAType
 */
class ItemAType extends ParagraphType
{

    /**
     * Unique identifier of the guest to whom this transaction applies.
     *
     * @property string $guestID
     */
    private $guestID = null;

    /**
     * The item being modified in this transaction.
     *
     * @property string $itemName
     */
    private $itemName = null;

    /**
     * Specifies the old value of an item.
     *
     * @property string $oldValue
     */
    private $oldValue = null;

    /**
     * Specifies the new value of an item.
     *
     * @property string $newValue
     */
    private $newValue = null;

    /**
     * Specifies the classification of the item (e.g., RES_GUEST, RES_HEADER).
     *
     * @property string $classification
     */
    private $classification = null;

    /**
     * Gets as guestID
     *
     * Unique identifier of the guest to whom this transaction applies.
     *
     * @return string
     */
    public function getGuestID()
    {
        return $this->guestID;
    }

    /**
     * Sets a new guestID
     *
     * Unique identifier of the guest to whom this transaction applies.
     *
     * @param string $guestID
     * @return self
     */
    public function setGuestID($guestID)
    {
        $this->guestID = $guestID;

        return $this;
    }

    /**
     * Gets as itemName
     *
     * The item being modified in this transaction.
     *
     * @return string
     */
    public function getItemName()
    {
        return $this->itemName;
    }

    /**
     * Sets a new itemName
     *
     * The item being modified in this transaction.
     *
     * @param string $itemName
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->itemName = $itemName;

        return $this;
    }

    /**
     * Gets as oldValue
     *
     * Specifies the old value of an item.
     *
     * @return string
     */
    public function getOldValue()
    {
        return $this->oldValue;
    }

    /**
     * Sets a new oldValue
     *
     * Specifies the old value of an item.
     *
     * @param string $oldValue
     * @return self
     */
    public function setOldValue($oldValue)
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    /**
     * Gets as newValue
     *
     * Specifies the new value of an item.
     *
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * Sets a new newValue
     *
     * Specifies the new value of an item.
     *
     * @param string $newValue
     * @return self
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;

        return $this;
    }

    /**
     * Gets as classification
     *
     * Specifies the classification of the item (e.g., RES_GUEST, RES_HEADER).
     *
     * @return string
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Specifies the classification of the item (e.g., RES_GUEST, RES_HEADER).
     *
     * @param string $classification
     * @return self
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;

        return $this;
    }


}

