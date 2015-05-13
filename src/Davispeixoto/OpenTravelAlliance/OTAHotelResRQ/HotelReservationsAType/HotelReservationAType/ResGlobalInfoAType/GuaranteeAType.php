<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing GuaranteeAType
 */
class GuaranteeAType
{

    /**
     * GuaranteeType MUST specify the guarantee type for this reservation.
     *
     * @property string $guaranteeType
     */
    private $guaranteeType = null;

    /**
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType
     * $guaranteesAccepted
     */
    private $guaranteesAccepted = null;

    /**
     * Gets as guaranteeType
     *
     * GuaranteeType MUST specify the guarantee type for this reservation.
     *
     * @return string
     */
    public function getGuaranteeType()
    {
        return $this->guaranteeType;
    }

    /**
     * Sets a new guaranteeType
     *
     * GuaranteeType MUST specify the guarantee type for this reservation.
     *
     * @param string $guaranteeType
     * @return self
     */
    public function setGuaranteeType($guaranteeType)
    {
        $this->guaranteeType = $guaranteeType;

        return $this;
    }

    /**
     * Gets as guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType
     */
    public function getGuaranteesAccepted()
    {
        return $this->guaranteesAccepted;
    }

    /**
     * Sets a new guaranteesAccepted
     *
     * The GuaranteesAccepted container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType
     * $guaranteesAccepted
     * @return self
     */
    public function setGuaranteesAccepted(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType $guaranteesAccepted
    ) {
        $this->guaranteesAccepted = $guaranteesAccepted;

        return $this;
    }


}

