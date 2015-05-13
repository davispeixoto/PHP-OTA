<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgResponseType
 *
 * Contains properties common to component response types.
 * XSD Type: DynamicPkgResponseType
 */
class DynamicPkgResponseType
{

    /**
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Promotion code reference placeholder.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType\PromotionCodeAType[]
     * $promotionCode
     */
    private $promotionCode = null;

    /**
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Gets as sequenceNumber
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference number used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Adds as promotionCode
     *
     * Promotion code reference placeholder.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType\PromotionCodeAType
     * $promotionCode
     */
    public function addToPromotionCode(
        \Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType\PromotionCodeAType $promotionCode
    ) {
        $this->promotionCode[] = $promotionCode;

        return $this;
    }

    /**
     * isset promotionCode
     *
     * Promotion code reference placeholder.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionCode($index)
    {
        return isset($this->promotionCode[$index]);
    }

    /**
     * unset promotionCode
     *
     * Promotion code reference placeholder.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionCode($index)
    {
        unset($this->promotionCode[$index]);
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code reference placeholder.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType\PromotionCodeAType[]
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code reference placeholder.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\DynamicPkgResponseType\PromotionCodeAType[]
     * $promotionCode
     * @return self
     */
    public function setPromotionCode(array $promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one
     * in which warnings are generated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }


}

