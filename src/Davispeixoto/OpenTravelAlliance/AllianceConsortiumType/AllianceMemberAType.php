<?php

namespace Davispeixoto\OpenTravelAlliance\AllianceConsortiumType;

use Davispeixoto\OpenTravelAlliance\CompanyNameType;

/**
 * Class representing AllianceMemberAType
 */
class AllianceMemberAType extends CompanyNameType
{

    /**
     * Identifies the alliance or consortium member by code.
     *
     * @property string $memberCode
     */
    private $memberCode = null;

    /**
     * Gets as memberCode
     *
     * Identifies the alliance or consortium member by code.
     *
     * @return string
     */
    public function getMemberCode()
    {
        return $this->memberCode;
    }

    /**
     * Sets a new memberCode
     *
     * Identifies the alliance or consortium member by code.
     *
     * @param string $memberCode
     * @return self
     */
    public function setMemberCode($memberCode)
    {
        $this->memberCode = $memberCode;

        return $this;
    }


}

