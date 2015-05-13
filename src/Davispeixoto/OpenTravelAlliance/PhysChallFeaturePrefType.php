<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PhysChallFeaturePrefType
 *
 * Indicates preferences for type of features required to meet the needs of persons
 * with physical challenges, disabilities, etc.
 * XSD Type: PhysChallFeaturePrefType
 */
class PhysChallFeaturePrefType
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
     * Identifies the types of features the hotel offers to service physically
     * challenged guests. Refer to OpenTravel Code List Disability Feature Code (PHY).
     *
     * @property string $physChallFeatureType
     */
    private $physChallFeatureType = null;

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
     * Gets as physChallFeatureType
     *
     * Identifies the types of features the hotel offers to service physically
     * challenged guests. Refer to OpenTravel Code List Disability Feature Code (PHY).
     *
     * @return string
     */
    public function getPhysChallFeatureType()
    {
        return $this->physChallFeatureType;
    }

    /**
     * Sets a new physChallFeatureType
     *
     * Identifies the types of features the hotel offers to service physically
     * challenged guests. Refer to OpenTravel Code List Disability Feature Code (PHY).
     *
     * @param string $physChallFeatureType
     * @return self
     */
    public function setPhysChallFeatureType($physChallFeatureType)
    {
        $this->physChallFeatureType = $physChallFeatureType;

        return $this;
    }


}

