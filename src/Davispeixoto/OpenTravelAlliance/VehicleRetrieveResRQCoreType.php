<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleRetrieveResRQCoreType
 *
 * The VehicleRetrieveInfoRQType complex type defines the common,or core, data by
 * which an existing reservation can be identified for retrieval
 * XSD Type: VehicleRetrieveResRQCoreType
 */
class VehicleRetrieveResRQCoreType
{

    /**
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * A name by which the reservation may be identified.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * A frequent renter number associated with the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as uniqueID
     *
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
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
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
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
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
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
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
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
     * A unique identifier to reference a reservation, such as a reservation number or
     * customer ID. May also be used to pass the IATA agency number.
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
     * Gets as personName
     *
     * A name by which the reservation may be identified.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * A name by which the reservation may be identified.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Davispeixoto\OpenTravelAlliance\PersonNameType $personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * A frequent renter number associated with the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * A frequent renter number associated with the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\VehicleRetrieveResRQCoreType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

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

