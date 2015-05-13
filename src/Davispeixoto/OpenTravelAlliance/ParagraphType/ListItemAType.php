<?php

namespace Davispeixoto\OpenTravelAlliance\ParagraphType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing ListItemAType
 */
class ListItemAType extends FormattedTextTextType
{

    /**
     * The item or sequence number.
     *
     * @property integer $listItem
     */
    private $listItem = null;

    /**
     * Gets as listItem
     *
     * The item or sequence number.
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
     * The item or sequence number.
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

