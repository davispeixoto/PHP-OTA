<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType;

/**
 * Class representing GuestRoomAType
 */
class GuestRoomAType
{

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * The room type name.
     *
     * @property string $roomTypeName
     */
    private $roomTypeName = null;

    /**
     * Indicates that the room type contains multiple rooms sold as a single unit.
     *
     * @property boolean $composite
     */
    private $composite = null;

    /**
     * Indicates the quality of the room within a hotel such as an "S1K" as a superior
     * room with one king bed.
     *
     * @property string $quality
     */
    private $quality = null;

    /**
     * Maximum number of guests allowed in a room type.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * Minimum number of guests allowed in a room type.
     *
     * @property integer $minOccupancy
     */
    private $minOccupancy = null;

    /**
     * Maximum number of adults allowed in a room type.
     *
     * @property integer $maxAdultOccupancy
     */
    private $maxAdultOccupancy = null;

    /**
     * This attribute is used to designate the number of non-smoking rooms by room
     * type.
     *
     * @property integer $nonsmokingQuantity
     */
    private $nonsmokingQuantity = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Maximum number of children allowed in a room type.
     *
     * @property integer $maxChildOccupancy
     */
    private $maxChildOccupancy = null;

    /**
     * Used to define the display order.
     *
     * @property integer $sort
     */
    private $sort = null;

    /**
     * Identifies the language in which the guest room information is being sent.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\TypeRoomAType[]
     * $typeRoom
     */
    private $typeRoom = null;

    /**
     * Collection of room amenity items available to the guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     * $amenities
     */
    private $amenities = null;

    /**
     * Collection of features offered by a hotel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Multimedia information about the guest room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the guest room.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
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
     * Used to define the quantity for an associated element or attribute.
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
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Gets as roomTypeName
     *
     * The room type name.
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
     * The room type name.
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
     * Gets as composite
     *
     * Indicates that the room type contains multiple rooms sold as a single unit.
     *
     * @return boolean
     */
    public function getComposite()
    {
        return $this->composite;
    }

    /**
     * Sets a new composite
     *
     * Indicates that the room type contains multiple rooms sold as a single unit.
     *
     * @param boolean $composite
     * @return self
     */
    public function setComposite($composite)
    {
        $this->composite = $composite;

        return $this;
    }

    /**
     * Gets as quality
     *
     * Indicates the quality of the room within a hotel such as an "S1K" as a superior
     * room with one king bed.
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Sets a new quality
     *
     * Indicates the quality of the room within a hotel such as an "S1K" as a superior
     * room with one king bed.
     *
     * @param string $quality
     * @return self
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

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
     * Gets as minOccupancy
     *
     * Minimum number of guests allowed in a room type.
     *
     * @return integer
     */
    public function getMinOccupancy()
    {
        return $this->minOccupancy;
    }

    /**
     * Sets a new minOccupancy
     *
     * Minimum number of guests allowed in a room type.
     *
     * @param integer $minOccupancy
     * @return self
     */
    public function setMinOccupancy($minOccupancy)
    {
        $this->minOccupancy = $minOccupancy;

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
     * Gets as nonsmokingQuantity
     *
     * This attribute is used to designate the number of non-smoking rooms by room
     * type.
     *
     * @return integer
     */
    public function getNonsmokingQuantity()
    {
        return $this->nonsmokingQuantity;
    }

    /**
     * Sets a new nonsmokingQuantity
     *
     * This attribute is used to designate the number of non-smoking rooms by room
     * type.
     *
     * @param integer $nonsmokingQuantity
     * @return self
     */
    public function setNonsmokingQuantity($nonsmokingQuantity)
    {
        $this->nonsmokingQuantity = $nonsmokingQuantity;

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
     * Gets as language
     *
     * Identifies the language in which the guest room information is being sent.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Identifies the language in which the guest room information is being sent.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Adds as typeRoom
     *
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\TypeRoomAType
     * $typeRoom
     */
    public function addToTypeRoom(
        \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\TypeRoomAType $typeRoom
    ) {
        $this->typeRoom[] = $typeRoom;

        return $this;
    }

    /**
     * isset typeRoom
     *
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTypeRoom($index)
    {
        return isset($this->typeRoom[$index]);
    }

    /**
     * unset typeRoom
     *
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTypeRoom($index)
    {
        unset($this->typeRoom[$index]);
    }

    /**
     * Gets as typeRoom
     *
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\TypeRoomAType[]
     */
    public function getTypeRoom()
    {
        return $this->typeRoom;
    }

    /**
     * Sets a new typeRoom
     *
     * Describes the guest room type; in composite types there can be multiple
     * occurrences.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\TypeRoomAType[]
     * $typeRoom
     * @return self
     */
    public function setTypeRoom(array $typeRoom)
    {
        $this->typeRoom = $typeRoom;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * Collection of room amenity items available to the guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType
     * $amenity
     */
    public function addToAmenities(
        \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType $amenity
    ) {
        $this->amenities[] = $amenity;

        return $this;
    }

    /**
     * isset amenities
     *
     * Collection of room amenity items available to the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * Collection of room amenity items available to the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * Collection of room amenity items available to the guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * Collection of room amenity items available to the guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType\AmenityAType[]
     * $amenities
     * @return self
     */
    public function setAmenities(array $amenities)
    {
        $this->amenities = $amenities;

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
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the guest room.
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
     * Multimedia information about the guest room.
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
     * Gets as descriptiveText
     *
     * Descriptive text that describes the guest room.
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
     * Descriptive text that describes the guest room.
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

