<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
{

    /**
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * MealsIncluded MAY specify which meals are included in this rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
     * $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * RatePlanDescription MUST specify information regarding the rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
     * $ratePlanDescription
     */
    private $ratePlanDescription = null;

    /**
     * Gets as ratePlanCode
     *
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * RatePlanCode MUST specify the code that identifies this rate plan.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }

    /**
     * Gets as mealsIncluded
     *
     * MealsIncluded MAY specify which meals are included in this rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * MealsIncluded MAY specify which meals are included in this rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType
     * $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\MealsIncludedAType $mealsIncluded
    ) {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Gets as ratePlanDescription
     *
     * RatePlanDescription MUST specify information regarding the rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
     */
    public function getRatePlanDescription()
    {
        return $this->ratePlanDescription;
    }

    /**
     * Sets a new ratePlanDescription
     *
     * RatePlanDescription MUST specify information regarding the rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType
     * $ratePlanDescription
     * @return self
     */
    public function setRatePlanDescription(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RatePlansAType\RatePlanAType\RatePlanDescriptionAType $ratePlanDescription
    ) {
        $this->ratePlanDescription = $ratePlanDescription;

        return $this;
    }


}

