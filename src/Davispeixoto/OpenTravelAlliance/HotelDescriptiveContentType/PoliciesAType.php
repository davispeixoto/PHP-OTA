<?php

namespace Davispeixoto\OpenTravelAlliance\HotelDescriptiveContentType;

use Davispeixoto\OpenTravelAlliance\PoliciesType;

/**
 * Class representing PoliciesAType
 */
class PoliciesAType extends PoliciesType
{

    /**
     * If true, indicates that room types can be guaranteed on reservations booked
     * through GDS channels.
     *
     * @property boolean $guaranteeRoomTypeViaGDS
     */
    private $guaranteeRoomTypeViaGDS = null;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by
     * central reservation centers.
     *
     * @property boolean $guaranteeRoomTypeViaCRC
     */
    private $guaranteeRoomTypeViaCRC = null;

    /**
     * If true, indicates that room types can be guaranteed on reservations booked by
     * the property.
     *
     * @property boolean $guaranteeRoomTypeViaProperty
     */
    private $guaranteeRoomTypeViaProperty = null;

    /**
     * Gets as guaranteeRoomTypeViaGDS
     *
     * If true, indicates that room types can be guaranteed on reservations booked
     * through GDS channels.
     *
     * @return boolean
     */
    public function getGuaranteeRoomTypeViaGDS()
    {
        return $this->guaranteeRoomTypeViaGDS;
    }

    /**
     * Sets a new guaranteeRoomTypeViaGDS
     *
     * If true, indicates that room types can be guaranteed on reservations booked
     * through GDS channels.
     *
     * @param boolean $guaranteeRoomTypeViaGDS
     * @return self
     */
    public function setGuaranteeRoomTypeViaGDS($guaranteeRoomTypeViaGDS)
    {
        $this->guaranteeRoomTypeViaGDS = $guaranteeRoomTypeViaGDS;

        return $this;
    }

    /**
     * Gets as guaranteeRoomTypeViaCRC
     *
     * If true, indicates that room types can be guaranteed on reservations booked by
     * central reservation centers.
     *
     * @return boolean
     */
    public function getGuaranteeRoomTypeViaCRC()
    {
        return $this->guaranteeRoomTypeViaCRC;
    }

    /**
     * Sets a new guaranteeRoomTypeViaCRC
     *
     * If true, indicates that room types can be guaranteed on reservations booked by
     * central reservation centers.
     *
     * @param boolean $guaranteeRoomTypeViaCRC
     * @return self
     */
    public function setGuaranteeRoomTypeViaCRC($guaranteeRoomTypeViaCRC)
    {
        $this->guaranteeRoomTypeViaCRC = $guaranteeRoomTypeViaCRC;

        return $this;
    }

    /**
     * Gets as guaranteeRoomTypeViaProperty
     *
     * If true, indicates that room types can be guaranteed on reservations booked by
     * the property.
     *
     * @return boolean
     */
    public function getGuaranteeRoomTypeViaProperty()
    {
        return $this->guaranteeRoomTypeViaProperty;
    }

    /**
     * Sets a new guaranteeRoomTypeViaProperty
     *
     * If true, indicates that room types can be guaranteed on reservations booked by
     * the property.
     *
     * @param boolean $guaranteeRoomTypeViaProperty
     * @return self
     */
    public function setGuaranteeRoomTypeViaProperty($guaranteeRoomTypeViaProperty)
    {
        $this->guaranteeRoomTypeViaProperty = $guaranteeRoomTypeViaProperty;

        return $this;
    }


}

