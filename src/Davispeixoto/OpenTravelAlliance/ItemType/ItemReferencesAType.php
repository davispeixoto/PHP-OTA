<?php

namespace Davispeixoto\OpenTravelAlliance\ItemType;

/**
 * Class representing ItemReferencesAType
 */
class ItemReferencesAType
{

    /**
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $itemReference
     */
    private $itemReference = null;

    /**
     * Adds as itemReference
     *
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $itemReference
     */
    public function addToItemReference(\Davispeixoto\OpenTravelAlliance\UniqueIDType $itemReference)
    {
        $this->itemReference[] = $itemReference;

        return $this;
    }

    /**
     * isset itemReference
     *
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItemReference($index)
    {
        return isset($this->itemReference[$index]);
    }

    /**
     * unset itemReference
     *
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItemReference($index)
    {
        unset($this->itemReference[$index]);
    }

    /**
     * Gets as itemReference
     *
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getItemReference()
    {
        return $this->itemReference;
    }

    /**
     * Sets a new itemReference
     *
     * ItemReference contains various unique (ReservationID) and non unique
     * (ConfirmationID, CancellationID) identifiers that the trading partners associate
     * with a given reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $itemReference
     * @return self
     */
    public function setItemReference(array $itemReference)
    {
        $this->itemReference = $itemReference;

        return $this;
    }


}

