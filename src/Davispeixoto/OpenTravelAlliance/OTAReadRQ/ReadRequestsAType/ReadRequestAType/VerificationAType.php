<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType;

/**
 * Class representing VerificationAType
 */
class VerificationAType
{

    /**
     * PersonName specifies the name of the guest on the reservation to be retrieved.
     * This name is used to verify that the correct reservation is being returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType\VerificationAType\PersonNameAType
     * $personName
     */
    private $personName = null;

    /**
     * Gets as personName
     *
     * PersonName specifies the name of the guest on the reservation to be retrieved.
     * This name is used to verify that the correct reservation is being returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType\VerificationAType\PersonNameAType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * PersonName specifies the name of the guest on the reservation to be retrieved.
     * This name is used to verify that the correct reservation is being returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType\VerificationAType\PersonNameAType
     * $personName
     * @return self
     */
    public function setPersonName(
        \Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\ReadRequestAType\VerificationAType\PersonNameAType $personName
    ) {
        $this->personName = $personName;

        return $this;
    }


}

