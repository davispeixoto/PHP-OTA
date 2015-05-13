<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing InclusionSetType
 *
 *
 * XSD Type: InclusionSetType
 */
class InclusionSetType
{

    /**
     * Name of the inclusive component.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Unique identifier of the item to include.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The rule by which the item should be included to the package (required,
     * suggested, etc.)
     *
     * @property string $rule
     */
    private $rule = null;

    /**
     * Determines whether the number of included items must match the number of guests
     * attached to the reservation.
     *
     * @property boolean $matchGuestCount
     */
    private $matchGuestCount = null;

    /**
     * The minimum number of adults that must be included.
     *
     * @property integer $minAdult
     */
    private $minAdult = null;

    /**
     * The maximum number of adults that must be included.
     *
     * @property integer $maxAdult
     */
    private $maxAdult = null;

    /**
     * The minimum number of adults that must be included.
     *
     * @property integer $minChild
     */
    private $minChild = null;

    /**
     * The maximum number of children that must be included.
     *
     * @property integer $maxChild
     */
    private $maxChild = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     */
    private $descriptions = null;

    /**
     * Gets as name
     *
     * Name of the inclusive component.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the inclusive component.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Unique identifier of the item to include.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Unique identifier of the item to include.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as rule
     *
     * The rule by which the item should be included to the package (required,
     * suggested, etc.)
     *
     * @return string
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Sets a new rule
     *
     * The rule by which the item should be included to the package (required,
     * suggested, etc.)
     *
     * @param string $rule
     * @return self
     */
    public function setRule($rule)
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Gets as matchGuestCount
     *
     * Determines whether the number of included items must match the number of guests
     * attached to the reservation.
     *
     * @return boolean
     */
    public function getMatchGuestCount()
    {
        return $this->matchGuestCount;
    }

    /**
     * Sets a new matchGuestCount
     *
     * Determines whether the number of included items must match the number of guests
     * attached to the reservation.
     *
     * @param boolean $matchGuestCount
     * @return self
     */
    public function setMatchGuestCount($matchGuestCount)
    {
        $this->matchGuestCount = $matchGuestCount;

        return $this;
    }

    /**
     * Gets as minAdult
     *
     * The minimum number of adults that must be included.
     *
     * @return integer
     */
    public function getMinAdult()
    {
        return $this->minAdult;
    }

    /**
     * Sets a new minAdult
     *
     * The minimum number of adults that must be included.
     *
     * @param integer $minAdult
     * @return self
     */
    public function setMinAdult($minAdult)
    {
        $this->minAdult = $minAdult;

        return $this;
    }

    /**
     * Gets as maxAdult
     *
     * The maximum number of adults that must be included.
     *
     * @return integer
     */
    public function getMaxAdult()
    {
        return $this->maxAdult;
    }

    /**
     * Sets a new maxAdult
     *
     * The maximum number of adults that must be included.
     *
     * @param integer $maxAdult
     * @return self
     */
    public function setMaxAdult($maxAdult)
    {
        $this->maxAdult = $maxAdult;

        return $this;
    }

    /**
     * Gets as minChild
     *
     * The minimum number of adults that must be included.
     *
     * @return integer
     */
    public function getMinChild()
    {
        return $this->minChild;
    }

    /**
     * Sets a new minChild
     *
     * The minimum number of adults that must be included.
     *
     * @param integer $minChild
     * @return self
     */
    public function setMinChild($minChild)
    {
        $this->minChild = $minChild;

        return $this;
    }

    /**
     * Gets as maxChild
     *
     * The maximum number of children that must be included.
     *
     * @return integer
     */
    public function getMaxChild()
    {
        return $this->maxChild;
    }

    /**
     * Sets a new maxChild
     *
     * The maximum number of children that must be included.
     *
     * @param integer $maxChild
     * @return self
     */
    public function setMaxChild($maxChild)
    {
        $this->maxChild = $maxChild;

        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType $ratePlan
     */
    public function addToRatePlans(\Davispeixoto\OpenTravelAlliance\IncludedRatePlanType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * @return \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * @param \Davispeixoto\OpenTravelAlliance\IncludedRatePlanType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;

        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescriptions(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->descriptions[] = $description;

        return $this;
    }

    /**
     * isset descriptions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }


}

