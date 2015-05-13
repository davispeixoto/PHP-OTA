<?php

namespace Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{

    /**
     * Information on the restriction associated with the RoomRate element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     * $restriction
     */
    private $restriction = null;

    /**
     * Adds as restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType
     * $restriction
     */
    public function addToRestriction(
        \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType $restriction
    ) {
        $this->restriction[] = $restriction;

        return $this;
    }

    /**
     * isset restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Information on the restriction associated with the RoomRate element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType\RestrictionAType[]
     * $restriction
     * @return self
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }


}

