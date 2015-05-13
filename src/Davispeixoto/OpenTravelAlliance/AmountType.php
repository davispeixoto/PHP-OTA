<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AmountType
 *
 * Base charge and additional charges related to a room that includes such things
 * as additional guest amounts, cancel fees, etc. Also includes Discount
 * percentages, total amount, and the rate description.
 * XSD Type: AmountType
 */
class AmountType
{

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
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @property string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @property integer $minAge
     */
    private $minAge = null;

    /**
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @property integer $maxAge
     */
    private $maxAge = null;

    /**
     * TimeUnit : Qualifier for Age.
     *
     * @property string $ageTimeUnit
     */
    private $ageTimeUnit = null;

    /**
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @property string $ageBucket
     */
    private $ageBucket = null;

    /**
     * @property boolean $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Indicates the time unit for the rate.
     *
     * @property string $rateTimeUnit
     */
    private $rateTimeUnit = null;

    /**
     * Indicates the number of rate time units such as "3 Days".
     *
     * @property integer $unitMultiplier
     */
    private $unitMultiplier = null;

    /**
     * Indicates the minimum number of guests at this rate.
     *
     * @property integer $minGuestApplicable
     */
    private $minGuestApplicable = null;

    /**
     * Indicates the maximum number of guests at this rate.
     *
     * @property integer $maxGuestApplicable
     */
    private $maxGuestApplicable = null;

    /**
     * Indicates the minimum length of stay.
     *
     * @property integer $minLOS
     */
    private $minLOS = null;

    /**
     * Indicates the maximum length of stay.
     *
     * @property integer $maxLOS
     */
    private $maxLOS = null;

    /**
     * Day of week guest is required to stay over in order to be eligible for this
     * rate.
     *
     * @property string $stayOverDate
     */
    private $stayOverDate = null;

    /**
     * When true, indicates the amounts are provided in an alternate currency. When
     * false, indicates the amounts are provided in the primary currency. This may be
     * used to indicate that the currency provided is different from the requested or
     * stored currency.
     *
     * @property boolean $alternateCurrencyInd
     */
    private $alternateCurrencyInd = null;

    /**
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code
     * List Charge Type Code (CHG).
     *
     * @property string $chargeType
     */
    private $chargeType = null;

    /**
     * A reference string used to match a query, with rates, to a given time. This is
     * useful for matching prices within a given quote period.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * The base amount charged for the accommodation or service per unit of time (ex:
     * Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included
     * in the base amount. Note that any additional charges should itemized in the
     * other elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TotalType $base
     */
    private $base = null;

    /**
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AmountType\AdditionalGuestAmountsAType
     * $additionalGuestAmounts
     */
    private $additionalGuestAmounts = null;

    /**
     * A collection of Fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     */
    private $fees = null;

    /**
     * A collection of Cancellation Policies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicies
     */
    private $cancelPolicies = null;

    /**
     * A collection of Payment Policies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $paymentPolicies
     */
    private $paymentPolicies = null;

    /**
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @property \Davispeixoto\OpenTravelAlliance\AmountType\DiscountAType[] $discount
     */
    private $discount = null;

    /**
     * The total amount charged for this rate including additional occupant amounts and
     * fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TotalType $total
     */
    private $total = null;

    /**
     * Description of the rate associated with the various monetary amounts and
     * policies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $rateDescription
     */
    private $rateDescription = null;

    /**
     * Collection of additional charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType
     * $additionalCharges
     */
    private $additionalCharges = null;

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
     * Gets as ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen,
     * infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;

