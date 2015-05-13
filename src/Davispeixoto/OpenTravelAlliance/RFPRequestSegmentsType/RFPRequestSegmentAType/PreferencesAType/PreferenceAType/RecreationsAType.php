<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing RecreationsAType
 */
class RecreationsAType
{

    /**
     * Used to define recreation preferences for the event site.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     * $recreation
     */
    private $recreation = null;

    /**
     * Adds as recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType
     * $recreation
     */
    public function addToRecreation(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation
    ) {
        $this->recreation[] = $recreation;

        return $this;
    }

    /**
     * isset recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     * $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;

        return $this;
    }


}

