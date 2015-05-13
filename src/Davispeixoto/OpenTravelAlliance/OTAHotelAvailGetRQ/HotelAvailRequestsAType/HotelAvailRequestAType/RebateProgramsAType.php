<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailGetRQ\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing RebateProgramsAType
 */
class RebateProgramsAType
{

    /**
     * When true, send all rebate program information.
     *
     * @property boolean $sendDataInd
     */
    private $sendDataInd = null;

    /**
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebateProgram
     */
    private $rebateProgram = null;

    /**
     * Gets as sendDataInd
     *
     * When true, send all rebate program information.
     *
     * @return boolean
     */
    public function getSendDataInd()
    {
        return $this->sendDataInd;
    }

    /**
     * Sets a new sendDataInd
     *
     * When true, send all rebate program information.
     *
     * @param boolean $sendDataInd
     * @return self
     */
    public function setSendDataInd($sendDataInd)
    {
        $this->sendDataInd = $sendDataInd;

        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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

