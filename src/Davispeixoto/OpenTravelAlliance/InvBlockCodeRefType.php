<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing InvBlockCodeRefType
 *
 * Used to return the inventory block codes and inventory block grouping codes from
 * the inventory system back to the requesting system.
 * XSD Type: InvBlockCodeRefType
 */
class InvBlockCodeRefType
{

    /**
     * Identifies the inventory block; code assigned by the originator of the request
     * message.
     *
     * @property string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * Identifies the inventory block group; code assigned by the originator of the
     * request message.
     *
     * @property string $invBlockGroupingCode
     */
    private $invBlockGroupingCode = null;

    /**
     * The InvBlockCode assigned by the inventory system in response to an inventory
     * block notification.
     *
     * @property string $invSystemInvBlockCode
     */
    private $invSystemInvBlockCode = null;

    /**
     * The InvBlockGroupingCode assigned by the inventory system in response to an
     * inventory block notification.
     *
     * @property string $invSystemInvBlockGroupingCode
     */
    private $invSystemInvBlockGroupingCode = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType\HotelRefAType
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Gets as invBlockCode
     *
     * Identifies the inventory block; code assigned by the originator of the request
     * message.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * Identifies the inventory block; code assigned by the originator of the request
     * message.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;

        return $this;
    }

    /**
     * Gets as invBlockGroupingCode
     *
     * Identifies the inventory block group; code assigned by the originator of the
     * request message.
     *
     * @return string
     */
    public function getInvBlockGroupingCode()
    {
        return $this->invBlockGroupingCode;
    }

    /**
     * Sets a new invBlockGroupingCode
     *
     * Identifies the inventory block group; code assigned by the originator of the
     * request message.
     *
     * @param string $invBlockGroupingCode
     * @return self
     */
    public function setInvBlockGroupingCode($invBlockGroupingCode)
    {
        $this->invBlockGroupingCode = $invBlockGroupingCode;

        return $this;
    }

    /**
     * Gets as invSystemInvBlockCode
     *
     * The InvBlockCode assigned by the inventory system in response to an inventory
     * block notification.
     *
     * @return string
     */
    public function getInvSystemInvBlockCode()
    {
        return $this->invSystemInvBlockCode;
    }

    /**
     * Sets a new invSystemInvBlockCode
     *
     * The InvBlockCode assigned by the inventory system in response to an inventory
     * block notification.
     *
     * @param string $invSystemInvBlockCode
     * @return self
     */
    public function setInvSystemInvBlockCode($invSystemInvBlockCode)
    {
        $this->invSystemInvBlockCode = $invSystemInvBlockCode;

        return $this;
    }

    /**
     * Gets as invSystemInvBlockGroupingCode
     *
     * The InvBlockGroupingCode assigned by the inventory system in response to an
     * inventory block notification.
     *
     * @return string
     */
    public function getInvSystemInvBlockGroupingCode()
    {
        return $this->invSystemInvBlockGroupingCode;
    }

    /**
     * Sets a new invSystemInvBlockGroupingCode
     *
     * The InvBlockGroupingCode assigned by the inventory system in response to an
     * inventory block notification.
     *
     * @param string $invSystemInvBlockGroupingCode
     * @return self
     */
    public function setInvSystemInvBlockGroupingCode($invSystemInvBlockGroupingCode)
    {
        $this->invSystemInvBlockGroupingCode = $invSystemInvBlockGroupingCode;

        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * @return \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * @param \Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType\HotelRefAType
     * $hotelRef
     * @return self
     */
    public function setHotelRef(\Davispeixoto\OpenTravelAlliance\InvBlockCodeRefType\HotelRefAType $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }


}

