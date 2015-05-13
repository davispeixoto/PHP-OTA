<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS;

/**
 * Class representing ExtraGroupsAType
 */
class ExtraGroupsAType
{

    /**
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType\ExtraGroupAType[]
     * $extraGroup
     */
    private $extraGroup = null;

    /**
     * Adds as extraGroup
     *
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType\ExtraGroupAType
     * $extraGroup
     */
    public function addToExtraGroup(
        \Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType\ExtraGroupAType $extraGroup
    ) {
        $this->extraGroup[] = $extraGroup;

        return $this;
    }

    /**
     * isset extraGroup
     *
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtraGroup($index)
    {
        return isset($this->extraGroup[$index]);
    }

    /**
     * unset extraGroup
     *
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtraGroup($index)
    {
        unset($this->extraGroup[$index]);
    }

    /**
     * Gets as extraGroup
     *
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType\ExtraGroupAType[]
     */
    public function getExtraGroup()
    {
        return $this->extraGroup;
    }

    /**
     * Sets a new extraGroup
     *
     * Defines a grouping of extras which determines the relationship of one extra to
     * another in that group e.g. only one extra from the group may be booked.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgExtrasInfoRS\ExtraGroupsAType\ExtraGroupAType[]
     * $extraGroup
     * @return self
     */
    public function setExtraGroup(array $extraGroup)
    {
        $this->extraGroup = $extraGroup;

        return $this;
    }


}

