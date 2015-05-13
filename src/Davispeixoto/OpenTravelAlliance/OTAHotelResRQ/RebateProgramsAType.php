<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ;

/**
 * Class representing RebateProgramsAType
 */
class RebateProgramsAType
{

    /**
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebateProgram
     */
    private $rebateProgram = null;

    /**
     * Adds as rebateProgram
     *
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value
     * Added Tax" (VAT).
     *
     * @param \Davispeixoto\OpenTravelAlliance\RebateType[] $rebateProgram
     * @return self
     */
    public function setRebateProgram(array $rebateProgram)
    {
        $this->rebateProgram = $rebateProgram;

        return $this;
    }


}

