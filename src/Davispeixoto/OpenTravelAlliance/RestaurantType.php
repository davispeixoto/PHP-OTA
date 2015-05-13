<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RestaurantType
 *
 * Information associated with a specific restaurant.
 * XSD Type: RestaurantType
 */
class RestaurantType
{

    /**
     * The name of the restaurant at the facility.
     *
     * @property string $restaurantName
     */
    private $restaurantName = null;

    /**
     * The total seating capacity for this restaurant.
     *
     * @property integer $maxSeatingCapacity
     */
    private $maxSeatingCapacity = null;

    /**
     * The maximum number of people that can be seated as a single party in this
     * restaurant.
     *
     * @property integer $maxSingleParty
     */
    private $maxSingleParty = null;

    /**
     * Identification code of the restaurant service or facility for inventory and
     * booking purposes if the service is an inventoriable item.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * If TRUE, breakfast is served.
     *
     * @property boolean $offerBreakfast
     */
    private $offerBreakfast = null;

    /**
     * If TRUE, lunch is served.
     *
     * @property boolean $offerLunch
     */
    private $offerLunch = null;

    /**
     * If TRUE, dinner is served.
     *
     * @property boolean $offerDinner
     */
    private $offerDinner = null;

    /**
     * If TRUE, brunch is served.
     *
     * @property boolean $offerBrunch
     */
    private $offerBrunch = null;

    /**
     * Denotes whether a service is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * If TRUE, a reservation must be made to dine in the restaurant.
     *
     * @property boolean $reservationReqInd
     */
    private $reservationReqInd = null;

    /**
     * If true, this is a featured restaurant for the property.Example: true
     *
     * @property boolean $featuredInd
     */
    private $featuredInd = null;

    /**
     * Multimedia information about the restaurant.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\MultimediaDescriptionsAType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Indicates the directions to a specific restaurant.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RelativePositionType
     * $relativePosition
     */
    private $relativePosition = null;

    /**
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Collection of types of restaurant.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     * $infoCodes
     */
    private $infoCodes = null;

    /**
     * Collection of cuisine types of restaurant.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     * $cuisineCodes
     */
    private $cuisineCodes = null;

    /**
     * Descriptive text that describes the restaurant.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as restaurantName
     *
     * The name of the restaurant at the facility.
     *
     * @return string
     */
    public function getRestaurantName()
    {
        return $this->restaurantName;
    }

    /**
     * Sets a new restaurantName
     *
     * The name of the restaurant at the facility.
     *
     * @param string $restaurantName
     * @return self
     */
    public function setRestaurantName($restaurantName)
    {
        $this->restaurantName = $restaurantName;

        return $this;
    }

    /**
     * Gets as maxSeatingCapacity
     *
     * The total seating capacity for this restaurant.
     *
     * @return integer
     */
    public function getMaxSeatingCapacity()
    {
        return $this->maxSeatingCapacity;
    }

    /**
     * Sets a new maxSeatingCapacity
     *
     * The total seating capacity for this restaurant.
     *
     * @param integer $maxSeatingCapacity
     * @return self
     */
    public function setMaxSeatingCapacity($maxSeatingCapacity)
    {
        $this->maxSeatingCapacity = $maxSeatingCapacity;

        return $this;
    }

    /**
     * Gets as maxSingleParty
     *
     * The maximum number of people that can be seated as a single party in this
     * restaurant.
     *
     * @return integer
     */
    public function getMaxSingleParty()
    {
        return $this->maxSingleParty;
    }

    /**
     * Sets a new maxSingleParty
     *
     * The maximum number of people that can be seated as a single party in this
     * restaurant.
     *
     * @param integer $maxSingleParty
     * @return self
     */
    public function setMaxSingleParty($maxSingleParty)
    {
        $this->maxSingleParty = $maxSingleParty;

        return $this;
    }

    /**
     * Gets as invCode
     *
     * Identification code of the restaurant service or facility for inventory and
     * booking purposes if the service is an inventoriable item.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * Identification code of the restaurant service or facility for inventory and
     * booking purposes if the service is an inventoriable item.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;

        return $this;
    }

    /**
     * Gets as offerBreakfast
     *
     * If TRUE, breakfast is served.
     *
     * @return boolean
     */
    public function getOfferBreakfast()
    {
        return $this->offerBreakfast;
    }

    /**
     * Sets a new offerBreakfast
     *
     * If TRUE, breakfast is served.
     *
     * @param boolean $offerBreakfast
     * @return self
     */
    public function setOfferBreakfast($offerBreakfast)
    {
        $this->offerBreakfast = $offerBreakfast;

        return $this;
    }

    /**
     * Gets as offerLunch
     *
     * If TRUE, lunch is served.
     *
     * @return boolean
     */
    public function getOfferLunch()
    {
        return $this->offerLunch;
    }

    /**
     * Sets a new offerLunch
     *
     * If TRUE, lunch is served.
     *
     * @param boolean $offerLunch
     * @return self
     */
    public function setOfferLunch($offerLunch)
    {
        $this->offerLunch = $offerLunch;

        return $this;
    }

