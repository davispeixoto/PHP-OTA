<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

use Davispeixoto\OpenTravelAlliance\RelatedTravelerType;

/**
 * Class representing LinkedTravelerAType
 */
class LinkedTravelerAType extends RelatedTravelerType
{

    /**
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @property string $linkTypeCode
     */
    private $linkTypeCode = null;

    /**
     * Gets as linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @return string
     */
    public function getLinkTypeCode()
    {
        return $this->linkTypeCode;
    }

    /**
     * Sets a new linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @param string $linkTypeCode
     * @return self
     */
    public function setLinkTypeCode($linkTypeCode)
    {
        $this->linkTypeCode = $linkTypeCode;

        return $this;
    }


}

