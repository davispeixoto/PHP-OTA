<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CategoryCodesType
 *
 * Used to define specific hotel information such as the type, location and
 * architectural style.
 * XSD Type: CategoryCodesType
 */
class CategoryCodesType
{

    /**
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\LocationCategoryAType[]
     * $locationCategory
     */
    private $locationCategory = null;

    /**
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\SegmentCategoryAType[]
     * $segmentCategory
     */
    private $segmentCategory = null;

    /**
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\HotelCategoryAType[]
     * $hotelCategory
     */
    private $hotelCategory = null;

    /**
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\ArchitecturalStyleAType[]
     * $architecturalStyle
     */
    private $architecturalStyle = null;

    /**
     * The types and quantities of guest rooms at a hotel.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType[]
     * $guestRoomInfo
     */
    private $guestRoomInfo = null;

    /**
     * Adds as locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\LocationCategoryAType
     * $locationCategory
     */
    public function addToLocationCategory(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\LocationCategoryAType $locationCategory
    ) {
        $this->locationCategory[] = $locationCategory;

        return $this;
    }

    /**
     * isset locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLocationCategory($index)
    {
        return isset($this->locationCategory[$index]);
    }

    /**
     * unset locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLocationCategory($index)
    {
        unset($this->locationCategory[$index]);
    }

    /**
     * Gets as locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\LocationCategoryAType[]
     */
    public function getLocationCategory()
    {
        return $this->locationCategory;
    }

    /**
     * Sets a new locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\LocationCategoryAType[]
     * $locationCategory
     * @return self
     */
    public function setLocationCategory(array $locationCategory)
    {
        $this->locationCategory = $locationCategory;

        return $this;
    }

    /**
     * Adds as segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\SegmentCategoryAType
     * $segmentCategory
     */
    public function addToSegmentCategory(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\SegmentCategoryAType $segmentCategory
    ) {
        $this->segmentCategory[] = $segmentCategory;

        return $this;
    }

    /**
     * isset segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegmentCategory($index)
    {
        return isset($this->segmentCategory[$index]);
    }

    /**
     * unset segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegmentCategory($index)
    {
        unset($this->segmentCategory[$index]);
    }

    /**
     * Gets as segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\SegmentCategoryAType[]
     */
    public function getSegmentCategory()
    {
        return $this->segmentCategory;
    }

    /**
     * Sets a new segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\SegmentCategoryAType[]
     * $segmentCategory
     * @return self
     */
    public function setSegmentCategory(array $segmentCategory)
    {
        $this->segmentCategory = $segmentCategory;

        return $this;
    }

    /**
     * Adds as hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\HotelCategoryAType
     * $hotelCategory
     */
    public function addToHotelCategory(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\HotelCategoryAType $hotelCategory
    ) {
        $this->hotelCategory[] = $hotelCategory;

        return $this;
    }

    /**
     * isset hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelCategory($index)
    {
        return isset($this->hotelCategory[$index]);
    }

    /**
     * unset hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelCategory($index)
    {
        unset($this->hotelCategory[$index]);
    }

    /**
     * Gets as hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryCodesType\HotelCategoryAType[]
     */
    public function getHotelCategory()
    {
        return $this->hotelCategory;
    }

    /**
     * Sets a new hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\HotelCategoryAType[]
     * $hotelCategory
     * @return self
     */
    public function setHotelCategory(array $hotelCategory)
    {
        $this->hotelCategory = $hotelCategory;

        return $this;
    }

    /**
     * Adds as architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\ArchitecturalStyleAType
     * $architecturalStyle
     */
    public function addToArchitecturalStyle(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\ArchitecturalStyleAType $architecturalStyle
    ) {
        $this->architecturalStyle[] = $architecturalStyle;

        return $this;
    }

    /**
     * isset architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArchitecturalStyle($index)
    {
        return isset($this->architecturalStyle[$index]);
    }

    /**
     * unset architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArchitecturalStyle($index)
    {
        unset($this->architecturalStyle[$index]);
    }

    /**
     * Gets as architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\ArchitecturalStyleAType[]
     */
    public function getArchitecturalStyle()
    {
        return $this->architecturalStyle;
    }

    /**
     * Sets a new architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\ArchitecturalStyleAType[]
     * $architecturalStyle
     * @return self
     */
    public function setArchitecturalStyle(array $architecturalStyle)
    {
        $this->architecturalStyle = $architecturalStyle;

        return $this;
    }

    /**
     * Adds as guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType
     * $guestRoomInfo
     */
    public function addToGuestRoomInfo(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType $guestRoomInfo
    ) {
        $this->guestRoomInfo[] = $guestRoomInfo;

        return $this;
    }

    /**
     * isset guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestRoomInfo($index)
    {
        return isset($this->guestRoomInfo[$index]);
    }

    /**
     * unset guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestRoomInfo($index)
    {
        unset($this->guestRoomInfo[$index]);
    }

    /**
     * Gets as guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType[]
     */
    public function getGuestRoomInfo()
    {
        return $this->guestRoomInfo;
    }

    /**
     * Sets a new guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType[]
     * $guestRoomInfo
     * @return self
     */
    public function setGuestRoomInfo(array $guestRoomInfo)
    {
        $this->guestRoomInfo = $guestRoomInfo;

        return $this;
    }


}

