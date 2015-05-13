<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RateUploadType
 *
 * Defines the details of a rate.
 * XSD Type: RateUploadType
 */
class RateUploadType
{

    /**
     * Indicates the number of rooms blocked or capped for this rate plan.
     *
     * @property integer $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Enumeration of time units upon which the RateAmount is based (e.g., daily,
     * weekly, single rate for full stay).
     *
     * @property string $rateTimeUnit
     */
    private $rateTimeUnit = null;

    /**
     * The number of RateTimeUnits that the rate Amount is based upon (e.g., flat rate
     * for 3 days).
     *
     * @property integer $unitMultiplier
     */
    private $unitMultiplier = null;

    /**
     * Minimum number of occupants for which this rate is valid (ex 1).
     *
     * @property integer $minGuestApplicable
     */
    private $minGuestApplicable = null;

    /**
     * Maximum number of occupants for which this rate is valid (ex 2).
     *
     * @property integer $maxGuestApplicable
     */
    private $maxGuestApplicable = null;

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
     * The minimum length of stay required by this rate plan.
     *
     * @property string $minLOS
     */
    private $minLOS = null;

    /**
     * The maximum length of stay allowed by this rate plan.
     *
     * @property string $maxLOS
     */
    private $maxLOS = null;

    /**
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the quoted rate plan.
     *
     * @property string $stayOverDate
     */
    private $stayOverDate = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

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
     * Hotel systems often have different tiers for a given rate plan; this attribute
     * is used to designate a specific tier within the rate plan (e.g. high, medium,
     * low).
     *
     * @property string $rateTier
     */
    private $rateTier = null;

    /**
     * A collection of Base charges by number of guests.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     * $baseByGuestAmts
     */
    private $baseByGuestAmts = null;

    /**
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
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
     * A collection of Guarantee Policies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guaranteePolicies
     */
    private $guaranteePolicies = null;

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
     * Desription of Rate being uploaded.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $rateDescription
     */
    private $rateDescription = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each Rate being uploaded, for traceable transactions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Defines which meals are included with this rate program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RateUploadType\MealsIncludedAType
     * $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * Breakout of additional charges as part of the rate plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelAdditionalChargesType
     * $additionalCharges
     */
    private $additionalCharges = null;

    /**
     * Gets as numberOfUnits
     *
     * Indicates the number of rooms blocked or capped for this rate plan.
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
     * Indicates the number of rooms blocked or capped for this rate plan.
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
     * Enumeration of time units upon which the RateAmount is based (e.g., daily,
     * weekly, single rate for full stay).
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
     * Enumeration of time units upon which the RateAmount is based (e.g., daily,
     * weekly, single rate for full stay).
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
     * The number of RateTimeUnits that the rate Amount is based upon (e.g., flat rate
     * for 3 days).
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
     * The number of RateTimeUnits that the rate Amount is based upon (e.g., flat rate
     * for 3 days).
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
     * Minimum number of occupants for which this rate is valid (ex 1).
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
     * Minimum number of occupants for which this rate is valid (ex 1).
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
     * Maximum number of occupants for which this rate is valid (ex 2).
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
     * Maximum number of occupants for which this rate is valid (ex 2).
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
     * Gets as minLOS
     *
     * The minimum length of stay required by this rate plan.
     *
     * @return string
     */
    public function getMinLOS()
    {
        return $this->minLOS;
    }

    /**
     * Sets a new minLOS
     *
     * The minimum length of stay required by this rate plan.
     *
     * @param string $minLOS
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
     * The maximum length of stay allowed by this rate plan.
     *
     * @return string
     */
    public function getMaxLOS()
    {
        return $this->maxLOS;
    }

    /**
     * Sets a new maxLOS
     *
     * The maximum length of stay allowed by this rate plan.
     *
     * @param string $maxLOS
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
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the quoted rate plan.
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
     * Indicates a specific day on which the guest must stay over in order to be
     * eligible for the quoted rate plan.
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
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

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
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

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
     * Gets as rateTier
     *
     * Hotel systems often have different tiers for a given rate plan; this attribute
     * is used to designate a specific tier within the rate plan (e.g. high, medium,
     * low).
     *
     * @return string
     */
    public function getRateTier()
    {
        return $this->rateTier;
    }

