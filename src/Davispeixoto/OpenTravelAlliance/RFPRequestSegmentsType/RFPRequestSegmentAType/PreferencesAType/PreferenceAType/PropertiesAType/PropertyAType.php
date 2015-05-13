<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType;

/**
 * Class representing PropertyAType
 */
class PropertyAType
{

    /**
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @property string $propertyTypeCode
     */
    private $propertyTypeCode = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as propertyTypeCode
     *
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @return string
     */
    public function getPropertyTypeCode()
    {
        return $this->propertyTypeCode;
    }

    /**
     * Sets a new propertyTypeCode
     *
     * Used to indicate a property type. Refer to OpenTravel Code List Property Class
     * Type (PCT).
     *
     * @param string $propertyTypeCode
     * @return self
     */
    public function setPropertyTypeCode($propertyTypeCode)
    {
        $this->propertyTypeCode = $propertyTypeCode;

        return $this;
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


}

