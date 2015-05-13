<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseShorexAvailRS\ShorexPackagesAType\ShorexPackageAType;

use Davispeixoto\OpenTravelAlliance\PriceInfoType;

/**
 * Class representing PriceInfoAType
 */
class PriceInfoAType extends PriceInfoType
{

    /**
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS)
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as status
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS)
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the booking status. Refer to OpenTravel Code list Status (STS)
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }


}

