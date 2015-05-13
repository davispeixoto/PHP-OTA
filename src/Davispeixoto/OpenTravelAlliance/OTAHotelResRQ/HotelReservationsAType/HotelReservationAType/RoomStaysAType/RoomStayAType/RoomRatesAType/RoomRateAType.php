<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType;

/**
 * Class representing RoomRateAType
 */
class RoomRateAType
{

    /**
     * EffectiveDate MUST indicate the starting date for this RoomRate.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * ExpireDate MUST indicate the ending date for this RoomRate.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * The ExpireDateExclusiveIndicator MUST be set to true when the ExpireDate is the
     * first day after the applicable period (e.g. when expire date is Oct 15 the last
     * date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * RoomTypeCode MUST specify the system room type code requested for this booking,
     * ex: A1K, A1Q etc.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * The RatePlanCode MUST identify the rate plan code requested for this booking.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * The PromotionCode MUST specify the identifier used by the host to link directly
     * with a specific named advertising campaign. By including the code, the client is
     * able to gain access to special offers which MAY have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * The Rates container allows for future expansion of the message. Rates MAY be
     * sent for informational purposes identifying the rate that the requestor is
     * expecting to be booked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType
     * $rates
     */
    private $rates = null;

    /**
     * Gets as effectiveDate
     *
     * EffectiveDate MUST indicate the starting date for this RoomRate.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * EffectiveDate MUST indicate the starting date for this RoomRate.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * ExpireDate MUST indicate the ending date for this RoomRate.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * ExpireDate MUST indicate the ending date for this RoomRate.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveIndicator
     *
     * The ExpireDateExclusiveIndicator MUST be set to true when the ExpireDate is the
     * first day after the applicable period (e.g. when expire date is Oct 15 the last
     * date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * The ExpireDateExclusiveIndicator MUST be set to true when the ExpireDate is the
     * first day after the applicable period (e.g. when expire date is Oct 15 the last
     * date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;

        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * RoomTypeCode MUST specify the system room type code requested for this booking,
     * ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * RoomTypeCode MUST specify the system room type code requested for this booking,
     * ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * The RatePlanCode MUST identify the rate plan code requested for this booking.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * The RatePlanCode MUST identify the rate plan code requested for this booking.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * The PromotionCode MUST specify the identifier used by the host to link directly
     * with a specific named advertising campaign. By including the code, the client is
     * able to gain access to special offers which MAY have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * The PromotionCode MUST specify the identifier used by the host to link directly
     * with a specific named advertising campaign. By including the code, the client is
     * able to gain access to special offers which MAY have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as rates
     *
     * The Rates container allows for future expansion of the message. Rates MAY be
     * sent for informational purposes identifying the rate that the requestor is
     * expecting to be booked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * The Rates container allows for future expansion of the message. Rates MAY be
     * sent for informational purposes identifying the rate that the requestor is
     * expecting to be booked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType
     * $rates
     * @return self
     */
    public function setRates(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomRatesAType\RoomRateAType\RatesAType $rates
    ) {
        $this->rates = $rates;

        return $this;
    }


}

