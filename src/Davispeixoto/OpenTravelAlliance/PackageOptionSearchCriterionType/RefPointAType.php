<?php

namespace Davispeixoto\OpenTravelAlliance\PackageOptionSearchCriterionType;

/**
 * Class representing RefPointAType
 */
class RefPointAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * The state or province in which the reference point is located.
     *
     * @property string $stateProv
     */
    private $stateProv = null;

    /**
     * The country in which the reference point is located.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @property string $refPointType
     */
    private $refPointType = null;

    /**
     * The name of the reference point.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The name of the city associated with this reference point.
     *
     * @property string $cityName
     */
    private $cityName = null;

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
     * Gets as stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @return string
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Sets a new stateProv
     *
     * The state or province in which the reference point is located.
     *
     * @param string $stateProv
     * @return self
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country in which the reference point is located.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country in which the reference point is located.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Gets as refPointType
     *
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @return string
     */
    public function getRefPointType()
    {
        return $this->refPointType;
    }

    /**
     * Sets a new refPointType
     *
     * Indicates the type of location being referenced (e.g., Airport, Hotel). Refer to
     * the OpenTravel Code table Index Point Code (IPC).
     *
     * @param string $refPointType
     * @return self
     */
    public function setRefPointType($refPointType)
    {
        $this->refPointType = $refPointType;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the reference point.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the reference point.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as cityName
     *
     * The name of the city associated with this reference point.
     *
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * Sets a new cityName
     *
     * The name of the city associated with this reference point.
     *
     * @param string $cityName
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;

        return $this;
    }


}

