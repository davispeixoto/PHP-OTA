<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType;

/**
 * Class representing BookingRulesAType
 */
class BookingRulesAType
{

    /**
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     * $bookingRule
     */
    private $bookingRule = null;

    /**
     * Adds as bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType
     * $bookingRule
     */
    public function addToBookingRule(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType $bookingRule
    ) {
        $this->bookingRule[] = $bookingRule;

        return $this;
    }

    /**
     * isset bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingRule($index)
    {
        return isset($this->bookingRule[$index]);
    }

    /**
     * unset bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingRule($index)
    {
        unset($this->bookingRule[$index]);
    }

    /**
     * Gets as bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     */
    public function getBookingRule()
    {
        return $this->bookingRule;
    }

    /**
     * Sets a new bookingRule
     *
     * The BookingRule element defines restrictions to rates and stays at the hotel for
     * a given rate plan, room type or rate plan/room type combination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\PolicyInfoAType\BookingRulesAType\BookingRuleAType[]
     * $bookingRule
     * @return self
     */
    public function setBookingRule(array $bookingRule)
    {
        $this->bookingRule = $bookingRule;

        return $this;
    }


}

