<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType;

/**
 * Class representing HotelRefsAType
 */
class HotelRefsAType
{

    /**
     * Identifies hotel information for an alternate system.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Adds as hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRef(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRef[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Identifies hotel information for an alternate system.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\HotelRefsAType\HotelRefAType[]
     * $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }


}

