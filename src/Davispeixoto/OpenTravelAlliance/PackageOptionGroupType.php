<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PackageOptionGroupType
 *
 * A collection of related package options.
 * XSD Type: PackageOptionGroupType
 */
class PackageOptionGroupType
{

    /**
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * A description of the relation between the package options in this group.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    private $description = null;

    /**
     * A product which supplements a package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PackageOptionType[] $packageOption
     */
    private $packageOption = null;

    /**
     * Gets as sequenceNumber
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the relation between the package options in this group.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the relation between the package options in this group.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as packageOption
     *
     * A product which supplements a package.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionType $packageOption
     */
    public function addToPackageOption(\Davispeixoto\OpenTravelAlliance\PackageOptionType $packageOption)
    {
        $this->packageOption[] = $packageOption;

        return $this;
    }

    /**
     * isset packageOption
     *
     * A product which supplements a package.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPackageOption($index)
    {
        return isset($this->packageOption[$index]);
    }

    /**
     * unset packageOption
     *
     * A product which supplements a package.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPackageOption($index)
    {
        unset($this->packageOption[$index]);
    }

    /**
     * Gets as packageOption
     *
     * A product which supplements a package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageOptionType[]
     */
    public function getPackageOption()
    {
        return $this->packageOption;
    }

    /**
     * Sets a new packageOption
     *
     * A product which supplements a package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PackageOptionType[] $packageOption
     * @return self
     */
    public function setPackageOption(array $packageOption)
    {
        $this->packageOption = $packageOption;

        return $this;
    }


}

