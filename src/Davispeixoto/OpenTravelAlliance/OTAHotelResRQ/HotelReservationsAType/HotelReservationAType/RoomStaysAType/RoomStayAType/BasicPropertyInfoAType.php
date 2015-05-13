<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType;

/**
 * Class representing BasicPropertyInfoAType
 *
 * HotelReference: The hotel reference identifies a specific hotel by using the
 * Chain Code, the Brand Code, and the Hotel Code. The codes used are agreed upon
 * by trading partners.
 */
class BasicPropertyInfoAType
{

    /**
     * The ChainCode MAY identify a hotel chain or management group (e.g. Hyatt,
     * Hilton, Marriott). The hotel chain code is decided between vendors and is
     * OPTIONAL if the hotel is an independent property that can be identified by the
     * HotelCode attribute alone.
     *
     * @property string $chainCode
     */
    private $chainCode = null;

    /**
     * The BrandCode MAY identify the brand within a chain (e.g., Courtyard, Hampton
     * Inn). This code is OPTIONAL if the hotel is an independent property that can be
     * identified by the HotelCode attribute alone.
     *
     * @property string $brandCode
     */
    private $brandCode = null;

    /**
     * The HotelCode MUST uniquely identify a single hotel property for the
     * reservation. The HotelCode MAY be used in conjunction with the ChainCode and
     * BrandCode in order to uniquely identify the hotel property. The hotel code is
     * decided between vendors.
     *
     * @property string $hotelCode
     */
    private $hotelCode = null;

    /**
     * Gets as chainCode
     *
     * The ChainCode MAY identify a hotel chain or management group (e.g. Hyatt,
     * Hilton, Marriott). The hotel chain code is decided between vendors and is
     * OPTIONAL if the hotel is an independent property that can be identified by the
     * HotelCode attribute alone.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The ChainCode MAY identify a hotel chain or management group (e.g. Hyatt,
     * Hilton, Marriott). The hotel chain code is decided between vendors and is
     * OPTIONAL if the hotel is an independent property that can be identified by the
     * HotelCode attribute alone.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;

        return $this;
    }

    /**
     * Gets as brandCode
     *
     * The BrandCode MAY identify the brand within a chain (e.g., Courtyard, Hampton
     * Inn). This code is OPTIONAL if the hotel is an independent property that can be
     * identified by the HotelCode attribute alone.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * The BrandCode MAY identify the brand within a chain (e.g., Courtyard, Hampton
     * Inn). This code is OPTIONAL if the hotel is an independent property that can be
     * identified by the HotelCode attribute alone.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The HotelCode MUST uniquely identify a single hotel property for the
     * reservation. The HotelCode MAY be used in conjunction with the ChainCode and
     * BrandCode in order to uniquely identify the hotel property. The hotel code is
     * decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The HotelCode MUST uniquely identify a single hotel property for the
     * reservation. The HotelCode MAY be used in conjunction with the ChainCode and
     * BrandCode in order to uniquely identify the hotel property. The hotel code is
     * decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;

        return $this;
    }


}

