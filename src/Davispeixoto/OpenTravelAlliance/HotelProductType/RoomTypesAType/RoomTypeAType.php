<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType
{

    /**
     * The name of the room type.
     *
     * @property string $roomTypeName
     */
    private $roomTypeName = null;

    /**
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @property string[] $bedTypeCode
     */
    private $bedTypeCode = null;

    /**
     * When true, indicates non-smoking.
     *
     * @property boolean $nonSmokingInd
     */
    private $nonSmokingInd = null;

    /**
     * Maximum number of guests allowed in a room type.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Maximum number of adults allowed in a room type.
     *
     * @property integer $maxAdultOccupancy
     */
    private $maxAdultOccupancy = null;

    /**
     * Maximum number of children allowed in a room type.
     *
     * @property integer $maxChildOccupancy
     */
    private $maxChildOccupancy = null;

    /**
     * Maximum number of infants allowed in a room type.
     *
     * @property integer $maxInfantOccupancy
     */
    private $maxInfantOccupancy = null;

    /**
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @property string $roomLocation
     */
    private $roomLocation = null;

    /**
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @property string[] $featureAmenity
     */
    private $featureAmenity = null;

    /**
     * Specifies the view from the room. Typical values would be "Ocean view", "Pool
     * view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @property string $roomView
     */
    private $roomView = null;

    /**
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @property string[] $roomQuality
     */
    private $roomQuality = null;

    /**
     * Indicates the number of bedrooms that are in this room type.
     *
     * @property integer $nbrOfBedrooms
     */
    private $nbrOfBedrooms = null;

    /**
     * When true, this room type is an accessible room. When false, this room is not
     * accessible.
     *
     * @property boolean $accessibleInd
     */
    private $accessibleInd = null;

    /**
     * Used to specify a gender assignment for a room.
     *
     * @property string $roomGender
     */
    private $roomGender = null;

    /**
     * A collection of room type references.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     * $roomTypeRefs
     */
    private $roomTypeRefs = null;

    /**
     * A collection of description information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     */
    private $descriptions = null;

    /**
     * Gets as roomTypeName
     *
     * The name of the room type.
     *
     * @return string
     */
    public function getRoomTypeName()
    {
        return $this->roomTypeName;
    }

    /**
     * Sets a new roomTypeName
     *
     * The name of the room type.
     *
     * @param string $roomTypeName
     * @return self
     */
    public function setRoomTypeName($roomTypeName)
    {
        $this->roomTypeName = $roomTypeName;

        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc. This may be the sending
     * system's room type code or the receiving system's room type code depending on
     * the trading partner agreement.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Adds as bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @return self
     * @param string $bedTypeCode
     */
    public function addToBedTypeCode($bedTypeCode)
    {
        $this->bedTypeCode[] = $bedTypeCode;

        return $this;
    }

    /**
     * isset bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBedTypeCode($index)
    {
        return isset($this->bedTypeCode[$index]);
    }

    /**
     * unset bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBedTypeCode($index)
    {
        unset($this->bedTypeCode[$index]);
    }

    /**
     * Gets as bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @return string[]
     */
    public function getBedTypeCode()
    {
        return $this->bedTypeCode;
    }

    /**
     * Sets a new bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double,
     * Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param string $bedTypeCode
     * @return self
     */
    public function setBedTypeCode(array $bedTypeCode)
    {
        $this->bedTypeCode = $bedTypeCode;

        return $this;
    }

    /**
     * Gets as nonSmokingInd
     *
     * When true, indicates non-smoking.
     *
     * @return boolean
     */
    public function getNonSmokingInd()
    {
        return $this->nonSmokingInd;
    }

    /**
     * Sets a new nonSmokingInd
     *
     * When true, indicates non-smoking.
     *
     * @param boolean $nonSmokingInd
     * @return self
     */
    public function setNonSmokingInd($nonSmokingInd)
    {
        $this->nonSmokingInd = $nonSmokingInd;

        return $this;
    }

    /**
     * Gets as maxOccupancy
     *
     * Maximum number of guests allowed in a room type.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Maximum number of guests allowed in a room type.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Gets as maxAdultOccupancy
     *
     * Maximum number of adults allowed in a room type.
     *
     * @return integer
     */
    public function getMaxAdultOccupancy()
    {
        return $this->maxAdultOccupancy;
    }

    /**
     * Sets a new maxAdultOccupancy
     *
     * Maximum number of adults allowed in a room type.
     *
     * @param integer $maxAdultOccupancy
     * @return self
     */
    public function setMaxAdultOccupancy($maxAdultOccupancy)
    {
        $this->maxAdultOccupancy = $maxAdultOccupancy;

        return $this;
    }

    /**
     * Gets as maxChildOccupancy
     *
     * Maximum number of children allowed in a room type.
     *
     * @return integer
     */
    public function getMaxChildOccupancy()
    {
        return $this->maxChildOccupancy;
    }

    /**
     * Sets a new maxChildOccupancy
     *
     * Maximum number of children allowed in a room type.
     *
     * @param integer $maxChildOccupancy
     * @return self
     */
    public function setMaxChildOccupancy($maxChildOccupancy)
    {
        $this->maxChildOccupancy = $maxChildOccupancy;

        return $this;
    }

    /**
     * Gets as maxInfantOccupancy
     *
     * Maximum number of infants allowed in a room type.
     *
     * @return integer
     */
    public function getMaxInfantOccupancy()
    {
        return $this->maxInfantOccupancy;
    }

    /**
     * Sets a new maxInfantOccupancy
     *
     * Maximum number of infants allowed in a room type.
     *
     * @param integer $maxInfantOccupancy
     * @return self
     */
    public function setMaxInfantOccupancy($maxInfantOccupancy)
    {
        $this->maxInfantOccupancy = $maxInfantOccupancy;

        return $this;
    }

    /**
     * Gets as roomLocation
     *
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @return string
     */
    public function getRoomLocation()
    {
        return $this->roomLocation;
    }

    /**
     * Sets a new roomLocation
     *
     * Identifies the location of the room within the property. Refer to OpenTravel
     * Code List Room Location Type (RLT).
     *
     * @param string $roomLocation
     * @return self
     */
    public function setRoomLocation($roomLocation)
    {
        $this->roomLocation = $roomLocation;

        return $this;
    }

    /**
     * Adds as featureAmenity
     *
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @return self
     * @param string $featureAmenity
     */
    public function addToFeatureAmenity($featureAmenity)
    {
        $this->featureAmenity[] = $featureAmenity;

        return $this;
    }

    /**
     * isset featureAmenity
     *
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatureAmenity($index)
    {
        return isset($this->featureAmenity[$index]);
    }

    /**
     * unset featureAmenity
     *
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatureAmenity($index)
    {
        unset($this->featureAmenity[$index]);
    }

    /**
     * Gets as featureAmenity
     *
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @return string[]
     */
    public function getFeatureAmenity()
    {
        return $this->featureAmenity;
    }

    /**
     * Sets a new featureAmenity
     *
     * Identifes the feature amenites for this room type. Refer to OpenTravel Code List
     * Room Amenity Type (RMA).
     *
     * @param string $featureAmenity
     * @return self
     */
    public function setFeatureAmenity(array $featureAmenity)
    {
        $this->featureAmenity = $featureAmenity;

        return $this;
    }

    /**
     * Gets as roomView
     *
     * Specifies the view from the room. Typical values would be "Ocean view", "Pool
     * view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @return string
     */
    public function getRoomView()
    {
        return $this->roomView;
    }

    /**
     * Sets a new roomView
     *
     * Specifies the view from the room. Typical values would be "Ocean view", "Pool
     * view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @param string $roomView
     * @return self
     */
    public function setRoomView($roomView)
    {
        $this->roomView = $roomView;

        return $this;
    }

    /**
     * Adds as roomQuality
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @return self
     * @param string $roomQuality
     */
    public function addToRoomQuality($roomQuality)
    {
        $this->roomQuality[] = $roomQuality;

        return $this;
    }

    /**
     * isset roomQuality
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomQuality($index)
    {
        return isset($this->roomQuality[$index]);
    }

    /**
     * unset roomQuality
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomQuality($index)
    {
        unset($this->roomQuality[$index]);
    }

    /**
     * Gets as roomQuality
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @return string[]
     */
    public function getRoomQuality()
    {
        return $this->roomQuality;
    }

    /**
     * Sets a new roomQuality
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel
     * Code List Guest Room Info (GRI).
     *
     * @param string $roomQuality
     * @return self
     */
    public function setRoomQuality(array $roomQuality)
    {
        $this->roomQuality = $roomQuality;

        return $this;
    }

    /**
     * Gets as nbrOfBedrooms
     *
     * Indicates the number of bedrooms that are in this room type.
     *
     * @return integer
     */
    public function getNbrOfBedrooms()
    {
        return $this->nbrOfBedrooms;
    }

    /**
     * Sets a new nbrOfBedrooms
     *
     * Indicates the number of bedrooms that are in this room type.
     *
     * @param integer $nbrOfBedrooms
     * @return self
     */
    public function setNbrOfBedrooms($nbrOfBedrooms)
    {
        $this->nbrOfBedrooms = $nbrOfBedrooms;

        return $this;
    }

    /**
     * Gets as accessibleInd
     *
     * When true, this room type is an accessible room. When false, this room is not
     * accessible.
     *
     * @return boolean
     */
    public function getAccessibleInd()
    {
        return $this->accessibleInd;
    }

    /**
     * Sets a new accessibleInd
     *
     * When true, this room type is an accessible room. When false, this room is not
     * accessible.
     *
     * @param boolean $accessibleInd
     * @return self
     */
    public function setAccessibleInd($accessibleInd)
    {
        $this->accessibleInd = $accessibleInd;

        return $this;
    }

    /**
     * Gets as roomGender
     *
     * Used to specify a gender assignment for a room.
     *
     * @return string
     */
    public function getRoomGender()
    {
        return $this->roomGender;
    }

    /**
     * Sets a new roomGender
     *
     * Used to specify a gender assignment for a room.
     *
     * @param string $roomGender
     * @return self
     */
    public function setRoomGender($roomGender)
    {
        $this->roomGender = $roomGender;

        return $this;
    }

    /**
     * Adds as roomTypeRef
     *
     * A collection of room type references.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType
     * $roomTypeRef
     */
    public function addToRoomTypeRefs(
        \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType $roomTypeRef
    ) {
        $this->roomTypeRefs[] = $roomTypeRef;

        return $this;
    }

    /**
     * isset roomTypeRefs
     *
     * A collection of room type references.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypeRefs($index)
    {
        return isset($this->roomTypeRefs[$index]);
    }

    /**
     * unset roomTypeRefs
     *
     * A collection of room type references.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypeRefs($index)
    {
        unset($this->roomTypeRefs[$index]);
    }

    /**
     * Gets as roomTypeRefs
     *
     * A collection of room type references.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     */
    public function getRoomTypeRefs()
    {
        return $this->roomTypeRefs;
    }

    /**
     * Sets a new roomTypeRefs
     *
     * A collection of room type references.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType\RoomTypeRefAType[]
     * $roomTypeRefs
     * @return self
     */
    public function setRoomTypeRefs(array $roomTypeRefs)
    {
        $this->roomTypeRefs = $roomTypeRefs;

        return $this;
    }

    /**
     * Adds as description
     *
     * A collection of description information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescriptions(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->descriptions[] = $description;

        return $this;
    }

    /**
     * isset descriptions
     *
     * A collection of description information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * A collection of description information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * A collection of description information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * A collection of description information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }


}

