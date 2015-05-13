<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomRateType
 *
 * Detailed information for an available room rate.
 * XSD Type: RoomRateType
 */
class RoomRateType
{

    /**
     * EffectiveDate MUST specify the starting date for this room rate.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * ExpireDate MUST specify the expiry date for this room rate.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * The ExpireDateExlusiveIndicator is used to indicate whether or not the expire
     * date is excluded from the room rate. The ExpireDateExclusiveIndicator MUST be
     * set to true when the ExpireDate is the first day after the applicable period
     * (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * RoomTypeCode MUST specify the specific system room type code for this room rate
     * (e.g. A1K, A1Q).
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * RatePlanCode MUST identify the rate plan for this room rate.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * PromotionCode MAY identify host to link directly with a specific named
     * advertising campaign. By including the code, the client is able to gain access
     * to special offers which MAY have been created for a specifically targeted group
     * via a CRM system or for a wider advertising campaign using Television or press
     * adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * The Rates container allows for future expansion of the message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RatesType $rates
     */
    private $rates = null;

    /**
     * Gets as effectiveDate
     *
     * EffectiveDate MUST specify the starting date for this room rate.
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
     * EffectiveDate MUST specify the starting date for this room rate.
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
     * ExpireDate MUST specify the expiry date for this room rate.
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
     * ExpireDate MUST specify the expiry date for this room rate.
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
     * The ExpireDateExlusiveIndicator is used to indicate whether or not the expire
     * date is excluded from the room rate. The ExpireDateExclusiveIndicator MUST be
     * set to true when the ExpireDate is the first day after the applicable period
     * (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
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
     * The ExpireDateExlusiveIndicator is used to indicate whether or not the expire
     * date is excluded from the room rate. The ExpireDateExclusiveIndicator MUST be
     * set to true when the ExpireDate is the first day after the applicable period
     * (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
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
     * RoomTypeCode MUST specify the specific system room type code for this room rate
     * (e.g. A1K, A1Q).
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
     * RoomTypeCode MUST specify the specific system room type code for this room rate
     * (e.g. A1K, A1Q).
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
     * RatePlanCode MUST identify the rate plan for this room rate.
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
     * RatePlanCode MUST identify the rate plan for this room rate.
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
     * PromotionCode MAY identify host to link directly with a specific named
     * advertising campaign. By including the code, the client is able to gain access
     * to special offers which MAY have been created for a specifically targeted group
     * via a CRM system or for a wider advertising campaign using Television or press
     * adverts.
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
     * PromotionCode MAY identify host to link directly with a specific named
     * advertising campaign. By including the code, the client is able to gain access
     * to special offers which MAY have been created for a specifically targeted group
     * via a CRM system or for a wider advertising campaign using Television or press
     * adverts.
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
     * The Rates container allows for future expansion of the message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RatesType
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * The Rates container allows for future expansion of the message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatesType $rates
     * @return self
     */
    public function setRates(\Davispeixoto\OpenTravelAlliance\RatesType $rates)
    {
        $this->rates = $rates;

        return $this;
    }


}

