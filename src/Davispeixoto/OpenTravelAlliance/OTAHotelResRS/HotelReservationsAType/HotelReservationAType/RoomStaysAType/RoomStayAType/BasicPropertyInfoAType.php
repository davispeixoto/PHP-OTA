<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\RoomStaysAType\RoomStayAType;

/**
 * Class representing BasicPropertyInfoAType
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
     * HotelName MAY specify the proper name of the hotel.
     *
     * @property string $hotelName
     */
    private $hotelName = null;

    /**
     * ChainName MAY specify the name of the hotel chain (e.g., Hilton, Marriott,
     * Hyatt).
     *
     * @property string $chainName
     */
    private $chainName = null;

    /**
     * BrandName MAY specify the name of the brand of the hotel property (e.g.,
     * Courtyard, Hampton Inn).
     *
     * @property string $brandName
     */
    private $brandName = null;

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

    /**
     * Gets as hotelName
     *
     * HotelName MAY specify the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * HotelName MAY specify the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;

        return $this;
    }

    /**
     * Gets as chainName
     *
     * ChainName MAY specify the name of the hotel chain (e.g., Hilton, Marriott,
     * Hyatt).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * ChainName MAY specify the name of the hotel chain (e.g., Hilton, Marriott,
     * Hyatt).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;

        return $this;
    }

    /**
     * Gets as brandName
     *
     * BrandName MAY specify the name of the brand of the hotel property (e.g.,
     * Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * BrandName MAY specify the name of the brand of the hotel property (e.g.,
     * Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;

        return $this;
    }


}

