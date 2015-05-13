<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing StationDetailsType
 *
 * Defines operation and location details for a train station.
 * XSD Type: StationDetailsType
 */
class StationDetailsType
{

    /**
     * Detailed station information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationType $details
     */
    private $details = null;

    /**
     * Operation schedules for the station.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Address information for the station.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $address
     */
    private $address = null;

    /**
     * Telephone information for the station.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StationDetailsType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Gets as details
     *
     * Detailed station information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Detailed station information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationType $details
     * @return self
     */
    public function setDetails(\Davispeixoto\OpenTravelAlliance\StationType $details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * Operation schedules for the station.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Operation schedules for the station.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Gets as address
     *
     * Address information for the station.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information for the station.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone information for the station.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\StationDetailsType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone information for the station.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Telephone information for the station.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Telephone information for the station.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StationDetailsType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone information for the station.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StationDetailsType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }


}

