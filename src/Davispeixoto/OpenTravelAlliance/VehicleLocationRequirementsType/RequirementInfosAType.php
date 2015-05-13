<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType;

/**
 * Class representing RequirementInfosAType
 */
class RequirementInfosAType
{

    /**
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     * $requirementInfo
     */
    private $requirementInfo = null;

    /**
     * Adds as requirementInfo
     *
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType
     * $requirementInfo
     */
    public function addToRequirementInfo(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType $requirementInfo
    ) {
        $this->requirementInfo[] = $requirementInfo;

        return $this;
    }

    /**
     * isset requirementInfo
     *
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRequirementInfo($index)
    {
        return isset($this->requirementInfo[$index]);
    }

    /**
     * unset requirementInfo
     *
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRequirementInfo($index)
    {
        unset($this->requirementInfo[$index]);
    }

    /**
     * Gets as requirementInfo
     *
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     */
    public function getRequirementInfo()
    {
        return $this->requirementInfo;
    }

    /**
     * Sets a new requirementInfo
     *
     * Textual description about a specific requirement that is enforced by this
     * location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\RequirementInfosAType\RequirementInfoAType[]
     * $requirementInfo
     * @return self
     */
    public function setRequirementInfo(array $requirementInfo)
    {
        $this->requirementInfo = $requirementInfo;

        return $this;
    }


}

