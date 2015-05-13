<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{

    /**
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType[] $profile
     */
    private $profile = null;

    /**
     * Adds as profile
     *
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to
     * identify the company, agency, etc that is allowed to view the information.
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

