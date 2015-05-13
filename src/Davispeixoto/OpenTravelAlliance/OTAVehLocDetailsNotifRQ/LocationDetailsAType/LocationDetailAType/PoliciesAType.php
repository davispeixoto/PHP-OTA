<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing PoliciesAType
 */
class PoliciesAType
{

    /**
     * Unformatted policy information with effective/discontinue dates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     * $policy
     */
    private $policy = null;

    /**
     * Adds as policy
     *
     * Unformatted policy information with effective/discontinue dates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType
     * $policy
     */
    public function addToPolicy(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType $policy
    ) {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Unformatted policy information with effective/discontinue dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Unformatted policy information with effective/discontinue dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Unformatted policy information with effective/discontinue dates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Unformatted policy information with effective/discontinue dates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\PoliciesAType\PolicyAType[]
     * $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }


}

