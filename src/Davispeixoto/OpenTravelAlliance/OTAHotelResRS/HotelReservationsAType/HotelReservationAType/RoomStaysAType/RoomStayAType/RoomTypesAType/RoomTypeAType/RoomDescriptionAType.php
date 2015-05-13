<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing RoomDescriptionAType
 */
class RoomDescriptionAType
{

    /**
     * Name MAY identify the type of information sent in the Text element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Text MUST provide textual information regarding the room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType\TextAType
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
     * Text MUST provide textual information regarding the room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType\TextAType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text MUST provide textual information regarding the room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType\TextAType
     * $text
     * @return self
     */
    public function setText(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType\TextAType $text
    ) {
        $this->text = $text;

        return $this;
    }


}

