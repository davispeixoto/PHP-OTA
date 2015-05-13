<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

    /**
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @property integer $offerQty
     */
    private $offerQty = null;

    /**
     * The total quantity of passengers accommodated.
     *
     * @property integer $passengerQty
     */
    private $passengerQty = null;

    /**
     * The amount charged for the ancillary product that typically does NOT include
     * taxes.
     *
     * @property float $preTaxAmount
     */
    private $preTaxAmount = null;

    /**
     * The tax amount.
     *
     * @property float $taxAmount
     */
    private $taxAmount = null;

    /**
     * The total amount charged for the ancillary product including any applicable
     * tax(es).Implementer: If there is no cost associated with the offer or redemption
     * miles are being used, set this value to 0.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $fromCurrency
     */
    private $fromCurrency = null;

    /**
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $toCurrency
     */
    private $toCurrency = null;

    /**
     * The rate used for conversion from the source currency to the target currency.
     *
     * @property float $rate
     */
    private $rate = null;

    /**
     * The date of the conversion rate.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * The base neutral unit of construction amount.
     *
     * @property float $baseNUCAmount
     */
    private $baseNUCAmount = null;

    /**
     * Offer pricing reference place holder.
     *
     * @property string $offerRPH
     */
    private $offerRPH = null;

    /**
     * Associated traveler.(s)
     *
     * @property string[] $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType\PricingDetailAType[]
     * $pricingDetail
     */
    private $pricingDetail = null;

    /**
     * Tax(es) that were applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxType[] $taxInfo
     */
    private $taxInfo = null;

    /**
     * Redemption pricing information if all or a portion of this offer may be paid
     * using points.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType
     * $redemptionPoints
     */
    private $redemptionPoints = null;

    /**
     * Rules that applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AppliedRuleType[] $appliedRule
     */
    private $appliedRule = null;

    /**
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     * $pricingQualifier
     */
    private $pricingQualifier = null;

    /**
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ApplyPriceToType $applyTo
     */
    private $applyTo = null;

    /**
     * Gets as offerQty
     *
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @return integer
     */
    public function getOfferQty()
    {
        return $this->offerQty;
    }

    /**
     * Sets a new offerQty
     *
     * The total offer quantity included in this pricing, e.g. 3 seats.
     *
     * @param integer $offerQty
     * @return self
     */
    public function setOfferQty($offerQty)
    {
        $this->offerQty = $offerQty;

        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * The total quantity of passengers accommodated.
     *
     * @return integer
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * The total quantity of passengers accommodated.
     *
     * @param integer $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;

        return $this;
    }

    /**
     * Gets as preTaxAmount
     *
     * The amount charged for the ancillary product that typically does NOT include
     * taxes.
     *
     * @return float
     */
    public function getPreTaxAmount()
    {
        return $this->preTaxAmount;
    }

    /**
     * Sets a new preTaxAmount
     *
     * The amount charged for the ancillary product that typically does NOT include
     * taxes.
     *
     * @param float $preTaxAmount
     * @return self
     */
    public function setPreTaxAmount($preTaxAmount)
    {
        $this->preTaxAmount = $preTaxAmount;

        return $this;
    }

    /**
     * Gets as taxAmount
     *
     * The tax amount.
     *
     * @return float
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Sets a new taxAmount
     *
     * The tax amount.
     *
     * @param float $taxAmount
     * @return self
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Gets as amount
     *
     * The total amount charged for the ancillary product including any applicable
     * tax(es).Implementer: If there is no cost associated with the offer or redemption
     * miles are being used, set this value to 0.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * The total amount charged for the ancillary product including any applicable
     * tax(es).Implementer: If there is no cost associated with the offer or redemption
     * miles are being used, set this value to 0.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as pricingCurrency
     *
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getPricingCurrency()
    {
        return $this->pricingCurrency;
    }

    /**
     * Sets a new pricingCurrency
     *
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $pricingCurrency
     * @return self
     */
    public function setPricingCurrency($pricingCurrency)
    {
        $this->pricingCurrency = $pricingCurrency;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * Sets a new fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $fromCurrency
     * @return self
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * Gets as toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getToCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * Sets a new toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $toCurrency
     * @return self
     */
    public function setToCurrency($toCurrency)
    {
        $this->toCurrency = $toCurrency;

        return $this;
    }

    /**
     * Gets as rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as date
     *
     * The date of the conversion rate.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date of the conversion rate.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @return float
     */
    public function getBaseNUCAmount()
    {
        return $this->baseNUCAmount;
    }

    /**
     * Sets a new baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @param float $baseNUCAmount
     * @return self
     */
    public function setBaseNUCAmount($baseNUCAmount)
    {
        $this->baseNUCAmount = $baseNUCAmount;

        return $this;
    }

    /**
     * Gets as offerRPH
     *
     * Offer pricing reference place holder.
     *
     * @return string
     */
    public function getOfferRPH()
    {
        return $this->offerRPH;
    }

    /**
     * Sets a new offerRPH
     *
     * Offer pricing reference place holder.
     *
     * @param string $offerRPH
     * @return self
     */
    public function setOfferRPH($offerRPH)
    {
        $this->offerRPH = $offerRPH;

        return $this;
    }

    /**
     * Adds as travelerRPH
     *
     * Associated traveler.(s)
     *
     * @return self
     * @param string $travelerRPH
     */
    public function addToTravelerRPH($travelerRPH)
    {
        $this->travelerRPH[] = $travelerRPH;

        return $this;
    }

    /**
     * isset travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRPH($index)
    {
        return isset($this->travelerRPH[$index]);
    }

    /**
     * unset travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRPH($index)
    {
        unset($this->travelerRPH[$index]);
    }

    /**
     * Gets as travelerRPH
     *
     * Associated traveler.(s)
     *
     * @return string[]
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Associated traveler.(s)
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH(array $travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;

        return $this;
    }

    /**
     * Adds as pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType\PricingDetailAType
     * $pricingDetail
     */
    public function addToPricingDetail(
        \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType\PricingDetailAType $pricingDetail
    ) {
        $this->pricingDetail[] = $pricingDetail;

        return $this;
    }

    /**
     * isset pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingDetail($index)
    {
        return isset($this->pricingDetail[$index]);
    }

    /**
     * unset pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingDetail($index)
    {
        unset($this->pricingDetail[$index]);
    }

    /**
     * Gets as pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType\PricingDetailAType[]
     */
    public function getPricingDetail()
    {
        return $this->pricingDetail;
    }

    /**
     * Sets a new pricingDetail
     *
     * Individual offer pricing if multiple offers and/or passengers are accommodated
     * in the offer pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricedOfferType\PricingAType\PricingDetailAType[]
     * $pricingDetail
     * @return self
     */
    public function setPricingDetail(array $pricingDetail)
    {
        $this->pricingDetail = $pricingDetail;

        return $this;
    }

    /**
     * Adds as taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TaxType $taxInfo
     */
    public function addToTaxInfo(\Davispeixoto\OpenTravelAlliance\TaxType $taxInfo)
    {
        $this->taxInfo[] = $taxInfo;

        return $this;
    }

    /**
     * isset taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxInfo($index)
    {
        return isset($this->taxInfo[$index]);
    }

    /**
     * unset taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxInfo($index)
    {
        unset($this->taxInfo[$index]);
    }

    /**
     * Gets as taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxType[]
     */
    public function getTaxInfo()
    {
        return $this->taxInfo;
    }

    /**
     * Sets a new taxInfo
     *
     * Tax(es) that were applied to this pricing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxType[] $taxInfo
     * @return self
     */
    public function setTaxInfo(array $taxInfo)
    {
        $this->taxInfo = $taxInfo;

        return $this;
    }

    /**
     * Gets as redemptionPoints
     *
     * Redemption pricing information if all or a portion of this offer may be paid
     * using points.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType
     */
    public function getRedemptionPoints()
    {
        return $this->redemptionPoints;
    }

    /**
     * Sets a new redemptionPoints
     *
     * Redemption pricing information if all or a portion of this offer may be paid
     * using points.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType $redemptionPoints
     * @return self
     */
    public function setRedemptionPoints(\Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType $redemptionPoints)
    {
        $this->redemptionPoints = $redemptionPoints;

        return $this;
    }

    /**
     * Adds as appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AppliedRuleType $appliedRule
     */
    public function addToAppliedRule(\Davispeixoto\OpenTravelAlliance\AppliedRuleType $appliedRule)
    {
        $this->appliedRule[] = $appliedRule;

        return $this;
    }

    /**
     * isset appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAppliedRule($index)
    {
        return isset($this->appliedRule[$index]);
    }

    /**
     * unset appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAppliedRule($index)
    {
        unset($this->appliedRule[$index]);
    }

    /**
     * Gets as appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AppliedRuleType[]
     */
    public function getAppliedRule()
    {
        return $this->appliedRule;
    }

    /**
     * Sets a new appliedRule
     *
     * Rules that applied to this pricing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AppliedRuleType[] $appliedRule
     * @return self
     */
    public function setAppliedRule(array $appliedRule)
    {
        $this->appliedRule = $appliedRule;

        return $this;
    }

    /**
     * Adds as pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType
     * $pricingQualifier
     */
    public function addToPricingQualifier(\Davispeixoto\OpenTravelAlliance\AirPricingQualifierType $pricingQualifier)
    {
        $this->pricingQualifier[] = $pricingQualifier;

        return $this;
    }

    /**
     * isset pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingQualifier($index)
    {
        return isset($this->pricingQualifier[$index]);
    }

    /**
     * unset pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingQualifier($index)
    {
        unset($this->pricingQualifier[$index]);
    }

    /**
     * Gets as pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     */
    public function getPricingQualifier()
    {
        return $this->pricingQualifier;
    }

    /**
     * Sets a new pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     * $pricingQualifier
     * @return self
     */
    public function setPricingQualifier(array $pricingQualifier)
    {
        $this->pricingQualifier = $pricingQualifier;

        return $this;
    }

    /**
     * Gets as applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ApplyPriceToType
     */
    public function getApplyTo()
    {
        return $this->applyTo;
    }

    /**
     * Sets a new applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ApplyPriceToType $applyTo
     * @return self
     */
    public function setApplyTo(\Davispeixoto\OpenTravelAlliance\ApplyPriceToType $applyTo)
    {
        $this->applyTo = $applyTo;

        return $this;
    }


}

