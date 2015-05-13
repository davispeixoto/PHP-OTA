<?php

namespace Davispeixoto\OpenTravelAlliance\MeetingRoomsType;

/**
 * Class representing MeetingRoomAType
 */
class MeetingRoomAType
{

    /**
     * This provides information as to whether the room has an irregular shape, if true
     * the room would not be of a traditional square or rectangular style.
     *
     * @property boolean $irregular
     */
    private $irregular = null;

    /**
     * This is the room name as it is defined by the system. The name used internally
     * may differ from the name used by guests.
     *
     * @property string $propertySystemName
     */
    private $propertySystemName = null;

    /**
     * This is the meeting room name as provided to the guests.
     *
     * @property string $roomName
     */
    private $roomName = null;

    /**
     * This is a number assigned to rooms, usually used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * The total number of people permitted in the meeting room.
     *
     * @property integer $meetingRoomCapacity
     */
    private $meetingRoomCapacity = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Used to imply the type of access to the meeting space (e.g. private access,
     * public access, etc.)
     *
     * @property string $access
     */
    private $access = null;

    /**
     * Defines the type of the meeting room being described (eg. boardroom, ballroom,
     * exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @property string $meetingRoomTypeCode
     */
    private $meetingRoomTypeCode = null;

    /**
     * Defines the level in the facility where the meeting room is located (i.e.,
     * lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @property string $meetingRoomLevel
     */
    private $meetingRoomLevel = null;

    /**
     * When true, the room is used for a single purpose as indicated by the
     * MeetingRoomTypeCode attribute.
     *
     * @property boolean $dedicatedIndicator
     */
    private $dedicatedIndicator = null;

    /**
     * If true, this is a featured meeting room for the property.Example: true
     *
     * @property boolean $featuredInd
     */
    private $featuredInd = null;

    /**
     * Codes or abbreviations for meeting rooms.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $codes
     */
    private $codes = null;

    /**
     * Dimensions of the meeting room.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType\DimensionAType
     * $dimension
     */
    private $dimension = null;

    /**
     * The amount of usable meeting space available at a property.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     * $availableCapacities
     */
    private $availableCapacities = null;

    /**
     * Collection of features.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Information describing the meeting room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Gets as irregular
     *
     * This provides information as to whether the room has an irregular shape, if true
     * the room would not be of a traditional square or rectangular style.
     *
     * @return boolean
     */
    public function getIrregular()
    {
        return $this->irregular;
    }

    /**
     * Sets a new irregular
     *
     * This provides information as to whether the room has an irregular shape, if true
     * the room would not be of a traditional square or rectangular style.
     *
     * @param boolean $irregular
     * @return self
     */
    public function setIrregular($irregular)
    {
        $this->irregular = $irregular;

        return $this;
    }

    /**
     * Gets as propertySystemName
     *
     * This is the room name as it is defined by the system. The name used internally
     * may differ from the name used by guests.
     *
     * @return string
     */
    public function getPropertySystemName()
    {
        return $this->propertySystemName;
    }

    /**
     * Sets a new propertySystemName
     *
     * This is the room name as it is defined by the system. The name used internally
     * may differ from the name used by guests.
     *
     * @param string $propertySystemName
     * @return self
     */
    public function setPropertySystemName($propertySystemName)
    {
        $this->propertySystemName = $propertySystemName;

        return $this;
    }

    /**
     * Gets as roomName
     *
     * This is the meeting room name as provided to the guests.
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Sets a new roomName
     *
     * This is the meeting room name as provided to the guests.
     *
     * @param string $roomName
     * @return self
     */
    public function setRoomName($roomName)
    {
        $this->roomName = $roomName;

        return $this;
    }

    /**
     * Gets as sort
     *
     * This is a number assigned to rooms, usually used to define the display order.
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
     * This is a number assigned to rooms, usually used to define the display order.
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
     * Gets as meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @return integer
     */
    public function getMeetingRoomCapacity()
    {
        return $this->meetingRoomCapacity;
    }

