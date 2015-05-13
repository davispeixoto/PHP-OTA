<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing HotelAmenityAType
 */
class HotelAmenityAType
{

    /**
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @property string $hotelAmenityCode
     */
    private $hotelAmenityCode = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The maximum number provided subject to guests in the room.
     *
     * @property integer $maxNumberProvided
     */
    private $maxNumberProvided = null;

    /**
     * Descriptive information for the hotel amenity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as hotelAmenityCode
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @return string
     */
    public function getHotelAmenityCode()
    {
        return $this->hotelAmenityCode;
    }

    /**
     * Sets a new hotelAmenityCode
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @param string $hotelAmenityCode
     * @return self
     */
    public function setHotelAmenityCode($hotelAmenityCode)
    {
        $this->hotelAmenityCode = $hotelAmenityCode;

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
     * Gets as maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @return integer
     */
    public function getMaxNumberProvided()
    {
        return $this->maxNumberProvided;
    }

    /**
     * Sets a new maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @param integer $maxNumberProvided
     * @return self
     */
    public function setMaxNumberProvided($maxNumberProvided)
    {
        $this->maxNumberProvided = $maxNumberProvided;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information for the hotel amenity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information for the hotel amenity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }


}

