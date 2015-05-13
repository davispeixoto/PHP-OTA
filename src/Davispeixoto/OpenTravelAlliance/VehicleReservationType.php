<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleReservationType
 *
 * The VehicleReservationType complex type identifies the data that describes a
 * vehicle reservation. This data includes information on the customer(s)
 * associated with the rental and details on the vehicle that is being rented.
 * XSD Type: VehicleReservationType
 */
class VehicleReservationType
{

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
     * Used to specify the status of the reservation.
     *
     * @property string $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     * $customer
     */
    private $customer = null;

    /**
     * Common, or core, information associated with a reservation period and a reserved
     * vehicle.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationType\VehSegmentCoreAType
     * $vehSegmentCore
     */
    private $vehSegmentCore = null;

    /**
     * Supplemental information associated with a reservation period and a reserved
     * vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType
     * $vehSegmentInfo
     */
    private $vehSegmentInfo = null;

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
     * Gets as reservationStatus
     *
     * Used to specify the status of the reservation.
     *
     * @return string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * Used to specify the status of the reservation.
     *
     * @param string $reservationStatus
     * @return self
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;

        return $this;
    }

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional
     * drivers. This may be used to provide a frequent renter number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerPrimaryAdditionalType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Gets as vehSegmentCore
     *
     * Common, or core, information associated with a reservation period and a reserved
     * vehicle.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationType\VehSegmentCoreAType
     */
    public function getVehSegmentCore()
    {
        return $this->vehSegmentCore;
    }

    /**
     * Sets a new vehSegmentCore
     *
     * Common, or core, information associated with a reservation period and a reserved
     * vehicle.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleReservationType\VehSegmentCoreAType
     * $vehSegmentCore
     * @return self
     */
    public function setVehSegmentCore(
        \Davispeixoto\OpenTravelAlliance\VehicleReservationType\VehSegmentCoreAType $vehSegmentCore
    ) {
        $this->vehSegmentCore = $vehSegmentCore;

        return $this;
    }

    /**
     * Gets as vehSegmentInfo
     *
     * Supplemental information associated with a reservation period and a reserved
     * vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType
     */
    public function getVehSegmentInfo()
    {
        return $this->vehSegmentInfo;
    }

    /**
     * Sets a new vehSegmentInfo
     *
     * Supplemental information associated with a reservation period and a reserved
     * vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType
     * $vehSegmentInfo
     * @return self
     */
    public function setVehSegmentInfo(\Davispeixoto\OpenTravelAlliance\VehicleSegmentAdditionalInfoType $vehSegmentInfo)
    {
        $this->vehSegmentInfo = $vehSegmentInfo;

        return $this;
    }


}