    /**
     * Sets a new meetingRoomCapacity
     *
     * The total number of people permitted in the meeting room.
     *
     * @param integer $meetingRoomCapacity
     * @return self
     */
    public function setMeetingRoomCapacity($meetingRoomCapacity)
    {
        $this->meetingRoomCapacity = $meetingRoomCapacity;

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
     * Gets as access
     *
     * Used to imply the type of access to the meeting space (e.g. private access,
     * public access, etc.)
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Sets a new access
     *
     * Used to imply the type of access to the meeting space (e.g. private access,
     * public access, etc.)
     *
     * @param string $access
     * @return self
     */
    public function setAccess($access)
    {
        $this->access = $access;

        return $this;
    }

    /**
     * Gets as meetingRoomTypeCode
     *
     * Defines the type of the meeting room being described (eg. boardroom, ballroom,
     * exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getMeetingRoomTypeCode()
    {
        return $this->meetingRoomTypeCode;
    }

    /**
     * Sets a new meetingRoomTypeCode
     *
     * Defines the type of the meeting room being described (eg. boardroom, ballroom,
     * exhibit space). Refer to OpenTravel Codelist Meeting Room Format Code (MRF).
     *
     * @param string $meetingRoomTypeCode
     * @return self
     */
    public function setMeetingRoomTypeCode($meetingRoomTypeCode)
    {
        $this->meetingRoomTypeCode = $meetingRoomTypeCode;

        return $this;
    }

    /**
     * Gets as meetingRoomLevel
     *
     * Defines the level in the facility where the meeting room is located (i.e.,
     * lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @return string
     */
    public function getMeetingRoomLevel()
    {
        return $this->meetingRoomLevel;
    }

    /**
     * Sets a new meetingRoomLevel
     *
     * Defines the level in the facility where the meeting room is located (i.e.,
     * lobby, mezzanine, first floor, ground, outdoor, etc.)
     *
     * @param string $meetingRoomLevel
     * @return self
     */
    public function setMeetingRoomLevel($meetingRoomLevel)
    {
        $this->meetingRoomLevel = $meetingRoomLevel;

        return $this;
    }

    /**
     * Gets as dedicatedIndicator
     *
     * When true, the room is used for a single purpose as indicated by the
     * MeetingRoomTypeCode attribute.
     *
     * @return boolean
     */
    public function getDedicatedIndicator()
    {
        return $this->dedicatedIndicator;
    }

    /**
     * Sets a new dedicatedIndicator
     *
     * When true, the room is used for a single purpose as indicated by the
     * MeetingRoomTypeCode attribute.
     *
     * @param boolean $dedicatedIndicator
     * @return self
     */
    public function setDedicatedIndicator($dedicatedIndicator)
    {
        $this->dedicatedIndicator = $dedicatedIndicator;

        return $this;
    }

    /**
     * Gets as featuredInd
     *
     * If true, this is a featured meeting room for the property.Example: true
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
     * If true, this is a featured meeting room for the property.Example: true
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
     * Adds as code
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code
     */
    public function addToCodes(\Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType $code)
    {
        $this->codes[] = $code;

        return $this;
    }

    /**
     * isset codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodes($index)
    {
        return isset($this->codes[$index]);
    }

    /**
     * unset codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodes($index)
    {
        unset($this->codes[$index]);
    }

    /**
     * Gets as codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[]
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * Sets a new codes
     *
     * Codes or abbreviations for meeting rooms.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCodeType[] $codes
     * @return self
     */
    public function setCodes(array $codes)
    {
        $this->codes = $codes;

        return $this;
    }

    /**
     * Gets as dimension
     *
     * Dimensions of the meeting room.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType\DimensionAType
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Sets a new dimension
     *
     * Dimensions of the meeting room.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType\DimensionAType
     * $dimension
     * @return self
     */
    public function setDimension(
        \Davispeixoto\OpenTravelAlliance\MeetingRoomsType\MeetingRoomAType\DimensionAType $dimension
    ) {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Adds as meetingRoomCapacity
     *
     * The amount of usable meeting space available at a property.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType
     * $meetingRoomCapacity
     */
    public function addToAvailableCapacities(
        \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType $meetingRoomCapacity
    ) {
        $this->availableCapacities[] = $meetingRoomCapacity;

        return $this;
    }

    /**
     * isset availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableCapacities($index)
    {
        return isset($this->availableCapacities[$index]);
    }

    /**
     * unset availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableCapacities($index)
    {
        unset($this->availableCapacities[$index]);
    }

    /**
     * Gets as availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     */
    public function getAvailableCapacities()
    {
        return $this->availableCapacities;
    }

    /**
     * Sets a new availableCapacities
     *
     * The amount of usable meeting space available at a property.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MeetingRoomCapacityType[]
     * $availableCapacities
     * @return self
     */
    public function setAvailableCapacities(array $availableCapacities)
    {
        $this->availableCapacities = $availableCapacities;

        return $this;
    }

    /**
     * Adds as feature
     *
     * Collection of features.
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
     * Collection of features.
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
     * Collection of features.
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
     * Collection of features.
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
     * Collection of features.
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
     * Gets as multimediaDescriptions
     *
     * Information describing the meeting room.
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
     * Information describing the meeting room.
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


}

