<?php

namespace Davispeixoto\OpenTravelAlliance\TextDescriptionType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType extends FormattedTextTextType
{

    /**
     * Sequence number associated with this description.
     *
     * @property integer $listItem
     */
    private $listItem = null;

    /**
     * Gets as listItem
     *
     * Sequence number associated with this description.
     *
     * @return integer
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * Sequence number associated with this description.
     *
     * @param integer $listItem
     * @return self
     */
    public function setListItem($listItem)
    {
        $this->listItem = $listItem;

        return $this;
    }


}

