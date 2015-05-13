<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType;

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
     * A percentage off the tour/activity price associated with the program discount.
     *
     * @property float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * A monetary amount off the tour/activity price associated with the program
     * discount.
     *
     * @property float $discountAmount
     */
    private $discountAmount = null;

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
     * Gets as discountPercentage
     *
     * A percentage off the tour/activity price associated with the program discount.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * A percentage off the tour/activity price associated with the program discount.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as discountAmount
     *
     * A monetary amount off the tour/activity price associated with the program
     * discount.
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Sets a new discountAmount
     *
     * A monetary amount off the tour/activity price associated with the program
     * discount.
     *
     * @param float $discountAmount
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

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

