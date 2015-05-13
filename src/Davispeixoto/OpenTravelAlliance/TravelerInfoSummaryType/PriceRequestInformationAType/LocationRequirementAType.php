<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing LocationRequirementAType
 */
class LocationRequirementAType
{

    /**
     * Used to specify the location requirement type affecting the pricing.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The state location required for some fares.
     *
     * @property string $state
     */
    private $state = null;

    /**
     * The country location required for some fares.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * Gets as type
     *
     * Used to specify the location requirement type affecting the pricing.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to specify the location requirement type affecting the pricing.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as state
     *
     * The state location required for some fares.
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * The state location required for some fares.
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Gets as country
     *
     * The country location required for some fares.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * The country location required for some fares.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }


}