    /**
     * Sets a new rateTier
     *
     * Hotel systems often have different tiers for a given rate plan; this attribute
     * is used to designate a specific tier within the rate plan (e.g. high, medium,
     * low).
     *
     * @param string $rateTier
     * @return self
     */
    public function setRateTier($rateTier)
    {
        $this->rateTier = $rateTier;

        return $this;
    }

    /**
     * Adds as baseByGuestAmt
     *
     * A collection of Base charges by number of guests.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType
     * $baseByGuestAmt
     */
    public function addToBaseByGuestAmts(
        \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType $baseByGuestAmt
    ) {
        $this->baseByGuestAmts[] = $baseByGuestAmt;

        return $this;
    }

    /**
     * isset baseByGuestAmts
     *
     * A collection of Base charges by number of guests.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseByGuestAmts($index)
    {
        return isset($this->baseByGuestAmts[$index]);
    }

    /**
     * unset baseByGuestAmts
     *
     * A collection of Base charges by number of guests.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseByGuestAmts($index)
    {
        unset($this->baseByGuestAmts[$index]);
    }

    /**
     * Gets as baseByGuestAmts
     *
     * A collection of Base charges by number of guests.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     */
    public function getBaseByGuestAmts()
    {
        return $this->baseByGuestAmts;
    }

    /**
     * Sets a new baseByGuestAmts
     *
     * A collection of Base charges by number of guests.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\BaseByGuestAmtsAType\BaseByGuestAmtAType[]
     * $baseByGuestAmts
     * @return self
     */
    public function setBaseByGuestAmts(array $baseByGuestAmts)
    {
        $this->baseByGuestAmts = $baseByGuestAmts;

        return $this;
    }

    /**
     * Adds as additionalGuestAmount
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType
     * $additionalGuestAmount
     */
    public function addToAdditionalGuestAmounts(
        \Davispeixoto\OpenTravelAlliance\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
    ) {
        $this->additionalGuestAmounts[] = $additionalGuestAmount;

        return $this;
    }

    /**
     * isset additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalGuestAmounts($index)
    {
        return isset($this->additionalGuestAmounts[$index]);
    }

    /**
     * unset additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalGuestAmounts($index)
    {
        unset($this->additionalGuestAmounts[$index]);
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or
     * service users (over and above the rate's MaxGuest Applicable).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateUploadType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     * $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(array $additionalGuestAmounts)
    {
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
     * Adds as guaranteePolicy
     *
     * A collection of Guarantee Policies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType $guaranteePolicy
     */
    public function addToGuaranteePolicies(\Davispeixoto\OpenTravelAlliance\GuaranteeType $guaranteePolicy)
    {
        $this->guaranteePolicies[] = $guaranteePolicy;

        return $this;
    }

    /**
     * isset guaranteePolicies
     *
     * A collection of Guarantee Policies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuaranteePolicies($index)
    {
        return isset($this->guaranteePolicies[$index]);
    }

    /**
     * unset guaranteePolicies
     *
     * A collection of Guarantee Policies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuaranteePolicies($index)
    {
        unset($this->guaranteePolicies[$index]);
    }

    /**
     * Gets as guaranteePolicies
     *
     * A collection of Guarantee Policies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuaranteeType[]
     */
    public function getGuaranteePolicies()
    {
        return $this->guaranteePolicies;
    }

    /**
     * Sets a new guaranteePolicies
     *
     * A collection of Guarantee Policies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType[] $guaranteePolicies
     * @return self
     */
    public function setGuaranteePolicies(array $guaranteePolicies)
    {
        $this->guaranteePolicies = $guaranteePolicies;

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
     * Gets as rateDescription
     *
     * Desription of Rate being uploaded.
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
     * Desription of Rate being uploaded.
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
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each Rate being uploaded, for traceable transactions.
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
     * The unique identifier element allows the trading partners to uniquely identify
     * each Rate being uploaded, for traceable transactions.
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
     * Gets as mealsIncluded
     *
     * Defines which meals are included with this rate program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RateUploadType\MealsIncludedAType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * Defines which meals are included with this rate program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RateUploadType\MealsIncludedAType
     * $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(\Davispeixoto\OpenTravelAlliance\RateUploadType\MealsIncludedAType $mealsIncluded)
    {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Gets as additionalCharges
     *
     * Breakout of additional charges as part of the rate plan.
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
     * Breakout of additional charges as part of the rate plan.
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

