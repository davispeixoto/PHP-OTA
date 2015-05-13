<?php

namespace Davispeixoto\OpenTravelAlliance\FlightSegmentType;

use Davispeixoto\OpenTravelAlliance\CompanyNameType;

/**
 * Class representing MarketingAirlineAType
 */
class MarketingAirlineAType extends CompanyNameType
{

    /**
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @property string $singleVendorInd
     */
    private $singleVendorInd = null;

    /**
     * Gets as singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @return string
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }

    /**
     * Sets a new singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating
     * credits.
     *
     * @param string $singleVendorInd
     * @return self
     */
    public function setSingleVendorInd($singleVendorInd)
    {
        $this->singleVendorInd = $singleVendorInd;

        return $this;
    }


}

