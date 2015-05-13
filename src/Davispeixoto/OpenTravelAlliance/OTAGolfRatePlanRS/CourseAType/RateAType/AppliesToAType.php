<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType;

/**
 * Class representing AppliesToAType
 */
class AppliesToAType
{

    /**
     * Golfer type(s) that the rate applies to.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\GolferTypeAType[]
     * $golferType
     */
    private $golferType = null;

    /**
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\MembershipProgramAType[]
     * $membershipProgram
     */
    private $membershipProgram = null;

    /**
     * Corporate IDs that the rate applies to.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType[]
     * $negotiatedRate
     */
    private $negotiatedRate = null;

    /**
     * Adds as golferType
     *
     * Golfer type(s) that the rate applies to.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\GolferTypeAType
     * $golferType
     */
    public function addToGolferType(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\GolferTypeAType $golferType
    ) {
        $this->golferType[] = $golferType;

        return $this;
    }

    /**
     * isset golferType
     *
     * Golfer type(s) that the rate applies to.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGolferType($index)
    {
        return isset($this->golferType[$index]);
    }

    /**
     * unset golferType
     *
     * Golfer type(s) that the rate applies to.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGolferType($index)
    {
        unset($this->golferType[$index]);
    }

    /**
     * Gets as golferType
     *
     * Golfer type(s) that the rate applies to.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\GolferTypeAType[]
     */
    public function getGolferType()
    {
        return $this->golferType;
    }

    /**
     * Sets a new golferType
     *
     * Golfer type(s) that the rate applies to.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\GolferTypeAType[]
     * $golferType
     * @return self
     */
    public function setGolferType(array $golferType)
    {
        $this->golferType = $golferType;

        return $this;
    }

    /**
     * Adds as membershipProgram
     *
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\MembershipProgramAType
     * $membershipProgram
     */
    public function addToMembershipProgram(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\MembershipProgramAType $membershipProgram
    ) {
        $this->membershipProgram[] = $membershipProgram;

        return $this;
    }

    /**
     * isset membershipProgram
     *
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMembershipProgram($index)
    {
        return isset($this->membershipProgram[$index]);
    }

    /**
     * unset membershipProgram
     *
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMembershipProgram($index)
    {
        unset($this->membershipProgram[$index]);
    }

    /**
     * Gets as membershipProgram
     *
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\MembershipProgramAType[]
     */
    public function getMembershipProgram()
    {
        return $this->membershipProgram;
    }

    /**
     * Sets a new membershipProgram
     *
     * Membership (or loyalty) program(s) that the rate applies to.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\MembershipProgramAType[]
     * $membershipProgram
     * @return self
     */
    public function setMembershipProgram(array $membershipProgram)
    {
        $this->membershipProgram = $membershipProgram;

        return $this;
    }

    /**
     * Adds as negotiatedRate
     *
     * Corporate IDs that the rate applies to.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType
     * $negotiatedRate
     */
    public function addToNegotiatedRate(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType $negotiatedRate
    ) {
        $this->negotiatedRate[] = $negotiatedRate;

        return $this;
    }

    /**
     * isset negotiatedRate
     *
     * Corporate IDs that the rate applies to.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedRate($index)
    {
        return isset($this->negotiatedRate[$index]);
    }

    /**
     * unset negotiatedRate
     *
     * Corporate IDs that the rate applies to.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedRate($index)
    {
        unset($this->negotiatedRate[$index]);
    }

    /**
     * Gets as negotiatedRate
     *
     * Corporate IDs that the rate applies to.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType[]
     */
    public function getNegotiatedRate()
    {
        return $this->negotiatedRate;
    }

    /**
     * Sets a new negotiatedRate
     *
     * Corporate IDs that the rate applies to.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType[]
     * $negotiatedRate
     * @return self
     */
    public function setNegotiatedRate(array $negotiatedRate)
    {
        $this->negotiatedRate = $negotiatedRate;

        return $this;
    }


}

