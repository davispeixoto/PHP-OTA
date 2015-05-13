<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType
{

    /**
     * RoomTypeCode MUST identify the specific system room type code for this room type
     * (e.g. A1K, A1Q).
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @property string[] $bedTypeCode
     */
    private $bedTypeCode = null;

    /**
     * The NonSmoking indicator MAY be used to specify whether or not the room type is
     * non-smoking. When true, the room type MUST be non-smoking.
     *
     * @property boolean $nonSmoking
     */
    private $nonSmoking = null;

    /**
     * RoomDescription MUST specify information regarding the room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType
     * $roomDescription
     */
    private $roomDescription = null;

    /**
     * Gets as roomTypeCode
     *
     * RoomTypeCode MUST identify the specific system room type code for this room type
     * (e.g. A1K, A1Q).
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
     * RoomTypeCode MUST identify the specific system room type code for this room type
     * (e.g. A1K, A1Q).
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
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
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
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
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
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
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
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
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
     * BedTypeCode MAY indicate the type of bed(s) found in the room. Typical values
     * would be Double, Twin, Queen, or King. BedTypeCode MUST refer to OpenTravel Code
     * List Bed Type Code (BED).
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
     * Gets as nonSmoking
     *
     * The NonSmoking indicator MAY be used to specify whether or not the room type is
     * non-smoking. When true, the room type MUST be non-smoking.
     *
     * @return boolean
     */
    public function getNonSmoking()
    {
        return $this->nonSmoking;
    }

    /**
     * Sets a new nonSmoking
     *
     * The NonSmoking indicator MAY be used to specify whether or not the room type is
     * non-smoking. When true, the room type MUST be non-smoking.
     *
     * @param boolean $nonSmoking
     * @return self
     */
    public function setNonSmoking($nonSmoking)
    {
        $this->nonSmoking = $nonSmoking;

        return $this;
    }

    /**
     * Gets as roomDescription
     *
     * RoomDescription MUST specify information regarding the room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType
     */
    public function getRoomDescription()
    {
        return $this->roomDescription;
    }

    /**
     * Sets a new roomDescription
     *
     * RoomDescription MUST specify information regarding the room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType
     * $roomDescription
     * @return self
     */
    public function setRoomDescription(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType\RoomTypeAType\RoomDescriptionAType $roomDescription
    ) {
        $this->roomDescription = $roomDescription;

        return $this;
    }


}

