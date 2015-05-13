<?php

namespace Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType;

/**
 * Class representing BookingChannelCodesAType
 */
class BookingChannelCodesAType
{

    /**
     * Indicates whether the collection of Channel Codes for booking channels is
     * inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @property boolean $channelCodesInclusive
     */
    private $channelCodesInclusive = null;

    /**
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType\BookingChannelCodeAType[]
     * $bookingChannelCode
     */
    private $bookingChannelCode = null;

    /**
     * Gets as channelCodesInclusive
     *
     * Indicates whether the collection of Channel Codes for booking channels is
     * inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @return boolean
     */
    public function getChannelCodesInclusive()
    {
        return $this->channelCodesInclusive;
    }

    /**
     * Sets a new channelCodesInclusive
     *
     * Indicates whether the collection of Channel Codes for booking channels is
     * inclusive or exclusive. Values: false=Exclusive, true=Inclusive.
     *
     * @param boolean $channelCodesInclusive
     * @return self
     */
    public function setChannelCodesInclusive($channelCodesInclusive)
    {
        $this->channelCodesInclusive = $channelCodesInclusive;

        return $this;
    }

    /**
     * Adds as bookingChannelCode
     *
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType\BookingChannelCodeAType
     * $bookingChannelCode
     */
    public function addToBookingChannelCode(
        \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType\BookingChannelCodeAType $bookingChannelCode
    ) {
        $this->bookingChannelCode[] = $bookingChannelCode;

        return $this;
    }

    /**
     * isset bookingChannelCode
     *
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingChannelCode($index)
    {
        return isset($this->bookingChannelCode[$index]);
    }

    /**
     * unset bookingChannelCode
     *
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingChannelCode($index)
    {
        unset($this->bookingChannelCode[$index]);
    }

    /**
     * Gets as bookingChannelCode
     *
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType\BookingChannelCodeAType[]
     */
    public function getBookingChannelCode()
    {
        return $this->bookingChannelCode;
    }

    /**
     * Sets a new bookingChannelCode
     *
     * Specific code in relation to POS booking source (e.g. Expedia, hotels.com,
     * etc.).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ViewershipsType\ViewershipAType\BookingChannelCodesAType\BookingChannelCodeAType[]
     * $bookingChannelCode
     * @return self
     */
    public function setBookingChannelCode(array $bookingChannelCode)
    {
        $this->bookingChannelCode = $bookingChannelCode;

        return $this;
    }


}

