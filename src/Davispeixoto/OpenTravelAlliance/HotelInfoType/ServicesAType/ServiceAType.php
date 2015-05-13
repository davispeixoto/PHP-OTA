<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType\ServicesAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{

    /**
     * This may be used to identify a standard service included in the room rate.
     *
     * @property boolean $included
     */
    private $included = null;

    /**
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Refer to OpenTravel Code List Business Srvc Type (BUS).
     *
     * @property string $businessServiceCode
     */
    private $businessServiceCode = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with either Code or BusinessServiceCode.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * This flag indicates whether the business service is available to all guests or
     * only to certain guests at the facility.Values: 0 = (No) Not Available to All
     * Guests, 1 = (Yes) Available to All Guests.
     *
     * @property boolean $availableToAnyGuest
     */
    private $availableToAnyGuest = null;

    /**
     * Identification code of the business service for inventory and booking purposes
     * if the service is an inventoriable item.
     *
     * @property string $invCode
     */
    private $invCode = null;

    /**
     * Denotes whether a service is onsite, offsite or information is not available.
     * Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @property string $proximityCode
     */
    private $proximityCode = null;

    /**
     * This describes available meal plans for a property. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @property string $mealPlanCode
     */
    private $mealPlanCode = null;

    /**
     * Denotes the total number of service items identified by the Code attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * At this level, MeetingRoomCode is intended for meeting/business services when
     * high level data is being sent that requires operation schedule information
     * and/or contact information. Refer to OpenTravel Codelist Meeting Room Code
     * (MRC). OpenTravel Codelist MRC is also used in
     * FacilityInfo/MeetingRooms/Codes/Code for the instance when an amenity or service
     * applies to all meeting rooms and in
     * FacilityInfo/MeetingRooms/MeetingRoom/Codes/Code for the instance when an
     * amenity or service applies to a specific meeting room.
     *
     * @property string $meetingRoomCode
     */
    private $meetingRoomCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * If true, this is a featured service for the property.Example: true
     *
     * @property boolean $featuredInd
     */
    private $featuredInd = null;

    /**
     * Contact information pertaining to a service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     */
    private $contact = null;

    /**
     * Directions to the service provider.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RelativePositionType
     * $relativePosition
     */
    private $relativePosition = null;

    /**
     * Collection of days, times, and fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Multimedia information about the service.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Collection of features offered by a hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Descriptive text that describes the service.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as included
     *
     * This may be used to identify a standard service included in the room rate.
     *
     * @return boolean
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * Sets a new included
     *
     * This may be used to identify a standard service included in the room rate.
     *
     * @param boolean $included
     * @return self
     */
    public function setIncluded($included)
    {
        $this->included = $included;

        return $this;
    }

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
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
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
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
     * Gets as businessServiceCode
     *
     * Refer to OpenTravel Code List Business Srvc Type (BUS).
     *
     * @return string
     */
    public function getBusinessServiceCode()
    {
        return $this->businessServiceCode;
    }

    /**
     * Sets a new businessServiceCode
     *
     * Refer to OpenTravel Code List Business Srvc Type (BUS).
     *
     * @param string $businessServiceCode
     * @return self
     */
    public function setBusinessServiceCode($businessServiceCode)
    {
        $this->businessServiceCode = $businessServiceCode;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with either Code or BusinessServiceCode.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with either Code or BusinessServiceCode.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as availableToAnyGuest
     *
     * This flag indicates whether the business service is available to all guests or
     * only to certain guests at the facility.Values: 0 = (No) Not Available to All
     * Guests, 1 = (Yes) Available to All Guests.
     *
     * @return boolean
     */
    public function getAvailableToAnyGuest()
    {
        return $this->availableToAnyGuest;
    }

    /**
     * Sets a new availableToAnyGuest
     *
     * This flag indicates whether the business service is available to all guests or
     * only to certain guests at the facility.Values: 0 = (No) Not Available to All
     * Guests, 1 = (Yes) Available to All Guests.
     *
     * @param boolean $availableToAnyGuest
     * @return self
     */
    public function setAvailableToAnyGuest($availableToAnyGuest)
    {
        $this->availableToAnyGuest = $availableToAnyGuest;

        return $this;
    }

    /**
     * Gets as invCode
     *
     * Identification code of the business service for inventory and booking purposes
     * if the service is an inventoriable item.
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
     * Identification code of the business service for inventory and booking purposes
     * if the service is an inventoriable item.
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
     * Gets as mealPlanCode
     *
     * This describes available meal plans for a property. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @return string
     */
    public function getMealPlanCode()
    {
        return $this->mealPlanCode;
    }

    /**
     * Sets a new mealPlanCode
     *
     * This describes available meal plans for a property. Refer to OpenTravel Code
     * Table Meal Plan Type (MPT).
     *
     * @param string $mealPlanCode
     * @return self
     */
    public function setMealPlanCode($mealPlanCode)
    {
        $this->mealPlanCode = $mealPlanCode;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Denotes the total number of service items identified by the Code attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Denotes the total number of service items identified by the Code attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

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
     * Gets as meetingRoomCode
     *
     * At this level, MeetingRoomCode is intended for meeting/business services when
     * high level data is being sent that requires operation schedule information
     * and/or contact information. Refer to OpenTravel Codelist Meeting Room Code
     * (MRC). OpenTravel Codelist MRC is also used in
     * FacilityInfo/MeetingRooms/Codes/Code for the instance when an amenity or service
     * applies to all meeting rooms and in
     * FacilityInfo/MeetingRooms/MeetingRoom/Codes/Code for the instance when an
     * amenity or service applies to a specific meeting room.
     *
     * @return string
     */
    public function getMeetingRoomCode()
    {
        return $this->meetingRoomCode;
    }

    /**
     * Sets a new meetingRoomCode
     *
     * At this level, MeetingRoomCode is intended for meeting/business services when
     * high level data is being sent that requires operation schedule information
     * and/or contact information. Refer to OpenTravel Codelist Meeting Room Code
     * (MRC). OpenTravel Codelist MRC is also used in
     * FacilityInfo/MeetingRooms/Codes/Code for the instance when an amenity or service
     * applies to all meeting rooms and in
     * FacilityInfo/MeetingRooms/MeetingRoom/Codes/Code for the instance when an
     * amenity or service applies to a specific meeting room.
     *
     * @param string $meetingRoomCode
     * @return self
     */
    public function setMeetingRoomCode($meetingRoomCode)
    {
        $this->meetingRoomCode = $meetingRoomCode;

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
     * Gets as featuredInd
     *
     * If true, this is a featured service for the property.Example: true
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
     * If true, this is a featured service for the property.Example: true
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
     * Gets as contact
     *
     * Contact information pertaining to a service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information pertaining to a service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactInfoType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Gets as relativePosition
     *
     * Directions to the service provider.
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
     * Directions to the service provider.
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
     * Collection of days, times, and fees.
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
     * Collection of days, times, and fees.
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
     * Collection of days, times, and fees.
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
     * Collection of days, times, and fees.
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
     * Collection of days, times, and fees.
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
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the service.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the service.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Adds as feature
     *
     * Collection of features offered by a hotel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType $feature
     */
    public function addToFeatures(\Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType $feature)
    {
        $this->features[] = $feature;

        return $this;
    }

    /**
     * isset features
     *
     * Collection of features offered by a hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * Collection of features offered by a hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * Collection of features offered by a hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Collection of features offered by a hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the service.
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
     * Descriptive text that describes the service.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }


}

