<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType;

/**
 * Class representing CommentAType
 */
class CommentAType
{

    /**
     * Name MAY identify the type of information sent in the Text element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Text MUST specify texual information regarding the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType\TextAType
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
     * Text MUST specify texual information regarding the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType\TextAType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text MUST specify texual information regarding the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType\TextAType
     * $text
     * @return self
     */
    public function setText(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CommentsAType\CommentAType\TextAType $text
    ) {
        $this->text = $text;

        return $this;
    }


}

