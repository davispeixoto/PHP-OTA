<?php

namespace Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType;

/**
 * Class representing HotelFeatureAType
 */
class HotelFeatureAType
{

    /**
     * Identifies a security feature at a propetry. Refer to OpenTravel Code list
     * Security Feature Code (SEC).
     *
     * @property string $securityFeatureCode
     */
    private $securityFeatureCode = null;

    /**
     * Identifies an accessibility feature for a property. Refer to OpenTravel Code
     * list Disability Feature Code (PHY).
     *
     * @property string $accessibilityCode
     */
    private $accessibilityCode = null;

    /**
     * Gets as securityFeatureCode
     *
     * Identifies a security feature at a propetry. Refer to OpenTravel Code list
     * Security Feature Code (SEC).
     *
     * @return string
     */
    public function getSecurityFeatureCode()
    {
        return $this->securityFeatureCode;
    }

    /**
     * Sets a new securityFeatureCode
     *
     * Identifies a security feature at a propetry. Refer to OpenTravel Code list
     * Security Feature Code (SEC).
     *
     * @param string $securityFeatureCode
     * @return self
     */
    public function setSecurityFeatureCode($securityFeatureCode)
    {
        $this->securityFeatureCode = $securityFeatureCode;

        return $this;
    }

    /**
     * Gets as accessibilityCode
     *
     * Identifies an accessibility feature for a property. Refer to OpenTravel Code
     * list Disability Feature Code (PHY).
     *
     * @return string
     */
    public function getAccessibilityCode()
    {
        return $this->accessibilityCode;
    }

    /**
     * Sets a new accessibilityCode
     *
     * Identifies an accessibility feature for a property. Refer to OpenTravel Code
     * list Disability Feature Code (PHY).
     *
     * @param string $accessibilityCode
     * @return self
     */
    public function setAccessibilityCode($accessibilityCode)
    {
        $this->accessibilityCode = $accessibilityCode;

        return $this;
    }


}

