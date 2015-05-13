<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType;

/**
 * Class representing SittingDetailsAType
 */
class SittingDetailsAType
{

    /**
     * Contains information about the meal sitting.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     * $sittingDetail
     */
    private $sittingDetail = null;

    /**
     * Adds as sittingDetail
     *
     * Contains information about the meal sitting.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType
     * $sittingDetail
     */
    public function addToSittingDetail(
        \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType $sittingDetail
    ) {
        $this->sittingDetail[] = $sittingDetail;

        return $this;
    }

    /**
     * isset sittingDetail
     *
     * Contains information about the meal sitting.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSittingDetail($index)
    {
        return isset($this->sittingDetail[$index]);
    }

    /**
     * unset sittingDetail
     *
     * Contains information about the meal sitting.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSittingDetail($index)
    {
        unset($this->sittingDetail[$index]);
    }

    /**
     * Gets as sittingDetail
     *
     * Contains information about the meal sitting.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     */
    public function getSittingDetail()
    {
        return $this->sittingDetail;
    }

    /**
     * Sets a new sittingDetail
     *
     * Contains information about the meal sitting.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseDiningAvailRS\DiningOptionsAType\DiningOptionAType\DiningRoomAType\SittingDetailsAType\SittingDetailAType[]
     * $sittingDetail
     * @return self
     */
    public function setSittingDetail(array $sittingDetail)
    {
        $this->sittingDetail = $sittingDetail;

        return $this;
    }


}

