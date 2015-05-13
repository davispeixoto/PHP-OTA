<?php

namespace Davispeixoto\OpenTravelAlliance\SeatMapQueryType;

/**
 * Class representing SeatDetailsAType
 */
class SeatDetailsAType
{

    /**
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and
     * the seat map response expected is after the upgrade, if applicable.
     *  false
     *
     * @property boolean $seatUpgradeInd
     */
    private $seatUpgradeInd = null;

    /**
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\CabinClassAType[]
     * $cabinClass
     */
    private $cabinClass = null;

    /**
     * A collection of ResBookDesignations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     * $resBookDesignations
     */
    private $resBookDesignations = null;

    /**
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Gets as seatUpgradeInd
     *
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and
     * the seat map response expected is after the upgrade, if applicable.
     *  false
     *
     * @return boolean
     */
    public function getSeatUpgradeInd()
    {
        return $this->seatUpgradeInd;
    }

    /**
     * Sets a new seatUpgradeInd
     *
     * SeatUpgrade will be set to true if the passenger is looking for an upgrade and
     * the seat map response expected is after the upgrade, if applicable.
     *  false
     *
     * @param boolean $seatUpgradeInd
     * @return self
     */
    public function setSeatUpgradeInd($seatUpgradeInd)
    {
        $this->seatUpgradeInd = $seatUpgradeInd;

        return $this;
    }

    /**
     * Adds as cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\CabinClassAType
     * $cabinClass
     */
    public function addToCabinClass(
        \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\CabinClassAType $cabinClass
    ) {
        $this->cabinClass[] = $cabinClass;

        return $this;
    }

    /**
     * isset cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinClass($index)
    {
        return isset($this->cabinClass[$index]);
    }

    /**
     * unset cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinClass($index)
    {
        unset($this->cabinClass[$index]);
    }

    /**
     * Gets as cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\CabinClassAType[]
     */
    public function getCabinClass()
    {
        return $this->cabinClass;
    }

    /**
     * Sets a new cabinClass
     *
     * If the seat map display is to be requested for a specific cabin class, the cabin
     * class can be specified in this element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\CabinClassAType[]
     * $cabinClass
     * @return self
     */
    public function setCabinClass(array $cabinClass)
    {
        $this->cabinClass = $cabinClass;

        return $this;
    }

    /**
     * Adds as resBookDesignation
     *
     * A collection of ResBookDesignations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType
     * $resBookDesignation
     */
    public function addToResBookDesignations(
        \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation
    ) {
        $this->resBookDesignations[] = $resBookDesignation;

        return $this;
    }

    /**
     * isset resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResBookDesignations($index)
    {
        return isset($this->resBookDesignations[$index]);
    }

    /**
     * unset resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResBookDesignations($index)
    {
        unset($this->resBookDesignations[$index]);
    }

    /**
     * Gets as resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     */
    public function getResBookDesignations()
    {
        return $this->resBookDesignations;
    }

    /**
     * Sets a new resBookDesignations
     *
     * A collection of ResBookDesignations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     * $resBookDesignations
     * @return self
     */
    public function setResBookDesignations(array $resBookDesignations)
    {
        $this->resBookDesignations = $resBookDesignations;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareBasisCodeType
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(\Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }


}

