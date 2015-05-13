<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType;

/**
 * Class representing PreferenceAType
 */
class PreferenceAType
{

    /**
     * Used to define requirements or preferences in location for the event,
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[]
     * $locationCategories
     */
    private $locationCategories = null;

    /**
     * A collection of recreation preferences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     * $recreations
     */
    private $recreations = null;

    /**
     * A collection of preferred properties.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     * $properties
     */
    private $properties = null;

    /**
     * Used to further define event preference information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Adds as locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType
     * $locationCategories
     */
    public function addToLocationCategories(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType $locationCategories
    ) {
        $this->locationCategories[] = $locationCategories;

        return $this;
    }

    /**
     * isset locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationCategories($index)
    {
        return isset($this->locationCategories[$index]);
    }

    /**
     * unset locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationCategories($index)
    {
        unset($this->locationCategories[$index]);
    }

    /**
     * Gets as locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[]
     */
    public function getLocationCategories()
    {
        return $this->locationCategories;
    }

    /**
     * Sets a new locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[]
     * $locationCategories
     * @return self
     */
    public function setLocationCategories(array $locationCategories)
    {
        $this->locationCategories = $locationCategories;

        return $this;
    }

    /**
     * Adds as recreation
     *
     * A collection of recreation preferences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType
     * $recreation
     */
    public function addToRecreations(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation
    ) {
        $this->recreations[] = $recreation;

        return $this;
    }

    /**
     * isset recreations
     *
     * A collection of recreation preferences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreations($index)
    {
        return isset($this->recreations[$index]);
    }

    /**
     * unset recreations
     *
     * A collection of recreation preferences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreations($index)
    {
        unset($this->recreations[$index]);
    }

    /**
     * Gets as recreations
     *
     * A collection of recreation preferences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     */
    public function getRecreations()
    {
        return $this->recreations;
    }

    /**
     * Sets a new recreations
     *
     * A collection of recreation preferences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     * $recreations
     * @return self
     */
    public function setRecreations(array $recreations)
    {
        $this->recreations = $recreations;

        return $this;
    }

    /**
     * Adds as property
     *
     * A collection of preferred properties.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType
     * $property
     */
    public function addToProperties(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property
    ) {
        $this->properties[] = $property;

        return $this;
    }

    /**
     * isset properties
     *
     * A collection of preferred properties.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperties($index)
    {
        return isset($this->properties[$index]);
    }

    /**
     * unset properties
     *
     * A collection of preferred properties.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperties($index)
    {
        unset($this->properties[$index]);
    }

    /**
     * Gets as properties
     *
     * A collection of preferred properties.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets a new properties
     *
     * A collection of preferred properties.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     * $properties
     * @return self
     */
    public function setProperties(array $properties)
    {
        $this->properties = $properties;

        return $this;
    }

    /**
     * Gets as comments
     *
     * Used to further define event preference information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Used to further define event preference information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     * @return self
     */
    public function setComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

