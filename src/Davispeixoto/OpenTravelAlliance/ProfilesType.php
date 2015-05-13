<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ProfilesType
 *
 * A container to allow for future expansion of the message.
 * XSD Type: ProfilesType
 */
class ProfilesType
{

    /**
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ProfileInfoType $profileInfo
     */
    private $profileInfo = null;

    /**
     * Gets as profileInfo
     *
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ProfileInfoType
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * Sets a new profileInfo
     *
     * The ProfileInfo container allows for future expansion of the message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ProfileInfoType $profileInfo
     * @return self
     */
    public function setProfileInfo(\Davispeixoto\OpenTravelAlliance\ProfileInfoType $profileInfo)
    {
        $this->profileInfo = $profileInfo;

        return $this;
    }


}

