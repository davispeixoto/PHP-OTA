<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ItemSearchCriterionType
 *
 * Identifies the criterion for a search.
 * XSD Type: ItemSearchCriterionType
 */
class ItemSearchCriterionType
{

    /**
     * Values of "true" or "false", indicating whether the string of the search value
     * must be an exact match.
     *
     * @property boolean $exactMatch
     */
    private $exactMatch = null;

    /**
     * An enumerated list, indicating the level of importance of the search criterion.
     * Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @property string $importanceType
     */
    private $importanceType = null;

    /**
     * Defines a ranking scale expressed as integers; meaning and scale are based on
     * individual implementations.
     *
     * @property integer $ranking
     */
    private $ranking = null;

    /**
     * The Position element contains three attributes, Latitude, Longitude, and
     * Altitude, used to indicate the geographic location(s) requested by the search,
     * expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a
     * geographic area.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\PositionAType
     * $position
     */
    private $position = null;

    /**
     * Uses any part of address information, such as street name, postal code, or
     * country code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AddressAType
     * $address
     */
    private $address = null;

    /**
     * Telephone number(s) used in the search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\TelephoneAType
     * $telephone
     */
    private $telephone = null;

    /**
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RefPointAType[]
     * $refPoint
     */
    private $refPoint = null;

    /**
     * Indicates the location of points of interest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\CodeRefAType
     * $codeRef
     */
    private $codeRef = null;

    /**
     * Indicates the detail of hotel reference information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\HotelRefAType[]
     * $hotelRef
     */
    private $hotelRef = null;

    /**
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position, address, hotel reference, etc.) present in this
     * ItemSearchCriterionType that specifies a location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RadiusAType
     * $radius
     */
    private $radius = null;

    /**
     * Provides coordinates used to define the area of a map.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\MapAreaAType
     * $mapArea
     */
    private $mapArea = null;

    /**
     * A collection of Additional Content elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     * $additionalContents
     */
    private $additionalContents = null;

    /**
     * Gets as exactMatch
     *
     * Values of "true" or "false", indicating whether the string of the search value
     * must be an exact match.
     *
     * @return boolean
     */
    public function getExactMatch()
    {
        return $this->exactMatch;
    }

    /**
     * Sets a new exactMatch
     *
     * Values of "true" or "false", indicating whether the string of the search value
     * must be an exact match.
     *
     * @param boolean $exactMatch
     * @return self
     */
    public function setExactMatch($exactMatch)
    {
        $this->exactMatch = $exactMatch;

        return $this;
    }

    /**
     * Gets as importanceType
     *
     * An enumerated list, indicating the level of importance of the search criterion.
     * Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @return string
     */
    public function getImportanceType()
    {
        return $this->importanceType;
    }

    /**
     * Sets a new importanceType
     *
     * An enumerated list, indicating the level of importance of the search criterion.
     * Acceptable values are "Mandatory", "High", "Medium", or "Low."
     *
     * @param string $importanceType
     * @return self
     */
    public function setImportanceType($importanceType)
    {
        $this->importanceType = $importanceType;

        return $this;
    }

