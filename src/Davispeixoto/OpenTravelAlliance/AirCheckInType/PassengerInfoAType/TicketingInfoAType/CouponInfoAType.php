<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType\TicketingInfoAType;

/**
 * Class representing CouponInfoAType
 */
class CouponInfoAType
{

    /**
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @property string[] $flightRPH
     */
    private $flightRPH = null;

    /**
     * The coupon number.
     *
     * @property integer $couponNumber
     */
    private $couponNumber = null;

    /**
     * The number calculated by the check digit routine.
     *
     * @property string $documentNumberCheckDigit
     */
    private $documentNumberCheckDigit = null;

    /**
     * Indicates whether passenger is using a paper ticket for this segment. If true,
     * passenger is using a paper ticket to check-in for this segment. If false or
     * unpopulated, the passenger is using an electronic ticket for this segment.
     *
     * @property boolean $paperTicketInd
     */
    private $paperTicketInd = null;

    /**
     * Coupon number, relative to total number of coupons (e.g., 10 of 12)
     *
     * @property string $couponReference
     */
    private $couponReference = null;

    /**
     * Fare basis code of the price of this segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Adds as flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @return self
     * @param string $flightRPH
     */
    public function addToFlightRPH($flightRPH)
    {
        $this->flightRPH[] = $flightRPH;

        return $this;
    }

    /**
     * isset flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightRPH($index)
    {
        return isset($this->flightRPH[$index]);
    }

    /**
     * unset flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightRPH($index)
    {
        unset($this->flightRPH[$index]);
    }

    /**
     * Gets as flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @return string[]
     */
    public function getFlightRPH()
    {
        return $this->flightRPH;
    }

    /**
     * Sets a new flightRPH
     *
     * A reference place holder used as a pointer to link back to the flight.
     *
     * @param string $flightRPH
     * @return self
     */
    public function setFlightRPH(array $flightRPH)
    {
        $this->flightRPH = $flightRPH;

        return $this;
    }

    /**
     * Gets as couponNumber
     *
     * The coupon number.
     *
     * @return integer
     */
    public function getCouponNumber()
    {
        return $this->couponNumber;
    }

    /**
     * Sets a new couponNumber
     *
     * The coupon number.
     *
     * @param integer $couponNumber
     * @return self
     */
    public function setCouponNumber($couponNumber)
    {
        $this->couponNumber = $couponNumber;

        return $this;
    }

    /**
     * Gets as documentNumberCheckDigit
     *
     * The number calculated by the check digit routine.
     *
     * @return string
     */
    public function getDocumentNumberCheckDigit()
    {
        return $this->documentNumberCheckDigit;
    }

    /**
     * Sets a new documentNumberCheckDigit
     *
     * The number calculated by the check digit routine.
     *
     * @param string $documentNumberCheckDigit
     * @return self
     */
    public function setDocumentNumberCheckDigit($documentNumberCheckDigit)
    {
        $this->documentNumberCheckDigit = $documentNumberCheckDigit;

        return $this;
    }

    /**
     * Gets as paperTicketInd
     *
     * Indicates whether passenger is using a paper ticket for this segment. If true,
     * passenger is using a paper ticket to check-in for this segment. If false or
     * unpopulated, the passenger is using an electronic ticket for this segment.
     *
     * @return boolean
     */
    public function getPaperTicketInd()
    {
        return $this->paperTicketInd;
    }

    /**
     * Sets a new paperTicketInd
     *
     * Indicates whether passenger is using a paper ticket for this segment. If true,
     * passenger is using a paper ticket to check-in for this segment. If false or
     * unpopulated, the passenger is using an electronic ticket for this segment.
     *
     * @param boolean $paperTicketInd
     * @return self
     */
    public function setPaperTicketInd($paperTicketInd)
    {
        $this->paperTicketInd = $paperTicketInd;

        return $this;
    }

    /**
     * Gets as couponReference
     *
     * Coupon number, relative to total number of coupons (e.g., 10 of 12)
     *
     * @return string
     */
    public function getCouponReference()
    {
        return $this->couponReference;
    }

    /**
     * Sets a new couponReference
     *
     * Coupon number, relative to total number of coupons (e.g., 10 of 12)
     *
     * @param string $couponReference
     * @return self
     */
    public function setCouponReference($couponReference)
    {
        $this->couponReference = $couponReference;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code of the price of this segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareBasisCodeType
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code of the price of this segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(\Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }


}

