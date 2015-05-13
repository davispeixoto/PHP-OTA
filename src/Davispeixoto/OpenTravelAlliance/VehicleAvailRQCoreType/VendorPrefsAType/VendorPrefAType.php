<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQCoreType\VendorPrefsAType;

use Davispeixoto\OpenTravelAlliance\CompanyNamePrefType;

/**
 * Class representing VendorPrefAType
 */
class VendorPrefAType extends CompanyNamePrefType
{

    /**
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization. Used when multiple vendors have been requested and
     * there is a different code for each.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * Gets as corpDiscountNmbr
     *
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization. Used when multiple vendors have been requested and
     * there is a different code for each.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization. Used when multiple vendors have been requested and
     * there is a different code for each.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;

        return $this;
    }


}

