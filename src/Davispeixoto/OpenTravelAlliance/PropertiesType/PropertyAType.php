<?php

namespace Davispeixoto\OpenTravelAlliance\PropertiesType;

use Davispeixoto\OpenTravelAlliance\PropertyValueMatchType;

/**
 * Class representing PropertyAType
 */
class PropertyAType extends PropertyValueMatchType
{

    /**
     * Rebate programs the hotel is participating in.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebateProgram
     */
    private $rebateProgram = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram
     */
    public function addToRebateProgram(\Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram)
    {
        $this->rebateProgram[] = $rebateProgram;

        return $this;
    }

    /**
     * isset rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRebateProgram($index)
    {
        return isset($this->rebateProgram[$index]);
    }

    /**
     * unset rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRebateProgram($index)
    {
        unset($this->rebateProgram[$index]);
    }

    /**
     * Gets as rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RebateType[]
     */
    public function getRebateProgram()
    {
        return $this->rebateProgram;
    }

    /**
     * Sets a new rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RebateType[] $rebateProgram
     * @return self
     */
    public function setRebateProgram(array $rebateProgram)
    {
        $this->rebateProgram = $rebateProgram;

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

