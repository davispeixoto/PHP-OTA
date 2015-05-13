<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{

    /**
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     * $restriction
     */
    private $restriction = null;

    /**
     * Adds as restriction
     *
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType
     * $restriction
     */
    public function addToRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType $restriction
    ) {
        $this->restriction[] = $restriction;

        return $this;
    }

    /**
     * isset restriction
     *
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
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
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
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
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Date time and flight restrictions. Each restriction is considered to be a
     * logical 'AND' of the child restriction elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType[]
     * $restriction
     * @return self
     */
    public function setRestriction(array $restriction)
    {
        $this->restriction = $restriction;

        return $this;
    }


}

