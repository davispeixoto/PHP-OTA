<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType;

use Davispeixoto\OpenTravelAlliance\RelatedTravelerType;

/**
 * Class representing LinkedBookingAType
 */
class LinkedBookingAType extends RelatedTravelerType
{

    /**
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @property string[] $linkTypeCode
     */
    private $linkTypeCode = null;

    /**
     * Adds as linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @return self
     * @param string $linkTypeCode
     */
    public function addToLinkTypeCode($linkTypeCode)
    {
        $this->linkTypeCode[] = $linkTypeCode;

        return $this;
    }

    /**
     * isset linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLinkTypeCode($index)
    {
        return isset($this->linkTypeCode[$index]);
    }

    /**
     * unset linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLinkTypeCode($index)
    {
        unset($this->linkTypeCode[$index]);
    }

    /**
     * Gets as linkTypeCode
     *
     * Specifies the nature of the link (e.g. booking, dining, tour, back to back).
     * Refer to OpenTravel Code Table Link Type Code (LTC).
     *
     * @return string[]
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
    public function setLinkTypeCode(array $linkTypeCode)
    {
        $this->linkTypeCode = $linkTypeCode;

        return $this;
    }


}

