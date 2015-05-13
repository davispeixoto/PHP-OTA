<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType;

/**
 * Class representing ProgramDetailAType
 */
class ProgramDetailAType
{

    /**
     * A unique ID for this program that may be referenced elsewhere in this message.
     *
     * @property string $programID
     */
    private $programID = null;

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
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     */
    private $providerName = null;

    /**
     * Gets as programID
     *
     * A unique ID for this program that may be referenced elsewhere in this message.
     *
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * Sets a new programID
     *
     * A unique ID for this program that may be referenced elsewhere in this message.
     *
     * @param string $programID
     * @return self
     */
    public function setProgramID($programID)
    {
        $this->programID = $programID;

        return $this;
    }

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
     * Gets as providerName
     *
     * The company name associated with the discount program.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * The company name associated with the discount program.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     * @return self
     */
    public function setProviderName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }


}

