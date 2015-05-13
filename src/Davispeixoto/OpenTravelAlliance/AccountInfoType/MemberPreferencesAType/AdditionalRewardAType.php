<?php

namespace Davispeixoto\OpenTravelAlliance\AccountInfoType\MemberPreferencesAType;

/**
 * Class representing AdditionalRewardAType
 */
class AdditionalRewardAType
{

    /**
     * @property string $memberID
     */
    private $memberID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     */
    private $name = null;

    /**
     * Gets as memberID
     *
     * @return string
     */
    public function getMemberID()
    {
        return $this->memberID;
    }

    /**
     * Sets a new memberID
     *
     * @param string $memberID
     * @return self
     */
    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Gets as name
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $name
     * @return self
     */
    public function setName(\Davispeixoto\OpenTravelAlliance\PersonNameType $name)
    {
        $this->name = $name;

        return $this;
    }


}

