<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeType;

/**
 * Class representing PolicyAType
 */
class PolicyAType
{

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
     * The code identifying this policy.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The date and time when the policy information for this facility was last
     * updated.
     *
     * @property \DateTime $lastUpdated
     */
    private $lastUpdated = null;

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
     * A general policy description and optional policy type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\GeneralAType
     * $general
     */
    private $general = null;

    /**
     * Defines the tee time cancellation policy of the golf facility and accepted
     * guarantee payment types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\CancelPolicyAType
     * $cancelPolicy
     */
    private $cancelPolicy = null;

    /**
     * Defines tax policies for tee time pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\TaxPolicyAType[]
     * $taxPolicy
     */
    private $taxPolicy = null;

    /**
     * A collection of fees that may apply to a tee time.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicies
     */
    private $feePolicies = null;

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
     * Gets as code
     *
     * The code identifying this policy.
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
     * The code identifying this policy.
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
     * Gets as lastUpdated
     *
     * The date and time when the policy information for this facility was last
     * updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the policy information for this facility was last
     * updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

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
     * Gets as general
     *
     * A general policy description and optional policy type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\GeneralAType
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * Sets a new general
     *
     * A general policy description and optional policy type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\GeneralAType
     * $general
     * @return self
     */
    public function setGeneral(\Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\GeneralAType $general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Gets as cancelPolicy
     *
     * Defines the tee time cancellation policy of the golf facility and accepted
     * guarantee payment types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\CancelPolicyAType
     */
    public function getCancelPolicy()
    {
        return $this->cancelPolicy;
    }

    /**
     * Sets a new cancelPolicy
     *
     * Defines the tee time cancellation policy of the golf facility and accepted
     * guarantee payment types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\CancelPolicyAType
     * $cancelPolicy
     * @return self
     */
    public function setCancelPolicy(
        \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\CancelPolicyAType $cancelPolicy
    ) {
        $this->cancelPolicy = $cancelPolicy;

        return $this;
    }

    /**
     * Adds as taxPolicy
     *
     * Defines tax policies for tee time pricing.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\TaxPolicyAType
     * $taxPolicy
     */
    public function addToTaxPolicy(\Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\TaxPolicyAType $taxPolicy)
    {
        $this->taxPolicy[] = $taxPolicy;

        return $this;
    }

    /**
     * isset taxPolicy
     *
     * Defines tax policies for tee time pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxPolicy($index)
    {
        return isset($this->taxPolicy[$index]);
    }

    /**
     * unset taxPolicy
     *
     * Defines tax policies for tee time pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxPolicy($index)
    {
        unset($this->taxPolicy[$index]);
    }

    /**
     * Gets as taxPolicy
     *
     * Defines tax policies for tee time pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\TaxPolicyAType[]
     */
    public function getTaxPolicy()
    {
        return $this->taxPolicy;
    }

    /**
     * Sets a new taxPolicy
     *
     * Defines tax policies for tee time pricing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\TaxPolicyAType[]
     * $taxPolicy
     * @return self
     */
    public function setTaxPolicy(array $taxPolicy)
    {
        $this->taxPolicy = $taxPolicy;

        return $this;
    }

    /**
     * Adds as feePolicy
     *
     * A collection of fees that may apply to a tee time.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $feePolicy
     */
    public function addToFeePolicies(\Davispeixoto\OpenTravelAlliance\FeeType $feePolicy)
    {
        $this->feePolicies[] = $feePolicy;

        return $this;
    }

    /**
     * isset feePolicies
     *
     * A collection of fees that may apply to a tee time.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeePolicies($index)
    {
        return isset($this->feePolicies[$index]);
    }

    /**
     * unset feePolicies
     *
     * A collection of fees that may apply to a tee time.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeePolicies($index)
    {
        unset($this->feePolicies[$index]);
    }

    /**
     * Gets as feePolicies
     *
     * A collection of fees that may apply to a tee time.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getFeePolicies()
    {
        return $this->feePolicies;
    }

    /**
     * Sets a new feePolicies
     *
     * A collection of fees that may apply to a tee time.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $feePolicies
     * @return self
     */
    public function setFeePolicies(array $feePolicies)
    {
        $this->feePolicies = $feePolicies;

        return $this;
    }


}

