<?php

namespace Davispeixoto\OpenTravelAlliance\HotelReservationsType;

use Davispeixoto\OpenTravelAlliance\HotelReservationType;

/**
 * Class representing HotelReservationAType
 */
class HotelReservationAType extends HotelReservationType
{

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Davispeixoto\OpenTravelAlliance\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;

        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms)
    {
        $this->rebatePrograms = $rebatePrograms;

        return $this;
    }


}

