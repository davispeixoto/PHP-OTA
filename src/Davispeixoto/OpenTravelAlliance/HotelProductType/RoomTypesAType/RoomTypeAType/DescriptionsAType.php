<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{

    /**
     * Desription information related to the room type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Adds as description
     *
     * Desription information related to the room type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Desription information related to the room type.
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
     * Desription information related to the room type.
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
     * Desription information related to the room type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Desription information related to the room type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