    /**
     * Gets as offerDinner
     *
     * If TRUE, dinner is served.
     *
     * @return boolean
     */
    public function getOfferDinner()
    {
        return $this->offerDinner;
    }

    /**
     * Sets a new offerDinner
     *
     * If TRUE, dinner is served.
     *
     * @param boolean $offerDinner
     * @return self
     */
    public function setOfferDinner($offerDinner)
    {
        $this->offerDinner = $offerDinner;

        return $this;
    }

    /**
     * Gets as offerBrunch
     *
     * If TRUE, brunch is served.
     *
     * @return boolean
     */
    public function getOfferBrunch()
    {
        return $this->offerBrunch;
    }

    /**
     * Sets a new offerBrunch
     *
     * If TRUE, brunch is served.
     *
     * @param boolean $offerBrunch
     * @return self
     */
    public function setOfferBrunch($offerBrunch)
    {
        $this->offerBrunch = $offerBrunch;

        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param integer $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * Gets as reservationReqInd
     *
     * If TRUE, a reservation must be made to dine in the restaurant.
     *
     * @return boolean
     */
    public function getReservationReqInd()
    {
        return $this->reservationReqInd;
    }

    /**
     * Sets a new reservationReqInd
     *
     * If TRUE, a reservation must be made to dine in the restaurant.
     *
     * @param boolean $reservationReqInd
     * @return self
     */
    public function setReservationReqInd($reservationReqInd)
    {
        $this->reservationReqInd = $reservationReqInd;

        return $this;
    }

    /**
     * Gets as featuredInd
     *
     * If true, this is a featured restaurant for the property.Example: true
     *
     * @return boolean
     */
    public function getFeaturedInd()
    {
        return $this->featuredInd;
    }

    /**
     * Sets a new featuredInd
     *
     * If true, this is a featured restaurant for the property.Example: true
     *
     * @param boolean $featuredInd
     * @return self
     */
    public function setFeaturedInd($featuredInd)
    {
        $this->featuredInd = $featuredInd;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the restaurant.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\MultimediaDescriptionsAType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the restaurant.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\MultimediaDescriptionsAType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\RestaurantType\MultimediaDescriptionsAType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Gets as relativePosition
     *
     * Indicates the directions to a specific restaurant.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RelativePositionType
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * Indicates the directions to a specific restaurant.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition
     * @return self
     */
    public function setRelativePosition(\Davispeixoto\OpenTravelAlliance\RelativePositionType $relativePosition)
    {
        $this->relativePosition = $relativePosition;

        return $this;
    }

    /**
     * Adds as operationSchedule
     *
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType
     * $operationSchedule
     */
    public function addToOperationSchedules(
        \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
    ) {
        $this->operationSchedules[] = $operationSchedule;

        return $this;
    }

    /**
     * isset operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationSchedules($index)
    {
        return isset($this->operationSchedules[$index]);
    }

    /**
     * unset operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationSchedules($index)
    {
        unset($this->operationSchedules[$index]);
    }

    /**
     * Gets as operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Collection of operating times for the restaurant including detail such as
     * season, day of week, or a combination.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(array $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Adds as infoCode
     *
     * Collection of types of restaurant.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType
     * $infoCode
     */
    public function addToInfoCodes(
        \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType $infoCode
    ) {
        $this->infoCodes[] = $infoCode;

        return $this;
    }

    /**
     * isset infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfoCodes($index)
    {
        return isset($this->infoCodes[$index]);
    }

    /**
     * unset infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfoCodes($index)
    {
        unset($this->infoCodes[$index]);
    }

    /**
     * Gets as infoCodes
     *
     * Collection of types of restaurant.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     */
    public function getInfoCodes()
    {
        return $this->infoCodes;
    }

    /**
     * Sets a new infoCodes
     *
     * Collection of types of restaurant.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\InfoCodesAType\InfoCodeAType[]
     * $infoCodes
     * @return self
     */
    public function setInfoCodes(array $infoCodes)
    {
        $this->infoCodes = $infoCodes;

        return $this;
    }

    /**
     * Adds as cuisineCode
     *
     * Collection of cuisine types of restaurant.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType
     * $cuisineCode
     */
    public function addToCuisineCodes(
        \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType $cuisineCode
    ) {
        $this->cuisineCodes[] = $cuisineCode;

        return $this;
    }

    /**
     * isset cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCuisineCodes($index)
    {
        return isset($this->cuisineCodes[$index]);
    }

    /**
     * unset cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCuisineCodes($index)
    {
        unset($this->cuisineCodes[$index]);
    }

    /**
     * Gets as cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     */
    public function getCuisineCodes()
    {
        return $this->cuisineCodes;
    }

    /**
     * Sets a new cuisineCodes
     *
     * Collection of cuisine types of restaurant.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RestaurantType\CuisineCodesAType\CuisineCodeAType[]
     * $cuisineCodes
     * @return self
     */
    public function setCuisineCodes(array $cuisineCodes)
    {
        $this->cuisineCodes = $cuisineCodes;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the restaurant.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the restaurant.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

