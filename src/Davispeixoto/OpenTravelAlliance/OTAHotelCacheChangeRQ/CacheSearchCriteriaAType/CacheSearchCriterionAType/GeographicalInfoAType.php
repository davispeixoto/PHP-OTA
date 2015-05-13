<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType;

/**
 * Class representing GeographicalInfoAType
 */
class GeographicalInfoAType
{

    /**
     * The Position element contains three attributes, Latitude, Longitude, and
     * Altitude, used to indicate the geographic location(s) requested by the search,
     * expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a
     * geographic area.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\PositionAType
     * $position
     */
    private $position = null;

    /**
     * Uses any part of address information, such as street name, postal code, or
     * country code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType $address
     */
    private $address = null;

    /**
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position or address) present in this message that specifies a location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\RadiusAType
     * $radius
     */
    private $radius = null;

    /**
     * Gets as position
     *
     * The Position element contains three attributes, Latitude, Longitude, and
     * Altitude, used to indicate the geographic location(s) requested by the search,
     * expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a
     * geographic area.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\PositionAType
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The Position element contains three attributes, Latitude, Longitude, and
     * Altitude, used to indicate the geographic location(s) requested by the search,
     * expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a
     * geographic area.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\PositionAType
     * $position
     * @return self
     */
    public function setPosition(
        \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\PositionAType $position
    ) {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets as address
     *
     * Uses any part of address information, such as street name, postal code, or
     * country code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Uses any part of address information, such as street name, postal code, or
     * country code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\AddressType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as radius
     *
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position or address) present in this message that specifies a location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\RadiusAType
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Sets a new radius
     *
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position or address) present in this message that specifies a location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\RadiusAType
     * $radius
     * @return self
     */
    public function setRadius(
        \Davispeixoto\OpenTravelAlliance\OTAHotelCacheChangeRQ\CacheSearchCriteriaAType\CacheSearchCriterionAType\GeographicalInfoAType\RadiusAType $radius
    ) {
        $this->radius = $radius;

        return $this;
    }


}

