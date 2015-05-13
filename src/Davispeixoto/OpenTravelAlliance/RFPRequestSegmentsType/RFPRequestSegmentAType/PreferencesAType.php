<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing PreferencesAType
 */
class PreferencesAType
{

    /**
     * Describes various preferences or requirements for the RFP.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     * $preference
     */
    private $preference = null;

    /**
     * Adds as preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType
     * $preference
     */
    public function addToPreference(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference
    ) {
        $this->preference[] = $preference;

        return $this;
    }

    /**
     * isset preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPreference($index)
    {
        return isset($this->preference[$index]);
    }

    /**
     * unset preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPreference($index)
    {
        unset($this->preference[$index]);
    }

    /**
     * Gets as preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Sets a new preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     * $preference
     * @return self
     */
    public function setPreference(array $preference)
    {
        $this->preference = $preference;

        return $this;
    }


}

