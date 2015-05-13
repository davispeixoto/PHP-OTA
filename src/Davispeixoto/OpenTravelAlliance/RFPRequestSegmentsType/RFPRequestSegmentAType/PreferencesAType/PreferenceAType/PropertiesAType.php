<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing PropertiesAType
 */
class PropertiesAType
{

    /**
     * Used to define the preferred type of property for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     * $property
     */
    private $property = null;

    /**
     * Adds as property
     *
     * Used to define the preferred type of property for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType
     * $property
     */
    public function addToProperty(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property
    ) {
        $this->property[] = $property;

        return $this;
    }

    /**
     * isset property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * Used to define the preferred type of property for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     * $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;

        return $this;
    }


}

