<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TaxType
 *
 * Applicable tax element. This element allows for both percentages and flat
 * amounts. If one field is used, the other should be zero since logically, taxes
 * should be calculated in only one of the two ways.
 * XSD Type: TaxType
 */
class TaxType
{

    /**
     * Used to indicate if the amount is inclusive or exclusive of other charges, such
     * as taxes, or is cumulative (amounts have been added to each other).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to
     * OpenTravel Code List Fee Tax Type (FTT).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * A monetary amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Currency code.Implementer: This is an ISO 4217 (3) alpha character code that
     * specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Decimal places for currency code.Implementer: This is an ISO 4217 standard
     * "minor unit" for the number of decimal places for a particular currency.
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent
     * must be a zero value).
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer
     * to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $chargeUnit
     */
    private $chargeUnit = null;

    /**
     * This is the timeframe used to apply the charge during the course of the
     * reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @property string $chargeFrequency
     */
    private $chargeFrequency = null;

    /**
     * Number of units permitted before charges are applied (e.g., more than 4
     * persons).
     *
     * @property integer $chargeUnitExempt
     */
    private $chargeUnitExempt = null;

    /**
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @property integer $chargeFrequencyExempt
     */
    private $chargeFrequencyExempt = null;

    /**
     * Maximum number of Units for which the charge will be applied (e.g., waive
     * charges above 10 rooms).
     *
     * @property integer $maxChargeUnitApplies
     */
    private $maxChargeUnitApplies = null;

    /**
     * Maximum number of times the charge will be applied (e.g. waive charges above 30
     * nights).
     *
     * @property integer $maxChargeFrequencyApplies
     */
    private $maxChargeFrequencyApplies = null;

    /**
     * A number assigned by the responding system to designate the order of this tax
     * among multiple taxes.
     *
     * @property integer $sequenceNbr
     */
    private $sequenceNbr = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * Text description of the taxes in a given language.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $taxDescription
     */
    private $taxDescription = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as type
     *
     * Used to indicate if the amount is inclusive or exclusive of other charges, such
     * as taxes, or is cumulative (amounts have been added to each other).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to indicate if the amount is inclusive or exclusive of other charges, such
     * as taxes, or is cumulative (amounts have been added to each other).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as code
     *
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to
     * OpenTravel Code List Fee Tax Type (FTT).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to
     * OpenTravel Code List Fee Tax Type (FTT).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
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
     * A monetary amount.
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
     * Gets as currencyCode
     *
     * Currency code.Implementer: This is an ISO 4217 (3) alpha character code that
     * specifies a monetary unit.
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
     * Currency code.Implementer: This is an ISO 4217 (3) alpha character code that
     * specifies a monetary unit.
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
     * Decimal places for currency code.Implementer: This is an ISO 4217 standard
     * "minor unit" for the number of decimal places for a particular currency.
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
     * Decimal places for currency code.Implementer: This is an ISO 4217 standard
     * "minor unit" for the number of decimal places for a particular currency.
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
     * Gets as percent
     *
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent
     * must be a zero value).
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent
     * must be a zero value).
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
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
     * Indicates the starting date.
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
     * Indicates the ending date.
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
     * Indicates the ending date.
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
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer
     * to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeUnit()
    {
        return $this->chargeUnit;
    }

    /**
     * Sets a new chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer
     * to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeUnit
     * @return self
     */
    public function setChargeUnit($chargeUnit)
    {
        $this->chargeUnit = $chargeUnit;

        return $this;
    }

    /**
     * Gets as chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the
     * reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @return string
     */
    public function getChargeFrequency()
    {
        return $this->chargeFrequency;
    }

    /**
     * Sets a new chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the
     * reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge
     * Type (CHG).
     *
     * @param string $chargeFrequency
     * @return self
     */
    public function setChargeFrequency($chargeFrequency)
    {
        $this->chargeFrequency = $chargeFrequency;

        return $this;
    }

    /**
     * Gets as chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4
     * persons).
     *
     * @return integer
     */
    public function getChargeUnitExempt()
    {
        return $this->chargeUnitExempt;
    }

    /**
     * Sets a new chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4
     * persons).
     *
     * @param integer $chargeUnitExempt
     * @return self
     */
    public function setChargeUnitExempt($chargeUnitExempt)
    {
        $this->chargeUnitExempt = $chargeUnitExempt;

        return $this;
    }

    /**
     * Gets as chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @return integer
     */
    public function getChargeFrequencyExempt()
    {
        return $this->chargeFrequencyExempt;
    }

    /**
     * Sets a new chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @param integer $chargeFrequencyExempt
     * @return self
     */
    public function setChargeFrequencyExempt($chargeFrequencyExempt)
    {
        $this->chargeFrequencyExempt = $chargeFrequencyExempt;

        return $this;
    }

    /**
     * Gets as maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive
     * charges above 10 rooms).
     *
     * @return integer
     */
    public function getMaxChargeUnitApplies()
    {
        return $this->maxChargeUnitApplies;
    }

    /**
     * Sets a new maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive
     * charges above 10 rooms).
     *
     * @param integer $maxChargeUnitApplies
     * @return self
     */
    public function setMaxChargeUnitApplies($maxChargeUnitApplies)
    {
        $this->maxChargeUnitApplies = $maxChargeUnitApplies;

        return $this;
    }

    /**
     * Gets as maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30
     * nights).
     *
     * @return integer
     */
    public function getMaxChargeFrequencyApplies()
    {
        return $this->maxChargeFrequencyApplies;
    }

    /**
     * Sets a new maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30
     * nights).
     *
     * @param integer $maxChargeFrequencyApplies
     * @return self
     */
    public function setMaxChargeFrequencyApplies($maxChargeFrequencyApplies)
    {
        $this->maxChargeFrequencyApplies = $maxChargeFrequencyApplies;

        return $this;
    }

    /**
     * Gets as sequenceNbr
     *
     * A number assigned by the responding system to designate the order of this tax
     * among multiple taxes.
     *
     * @return integer
     */
    public function getSequenceNbr()
    {
        return $this->sequenceNbr;
    }

    /**
     * Sets a new sequenceNbr
     *
     * A number assigned by the responding system to designate the order of this tax
     * among multiple taxes.
     *
     * @param integer $sequenceNbr
     * @return self
     */
    public function setSequenceNbr($sequenceNbr)
    {
        $this->sequenceNbr = $sequenceNbr;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Adds as taxDescription
     *
     * Text description of the taxes in a given language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $taxDescription
     */
    public function addToTaxDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $taxDescription)
    {
        $this->taxDescription[] = $taxDescription;

        return $this;
    }

    /**
     * isset taxDescription
     *
     * Text description of the taxes in a given language.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxDescription($index)
    {
        return isset($this->taxDescription[$index]);
    }

    /**
     * unset taxDescription
     *
     * Text description of the taxes in a given language.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxDescription($index)
    {
        unset($this->taxDescription[$index]);
    }

    /**
     * Gets as taxDescription
     *
     * Text description of the taxes in a given language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getTaxDescription()
    {
        return $this->taxDescription;
    }

    /**
     * Sets a new taxDescription
     *
     * Text description of the taxes in a given language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $taxDescription
     * @return self
     */
    public function setTaxDescription(array $taxDescription)
    {
        $this->taxDescription = $taxDescription;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

