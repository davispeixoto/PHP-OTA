<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivitySupplierType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{

    /**
     * The location for this contact (e.g., tour/activity supplier or travel agent).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Gets as locationCode
     *
     * The location for this contact (e.g., tour/activity supplier or travel agent).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * The location for this contact (e.g., tour/activity supplier or travel agent).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }


}

