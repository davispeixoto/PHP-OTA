<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType;

/**
 * Class representing RoomRatesAType
 */
class RoomRatesAType
{

    /**
     * The room rate to which the booking rule applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     */
    private $roomRate = null;

    /**
     * Adds as roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType
     * $roomRate
     */
    public function addToRoomRate(
        \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType $roomRate
    ) {
        $this->roomRate[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRate($index)
    {
        return isset($this->roomRate[$index]);
    }

    /**
     * unset roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRate($index)
    {
        unset($this->roomRate[$index]);
    }

    /**
     * Gets as roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[]
     */
    public function getRoomRate()
    {
        return $this->roomRate;
    }

    /**
     * Sets a new roomRate
     *
     * The room rate to which the booking rule applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelBookingRuleRS\RuleMessageAType\StatusApplicationAType\RoomRatesAType\RoomRateAType[]
     * $roomRate
     * @return self
     */
    public function setRoomRate(array $roomRate)
    {
        $this->roomRate = $roomRate;

        return $this;
    }


}

