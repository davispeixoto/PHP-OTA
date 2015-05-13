<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType;

/**
 * Class representing GuaranteeAcceptedAType
 */
class GuaranteeAcceptedAType
{

    /**
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     * $paymentCard
     */
    private $paymentCard = null;

    /**
     * Gets as paymentCard
     *
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * PaymentCard MUST provide the details of the payment card for this acceptable
     * form of guarantee.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType
     * $paymentCard
     * @return self
     */
    public function setPaymentCard(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\RoomStaysAType\RoomStayAType\GuaranteeAType\GuaranteesAcceptedAType\GuaranteeAcceptedAType\PaymentCardAType $paymentCard
    ) {
        $this->paymentCard = $paymentCard;

        return $this;
    }


}

