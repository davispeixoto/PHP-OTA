<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelReservationType
 *
 * The Reservation class contains the current reservation being created or altered.
 * XSD Type: HotelReservationType
 */
class HotelReservationType
{

    /**
     * Boolean True if this reservation is reserving rooms. False if it is only
     * reserving services.
     *
     * @property boolean $roomStayReservation
     */
    private $roomStayReservation = null;

    /**
     * Time stamp of the creation.
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @property string $creatorID
     */
    private $creatorID = null;

    /**
     * Time stamp of last modification.
     *
     * @property \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * Identifies the last software system or person to modify a record.
     *
     * @property string $lastModifierID
     */
    private $lastModifierID = null;

    /**
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @property \DateTime $purgeDate
     */
    private $purgeDate = null;

    /**
     * Indicates the status of the reservation.
     *
     * @property string $resStatus
     */
    private $resStatus = null;

    /**
     * When true, indicates a sell was forced even if there are restrictions or no
     * availability.
     *
     * @property boolean $forcedSellIndicator
     */
    private $forcedSellIndicator = null;

    /**
     * When true, indicates a service has been overridden.
     *
     * @property boolean $serviceOverrideIndicator
     */
    private $serviceOverrideIndicator = null;

    /**
     * When true, indicates a rate has been overridden.
     *
     * @property boolean $rateOverrideIndicator
     */
    private $rateOverrideIndicator = null;

    /**
     * When true, indicates the reservation is for a guest that walks-in without a
     * reservation. When false, the reservation is not a walk-in.
     *
     * @property boolean $walkInIndicator
     */
    private $walkInIndicator = null;

    /**
     * When true, indicates a room number cannot be changed. When false, indicates a
     * room number may be changed.
     *
     * @property boolean $roomNumberLockedIndicator
     */
    private $roomNumberLockedIndicator = null;

    /**
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @property string $originalDeliveryMethodCode
     */
    private $originalDeliveryMethodCode = null;

    /**
     * When true, indicates that this item is included for information only and no
     * action should be taken.
     *
     * @property boolean $passiveIndicator
     */
    private $passiveIndicator = null;

    /**
     * Identifies who made the original reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Used to provide PMS and/or CRS identifiers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Collection of room stays.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType[]
     * $roomStays
     */
    private $roomStays = null;

    /**
     * Collection of services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ServicesType $services
     */
    private $services = null;

    /**
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType[]
     * $billingInstructionCode
     */
    private $billingInstructionCode = null;

    /**
     * Collection of guests associated with the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ResGuestType[] $resGuests
     */
    private $resGuests = null;

    /**
     * ResGlobalInfo is a container for various information that affects the
     * Reservation as a whole. These include global comments, counts, reservation IDs,
     * loyalty programs, and payment methods.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\ResGlobalInfoAType
     * $resGlobalInfo
     */
    private $resGlobalInfo = null;

    /**
     * To indicate a confirmation is to be sent for this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Information to specify the queue on which the reservation should be placed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelReservationType\QueueAType
     * $queue
     */
    private $queue = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as roomStayReservation
     *
     * Boolean True if this reservation is reserving rooms. False if it is only
     * reserving services.
     *
     * @return boolean
     */
    public function getRoomStayReservation()
    {
        return $this->roomStayReservation;
    }

    /**
     * Sets a new roomStayReservation
     *
     * Boolean True if this reservation is reserving rooms. False if it is only
     * reserving services.
     *
     * @param boolean $roomStayReservation
     * @return self
     */
    public function setRoomStayReservation($roomStayReservation)
    {
        $this->roomStayReservation = $roomStayReservation;

        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Time stamp of the creation.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Time stamp of the creation.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;

        return $this;
    }

    /**
     * Gets as creatorID
     *
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @return string
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }

    /**
     * Sets a new creatorID
     *
     * ID of creator. The creator could be a software system identifier or an
     * identifier of an employee resposible for the creation.
     *
     * @param string $creatorID
     * @return self
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;

        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;

        return $this;
    }

    /**
     * Gets as lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @return string
     */
    public function getLastModifierID()
    {
        return $this->lastModifierID;
    }

    /**
     * Sets a new lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @param string $lastModifierID
     * @return self
     */
    public function setLastModifierID($lastModifierID)
    {
        $this->lastModifierID = $lastModifierID;

        return $this;
    }

    /**
     * Gets as purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->purgeDate;
    }

    /**
     * Sets a new purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an
     * archive).
     *
     * @param \DateTime $purgeDate
     * @return self
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
        $this->purgeDate = $purgeDate;

        return $this;
    }

    /**
     * Gets as resStatus
     *
     * Indicates the status of the reservation.
     *
     * @return string
     */
    public function getResStatus()
    {
        return $this->resStatus;
    }

