<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriteriaType;

use Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing CriterionAType
 */
class CriterionAType extends HotelSearchCriterionType
{

    /**
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request to indicate where to begin the next block of data.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @property string $infoSource
     */
    private $infoSource = null;

    /**
     * Identifies under what circumstances alternate availability should be returned.
     *
     * @property string $alternateAvailability
     */
    private $alternateAvailability = null;

    /**
     * If "Primary", the address search keyword(s) will be compared to the physical
     * address of the property. If "Alternate", the 'city' area attractions associated
     * with the property will be searched.
     *
     * @property string $addressSearchScope
     */
    private $addressSearchScope = null;

    /**
     * Gets as moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request to indicate where to begin the next block of data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The search response returns this attribute if there were additional items that
     * could not fit within the response. The text value returned should be echoed in
     * the subsequent request to indicate where to begin the next block of data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading
     * partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;

        return $this;
    }

    /**
     * Gets as alternateAvailability
     *
     * Identifies under what circumstances alternate availability should be returned.
     *
     * @return string
     */
    public function getAlternateAvailability()
    {
        return $this->alternateAvailability;
    }

    /**
     * Sets a new alternateAvailability
     *
     * Identifies under what circumstances alternate availability should be returned.
     *
     * @param string $alternateAvailability
     * @return self
     */
    public function setAlternateAvailability($alternateAvailability)
    {
        $this->alternateAvailability = $alternateAvailability;

        return $this;
    }

    /**
     * Gets as addressSearchScope
     *
     * If "Primary", the address search keyword(s) will be compared to the physical
     * address of the property. If "Alternate", the 'city' area attractions associated
     * with the property will be searched.
     *
     * @return string
     */
    public function getAddressSearchScope()
    {
        return $this->addressSearchScope;
    }

    /**
     * Sets a new addressSearchScope
     *
     * If "Primary", the address search keyword(s) will be compared to the physical
     * address of the property. If "Alternate", the 'city' area attractions associated
     * with the property will be searched.
     *
     * @param string $addressSearchScope
     * @return self
     */
    public function setAddressSearchScope($addressSearchScope)
    {
        $this->addressSearchScope = $addressSearchScope;

        return $this;
    }


}

