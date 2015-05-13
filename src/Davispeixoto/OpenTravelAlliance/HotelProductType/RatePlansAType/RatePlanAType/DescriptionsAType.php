<?php

namespace Davispeixoto\OpenTravelAlliance\HotelProductType\RatePlansAType\RatePlanAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{

    /**
     * Description information related to the rate plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Adds as description
     *
     * Description information related to the rate plan.
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
     * Description information related to the rate plan.
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
     * Description information related to the rate plan.
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
     * Description information related to the rate plan.
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
     * Description information related to the rate plan.
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

