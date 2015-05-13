<?php

namespace Davispeixoto\OpenTravelAlliance\AffiliationInfoType;

/**
 * Class representing DistribSystemsAType
 */
class DistribSystemsAType
{

    /**
     * The DistribSystem objects defining the affiliated distribution systems for a
     * hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType\DistribSystemAType
     * $distribSystem
     */
    private $distribSystem = null;

    /**
     * Gets as distribSystem
     *
     * The DistribSystem objects defining the affiliated distribution systems for a
     * hotel.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType\DistribSystemAType
     */
    public function getDistribSystem()
    {
        return $this->distribSystem;
    }

    /**
     * Sets a new distribSystem
     *
     * The DistribSystem objects defining the affiliated distribution systems for a
     * hotel.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType\DistribSystemAType
     * $distribSystem
     * @return self
     */
    public function setDistribSystem(
        \Davispeixoto\OpenTravelAlliance\AffiliationInfoType\DistribSystemsAType\DistribSystemAType $distribSystem
    ) {
        $this->distribSystem = $distribSystem;

        return $this;
    }


}

