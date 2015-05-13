<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DestActivityResResponseItemType
 *
 * The item-level response to a reservation request.
 * XSD Type: DestActivityResResponseItemType
 */
class DestActivityResResponseItemType
{

    /**
     * Based upon the time requested for the item, the vendor may respond with an
     * earlier pickup time.
     *
     * @property \DateTime $pickupTime
     */
    private $pickupTime = null;

    /**
     * The vendor may provide an address or directions as to where the travelers will
     * be picked up.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $pickupLocation
     */
    private $pickupLocation = null;

    /**
     * Collection of reservation item references.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     * $reservationItemReferences
     */
    private $reservationItemReferences = null;

    /**
     * Gets as pickupTime
     *
     * Based upon the time requested for the item, the vendor may respond with an
     * earlier pickup time.
     *
     * @return \DateTime
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * Sets a new pickupTime
     *
     * Based upon the time requested for the item, the vendor may respond with an
     * earlier pickup time.
     *
     * @param \DateTime $pickupTime
     * @return self
     */
    public function setPickupTime(\DateTime $pickupTime)
    {
        $this->pickupTime = $pickupTime;

        return $this;
    }

    /**
     * Gets as pickupLocation
     *
     * The vendor may provide an address or directions as to where the travelers will
     * be picked up.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Sets a new pickupLocation
     *
     * The vendor may provide an address or directions as to where the travelers will
     * be picked up.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $pickupLocation
     * @return self
     */
    public function setPickupLocation(\Davispeixoto\OpenTravelAlliance\ParagraphType $pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;

        return $this;
    }

    /**
     * Adds as reservationItemReference
     *
     * Collection of reservation item references.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationItemReference
     */
    public function addToReservationItemReferences(
        \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationItemReference
    ) {
        $this->reservationItemReferences[] = $reservationItemReference;

        return $this;
    }

    /**
     * isset reservationItemReferences
     *
     * Collection of reservation item references.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationItemReferences($index)
    {
        return isset($this->reservationItemReferences[$index]);
    }

    /**
     * unset reservationItemReferences
     *
     * Collection of reservation item references.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationItemReferences($index)
    {
        unset($this->reservationItemReferences[$index]);
    }

    /**
     * Gets as reservationItemReferences
     *
     * Collection of reservation item references.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getReservationItemReferences()
    {
        return $this->reservationItemReferences;
    }

    /**
     * Sets a new reservationItemReferences
     *
     * Collection of reservation item references.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     * $reservationItemReferences
     * @return self
     */
    public function setReservationItemReferences(array $reservationItemReferences)
    {
        $this->reservationItemReferences = $reservationItemReferences;

        return $this;
    }


}

