<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType;

/**
 * Class representing HotelStayAType
 */
class HotelStayAType
{

    /**
     * References one or more room stays associated with this hotel stay.
     *
     * @property string[] $roomStayRPH
     */
    private $roomStayRPH = null;

    /**
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType[]
     * $availability
     */
    private $availability = null;

    /**
     * Property Information for the Hotel Stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\PriceAType[]
     * $price
     */
    private $price = null;

    /**
     * Adds as roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @return self
     * @param string $roomStayRPH
     */
    public function addToRoomStayRPH($roomStayRPH)
    {
        $this->roomStayRPH[] = $roomStayRPH;

        return $this;
    }

    /**
     * isset roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomStayRPH($index)
    {
        return isset($this->roomStayRPH[$index]);
    }

    /**
     * unset roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomStayRPH($index)
    {
        unset($this->roomStayRPH[$index]);
    }

    /**
     * Gets as roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @return string[]
     */
    public function getRoomStayRPH()
    {
        return $this->roomStayRPH;
    }

    /**
     * Sets a new roomStayRPH
     *
     * References one or more room stays associated with this hotel stay.
     *
     * @param string $roomStayRPH
     * @return self
     */
    public function setRoomStayRPH(array $roomStayRPH)
    {
        $this->roomStayRPH = $roomStayRPH;

        return $this;
    }

    /**
     * Adds as availability
     *
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType
     * $availability
     */
    public function addToAvailability(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType $availability
    ) {
        $this->availability[] = $availability;

        return $this;
    }

    /**
     * isset availability
     *
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailability($index)
    {
        return isset($this->availability[$index]);
    }

    /**
     * unset availability
     *
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailability($index)
    {
        unset($this->availability[$index]);
    }

    /**
     * Gets as availability
     *
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType[]
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * Details on the hotel stay including the type of availabilty and the date range
     * for which it applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\AvailabilityAType[]
     * $availability
     * @return self
     */
    public function setAvailability(array $availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * Property Information for the Hotel Stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType
     */
    public function getBasicPropertyInfo()
    {
        return $this->basicPropertyInfo;
    }

    /**
     * Sets a new basicPropertyInfo
     *
     * Property Information for the Hotel Stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }

    /**
     * Adds as price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\PriceAType
     * $price
     */
    public function addToPrice(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\PriceAType $price
    ) {
        $this->price[] = $price;

        return $this;
    }

    /**
     * isset price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\PriceAType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Pricing for the hotel stay including the date range for which it applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\HotelStaysAType\HotelStayAType\PriceAType[]
     * $price
     * @return self
     */
    public function setPrice(array $price)
    {
        $this->price = $price;

        return $this;
    }


}