        return $this;
    }

    /**
     * Gets as minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @return integer
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @param integer $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @return integer
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @param integer $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }

    /**
     * Gets as ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @return string
     */
    public function getAgeTimeUnit()
    {
        return $this->ageTimeUnit;
    }

    /**
     * Sets a new ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @param string $ageTimeUnit
     * @return self
     */
    public function setAgeTimeUnit($ageTimeUnit)
    {
        $this->ageTimeUnit = $ageTimeUnit;

        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;

        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * @return boolean
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * @param boolean $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;

        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * @return integer
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * @param integer $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;

        return $this;
    }

    /**
     * Gets as rateTimeUnit
     *
     * Indicates the time unit for the rate.
     *
     * @return string
     */
    public function getRateTimeUnit()
    {
        return $this->rateTimeUnit;
    }

    /**
     * Sets a new rateTimeUnit
     *
     * Indicates the time unit for the rate.
     *
     * @param string $rateTimeUnit
     * @return self
     */
    public function setRateTimeUnit($rateTimeUnit)
    {
        $this->rateTimeUnit = $rateTimeUnit;

        return $this;
    }

    /**
     * Gets as unitMultiplier
     *
     * Indicates the number of rate time units such as "3 Days".
     *
     * @return integer
     */
    public function getUnitMultiplier()
    {
        return $this->unitMultiplier;
    }

    /**
     * Sets a new unitMultiplier
     *
     * Indicates the number of rate time units such as "3 Days".
     *
     * @param integer $unitMultiplier
     * @return self
     */
    public function setUnitMultiplier($unitMultiplier)
    {
        $this->unitMultiplier = $unitMultiplier;

        return $this;
    }

    /**
     * Gets as minGuestApplicable
     *
     * Indicates the minimum number of guests at this rate.
     *
     * @return integer
     */
    public function getMinGuestApplicable()
    {
        return $this->minGuestApplicable;
    }

    /**
     * Sets a new minGuestApplicable
     *
     * Indicates the minimum number of guests at this rate.
     *
     * @param integer $minGuestApplicable
     * @return self
     */
    public function setMinGuestApplicable($minGuestApplicable)
    {
        $this->minGuestApplicable = $minGuestApplicable;

        return $this;
    }

    /**
     * Gets as maxGuestApplicable
     *
     * Indicates the maximum number of guests at this rate.
     *
     * @return integer
     */
    public function getMaxGuestApplicable()
    {
        return $this->maxGuestApplicable;
    }

    /**
     * Sets a new maxGuestApplicable
     *
     * Indicates the maximum number of guests at this rate.
     *
     * @param integer $maxGuestApplicable
     * @return self
     */
    public function setMaxGuestApplicable($maxGuestApplicable)
    {
        $this->maxGuestApplicable = $maxGuestApplicable;

        return $this;
    }

    /**
     * Gets as minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @return integer
     */
    public function getMinLOS()
    {
        return $this->minLOS;
    }

    /**
     * Sets a new minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @param integer $minLOS
     * @return self
     */
    public function setMinLOS($minLOS)
    {
        $this->minLOS = $minLOS;

        return $this;
    }

    /**
     * Gets as maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @return integer
     */
    public function getMaxLOS()
    {
        return $this->maxLOS;
    }

    /**
     * Sets a new maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @param integer $maxLOS
     * @return self
     */
    public function setMaxLOS($maxLOS)
    {
        $this->maxLOS = $maxLOS;

        return $this;
    }

    /**
     * Gets as stayOverDate
     *
     * Day of week guest is required to stay over in order to be eligible for this
     * rate.
     *
     * @return string
     */
    public function getStayOverDate()
    {
        return $this->stayOverDate;
    }

    /**
     * Sets a new stayOverDate
     *
     * Day of week guest is required to stay over in order to be eligible for this
     * rate.
     *
     * @param string $stayOverDate
     * @return self
     */
    public function setStayOverDate($stayOverDate)
    {
        $this->stayOverDate = $stayOverDate;

        return $this;
    }

    /**
     * Gets as alternateCurrencyInd
     *
     * When true, indicates the amounts are provided in an alternate currency. When
     * false, indicates the amounts are provided in the primary currency. This may be
     * used to indicate that the currency provided is different from the requested or
     * stored currency.
     *
     * @return boolean
     */
    public function getAlternateCurrencyInd()
    {
        return $this->alternateCurrencyInd;
    }

    /**
     * Sets a new alternateCurrencyInd
     *
     * When true, indicates the amounts are provided in an alternate currency. When
     * false, indicates the amounts are provided in the primary currency. This may be
     * used to indicate that the currency provided is different from the requested or
     * stored currency.
     *
     * @param boolean $alternateCurrencyInd
     * @return self
     */
    public function setAlternateCurrencyInd($alternateCurrencyInd)
    {
        $this->alternateCurrencyInd = $alternateCurrencyInd;

        return $this;
    }

    /**
     * Gets as chargeType
     *
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code
     * List Charge Type Code (CHG).
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * Sets a new chargeType
     *
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code
     * List Charge Type Code (CHG).
     *
     * @param string $chargeType
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is
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
     * A reference string used to match a query, with rates, to a given time. This is
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
     * Gets as base
     *
     * The base amount charged for the accommodation or service per unit of time (ex:
     * Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included
     * in the base amount. Note that any additional charges should itemized in the
     * other elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalType
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * The base amount charged for the accommodation or service per unit of time (ex:
     * Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included
     * in the base amount. Note that any additional charges should itemized in the
     * other elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalType $base
     * @return self
     */
    public function setBase(\Davispeixoto\OpenTravelAlliance\TotalType $base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @return \Davispeixoto\OpenTravelAlliance\AmountType\AdditionalGuestAmountsAType
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }

    /**
     * Sets a new additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @param \Davispeixoto\OpenTravelAlliance\AmountType\AdditionalGuestAmountsAType
     * $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(
        \Davispeixoto\OpenTravelAlliance\AmountType\AdditionalGuestAmountsAType $additionalGuestAmounts
    ) {
        $this->additionalGuestAmounts = $additionalGuestAmounts;

        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of Fees.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\FeeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * A collection of Fees.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of Fees.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of Fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of Fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Gets as cancelPolicies
     *
     * A collection of Cancellation Policies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType
     */
    public function getCancelPolicies()
    {
        return $this->cancelPolicies;
    }

    /**
     * Sets a new cancelPolicies
     *
     * A collection of Cancellation Policies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicies
     * @return self
     */
    public function setCancelPolicies(\Davispeixoto\OpenTravelAlliance\CancelPenaltiesType $cancelPolicies)
    {
        $this->cancelPolicies = $cancelPolicies;

        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of Payment Policies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType
     * $guaranteePayment
     */
    public function addToPaymentPolicies(
        \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
    ) {
        $this->paymentPolicies[] = $guaranteePayment;

        return $this;
    }

    /**
     * isset paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentPolicies($index)
    {
        return isset($this->paymentPolicies[$index]);
    }

    /**
     * unset paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentPolicies($index)
    {
        unset($this->paymentPolicies[$index]);
    }

    /**
     * Gets as paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getPaymentPolicies()
    {
        return $this->paymentPolicies;
    }

    /**
     * Sets a new paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RequiredPaymentsType\GuaranteePaymentAType[]
     * $paymentPolicies
     * @return self
     */
    public function setPaymentPolicies(array $paymentPolicies)
    {
        $this->paymentPolicies = $paymentPolicies;

        return $this;
    }

    /**
     * Adds as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AmountType\DiscountAType $discount
     */
    public function addToDiscount(\Davispeixoto\OpenTravelAlliance\AmountType\DiscountAType $discount)
    {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return \Davispeixoto\OpenTravelAlliance\AmountType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param \Davispeixoto\OpenTravelAlliance\AmountType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Gets as total
     *
     * The total amount charged for this rate including additional occupant amounts and
     * fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount charged for this rate including additional occupant amounts and
     * fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TotalType $total
     * @return self
     */
    public function setTotal(\Davispeixoto\OpenTravelAlliance\TotalType $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Gets as rateDescription
     *
     * Description of the rate associated with the various monetary amounts and
     * policies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getRateDescription()
    {
        return $this->rateDescription;
    }

    /**
     * Sets a new rateDescription
     *
     * Description of the rate associated with the various monetary amounts and
     * policies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $rateDescription
     * @return self
     */
    public function setRateDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $rateDescription)
    {
        $this->rateDescription = $rateDescription;

        return $this;
    }

    /**
     * Gets as additionalCharges
     *
     * Collection of additional charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType
     */
    public function getAdditionalCharges()
    {
        return $this->additionalCharges;
    }

    /**
     * Sets a new additionalCharges
     *
     * Collection of additional charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType
     * $additionalCharges
     * @return self
     */
    public function setAdditionalCharges(\Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType $additionalCharges)
    {
        $this->additionalCharges = $additionalCharges;

        return $this;
    }


}

