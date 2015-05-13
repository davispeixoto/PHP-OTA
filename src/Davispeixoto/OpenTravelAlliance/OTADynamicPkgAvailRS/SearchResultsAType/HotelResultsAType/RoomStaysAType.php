<?php

namespace Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType;

/**
 * Class representing RoomStaysAType
 */
class RoomStaysAType
{

    /**
     * A text field used to indicate that there are additional rates that cannot fit in
     * the availability response. The text returned should be meaningful in identifying
     * where to begin the next block of data and sent in the availability request.
     *
     * @property string $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType\RoomStayAType[]
     * $roomStay
     */
    private $roomStay = null;

    /**
     * Gets as moreIndicator
     *
     * A text field used to indicate that there are additional rates that cannot fit in
     * the availability response. The text returned should be meaningful in identifying
     * where to begin the next block of data and sent in the availability request.
     *
     * @return string
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * A text field used to indicate that there are additional rates that cannot fit in
     * the availability response. The text returned should be meaningful in identifying
     * where to begin the next block of data and sent in the availability request.
     *
     * @param string $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;

        return $this;
    }

    /**
     * Adds as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType\RoomStayAType
     * $roomStay
     */
    public function addToRoomStay(
        \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType\RoomStayAType $roomStay
    ) {
        $this->roomStay[] = $roomStay;

        return $this;
    }

    /**
     * isset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStay($index)
    {
        return isset($this->roomStay[$index]);
    }

    /**
     * unset roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStay($index)
    {
        unset($this->roomStay[$index]);
    }

    /**
     * Gets as roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * Details on the Room Stay including Guest Counts, Time Span of this Room Stay,
     * and financial information related to the Room Stay, including Guarantee, Deposit
     * and Payment and Cancellation Penalties.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTADynamicPkgAvailRS\SearchResultsAType\HotelResultsAType\RoomStaysAType\RoomStayAType[]
     * $roomStay
     * @return self
     */
    public function setRoomStay(array $roomStay)
    {
        $this->roomStay = $roomStay;

        return $this;
    }


}

