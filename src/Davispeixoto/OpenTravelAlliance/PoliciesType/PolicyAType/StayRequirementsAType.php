<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType;

/**
 * Class representing StayRequirementsAType
 */
class StayRequirementsAType
{

    /**
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     * $stayRequirement
     */
    private $stayRequirement = null;

    /**
     * Adds as stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType
     * $stayRequirement
     */
    public function addToStayRequirement(
        \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType $stayRequirement
    ) {
        $this->stayRequirement[] = $stayRequirement;

        return $this;
    }

    /**
     * isset stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStayRequirement($index)
    {
        return isset($this->stayRequirement[$index]);
    }

    /**
     * unset stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStayRequirement($index)
    {
        unset($this->stayRequirement[$index]);
    }

    /**
     * Gets as stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     */
    public function getStayRequirement()
    {
        return $this->stayRequirement;
    }

    /**
     * Sets a new stayRequirement
     *
     * Defines the requirements for a minimimum or maximum length of stay for a
     * property. Day of week may or may not have an impact on this requirement. Day of
     * week is a stayover day unless StayContext is used.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\StayRequirementsAType\StayRequirementAType[]
     * $stayRequirement
     * @return self
     */
    public function setStayRequirement(array $stayRequirement)
    {
        $this->stayRequirement = $stayRequirement;

        return $this;
    }


}

