<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{

    /**
     * GuaranteeAccepted MUST specify the details of the guarantee.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     */
    private $guaranteeAccepted = null;

    /**
     * Gets as guaranteeAccepted
     *
     * GuaranteeAccepted MUST specify the details of the guarantee.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * GuaranteeAccepted MUST specify the details of the guarantee.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType
     * $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
    ) {
        $this->guaranteeAccepted = $guaranteeAccepted;

        return $this;
    }


}

