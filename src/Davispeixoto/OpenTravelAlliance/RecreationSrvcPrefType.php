<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RecreationSrvcPrefType
 *
 * Indicates preferences for type of recreation services in a hotel.
 * XSD Type: RecreationSrvcPrefType
 */
class RecreationSrvcPrefType
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
     * Identifies the recreational services offered by the hotel. Refer to OpenTravel
     * Code List Recreation Srvc Type (RST).
     *
     * @property string $recreationSrvcType
     */
    private $recreationSrvcType = null;

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
     * Gets as recreationSrvcType
     *
     * Identifies the recreational services offered by the hotel. Refer to OpenTravel
     * Code List Recreation Srvc Type (RST).
     *
     * @return string
     */
    public function getRecreationSrvcType()
    {
        return $this->recreationSrvcType;
    }

    /**
     * Sets a new recreationSrvcType
     *
     * Identifies the recreational services offered by the hotel. Refer to OpenTravel
     * Code List Recreation Srvc Type (RST).
     *
     * @param string $recreationSrvcType
     * @return self
     */
    public function setRecreationSrvcType($recreationSrvcType)
    {
        $this->recreationSrvcType = $recreationSrvcType;

        return $this;
    }


}

