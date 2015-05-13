<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VideoDescriptionType
 *
 * Describes a video item.
 * XSD Type: VideoDescriptionType
 */
class VideoDescriptionType
{

    /**
     * Specifies the video category. Refer to OpenTravel Code list Picture Category
     * Code (PIC).
     *
     * @property string $category
     */
    private $category = null;

    /**
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\VideoFormatAType[]
     * $videoFormat
     */
    private $videoFormat = null;

    /**
     * The description associated with the video in a specific language.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * Gets as category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category
     * Code (PIC).
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category
     * Code (PIC).
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Adds as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\VideoFormatAType
     * $videoFormat
     */
    public function addToVideoFormat(
        \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\VideoFormatAType $videoFormat
    ) {
        $this->videoFormat[] = $videoFormat;

        return $this;
    }

    /**
     * isset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVideoFormat($index)
    {
        return isset($this->videoFormat[$index]);
    }

    /**
     * unset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVideoFormat($index)
    {
        unset($this->videoFormat[$index]);
    }

    /**
     * Gets as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\VideoFormatAType[]
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * Sets a new videoFormat
     *
     * A set of video of a given category can be provided in different Format, each
     * format will be described in this element.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\VideoFormatAType[]
     * $videoFormat
     * @return self
     */
    public function setVideoFormat(array $videoFormat)
    {
        $this->videoFormat = $videoFormat;

        return $this;
    }

    /**
     * Adds as description
     *
     * The description associated with the video in a specific language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\DescriptionAType
     * $description
     */
    public function addToDescription(
        \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\DescriptionAType $description
    ) {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * The description associated with the video in a specific language.
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
     * The description associated with the video in a specific language.
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
     * The description associated with the video in a specific language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description associated with the video in a specific language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VideoDescriptionType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

