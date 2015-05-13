<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType\DiscountAType;

/**
 * Class representing ProgramAType
 */
class ProgramAType
{

    /**
     * The name of a discount program, e.g. "Day Pass" or "Gold Card".
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A description of the discount program.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * The company name associated with the discount program.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $provider
     */
    private $provider = null;

    /**
     * Gets as name
     *
     * The name of a discount program, e.g. "Day Pass" or "Gold Card".
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of a discount program, e.g. "Day Pass" or "Gold Card".
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the discount program.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the discount program.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as provider
     *
     * The company name associated with the discount program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The company name associated with the discount program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $provider
     * @return self
     */
    public function setProvider(\Davispeixoto\OpenTravelAlliance\CompanyNameType $provider)
    {
        $this->provider = $provider;

        return $this;
    }


}

