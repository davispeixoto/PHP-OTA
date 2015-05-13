<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

/**
 * Class representing OtherPrefAType
 */
class OtherPrefAType
{

    /**
     * If true, tours or activities with guides are requested.
     *
     * @property boolean $guideInd
     */
    private $guideInd = null;

    /**
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
     * $spokenLanguage
     */
    private $spokenLanguage = null;

    /**
     * Physically challenged accessibility preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     * $accessibilityRequirement
     */
    private $accessibilityRequirement = null;

    /**
     * Gets as guideInd
     *
     * If true, tours or activities with guides are requested.
     *
     * @return boolean
     */
    public function getGuideInd()
    {
        return $this->guideInd;
    }

    /**
     * Sets a new guideInd
     *
     * If true, tours or activities with guides are requested.
     *
     * @param boolean $guideInd
     * @return self
     */
    public function setGuideInd($guideInd)
    {
        $this->guideInd = $guideInd;

        return $this;
    }

    /**
     * Adds as spokenLanguage
     *
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType $spokenLanguage
     */
    public function addToSpokenLanguage(\Davispeixoto\OpenTravelAlliance\TourActivityLanguageType $spokenLanguage)
    {
        $this->spokenLanguage[] = $spokenLanguage;

        return $this;
    }

    /**
     * isset spokenLanguage
     *
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpokenLanguage($index)
    {
        return isset($this->spokenLanguage[$index]);
    }

    /**
     * unset spokenLanguage
     *
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpokenLanguage($index)
    {
        unset($this->spokenLanguage[$index]);
    }

    /**
     * Gets as spokenLanguage
     *
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
     */
    public function getSpokenLanguage()
    {
        return $this->spokenLanguage;
    }

    /**
     * Sets a new spokenLanguage
     *
     * A preferred spoken language by the guide and/or supplier staff, e.g. French and
     * English.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
     * $spokenLanguage
     * @return self
     */
    public function setSpokenLanguage(array $spokenLanguage)
    {
        $this->spokenLanguage = $spokenLanguage;

        return $this;
    }

    /**
     * Gets as accessibilityRequirement
     *
     * Physically challenged accessibility preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     */
    public function getAccessibilityRequirement()
    {
        return $this->accessibilityRequirement;
    }

    /**
     * Sets a new accessibilityRequirement
     *
     * Physically challenged accessibility preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType
     * $accessibilityRequirement
     * @return self
     */
    public function setAccessibilityRequirement(
        \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityReqType $accessibilityRequirement
    ) {
        $this->accessibilityRequirement = $accessibilityRequirement;

        return $this;
    }


}

