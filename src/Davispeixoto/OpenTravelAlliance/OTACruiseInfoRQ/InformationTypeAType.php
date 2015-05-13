<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseInfoRQ;

/**
 * Class representing InformationTypeAType
 */
class InformationTypeAType
{

    /**
     * Provides the code identifying the item.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The name of an item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Contains the Reservation ID of a booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID
     */
    private $reservationID = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Provides the code identifying the item.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of an item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as reservationID
     *
     * Contains the Reservation ID of a booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Contains the Reservation ID of a booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID
     * @return self
     */
    public function setReservationID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Gets as sailingInfo
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingCategoryInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }


}

