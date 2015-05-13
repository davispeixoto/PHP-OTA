<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DistribPrefType
 *
 * Type of ticket distribution to be used with this collection of preferences.
 * XSD Type: DistribPrefType
 */
class DistribPrefType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Ticket distribution method (e.g. Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk, WillCall). Refer to OpenTravel Code List Distribution
     * Type (DTB).
     *
     * @property string $distribType
     */
    private $distribType = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as distribType
     *
     * Ticket distribution method (e.g. Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk, WillCall). Refer to OpenTravel Code List Distribution
     * Type (DTB).
     *
     * @return string
     */
    public function getDistribType()
    {
        return $this->distribType;
    }

    /**
     * Sets a new distribType
     *
     * Ticket distribution method (e.g. Fax, Email, Courier, Mail, Airport_Pickup,
     * City_Office, Hotel_Desk, WillCall). Refer to OpenTravel Code List Distribution
     * Type (DTB).
     *
     * @param string $distribType
     * @return self
     */
    public function setDistribType($distribType)
    {
        $this->distribType = $distribType;

        return $this;
    }


}

