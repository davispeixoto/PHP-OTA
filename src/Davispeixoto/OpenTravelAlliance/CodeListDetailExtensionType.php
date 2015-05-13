<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CodeListDetailExtensionType
 *
 * Detail Code List extension structure that includes all Summary information plus
 * quantity, proximity, charge, schedule and apply to level information.
 * XSD Type: CodeListDetailExtension
 */
class CodeListDetailExtensionType extends CodeListSummaryExtensionType
{

    /**
     * Associated quantity for the item.Example: 2
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Associated proximity for the item.Example: 2
     *
     * @property string $proximity
     */
    private $proximity = null;

    /**
     * Applicable item level.Example: Property
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListApplyToLevelType[] $applyToLevel
     */
    private $applyToLevel = null;

    /**
     * Associated charge information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListFeeType[] $charge
     */
    private $charge = null;

    /**
     * Associated service schedule information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListScheduleType[] $schedule
     */
    private $schedule = null;

    /**
     * Gets as quantity
     *
     * Associated quantity for the item.Example: 2
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Associated quantity for the item.Example: 2
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as proximity
     *
     * Associated proximity for the item.Example: 2
     *
     * @return string
     */
    public function getProximity()
    {
        return $this->proximity;
    }

    /**
     * Sets a new proximity
     *
     * Associated proximity for the item.Example: 2
     *
     * @param string $proximity
     * @return self
     */
    public function setProximity($proximity)
    {
        $this->proximity = $proximity;

        return $this;
    }

    /**
     * Adds as applyToLevel
     *
     * Applicable item level.Example: Property
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ListApplyToLevelType $applyToLevel
     */
    public function addToApplyToLevel(\Davispeixoto\OpenTravelAlliance\ListApplyToLevelType $applyToLevel)
    {
        $this->applyToLevel[] = $applyToLevel;

        return $this;
    }

    /**
     * isset applyToLevel
     *
     * Applicable item level.Example: Property
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetApplyToLevel($index)
    {
        return isset($this->applyToLevel[$index]);
    }

    /**
     * unset applyToLevel
     *
     * Applicable item level.Example: Property
     *
     * @param scalar $index
     * @return void
     */
    public function unsetApplyToLevel($index)
    {
        unset($this->applyToLevel[$index]);
    }

    /**
     * Gets as applyToLevel
     *
     * Applicable item level.Example: Property
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListApplyToLevelType[]
     */
    public function getApplyToLevel()
    {
        return $this->applyToLevel;
    }

    /**
     * Sets a new applyToLevel
     *
     * Applicable item level.Example: Property
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListApplyToLevelType[] $applyToLevel
     * @return self
     */
    public function setApplyToLevel(array $applyToLevel)
    {
        $this->applyToLevel = $applyToLevel;

        return $this;
    }

    /**
     * Adds as charge
     *
     * Associated charge information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeListFeeType $charge
     */
    public function addToCharge(\Davispeixoto\OpenTravelAlliance\CodeListFeeType $charge)
    {
        $this->charge[] = $charge;

        return $this;
    }

    /**
     * isset charge
     *
     * Associated charge information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Associated charge information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Associated charge information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListFeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Associated charge information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListFeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Adds as schedule
     *
     * Associated service schedule information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CodeListScheduleType $schedule
     */
    public function addToSchedule(\Davispeixoto\OpenTravelAlliance\CodeListScheduleType $schedule)
    {
        $this->schedule[] = $schedule;

        return $this;
    }

    /**
     * isset schedule
     *
     * Associated service schedule information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * Associated service schedule information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * Associated service schedule information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListScheduleType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Associated service schedule information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListScheduleType[] $schedule
     * @return self
     */
    public function setSchedule(array $schedule)
    {
        $this->schedule = $schedule;

        return $this;
    }


}

