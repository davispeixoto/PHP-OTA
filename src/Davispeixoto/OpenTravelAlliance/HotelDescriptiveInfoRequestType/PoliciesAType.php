<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveInfoRequestType;

/**
 * Class representing PoliciesAType
 */
class PoliciesAType
{

    /**
     * Send this data. "True" means send the data.
     *
     * @property boolean $sendPolicies
     */
    private $sendPolicies = null;

    /**
     * Gets as sendPolicies
     *
     * Send this data. "True" means send the data.
     *
     * @return boolean
     */
    public function getSendPolicies()
    {
        return $this->sendPolicies;
    }

    /**
     * Sets a new sendPolicies
     *
     * Send this data. "True" means send the data.
     *
     * @param boolean $sendPolicies
     * @return self
     */
    public function setSendPolicies($sendPolicies)
    {
        $this->sendPolicies = $sendPolicies;

        return $this;
    }


}

