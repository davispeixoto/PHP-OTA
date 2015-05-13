<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomLocationPrefType
 *
 * Indicates preferences for hotel room locations.
 * XSD Type: RoomLocationPrefType
 */
class RoomLocationPrefType
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
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @property string $roomLocationType
     */
    private $roomLocationType = null;

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
     * Gets as roomLocationType
     *
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @return string
     */
    public function getRoomLocationType()
    {
        return $this->roomLocationType;
    }

    /**
     * Sets a new roomLocationType
     *
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @param string $roomLocationType
     * @return self
     */
    public function setRoomLocationType($roomLocationType)
    {
        $this->roomLocationType = $roomLocationType;

        return $this;
    }


}

