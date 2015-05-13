<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfileTypesAType
 */
class ProfileTypesAType
{

    /**
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     * $profileType
     */
    private $profileType = null;

    /**
     * Adds as profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType
     * $profileType
     */
    public function addToProfileType(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType $profileType
    ) {
        $this->profileType[] = $profileType;

        return $this;
    }

    /**
     * isset profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfileType($index)
    {
        return isset($this->profileType[$index]);
    }

    /**
     * unset profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfileType($index)
    {
        unset($this->profileType[$index]);
    }

    /**
     * Gets as profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Profile types associated with the viewership, i.e, the types of profiles allowed
     * to view this information. Please refer the OpenTravel Code List PRT.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\ProfileTypesAType\ProfileTypeAType[]
     * $profileType
     * @return self
     */
    public function setProfileType(array $profileType)
    {
        $this->profileType = $profileType;

        return $this;
    }


}

