<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CancelInfoRQType
 *
 * Identifies the common, or core, information associated with the request for
 * cancellation of a reservation or other type of record.
 * XSD Type: CancelInfoRQType
 */
class CancelInfoRQType
{

    /**
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @property string $cancelType
     */
    private $cancelType = null;

    /**
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * The person's name in a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @return string
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * Sets a new cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @param string $cancelType
     * @return self
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
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
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
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
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
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
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
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
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
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
     * The person's name in a reservation.
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
     * The person's name in a reservation.
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

