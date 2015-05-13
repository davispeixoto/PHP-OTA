<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RoomStayType
 *
 * Room availability details for a single property, including room types, rate
 * plans, room rates, guarantee requirements and basic property information.
 * XSD Type: RoomStayType
 */
class RoomStayType
{

    /**
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @property string[] $warningRPH
     */
    private $warningRPH = null;

    /**
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomTypeType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RatePlanType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomRateType[] $roomRates
     */
    private $roomRates = null;

    /**
     * Guarantee MUST specify the guarantee information required to book a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee
     */
    private $guarantee = null;

    /**
     * BasicPropertyInfo MUST identify the property for this RoomStay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType
     * $basicPropertyInfo
     */
    private $basicPropertyInfo = null;

    /**
     * Adds as warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @return self
     * @param string $warningRPH
     */
    public function addToWarningRPH($warningRPH)
    {
        $this->warningRPH[] = $warningRPH;

        return $this;
    }

    /**
     * isset warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarningRPH($index)
    {
        return isset($this->warningRPH[$index]);
    }

    /**
     * unset warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarningRPH($index)
    {
        unset($this->warningRPH[$index]);
    }

    /**
     * Gets as warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @return string[]
     */
    public function getWarningRPH()
    {
        return $this->warningRPH;
    }

    /**
     * Sets a new warningRPH
     *
     * This references the RPH found in the Warning element. Used to identify the
     * warnings associated with this RoomStay.
     *
     * @param string $warningRPH
     * @return self
     */
    public function setWarningRPH(array $warningRPH)
    {
        $this->warningRPH = $warningRPH;

        return $this;
    }

    /**
     * Adds as roomType
     *
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeType $roomType
     */
    public function addToRoomTypes(\Davispeixoto\OpenTravelAlliance\RoomTypeType $roomType)
    {
        $this->roomTypes[] = $roomType;

        return $this;
    }

    /**
     * isset roomTypes
     *
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomTypeType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of available RoomTypes. If more than one room type is available for
     * this hotel, the RoomType element MUST repeat for each room type.The RoomType
     * element is used to contain all the room type information for a single RateType
     * Code (ex A1K) for a given date range.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomTypeType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes)
    {
        $this->roomTypes = $roomTypes;

        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanType $ratePlan
     */
    public function addToRatePlans(\Davispeixoto\OpenTravelAlliance\RatePlanType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RatePlanType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of available Rate Plans. If more than one rate plan is available
     * for this hotel, the RatePlan element MUST repeat for each rate plan.The rate
     * plan element is used to contain all the rate information for a single Rate Plan
     * Code (ex RACK) for a given date range. A given Rate Plan may have variable
     * rates, over the effective period of the Rate Plan, this is represented by the
     * child element Rates.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RatePlanType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;

        return $this;
    }

    /**
     * Adds as roomRate
     *
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateType $roomRate
     */
    public function addToRoomRates(\Davispeixoto\OpenTravelAlliance\RoomRateType $roomRate)
    {
        $this->roomRates[] = $roomRate;

        return $this;
    }

    /**
     * isset roomRates
     *
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomRates($index)
    {
        return isset($this->roomRates[$index]);
    }

    /**
     * unset roomRates
     *
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomRates($index)
    {
        unset($this->roomRates[$index]);
    }

    /**
     * Gets as roomRates
     *
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomRateType[]
     */
    public function getRoomRates()
    {
        return $this->roomRates;
    }

    /**
     * Sets a new roomRates
     *
     * A collection of available Room Rates. If more than one room rate is available
     * for this hotel, the RoomRate element MUST repeat for each room rate.The
     * combination of a given Rate Plan and Room Type. This allows for support for
     * systems where Rate Plans are child of Room Type as well as systems which Room
     * Types are child of Rate Plans.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomRateType[] $roomRates
     * @return self
     */
    public function setRoomRates(array $roomRates)
    {
        $this->roomRates = $roomRates;

        return $this;
    }

    /**
     * Gets as guarantee
     *
     * Guarantee MUST specify the guarantee information required to book a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuaranteeType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Guarantee MUST specify the guarantee information required to book a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee
     * @return self
     */
    public function setGuarantee(\Davispeixoto\OpenTravelAlliance\GuaranteeType $guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Gets as basicPropertyInfo
     *
     * BasicPropertyInfo MUST identify the property for this RoomStay.
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
     * BasicPropertyInfo MUST identify the property for this RoomStay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo
     * @return self
     */
    public function setBasicPropertyInfo(\Davispeixoto\OpenTravelAlliance\BasicPropertyInfoType $basicPropertyInfo)
    {
        $this->basicPropertyInfo = $basicPropertyInfo;

        return $this;
    }


}

