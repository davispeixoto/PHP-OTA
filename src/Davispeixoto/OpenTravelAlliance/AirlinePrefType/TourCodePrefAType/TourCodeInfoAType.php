<?php

namespace Davispeixoto\OpenTravelAlliance\AirlinePrefType\TourCodePrefAType;

/**
 * Class representing TourCodeInfoAType
 */
class TourCodeInfoAType
{

    /**
     * Type of tour (e.g., IT=inclusive Tour, BT= Bulk Tour, NR=Net Remit).
     *
     * @property string $tourTypeCode
     */
    private $tourTypeCode = null;

    /**
     * Last digit of the year of the tour code creation.
     *
     * @property integer $yearNum
     */
    private $yearNum = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @property string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * Identifier assigned to a tour group by the airline.
     *
     * @property string $partyID
     */
    private $partyID = null;

    /**
     * Gets as tourTypeCode
     *
     * Type of tour (e.g., IT=inclusive Tour, BT= Bulk Tour, NR=Net Remit).
     *
     * @return string
     */
    public function getTourTypeCode()
    {
        return $this->tourTypeCode;
    }

    /**
     * Sets a new tourTypeCode
     *
     * Type of tour (e.g., IT=inclusive Tour, BT= Bulk Tour, NR=Net Remit).
     *
     * @param string $tourTypeCode
     * @return self
     */
    public function setTourTypeCode($tourTypeCode)
    {
        $this->tourTypeCode = $tourTypeCode;

        return $this;
    }

    /**
     * Gets as yearNum
     *
     * Last digit of the year of the tour code creation.
     *
     * @return integer
     */
    public function getYearNum()
    {
        return $this->yearNum;
    }

    /**
     * Sets a new yearNum
     *
     * Last digit of the year of the tour code creation.
     *
     * @param integer $yearNum
     * @return self
     */
    public function setYearNum($yearNum)
    {
        $this->yearNum = $yearNum;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
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
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
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
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;

        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;

        return $this;
    }

    /**
     * Gets as partyID
     *
     * Identifier assigned to a tour group by the airline.
     *
     * @return string
     */
    public function getPartyID()
    {
        return $this->partyID;
    }

    /**
     * Sets a new partyID
     *
     * Identifier assigned to a tour group by the airline.
     *
     * @param string $partyID
     * @return self
     */
    public function setPartyID($partyID)
    {
        $this->partyID = $partyID;

        return $this;
    }


}

