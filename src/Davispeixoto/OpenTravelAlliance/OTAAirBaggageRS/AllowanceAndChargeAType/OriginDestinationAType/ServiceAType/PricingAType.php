<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

    /**
     * The amount charged for the service that does NOT include taxes.
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
     * The total amount charged for the service including any applicable tax(es).
     *
     * NOTE: If there is no cost associated with the service or redemption miles are
     * being used, set this value to 0.
     *
     * @property float $amount
     */
    private $amount = null;

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
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Tax(es) that were applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxType[] $taxInfo
     */
    private $taxInfo = null;

    /**
     * Rules that applied to this pricing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AppliedRuleType[] $appliedRule
     */
    private $appliedRule = null;

    /**
     * Additional information that influenced the pricing, including restrictions,
     * promotions, tax exemptions, private and negotiated fares.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType
     * $pricingQualifier
     */
    private $pricingQualifier = null;

    /**
     * Redemption pricing information if all or a portion of this service may be paid
     * using points.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirRedemptionMilesType
     * $redemptionPoints
     */
    private $redemptionPoints = null;

    /**
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\ApplyToAType
     * $applyTo
     */
    private $applyTo = null;

    /**
     * Gets as preTaxAmount
     *
     * The amount charged for the service that does NOT include taxes.
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
     * The amount charged for the service that does NOT include taxes.
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
     * The total amount charged for the service including any applicable tax(es).
     *
     * NOTE: If there is no cost associated with the service or redemption miles are
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
     * The total amount charged for the service including any applicable tax(es).
     *
     * NOTE: If there is no cost associated with the service or redemption miles are
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
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
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
     * Gets as pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions, tax exemptions, private and negotiated fares.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType
     */
    public function getPricingQualifier()
    {
        return $this->pricingQualifier;
    }

    /**
     * Sets a new pricingQualifier
     *
     * Additional information that influenced the pricing, including restrictions,
     * promotions, tax exemptions, private and negotiated fares.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType
     * $pricingQualifier
     * @return self
     */
    public function setPricingQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\PricingQualifierAType $pricingQualifier
    ) {
        $this->pricingQualifier = $pricingQualifier;

        return $this;
    }

    /**
     * Gets as redemptionPoints
     *
     * Redemption pricing information if all or a portion of this service may be paid
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
     * Redemption pricing information if all or a portion of this service may be paid
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
     * Gets as applyTo
     *
     * References to unique ID(s) set elsewhere in this message to associate this
     * pricing information with.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\ApplyToAType
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\ApplyToAType
     * $applyTo
     * @return self
     */
    public function setApplyTo(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType\PricingAType\ApplyToAType $applyTo
    ) {
        $this->applyTo = $applyTo;

        return $this;
    }


}

