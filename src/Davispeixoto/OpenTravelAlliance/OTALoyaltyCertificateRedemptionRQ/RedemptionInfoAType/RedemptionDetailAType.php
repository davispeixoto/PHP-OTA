<?php

namespace Davispeixoto\OpenTravelAlliance\OTALoyaltyCertificateRedemptionRQ\RedemptionInfoAType;

/**
 * Class representing RedemptionDetailAType
 */
class RedemptionDetailAType
{

    /**
     * The loyalty redemption certificate identifier.
     *
     * @property string $certificateNumber
     */
    private $certificateNumber = null;

    /**
     * Unique identifier of the member in the program.
     *
     * @property string $memberNumber
     */
    private $memberNumber = null;

    /**
     * This identifies the loyalty program.
     *
     * @property string $programName
     */
    private $programName = null;

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
     * Gets as certificateNumber
     *
     * The loyalty redemption certificate identifier.
     *
     * @return string
     */
    public function getCertificateNumber()
    {
        return $this->certificateNumber;
    }

    /**
     * Sets a new certificateNumber
     *
     * The loyalty redemption certificate identifier.
     *
     * @param string $certificateNumber
     * @return self
     */
    public function setCertificateNumber($certificateNumber)
    {
        $this->certificateNumber = $certificateNumber;

        return $this;
    }

    /**
     * Gets as memberNumber
     *
     * Unique identifier of the member in the program.
     *
     * @return string
     */
    public function getMemberNumber()
    {
        return $this->memberNumber;
    }

    /**
     * Sets a new memberNumber
     *
     * Unique identifier of the member in the program.
     *
     * @param string $memberNumber
     * @return self
     */
    public function setMemberNumber($memberNumber)
    {
        $this->memberNumber = $memberNumber;

        return $this;
    }

    /**
     * Gets as programName
     *
     * This identifies the loyalty program.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * This identifies the loyalty program.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;

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


}

