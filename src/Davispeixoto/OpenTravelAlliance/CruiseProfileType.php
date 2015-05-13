<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruiseProfileType
 *
 * Used to specify the data requirements.
 * XSD Type: CruiseProfileType
 */
class CruiseProfileType
{

    /**
     * Specifies the Profile Type such as MOD, MAX or MAN. Profile information, e.g.:
     * MOD for Modification, MAX for Maximum units allowed, MAN for Mandatory.
     *
     * @property string $profileTypeIdentifier
     */
    private $profileTypeIdentifier = null;

    /**
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseProfileType\CruiseProfileAType[]
     * $cruiseProfile
     */
    private $cruiseProfile = null;

    /**
     * Gets as profileTypeIdentifier
     *
     * Specifies the Profile Type such as MOD, MAX or MAN. Profile information, e.g.:
     * MOD for Modification, MAX for Maximum units allowed, MAN for Mandatory.
     *
     * @return string
     */
    public function getProfileTypeIdentifier()
    {
        return $this->profileTypeIdentifier;
    }

    /**
     * Sets a new profileTypeIdentifier
     *
     * Specifies the Profile Type such as MOD, MAX or MAN. Profile information, e.g.:
     * MOD for Modification, MAX for Maximum units allowed, MAN for Mandatory.
     *
     * @param string $profileTypeIdentifier
     * @return self
     */
    public function setProfileTypeIdentifier($profileTypeIdentifier)
    {
        $this->profileTypeIdentifier = $profileTypeIdentifier;

        return $this;
    }

    /**
     * Adds as cruiseProfile
     *
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType\CruiseProfileAType
     * $cruiseProfile
     */
    public function addToCruiseProfile(
        \Davispeixoto\OpenTravelAlliance\CruiseProfileType\CruiseProfileAType $cruiseProfile
    ) {
        $this->cruiseProfile[] = $cruiseProfile;

        return $this;
    }

    /**
     * isset cruiseProfile
     *
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCruiseProfile($index)
    {
        return isset($this->cruiseProfile[$index]);
    }

    /**
     * unset cruiseProfile
     *
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCruiseProfile($index)
    {
        unset($this->cruiseProfile[$index]);
    }

    /**
     * Gets as cruiseProfile
     *
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseProfileType\CruiseProfileAType[]
     */
    public function getCruiseProfile()
    {
        return $this->cruiseProfile;
    }

    /**
     * Sets a new cruiseProfile
     *
     * Contains the cruise attribute information, identifying those items which are
     * mandatory, modifiable, or have required maximums.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseProfileType\CruiseProfileAType[]
     * $cruiseProfile
     * @return self
     */
    public function setCruiseProfile(array $cruiseProfile)
    {
        $this->cruiseProfile = $cruiseProfile;

        return $this;
    }


}

