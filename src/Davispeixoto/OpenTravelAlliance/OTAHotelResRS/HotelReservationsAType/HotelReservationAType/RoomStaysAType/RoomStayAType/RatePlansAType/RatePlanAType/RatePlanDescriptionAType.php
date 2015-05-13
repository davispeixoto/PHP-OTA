<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType;

/**
 * Class representing RatePlanDescriptionAType
 */
class RatePlanDescriptionAType
{

    /**
     * Name MAY identify the type of information sent in the Text element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Text MUST provide textual information regarding the rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     * $text
     */
    private $text = null;

    /**
     * Gets as name
     *
     * Name MAY identify the type of information sent in the Text element.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name MAY identify the type of information sent in the Text element.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as text
     *
     * Text MUST provide textual information regarding the rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text MUST provide textual information regarding the rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType
     * $text
     * @return self
     */
    public function setText(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType\TextAType $text
    ) {
        $this->text = $text;

        return $this;
    }


}

