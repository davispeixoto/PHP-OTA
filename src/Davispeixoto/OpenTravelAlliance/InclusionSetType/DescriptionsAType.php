<?php

namespace Davispeixoto\OpenTravelAlliance\InclusionSetType;

use Davispeixoto\OpenTravelAlliance\ParagraphType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{

    /**
     * @property ParagraphType[] $description
     */
    private $description = null;

    /**
     * Adds as description
     *
     * @return self
     * @param ParagraphType $description
     */
    public function addToDescription(ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

