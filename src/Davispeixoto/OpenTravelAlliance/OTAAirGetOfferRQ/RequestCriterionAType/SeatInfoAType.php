<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

/**
 * Class representing SeatInfoAType
 */
class SeatInfoAType
{

    /**
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @property integer $totalReqSeatQty
     */
    private $totalReqSeatQty = null;

    /**
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @property boolean $changeInd
     */
    private $changeInd = null;

    /**
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType\DetailedInfoAType[]
     * $detailedInfo
     */
    private $detailedInfo = null;

    /**
     * Gets as totalReqSeatQty
     *
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @return integer
     */
    public function getTotalReqSeatQty()
    {
        return $this->totalReqSeatQty;
    }

    /**
     * Sets a new totalReqSeatQty
     *
     * The calculated number of required seats, e.g.: 0 for Infant On Lap, 1 for Normal
     * Passenger and 2 for Oversized Passenger. This may be used to determine if two
     * seats need to be together.
     *
     * @param integer $totalReqSeatQty
     * @return self
     */
    public function setTotalReqSeatQty($totalReqSeatQty)
    {
        $this->totalReqSeatQty = $totalReqSeatQty;

        return $this;
    }

    /**
     * Gets as changeInd
     *
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @return boolean
     */
    public function getChangeInd()
    {
        return $this->changeInd;
    }

    /**
     * Sets a new changeInd
     *
     * If true, this is a seat re-accommodation request. In this scenario, two
     * instances of DetailedInfo should be used, one for the original equipment and one
     * for the changed equipment.
     *
     * @param boolean $changeInd
     * @return self
     */
    public function setChangeInd($changeInd)
    {
        $this->changeInd = $changeInd;

        return $this;
    }

    /**
     * Adds as detailedInfo
     *
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType\DetailedInfoAType
     * $detailedInfo
     */
    public function addToDetailedInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType\DetailedInfoAType $detailedInfo
    ) {
        $this->detailedInfo[] = $detailedInfo;

        return $this;
    }

    /**
     * isset detailedInfo
     *
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetailedInfo($index)
    {
        return isset($this->detailedInfo[$index]);
    }

    /**
     * unset detailedInfo
     *
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetailedInfo($index)
    {
        unset($this->detailedInfo[$index]);
    }

    /**
     * Gets as detailedInfo
     *
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType\DetailedInfoAType[]
     */
    public function getDetailedInfo()
    {
        return $this->detailedInfo;
    }

    /**
     * Sets a new detailedInfo
     *
     * Detailed seat request information, including quantity, aircraft equipment and
     * cabin class and sub-class information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType\SeatInfoAType\DetailedInfoAType[]
     * $detailedInfo
     * @return self
     */
    public function setDetailedInfo(array $detailedInfo)
    {
        $this->detailedInfo = $detailedInfo;

        return $this;
    }


}

