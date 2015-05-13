<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS;

/**
 * Class representing CourseAType
 */
class CourseAType
{

    /**
     * An code for a golf course.
     *
     * @property mixed $code
     */
    private $code = null;

    /**
     * An ID for a golf course.
     *
     * @property mixed $iD
     */
    private $iD = null;

    /**
     * A name for a golf course.
     *
     * @property mixed $name
     */
    private $name = null;

    /**
     * The short name of the golf course.
     *
     * @property mixed $shortName
     */
    private $shortName = null;

    /**
     * Inclusion or exclusion of prepaid rates.
     *
     * @property string $prepaidMethod
     */
    private $prepaidMethod = null;

    /**
     * If true, this tee time rate is available.
     *
     * @property boolean $availInd
     */
    private $availInd = null;

    /**
     * Rate associated information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType[] $rate
     */
    private $rate = null;

    /**
     * Gets as code
     *
     * An code for a golf course.
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * An code for a golf course.
     *
     * @param mixed $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as iD
     *
     * An ID for a golf course.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An ID for a golf course.
     *
     * @param mixed $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as name
     *
     * A name for a golf course.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name for a golf course.
     *
     * @param mixed $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as shortName
     *
     * The short name of the golf course.
     *
     * @return mixed
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Sets a new shortName
     *
     * The short name of the golf course.
     *
     * @param mixed $shortName
     * @return self
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Gets as prepaidMethod
     *
     * Inclusion or exclusion of prepaid rates.
     *
     * @return string
     */
    public function getPrepaidMethod()
    {
        return $this->prepaidMethod;
    }

    /**
     * Sets a new prepaidMethod
     *
     * Inclusion or exclusion of prepaid rates.
     *
     * @param string $prepaidMethod
     * @return self
     */
    public function setPrepaidMethod($prepaidMethod)
    {
        $this->prepaidMethod = $prepaidMethod;

        return $this;
    }

    /**
     * Gets as availInd
     *
     * If true, this tee time rate is available.
     *
     * @return boolean
     */
    public function getAvailInd()
    {
        return $this->availInd;
    }

    /**
     * Sets a new availInd
     *
     * If true, this tee time rate is available.
     *
     * @param boolean $availInd
     * @return self
     */
    public function setAvailInd($availInd)
    {
        $this->availInd = $availInd;

        return $this;
    }

    /**
     * Adds as rate
     *
     * Rate associated information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType
     * $rate
     */
    public function addToRate(\Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType $rate)
    {
        $this->rate[] = $rate;

        return $this;
    }

    /**
     * isset rate
     *
     * Rate associated information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * Rate associated information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * Rate associated information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Rate associated information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType[] $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;

        return $this;
    }


}

