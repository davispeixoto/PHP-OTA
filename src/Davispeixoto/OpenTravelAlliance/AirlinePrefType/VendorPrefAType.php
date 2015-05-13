<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType;

use Davispeixoto\OpenTravelAlliance\CompanyNamePrefType;

/**
 * Class representing VendorPrefAType
 */
class VendorPrefAType extends CompanyNamePrefType
{

    /**
     * A reference pointer used to identify an airline vendor.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A reference pointer used to identify an airline vendor.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference pointer used to identify an airline vendor.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }


}

