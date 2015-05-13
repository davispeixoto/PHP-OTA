<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType;

/**
 * Class representing GuaranteeAcceptedAType
 */
class GuaranteeAcceptedAType
{

    /**
     * PaymentCard MUST specify the details of the debit or credit card used to
     * guarantee the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     * $paymentCard
     */
    private $paymentCard = null;

    /**
     * Gets as paymentCard
     *
     * PaymentCard MUST specify the details of the debit or credit card used to
     * guarantee the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * PaymentCard MUST specify the details of the debit or credit card used to
     * guarantee the reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     * $paymentCard
     * @return self
     */
    public function setPaymentCard(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType $paymentCard
    ) {
        $this->paymentCard = $paymentCard;

        return $this;
    }


}

