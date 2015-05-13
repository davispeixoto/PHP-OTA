<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ProfileInfoType
 *
 * Customer profile information.
 * XSD Type: ProfileInfoType
 */
class ProfileInfoType
{

    /**
     * Profile MUST provide the details of the customer profile information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     */
    private $profile = null;

    /**
     * Gets as profile
     *
     * Profile MUST provide the details of the customer profile information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileType
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile MUST provide the details of the customer profile information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileType $profile
     * @return self
     */
    public function setProfile(\Davispeixoto\OpenTravelAlliance\ProfileType $profile)
    {
        $this->profile = $profile;

        return $this;
    }


}

