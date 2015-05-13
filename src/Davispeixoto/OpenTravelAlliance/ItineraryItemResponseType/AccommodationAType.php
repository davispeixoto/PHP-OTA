<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType;

/**
 * Class representing AccommodationAType
 */
class AccommodationAType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Describes the resort or area containing a property.
     *
     * @property string $resortName
     */
    private $resortName = null;

    /**
     * The code for the resort or area containing a property.
     *
     * @property string $resortCode
     */
    private $resortCode = null;

    /**
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @property string $destinationCode
     */
    private $destinationCode = null;

    /**
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @property string $destinationLevel
     */
    private $destinationLevel = null;

    /**
     * The name of the destination.
     *
     * @property string $destinationName
     */
    private $destinationName = null;

    /**
     * Full name or description plus codes for a property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PropertyIdentityType $identity
     */
    private $identity = null;

    /**
     * Provides the supplier's and/or national classifiaction and/or rating of the
     * property.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\AccommodationClassAType
     * $accommodationClass
     */
    private $accommodationClass = null;

    /**
     * The Start date and Duration or End Date of the accommodation stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     */
    private $dateRange = null;

    /**
     * A collection of RoomProfile elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     * $roomProfiles
     */
    private $roomProfiles = null;

    /**
     * A collection of MealPlan elements
     *
     * @property \Davispeixoto\OpenTravelAlliance\MealPlanType[] $mealPlans
     */
    private $mealPlans = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as resortName
     *
     * Describes the resort or area containing a property.
     *
     * @return string
     */
    public function getResortName()
    {
        return $this->resortName;
    }

    /**
     * Sets a new resortName
     *
     * Describes the resort or area containing a property.
     *
     * @param string $resortName
     * @return self
     */
    public function setResortName($resortName)
    {
        $this->resortName = $resortName;

        return $this;
    }

    /**
     * Gets as resortCode
     *
     * The code for the resort or area containing a property.
     *
     * @return string
     */
    public function getResortCode()
    {
        return $this->resortCode;
    }

    /**
     * Sets a new resortCode
     *
     * The code for the resort or area containing a property.
     *
     * @param string $resortCode
     * @return self
     */
    public function setResortCode($resortCode)
    {
        $this->resortCode = $resortCode;

        return $this;
    }

    /**
     * Gets as destinationCode
     *
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @return string
     */
    public function getDestinationCode()
    {
        return $this->destinationCode;
    }

    /**
     * Sets a new destinationCode
     *
     * The code identifying a destination. For a Country, this will be the ISO 3166-2
     * code.
     *
     * @param string $destinationCode
     * @return self
     */
    public function setDestinationCode($destinationCode)
    {
        $this->destinationCode = $destinationCode;

        return $this;
    }

    /**
     * Gets as destinationLevel
     *
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @return string
     */
    public function getDestinationLevel()
    {
        return $this->destinationLevel;
    }

    /**
     * Sets a new destinationLevel
     *
     * Defines the geopolitical level of a destination (e.g., Country, Region).
     *
     * @param string $destinationLevel
     * @return self
     */
    public function setDestinationLevel($destinationLevel)
    {
        $this->destinationLevel = $destinationLevel;

        return $this;
    }

    /**
     * Gets as destinationName
     *
     * The name of the destination.
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->destinationName;
    }

    /**
     * Sets a new destinationName
     *
     * The name of the destination.
     *
     * @param string $destinationName
     * @return self
     */
    public function setDestinationName($destinationName)
    {
        $this->destinationName = $destinationName;

        return $this;
    }

    /**
     * Gets as identity
     *
     * Full name or description plus codes for a property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PropertyIdentityType
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * Sets a new identity
     *
     * Full name or description plus codes for a property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PropertyIdentityType $identity
     * @return self
     */
    public function setIdentity(\Davispeixoto\OpenTravelAlliance\PropertyIdentityType $identity)
    {
        $this->identity = $identity;

        return $this;
    }

    /**
     * Gets as accommodationClass
     *
     * Provides the supplier's and/or national classifiaction and/or rating of the
     * property.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\AccommodationClassAType
     */
    public function getAccommodationClass()
    {
        return $this->accommodationClass;
    }

    /**
     * Sets a new accommodationClass
     *
     * Provides the supplier's and/or national classifiaction and/or rating of the
     * property.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\AccommodationClassAType
     * $accommodationClass
     * @return self
     */
    public function setAccommodationClass(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\AccommodationClassAType $accommodationClass
    ) {
        $this->accommodationClass = $accommodationClass;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * The Start date and Duration or End Date of the accommodation stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateTimeSpanType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * The Start date and Duration or End Date of the accommodation stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange
     * @return self
     */
    public function setDateRange(\Davispeixoto\OpenTravelAlliance\DateTimeSpanType $dateRange)
    {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as roomProfile
     *
     * A collection of RoomProfile elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType
     * $roomProfile
     */
    public function addToRoomProfiles(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType $roomProfile
    ) {
        $this->roomProfiles[] = $roomProfile;

        return $this;
    }

    /**
     * isset roomProfiles
     *
     * A collection of RoomProfile elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomProfiles($index)
    {
        return isset($this->roomProfiles[$index]);
    }

    /**
     * unset roomProfiles
     *
     * A collection of RoomProfile elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomProfiles($index)
    {
        unset($this->roomProfiles[$index]);
    }

    /**
     * Gets as roomProfiles
     *
     * A collection of RoomProfile elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     */
    public function getRoomProfiles()
    {
        return $this->roomProfiles;
    }

    /**
     * Sets a new roomProfiles
     *
     * A collection of RoomProfile elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType[]
     * $roomProfiles
     * @return self
     */
    public function setRoomProfiles(array $roomProfiles)
    {
        $this->roomProfiles = $roomProfiles;

        return $this;
    }

    /**
     * Adds as mealPlan
     *
     * A collection of MealPlan elements
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan
     */
    public function addToMealPlans(\Davispeixoto\OpenTravelAlliance\MealPlanType $mealPlan)
    {
        $this->mealPlans[] = $mealPlan;

        return $this;
    }

    /**
     * isset mealPlans
     *
     * A collection of MealPlan elements
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMealPlans($index)
    {
        return isset($this->mealPlans[$index]);
    }

    /**
     * unset mealPlans
     *
     * A collection of MealPlan elements
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMealPlans($index)
    {
        unset($this->mealPlans[$index]);
    }

    /**
     * Gets as mealPlans
     *
     * A collection of MealPlan elements
     *
     * @return \Davispeixoto\OpenTravelAlliance\MealPlanType[]
     */
    public function getMealPlans()
    {
        return $this->mealPlans;
    }

    /**
     * Sets a new mealPlans
     *
     * A collection of MealPlan elements
     *
     * @param \Davispeixoto\OpenTravelAlliance\MealPlanType[] $mealPlans
     * @return self
     */
    public function setMealPlans(array $mealPlans)
    {
        $this->mealPlans = $mealPlans;

        return $this;
    }


}

