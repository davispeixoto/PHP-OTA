<?php

namespace Davispeixoto\OpenTravelAlliance\TransportInfoType;

/**
 * Class representing TransportInfoAType
 */
class TransportInfoAType
{

    /**
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto,
     * Other.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Identifier of this transportation method (e.g., flight number).
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Time of transportation. Local time of the location indicated by the
     * LocationCode.
     *
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @property string $transportationCode
     */
    private $transportationCode = null;

    /**
     * Descriptive information about the mode of transportation.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @property string $notificationRequired
     */
    private $notificationRequired = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $transportationID
     */
    private $transportationID = null;

    /**
     * Gets as type
     *
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto,
     * Other.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Method of conveyance of this guest. Values: Air, Rail, Bus, Boat, Private Auto,
     * Other.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as iD
     *
     * Identifier of this transportation method (e.g., flight number).
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Identifier of this transportation method (e.g., flight number).
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Identifier of the arrival or delivery point (e.g., airport code)
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as time
     *
     * Time of transportation. Local time of the location indicated by the
     * LocationCode.
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * Time of transportation. Local time of the location indicated by the
     * LocationCode.
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Gets as transportationCode
     *
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @return string
     */
    public function getTransportationCode()
    {
        return $this->transportationCode;
    }

    /**
     * Sets a new transportationCode
     *
     * The mode of transportation. Refer to OpenTravel Code List Transportation Code
     * (TRP).
     *
     * @param string $transportationCode
     * @return self
     */
    public function setTransportationCode($transportationCode)
    {
        $this->transportationCode = $transportationCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information about the mode of transportation.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information about the mode of transportation.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as notificationRequired
     *
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @return string
     */
    public function getNotificationRequired()
    {
        return $this->notificationRequired;
    }

    /**
     * Sets a new notificationRequired
     *
     * This would be used for information such as a shuttle needs to be requested or a
     * reservation is required.
     *
     * @param string $notificationRequired
     * @return self
     */
    public function setNotificationRequired($notificationRequired)
    {
        $this->notificationRequired = $notificationRequired;

        return $this;
    }

    /**
     * Gets as transportationID
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getTransportationID()
    {
        return $this->transportationID;
    }

    /**
     * Sets a new transportationID
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $transportationID
     * @return self
     */
    public function setTransportationID($transportationID)
    {
        $this->transportationID = $transportationID;

        return $this;
    }


}