    /**
     * Sets a new resStatus
     *
     * Indicates the status of the reservation.
     *
     * @param string $resStatus
     * @return self
     */
    public function setResStatus($resStatus)
    {
        $this->resStatus = $resStatus;

        return $this;
    }

    /**
     * Gets as forcedSellIndicator
     *
     * When true, indicates a sell was forced even if there are restrictions or no
     * availability.
     *
     * @return boolean
     */
    public function getForcedSellIndicator()
    {
        return $this->forcedSellIndicator;
    }

    /**
     * Sets a new forcedSellIndicator
     *
     * When true, indicates a sell was forced even if there are restrictions or no
     * availability.
     *
     * @param boolean $forcedSellIndicator
     * @return self
     */
    public function setForcedSellIndicator($forcedSellIndicator)
    {
        $this->forcedSellIndicator = $forcedSellIndicator;

        return $this;
    }

    /**
     * Gets as serviceOverrideIndicator
     *
     * When true, indicates a service has been overridden.
     *
     * @return boolean
     */
    public function getServiceOverrideIndicator()
    {
        return $this->serviceOverrideIndicator;
    }

    /**
     * Sets a new serviceOverrideIndicator
     *
     * When true, indicates a service has been overridden.
     *
     * @param boolean $serviceOverrideIndicator
     * @return self
     */
    public function setServiceOverrideIndicator($serviceOverrideIndicator)
    {
        $this->serviceOverrideIndicator = $serviceOverrideIndicator;

        return $this;
    }

    /**
     * Gets as rateOverrideIndicator
     *
     * When true, indicates a rate has been overridden.
     *
     * @return boolean
     */
    public function getRateOverrideIndicator()
    {
        return $this->rateOverrideIndicator;
    }

    /**
     * Sets a new rateOverrideIndicator
     *
     * When true, indicates a rate has been overridden.
     *
     * @param boolean $rateOverrideIndicator
     * @return self
     */
    public function setRateOverrideIndicator($rateOverrideIndicator)
    {
        $this->rateOverrideIndicator = $rateOverrideIndicator;

        return $this;
    }

    /**
     * Gets as walkInIndicator
     *
     * When true, indicates the reservation is for a guest that walks-in without a
     * reservation. When false, the reservation is not a walk-in.
     *
     * @return boolean
     */
    public function getWalkInIndicator()
    {
        return $this->walkInIndicator;
    }

    /**
     * Sets a new walkInIndicator
     *
     * When true, indicates the reservation is for a guest that walks-in without a
     * reservation. When false, the reservation is not a walk-in.
     *
     * @param boolean $walkInIndicator
     * @return self
     */
    public function setWalkInIndicator($walkInIndicator)
    {
        $this->walkInIndicator = $walkInIndicator;

        return $this;
    }

    /**
     * Gets as roomNumberLockedIndicator
     *
     * When true, indicates a room number cannot be changed. When false, indicates a
     * room number may be changed.
     *
     * @return boolean
     */
    public function getRoomNumberLockedIndicator()
    {
        return $this->roomNumberLockedIndicator;
    }

    /**
     * Sets a new roomNumberLockedIndicator
     *
     * When true, indicates a room number cannot be changed. When false, indicates a
     * room number may be changed.
     *
     * @param boolean $roomNumberLockedIndicator
     * @return self
     */
    public function setRoomNumberLockedIndicator($roomNumberLockedIndicator)
    {
        $this->roomNumberLockedIndicator = $roomNumberLockedIndicator;

        return $this;
    }

    /**
     * Gets as originalDeliveryMethodCode
     *
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @return string
     */
    public function getOriginalDeliveryMethodCode()
    {
        return $this->originalDeliveryMethodCode;
    }

    /**
     * Sets a new originalDeliveryMethodCode
     *
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @param string $originalDeliveryMethodCode
     * @return self
     */
    public function setOriginalDeliveryMethodCode($originalDeliveryMethodCode)
    {
        $this->originalDeliveryMethodCode = $originalDeliveryMethodCode;

        return $this;
    }

    /**
     * Gets as passiveIndicator
     *
     * When true, indicates that this item is included for information only and no
     * action should be taken.
     *
     * @return boolean
     */
    public function getPassiveIndicator()
    {
        return $this->passiveIndicator;
    }

    /**
     * Sets a new passiveIndicator
     *
     * When true, indicates that this item is included for information only and no
     * action should be taken.
     *
     * @param boolean $passiveIndicator
     * @return self
     */
    public function setPassiveIndicator($passiveIndicator)
    {
        $this->passiveIndicator = $passiveIndicator;

        return $this;
    }