    /**
     * Gets as ranking
     *
     * Defines a ranking scale expressed as integers; meaning and scale are based on
     * individual implementations.
     *
     * @return integer
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Sets a new ranking
     *
     * Defines a ranking scale expressed as integers; meaning and scale are based on
     * individual implementations.
     *
     * @param integer $ranking
     * @return self
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }

    /**
     * Gets as position
     *
     * The Position element contains three attributes, Latitude, Longitude, and
     * Altitude, used to indicate the geographic location(s) requested by the search,
     * expressed in notation specified by ISO standard 6709. It is likely that only the
     * first two attributes, Latitude and Longitude, would be needed to define a
     * geographic area.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\PositionAType
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
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\PositionAType
     * $position
     * @return self
     */
    public function setPosition(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\PositionAType $position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Gets as address
     *
     * Uses any part of address information, such as street name, postal code, or
     * country code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AddressAType
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
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AddressAType
     * $address
     * @return self
     */
    public function setAddress(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AddressAType $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as telephone
     *
     * Telephone number(s) used in the search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number(s) used in the search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\TelephoneAType
     * $telephone
     * @return self
     */
    public function setTelephone(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adds as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RefPointAType
     * $refPoint
     */
    public function addToRefPoint(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RefPointAType $refPoint)
    {
        $this->refPoint[] = $refPoint;

        return $this;
    }

    /**
     * isset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPoint($index)
    {
        return isset($this->refPoint[$index]);
    }

    /**
     * unset refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPoint($index)
    {
        unset($this->refPoint[$index]);
    }

    /**
     * Gets as refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RefPointAType[]
     */
    public function getRefPoint()
    {
        return $this->refPoint;
    }

    /**
     * Sets a new refPoint
     *
     * The Reference Point element allows for a search by proximity to a designated
     * reference point by name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RefPointAType[]
     * $refPoint
     * @return self
     */
    public function setRefPoint(array $refPoint)
    {
        $this->refPoint = $refPoint;

        return $this;
    }

    /**
     * Gets as codeRef
     *
     * Indicates the location of points of interest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\CodeRefAType
     */
    public function getCodeRef()
    {
        return $this->codeRef;
    }

    /**
     * Sets a new codeRef
     *
     * Indicates the location of points of interest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\CodeRefAType
     * $codeRef
     * @return self
     */
    public function setCodeRef(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\CodeRefAType $codeRef)
    {
        $this->codeRef = $codeRef;

        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRef(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\HotelRefAType $hotelRef)
    {
        $this->hotelRef[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRef($index)
    {
        return isset($this->hotelRef[$index]);
    }

    /**
     * unset hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRef($index)
    {
        unset($this->hotelRef[$index]);
    }

    /**
     * Gets as hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\HotelRefAType[]
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * Indicates the detail of hotel reference information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\HotelRefAType[]
     * $hotelRef
     * @return self
     */
    public function setHotelRef(array $hotelRef)
    {
        $this->hotelRef = $hotelRef;

        return $this;
    }

    /**
     * Gets as radius
     *
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position, address, hotel reference, etc.) present in this
     * ItemSearchCriterionType that specifies a location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RadiusAType
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Sets a new radius
     *
     * Used to specify the extent of a search area. The extent is relative to an
     * element (position, address, hotel reference, etc.) present in this
     * ItemSearchCriterionType that specifies a location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RadiusAType
     * $radius
     * @return self
     */
    public function setRadius(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\RadiusAType $radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Gets as mapArea
     *
     * Provides coordinates used to define the area of a map.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\MapAreaAType
     */
    public function getMapArea()
    {
        return $this->mapArea;
    }

    /**
     * Sets a new mapArea
     *
     * Provides coordinates used to define the area of a map.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\MapAreaAType
     * $mapArea
     * @return self
     */
    public function setMapArea(\Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\MapAreaAType $mapArea)
    {
        $this->mapArea = $mapArea;

        return $this;
    }

    /**
     * Adds as additionalContent
     *
     * A collection of Additional Content elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType
     * $additionalContent
     */
    public function addToAdditionalContents(
        \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType $additionalContent
    ) {
        $this->additionalContents[] = $additionalContent;

        return $this;
    }

    /**
     * isset additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalContents($index)
    {
        return isset($this->additionalContents[$index]);
    }

    /**
     * unset additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalContents($index)
    {
        unset($this->additionalContents[$index]);
    }

    /**
     * Gets as additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     */
    public function getAdditionalContents()
    {
        return $this->additionalContents;
    }

    /**
     * Sets a new additionalContents
     *
     * A collection of Additional Content elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItemSearchCriterionType\AdditionalContentsAType\AdditionalContentAType[]
     * $additionalContents
     * @return self
     */
    public function setAdditionalContents(array $additionalContents)
    {
        $this->additionalContents = $additionalContents;

        return $this;
    }


}

