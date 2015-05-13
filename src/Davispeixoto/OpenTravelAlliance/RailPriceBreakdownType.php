<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPriceBreakdownType
 *
 * Details about the rail price, including basic fare, adjustments, discounts,
 * ancillary charges, terms and conditions, fees and taxes.
 * XSD Type: RailPriceBreakdownType
 */
class RailPriceBreakdownType extends RailFareType
{

    /**
     * Fare adjustments based on accommodation type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\AccommodationAdjustmentAType
     * $accommodationAdjustment
     */
    private $accommodationAdjustment = null;

    /**
     * Other fare qualifier adjustments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     * $fareQualifierAdjustment
     */
    private $fareQualifierAdjustment = null;

    /**
     * Fare promotions and other qualified discounts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\DiscountClassAType[]
     * $discountClass
     */
    private $discountClass = null;

    /**
     * Ancillary product and service charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $ancillaryCharge
     */
    private $ancillaryCharge = null;

    /**
     * Applicable Fee code and associated amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $fee
     */
    private $fee = null;

    /**
     * Applicable tax code and associated amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $tax
     */
    private $tax = null;

    /**
     * Gets as accommodationAdjustment
     *
     * Fare adjustments based on accommodation type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\AccommodationAdjustmentAType
     */
    public function getAccommodationAdjustment()
    {
        return $this->accommodationAdjustment;
    }

    /**
     * Sets a new accommodationAdjustment
     *
     * Fare adjustments based on accommodation type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\AccommodationAdjustmentAType
     * $accommodationAdjustment
     * @return self
     */
    public function setAccommodationAdjustment(
        \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\AccommodationAdjustmentAType $accommodationAdjustment
    ) {
        $this->accommodationAdjustment = $accommodationAdjustment;

        return $this;
    }

    /**
     * Adds as fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType $fareQualifierAdjustment
     */
    public function addToFareQualifierAdjustment(
        \Davispeixoto\OpenTravelAlliance\CodeAmountType $fareQualifierAdjustment
    ) {
        $this->fareQualifierAdjustment[] = $fareQualifierAdjustment;

        return $this;
    }

    /**
     * isset fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareQualifierAdjustment($index)
    {
        return isset($this->fareQualifierAdjustment[$index]);
    }

    /**
     * unset fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareQualifierAdjustment($index)
    {
        unset($this->fareQualifierAdjustment[$index]);
    }

    /**
     * Gets as fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     */
    public function getFareQualifierAdjustment()
    {
        return $this->fareQualifierAdjustment;
    }

    /**
     * Sets a new fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     * $fareQualifierAdjustment
     * @return self
     */
    public function setFareQualifierAdjustment(array $fareQualifierAdjustment)
    {
        $this->fareQualifierAdjustment = $fareQualifierAdjustment;

        return $this;
    }

    /**
     * Adds as discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\DiscountClassAType
     * $discountClass
     */
    public function addToDiscountClass(
        \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\DiscountClassAType $discountClass
    ) {
        $this->discountClass[] = $discountClass;

        return $this;
    }

    /**
     * isset discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscountClass($index)
    {
        return isset($this->discountClass[$index]);
    }

    /**
     * unset discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscountClass($index)
    {
        unset($this->discountClass[$index]);
    }

    /**
     * Gets as discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\DiscountClassAType[]
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    /**
     * Sets a new discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPriceBreakdownType\DiscountClassAType[]
     * $discountClass
     * @return self
     */
    public function setDiscountClass(array $discountClass)
    {
        $this->discountClass = $discountClass;

        return $this;
    }

    /**
     * Adds as ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType $ancillaryCharge
     */
    public function addToAncillaryCharge(\Davispeixoto\OpenTravelAlliance\CodeAmountType $ancillaryCharge)
    {
        $this->ancillaryCharge[] = $ancillaryCharge;

        return $this;
    }

    /**
     * isset ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAncillaryCharge($index)
    {
        return isset($this->ancillaryCharge[$index]);
    }

    /**
     * unset ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAncillaryCharge($index)
    {
        unset($this->ancillaryCharge[$index]);
    }

    /**
     * Gets as ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     */
    public function getAncillaryCharge()
    {
        return $this->ancillaryCharge;
    }

    /**
     * Sets a new ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $ancillaryCharge
     * @return self
     */
    public function setAncillaryCharge(array $ancillaryCharge)
    {
        $this->ancillaryCharge = $ancillaryCharge;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Applicable Fee code and associated amount.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\CodeAmountType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Applicable Fee code and associated amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * Adds as tax
     *
     * Applicable tax code and associated amount.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\CodeAmountType $tax)
    {
        $this->tax[] = $tax;

        return $this;
    }

    /**
     * isset tax
     *
     * Applicable tax code and associated amount.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * Applicable tax code and associated amount.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * Applicable tax code and associated amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeAmountType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Applicable tax code and associated amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeAmountType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }


}

