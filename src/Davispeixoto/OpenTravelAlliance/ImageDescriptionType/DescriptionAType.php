<?php

namespace Davispeixoto\OpenTravelAlliance\ImageDescriptionType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType extends FormattedTextTextType
{

    /**
     * The caption associated to a specific image category which can be provided in
     * different languages.
     *
     * @property string $caption
     */
    private $caption = null;

    /**
     * Gets as caption
     *
     * The caption associated to a specific image category which can be provided in
     * different languages.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Sets a new caption
     *
     * The caption associated to a specific image category which can be provided in
     * different languages.
     *
     * @param string $caption
     * @return self
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;

        return $this;
    }


}

