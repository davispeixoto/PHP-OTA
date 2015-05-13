<?php

namespace Davispeixoto\OpenTravelAlliance\FareType;

/**
 * Class representing ExchangeInfoAType
 */
class ExchangeInfoAType
{

    /**
     * The new ticket/document number.
     *
     * @property string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Optional information on coupon numbers being exchanged.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\CouponInfoAType[]
     * $couponInfo
     */
    private $couponInfo = null;

    /**
     * The original origin and destination for exchanged ticket/documents.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\OriginalOriginDestinationAType
     * $originalOriginDestination
     */
    private $originalOriginDestination = null;

    /**
     * Gets as ticketDocumentNbr
     *
     * The new ticket/document number.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * The new ticket/document number.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;

        return $this;
    }

    /**
     * Adds as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\CouponInfoAType
     * $couponInfo
     */
    public function addToCouponInfo(
        \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\CouponInfoAType $couponInfo
    ) {
        $this->couponInfo[] = $couponInfo;

        return $this;
    }

    /**
     * isset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCouponInfo($index)
    {
        return isset($this->couponInfo[$index]);
    }

    /**
     * unset couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCouponInfo($index)
    {
        unset($this->couponInfo[$index]);
    }

    /**
     * Gets as couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\CouponInfoAType[]
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets a new couponInfo
     *
     * Optional information on coupon numbers being exchanged.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\CouponInfoAType[]
     * $couponInfo
     * @return self
     */
    public function setCouponInfo(array $couponInfo)
    {
        $this->couponInfo = $couponInfo;

        return $this;
    }

    /**
     * Gets as originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\OriginalOriginDestinationAType
     */
    public function getOriginalOriginDestination()
    {
        return $this->originalOriginDestination;
    }

    /**
     * Sets a new originalOriginDestination
     *
     * The original origin and destination for exchanged ticket/documents.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\OriginalOriginDestinationAType
     * $originalOriginDestination
     * @return self
     */
    public function setOriginalOriginDestination(
        \Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType\OriginalOriginDestinationAType $originalOriginDestination
    ) {
        $this->originalOriginDestination = $originalOriginDestination;

        return $this;
    }


}

