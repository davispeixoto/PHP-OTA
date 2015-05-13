<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricedOfferType;

use Davispeixoto\OpenTravelAlliance\ImageDescriptionType;

/**
 * Class representing MultimediaAType
 */
class MultimediaAType extends ImageDescriptionType
{

    /**
     * The sequence order the image should be displayed in.
     *
     * @property integer $sequence
     */
    private $sequence = null;

    /**
     * The name of a page or page section where the image should be displayed.
     *
     * @property string $contentUsageType
     */
    private $contentUsageType = null;

    /**
     * Gets as sequence
     *
     * The sequence order the image should be displayed in.
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * The sequence order the image should be displayed in.
     *
     * @param integer $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Gets as contentUsageType
     *
     * The name of a page or page section where the image should be displayed.
     *
     * @return string
     */
    public function getContentUsageType()
    {
        return $this->contentUsageType;
    }

    /**
     * Sets a new contentUsageType
     *
     * The name of a page or page section where the image should be displayed.
     *
     * @param string $contentUsageType
     * @return self
     */
    public function setContentUsageType($contentUsageType)
    {
        $this->contentUsageType = $contentUsageType;

        return $this;
    }


}

