<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{

    /**
     * GuaranteeAccepted MUST specify the guarantee information for this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     */
    private $guaranteeAccepted = null;

    /**
     * Gets as guaranteeAccepted
     *
     * GuaranteeAccepted MUST specify the guarantee information for this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * GuaranteeAccepted MUST specify the guarantee information for this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
    ) {
        $this->guaranteeAccepted = $guaranteeAccepted;

        return $this;
    }


}