    /**
     * Adds as source
     *
     * Identifies who made the original reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Identifies who made the original reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Identifies who made the original reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Identifies who made the original reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Identifies who made the original reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Used to provide PMS and/or CRS identifiers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Adds as roomStay
     *
     * Collection of room stays.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType $roomStay
     */
    public function addToRoomStays(\Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType $roomStay)
    {
        $this->roomStays[] = $roomStay;

        return $this;
    }

    /**
     * isset roomStays
     *
     * Collection of room stays.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStays($index)
    {
        return isset($this->roomStays[$index]);
    }

    /**
     * unset roomStays
     *
     * Collection of room stays.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStays($index)
    {
        unset($this->roomStays[$index]);
    }

    /**
     * Gets as roomStays
     *
     * Collection of room stays.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType[]
     */
    public function getRoomStays()
    {
        return $this->roomStays;
    }

    /**
     * Sets a new roomStays
     *
     * Collection of room stays.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomStaysType\RoomStayAType[] $roomStays
     * @return self
     */
    public function setRoomStays(array $roomStays)
    {
        $this->roomStays = $roomStays;

        return $this;
    }

    /**
     * Gets as services
     *
     * Collection of services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ServicesType
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * Collection of services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ServicesType $services
     * @return self
     */
    public function setServices(\Davispeixoto\OpenTravelAlliance\ServicesType $services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Adds as billingInstructionCode
     *
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType
     * $billingInstructionCode
     */
    public function addToBillingInstructionCode(
        \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType $billingInstructionCode
    ) {
        $this->billingInstructionCode[] = $billingInstructionCode;

        return $this;
    }

    /**
     * isset billingInstructionCode
     *
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBillingInstructionCode($index)
    {
        return isset($this->billingInstructionCode[$index]);
    }

    /**
     * unset billingInstructionCode
     *
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBillingInstructionCode($index)
    {
        unset($this->billingInstructionCode[$index]);
    }

    /**
     * Gets as billingInstructionCode
     *
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType[]
     */
    public function getBillingInstructionCode()
    {
        return $this->billingInstructionCode;
    }

    /**
     * Sets a new billingInstructionCode
     *
     * Billing codes that apply to a set of instructions for a set of transactions that
     * are routed to a designated folio.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationType\BillingInstructionCodeAType[]
     * $billingInstructionCode
     * @return self
     */
    public function setBillingInstructionCode(array $billingInstructionCode)
    {
        $this->billingInstructionCode = $billingInstructionCode;

        return $this;
    }

    /**
     * Adds as resGuest
     *
     * Collection of guests associated with the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ResGuestType $resGuest
     */
    public function addToResGuests(\Davispeixoto\OpenTravelAlliance\ResGuestType $resGuest)
    {
        $this->resGuests[] = $resGuest;

        return $this;
    }

    /**
     * isset resGuests
     *
     * Collection of guests associated with the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuests($index)
    {
        return isset($this->resGuests[$index]);
    }

    /**
     * unset resGuests
     *
     * Collection of guests associated with the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuests($index)
    {
        unset($this->resGuests[$index]);
    }

    /**
     * Gets as resGuests
     *
     * Collection of guests associated with the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ResGuestType[]
     */
    public function getResGuests()
    {
        return $this->resGuests;
    }

    /**
     * Sets a new resGuests
     *
     * Collection of guests associated with the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ResGuestType[] $resGuests
     * @return self
     */
    public function setResGuests(array $resGuests)
    {
        $this->resGuests = $resGuests;

        return $this;
    }

    /**
     * Gets as resGlobalInfo
     *
     * ResGlobalInfo is a container for various information that affects the
     * Reservation as a whole. These include global comments, counts, reservation IDs,
     * loyalty programs, and payment methods.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelReservationType\ResGlobalInfoAType
     */
    public function getResGlobalInfo()
    {
        return $this->resGlobalInfo;
    }

    /**
     * Sets a new resGlobalInfo
     *
     * ResGlobalInfo is a container for various information that affects the
     * Reservation as a whole. These include global comments, counts, reservation IDs,
     * loyalty programs, and payment methods.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType\ResGlobalInfoAType
     * $resGlobalInfo
     * @return self
     */
    public function setResGlobalInfo(
        \Davispeixoto\OpenTravelAlliance\HotelReservationType\ResGlobalInfoAType $resGlobalInfo
    ) {
        $this->resGlobalInfo = $resGlobalInfo;

        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * To indicate a confirmation is to be sent for this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * To indicate a confirmation is to be sent for this reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;

        return $this;
    }

    /**
     * Gets as queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelReservationType\QueueAType
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType\QueueAType $queue
     * @return self
     */
    public function setQueue(\Davispeixoto\OpenTravelAlliance\HotelReservationType\QueueAType $queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

