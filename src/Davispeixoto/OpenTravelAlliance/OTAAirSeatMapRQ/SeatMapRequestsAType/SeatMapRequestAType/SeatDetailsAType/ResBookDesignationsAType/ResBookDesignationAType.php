<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType\ResBookDesignationsAType;

/**
 * Class representing ResBookDesignationAType
 */
class ResBookDesignationAType
{

    /**
     * If the booking class is know for which the seat map is to be requested then the
     * specific Booking class code can be entered here. The response will have the seat
     * map for the cabin class in which the said booking classcode belongs.
     *
     * @property string $resBookDesigCode
     */
    private $resBookDesigCode = null;

    /**
     * Gets as resBookDesigCode
     *
     * If the booking class is know for which the seat map is to be requested then the
     * specific Booking class code can be entered here. The response will have the seat
     * map for the cabin class in which the said booking classcode belongs.
     *
     * @return string
     */
    public function getResBookDesigCode()
    {
        return $this->resBookDesigCode;
    }

    /**
     * Sets a new resBookDesigCode
     *
     * If the booking class is know for which the seat map is to be requested then the
     * specific Booking class code can be entered here. The response will have the seat
     * map for the cabin class in which the said booking classcode belongs.
     *
     * @param string $resBookDesigCode
     * @return self
     */
    public function setResBookDesigCode($resBookDesigCode)
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }


}

