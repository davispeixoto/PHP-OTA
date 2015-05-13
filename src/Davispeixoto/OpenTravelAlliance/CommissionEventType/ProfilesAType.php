<?php

namespace Davispeixoto\OpenTravelAlliance\CommissionEventType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{

    /**
     * Provides the details for a profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType[] $profile
     */
    private $profile = null;

    /**
     * Adds as profile
     *
     * Provides the details for a profile.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    public function addToProfile(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profile[] = $profile;

        return $this;
    }

    /**
     * isset profile
     *
     * Provides the details for a profile.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * Provides the details for a profile.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * Provides the details for a profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Provides the details for a profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;

        return $this;
    }


}

