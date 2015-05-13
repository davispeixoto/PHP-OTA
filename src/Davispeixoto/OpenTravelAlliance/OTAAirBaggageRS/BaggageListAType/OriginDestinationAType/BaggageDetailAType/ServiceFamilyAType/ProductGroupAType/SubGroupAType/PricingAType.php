<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

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
     * tax(es).
     *
     * NOTE: If there is no cost associated with the offer or redemption miles are
     * being used, set this value to 0.
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
     * Marketing name for pricing type, e.g. "Filed Price".
     *
     * @property string $displayLabel
     */
    private $displayLabel = null;

    /**
     * Rules that applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AppliedRuleType[] $appliedRule
     */
    private $appliedRule = null;

    /**
     * Service or bag specific fee calculation information or warnings.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TextDescriptionType[]
     * $calculationInfo
     */
    private $calculationInfo = null;

    /**
     * Additional information that influenced the pricing, including restrictions,
     * promotions and tax exemptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType[]
     * $pricingQualifier
     */
    private $pricingQualifier = null;

    /**
     * Redemption pricing information if all or a portion of this offer may be paid
     * using points.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType
     * $redemptionPoints
     */
    private $redemptionPoints = null;

    /**
     * Tax(es) that were applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxType[] $taxInfo
     */
    private $taxInfo = null;

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
     * tax(es).
     *
     * NOTE: If there is no cost associated with the offer or redemption miles are
     * being used, set this value to 0.
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
     * tax(es).
     *
     * NOTE: If there is no cost associated with the offer or redemption miles are
     * being used, set this value to 0.
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
     * Gets as displayLabel
     *
     * Marketing name for pricing type, e.g. "Filed Price".
     *
     * @return string
     */
    public function getDisplayLabel()
    {
        return $this->displayLabel;
    }

    /**
     * Sets a new displayLabel
     *
     * Marketing name for pricing type, e.g. "Filed Price".
     *
     * @param string $displayLabel
     * @return self
     */
    public function setDisplayLabel($displayLabel)
    {
        $this->displayLabel = $displayLabel;

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
     * Adds as calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType $calculationInfo
     */
    public function addToCalculationInfo(\Davispeixoto\OpenTravelAlliance\TextDescriptionType $calculationInfo)
    {
        $this->calculationInfo[] = $calculationInfo;

        return $this;
    }

    /**
     * isset calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCalculationInfo($index)
    {
        return isset($this->calculationInfo[$index]);
    }

    /**
     * unset calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCalculationInfo($index)
    {
        unset($this->calculationInfo[$index]);
    }

    /**
     * Gets as calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TextDescriptionType[]
     */
    public function getCalculationInfo()
    {
        return $this->calculationInfo;
    }

    /**
     * Sets a new calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TextDescriptionType[] $calculationInfo
     * @return self
     */
    public function setCalculationInfo(array $calculationInfo)
    {
        $this->calculationInfo = $calculationInfo;

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


}

