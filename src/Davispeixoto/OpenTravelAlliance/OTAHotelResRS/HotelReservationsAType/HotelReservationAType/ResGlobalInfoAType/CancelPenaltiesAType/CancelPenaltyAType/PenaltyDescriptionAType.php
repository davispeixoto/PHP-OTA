<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType;

/**
 * Class representing PenaltyDescriptionAType
 */
class PenaltyDescriptionAType
{

    /**
     * Name MAY identify the type of information sent in the Text element.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * The Text element MUST provide textual information regarding the cancellation
     * penalty.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType\TextAType
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
     * The Text element MUST provide textual information regarding the cancellation
     * penalty.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType\TextAType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The Text element MUST provide textual information regarding the cancellation
     * penalty.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType\TextAType
     * $text
     * @return self
     */
    public function setText(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\CancelPenaltiesAType\CancelPenaltyAType\PenaltyDescriptionAType\TextAType $text
    ) {
        $this->text = $text;

        return $this;
    }


}

