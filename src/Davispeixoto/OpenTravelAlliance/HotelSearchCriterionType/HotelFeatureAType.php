<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing HotelFeatureAType
 */
class HotelFeatureAType
{

    /**
     * Hotel security feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Security Feature Code (SEC).
     *
     * @property string $securityFeatureCode
     */
    private $securityFeatureCode = null;

    /**
     * Hotel accessibility feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Disability Feature Code (PHY).
     *
     * @property string $accessibilityCode
     */
    private $accessibilityCode = null;

    /**
     * Gets as securityFeatureCode
     *
     * Hotel security feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Security Feature Code (SEC).
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
     * Hotel security feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Security Feature Code (SEC).
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
     * Hotel accessibility feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Disability Feature Code (PHY).
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
     * Hotel accessibility feature that is used as a qualifier when searching for
     * properties. Refer to OpenTravel Code list Disability Feature Code (PHY).
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

