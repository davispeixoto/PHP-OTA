<?php

namespace Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType;

/**
 * Class representing ResBookDesignationsAType
 */
class ResBookDesignationsAType
{

    /**
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     * $resBookDesignation
     */
    private $resBookDesignation = null;

    /**
     * Adds as resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType
     * $resBookDesignation
     */
    public function addToResBookDesignation(
        \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType $resBookDesignation
    ) {
        $this->resBookDesignation[] = $resBookDesignation;

        return $this;
    }

    /**
     * isset resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResBookDesignation($index)
    {
        return isset($this->resBookDesignation[$index]);
    }

    /**
     * unset resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResBookDesignation($index)
    {
        unset($this->resBookDesignation[$index]);
    }

    /**
     * Gets as resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     */
    public function getResBookDesignation()
    {
        return $this->resBookDesignation;
    }

    /**
     * Sets a new resBookDesignation
     *
     * If the seat map display is requested for the cabin class in which a particular
     * booking designator code (booking class) lies then that booking class can be
     * specified in this element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\SeatMapQueryType\SeatDetailsAType\ResBookDesignationsAType\ResBookDesignationAType[]
     * $resBookDesignation
     * @return self
     */
    public function setResBookDesignation(array $resBookDesignation)
    {
        $this->resBookDesignation = $resBookDesignation;

        return $this;
    }


}

