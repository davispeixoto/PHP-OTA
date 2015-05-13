<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType\RoomTypesAType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType
{

    /**
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
     * List Bed Type Code (BED).
     *
     * @property string[] $bedTypeCode
     */
    private $bedTypeCode = null;

    /**
     * The NonSmoking indicator MUST be set to true in order to request a non-smoking
     * room.
     *
     * @property boolean $nonSmoking
     */
    private $nonSmoking = null;

    /**
     * Adds as bedTypeCode
     *
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
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
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
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
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
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
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
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
     * BedTypeCode MUST specify the type of bed(s) requested for the reservation.
     * Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code
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
     * The NonSmoking indicator MUST be set to true in order to request a non-smoking
     * room.
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
     * The NonSmoking indicator MUST be set to true in order to request a non-smoking
     * room.
     *
     * @param boolean $nonSmoking
     * @return self
     */
    public function setNonSmoking($nonSmoking)
    {
        $this->nonSmoking = $nonSmoking;

        return $this;
    }


}

