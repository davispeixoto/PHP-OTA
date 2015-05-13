<?php

namespace Davispeixoto\OpenTravelAlliance\ResGuestType;

/**
 * Class representing ProfileRPHsAType
 */
class ProfileRPHsAType
{

    /**
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     * $profileRPH
     */
    private $profileRPH = null;

    /**
     * Adds as profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType\ProfileRPHAType
     * $profileRPH
     */
    public function addToProfileRPH(
        \Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH
    ) {
        $this->profileRPH[] = $profileRPH;

        return $this;
    }

    /**
     * isset profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileRPH($index)
    {
        return isset($this->profileRPH[$index]);
    }

    /**
     * unset profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileRPH($index)
    {
        unset($this->profileRPH[$index]);
    }

    /**
     * Gets as profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     */
    public function getProfileRPH()
    {
        return $this->profileRPH;
    }

    /**
     * Sets a new profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     * $profileRPH
     * @return self
     */
    public function setProfileRPH(array $profileRPH)
    {
        $this->profileRPH = $profileRPH;

        return $this;
    }


}

