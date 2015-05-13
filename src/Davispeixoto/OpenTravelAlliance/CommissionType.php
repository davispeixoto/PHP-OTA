<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CommissionType
 *
 * Contains details pertaining to commissions.
 * XSD Type: CommissionType
 */
class CommissionType
{

    /**
     * Indicates the status of the commission payment itself (e.g. no-show indicates
     * that a different commission may be applied if the reservation is not fulfilled).
     *
     * @property string $statusType
     */
    private $statusType = null;

    /**
     * The percent applied to the commissionable amount to determine the commission
     * payable amount.
     *
     * @property float $percent
     */
    private $percent = null;

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
     * Identifies the reason why a commission is not paid or not paid in full.
     *
     * @property string $reasonCode
     */
    private $reasonCode = null;

    /**
     * Identifies who should be billed for the commission amount.
     *
     * @property string $billToID
     */
    private $billToID = null;

    /**
     * This is the frequency at which the commission is applied (e.g. per stay, daily).
     * Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @property string $frequency
     */
    private $frequency = null;

    /**
     * Maximum number of units for which the commission will be applied. This may be
     * used in conjunction with the frequency attribute.
     *
     * @property integer $maxCommissionUnitApplies
     */
    private $maxCommissionUnitApplies = null;

    /**
     * The highest monetary value that may be paid for the commission.
     *
     * @property float $capAmount
     */
    private $capAmount = null;

    /**
     * Identifies the recipient of the commission.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The amount on which commission is calculated.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionableAmountAType
     * $commissionableAmount
     */
    private $commissionableAmount = null;

    /**
     * The amount of commission paid to the agency prior to the service being rendered.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType\PrepaidAmountAType
     * $prepaidAmount
     */
    private $prepaidAmount = null;

    /**
     * A fixed commission amount.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType\FlatCommissionAType
     * $flatCommission
     */
    private $flatCommission = null;

    /**
     * The amount of commission to be paid.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionPayableAmountAType
     * $commissionPayableAmount
     */
    private $commissionPayableAmount = null;

    /**
     * Text related to the commission.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    private $comment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as statusType
     *
     * Indicates the status of the commission payment itself (e.g. no-show indicates
     * that a different commission may be applied if the reservation is not fulfilled).
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * Sets a new statusType
     *
     * Indicates the status of the commission payment itself (e.g. no-show indicates
     * that a different commission may be applied if the reservation is not fulfilled).
     *
     * @param string $statusType
     * @return self
     */
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * Gets as percent
     *
     * The percent applied to the commissionable amount to determine the commission
     * payable amount.
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
     * The percent applied to the commissionable amount to determine the commission
     * payable amount.
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
     * Gets as reasonCode
     *
     * Identifies the reason why a commission is not paid or not paid in full.
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->reasonCode;
    }

    /**
     * Sets a new reasonCode
     *
     * Identifies the reason why a commission is not paid or not paid in full.
     *
     * @param string $reasonCode
     * @return self
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;

        return $this;
    }

    /**
     * Gets as billToID
     *
     * Identifies who should be billed for the commission amount.
     *
     * @return string
     */
    public function getBillToID()
    {
        return $this->billToID;
    }

    /**
     * Sets a new billToID
     *
     * Identifies who should be billed for the commission amount.
     *
     * @param string $billToID
     * @return self
     */
    public function setBillToID($billToID)
    {
        $this->billToID = $billToID;

        return $this;
    }

    /**
     * Gets as frequency
     *
     * This is the frequency at which the commission is applied (e.g. per stay, daily).
     * Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * This is the frequency at which the commission is applied (e.g. per stay, daily).
     * Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Gets as maxCommissionUnitApplies
     *
     * Maximum number of units for which the commission will be applied. This may be
     * used in conjunction with the frequency attribute.
     *
     * @return integer
     */
    public function getMaxCommissionUnitApplies()
    {
        return $this->maxCommissionUnitApplies;
    }

    /**
     * Sets a new maxCommissionUnitApplies
     *
     * Maximum number of units for which the commission will be applied. This may be
     * used in conjunction with the frequency attribute.
     *
     * @param integer $maxCommissionUnitApplies
     * @return self
     */
    public function setMaxCommissionUnitApplies($maxCommissionUnitApplies)
    {
        $this->maxCommissionUnitApplies = $maxCommissionUnitApplies;

        return $this;
    }

    /**
     * Gets as capAmount
     *
     * The highest monetary value that may be paid for the commission.
     *
     * @return float
     */
    public function getCapAmount()
    {
        return $this->capAmount;
    }

    /**
     * Sets a new capAmount
     *
     * The highest monetary value that may be paid for the commission.
     *
     * @param float $capAmount
     * @return self
     */
    public function setCapAmount($capAmount)
    {
        $this->capAmount = $capAmount;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Identifies the recipient of the commission.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Identifies the recipient of the commission.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as commissionableAmount
     *
     * The amount on which commission is calculated.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionableAmountAType
     */
    public function getCommissionableAmount()
    {
        return $this->commissionableAmount;
    }

    /**
     * Sets a new commissionableAmount
     *
     * The amount on which commission is calculated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionableAmountAType
     * $commissionableAmount
     * @return self
     */
    public function setCommissionableAmount(
        \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionableAmountAType $commissionableAmount
    ) {
        $this->commissionableAmount = $commissionableAmount;

        return $this;
    }

    /**
     * Gets as prepaidAmount
     *
     * The amount of commission paid to the agency prior to the service being rendered.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType\PrepaidAmountAType
     */
    public function getPrepaidAmount()
    {
        return $this->prepaidAmount;
    }

    /**
     * Sets a new prepaidAmount
     *
     * The amount of commission paid to the agency prior to the service being rendered.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType\PrepaidAmountAType
     * $prepaidAmount
     * @return self
     */
    public function setPrepaidAmount(\Davispeixoto\OpenTravelAlliance\CommissionType\PrepaidAmountAType $prepaidAmount)
    {
        $this->prepaidAmount = $prepaidAmount;

        return $this;
    }

    /**
     * Gets as flatCommission
     *
     * A fixed commission amount.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType\FlatCommissionAType
     */
    public function getFlatCommission()
    {
        return $this->flatCommission;
    }

    /**
     * Sets a new flatCommission
     *
     * A fixed commission amount.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType\FlatCommissionAType
     * $flatCommission
     * @return self
     */
    public function setFlatCommission(
        \Davispeixoto\OpenTravelAlliance\CommissionType\FlatCommissionAType $flatCommission
    ) {
        $this->flatCommission = $flatCommission;

        return $this;
    }

    /**
     * Gets as commissionPayableAmount
     *
     * The amount of commission to be paid.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionPayableAmountAType
     */
    public function getCommissionPayableAmount()
    {
        return $this->commissionPayableAmount;
    }

    /**
     * Sets a new commissionPayableAmount
     *
     * The amount of commission to be paid.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionPayableAmountAType
     * $commissionPayableAmount
     * @return self
     */
    public function setCommissionPayableAmount(
        \Davispeixoto\OpenTravelAlliance\CommissionType\CommissionPayableAmountAType $commissionPayableAmount
    ) {
        $this->commissionPayableAmount = $commissionPayableAmount;

        return $this;
    }

    /**
     * Gets as comment
     *
     * Text related to the commission.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Text related to the commission.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     * @return self
     */
    public function setComment(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comment = $comment;

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

