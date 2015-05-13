<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ImageDescriptionType
 *
 * Describes an image item.
 * XSD Type: ImageDescriptionType
 */
class ImageDescriptionType
{

    /**
     * Specifies the image category. Refer to OpenTravel Code list Picture Category
     * Code (PIC).
     *
     * @property string $category
     */
    private $category = null;

    /**
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\ImageFormatAType[]
     * $imageFormat
     */
    private $imageFormat = null;

    /**
     * The description associated with the image in a specific language.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\DescriptionAType[]
     * $description
     */
    private $description = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as category
     *
     * Specifies the image category. Refer to OpenTravel Code list Picture Category
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
     * Specifies the image category. Refer to OpenTravel Code list Picture Category
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
     * Adds as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\ImageFormatAType
     * $imageFormat
     */
    public function addToImageFormat(
        \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\ImageFormatAType $imageFormat
    ) {
        $this->imageFormat[] = $imageFormat;

        return $this;
    }

    /**
     * isset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetImageFormat($index)
    {
        return isset($this->imageFormat[$index]);
    }

    /**
     * unset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetImageFormat($index)
    {
        unset($this->imageFormat[$index]);
    }

    /**
     * Gets as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\ImageFormatAType[]
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\ImageFormatAType[]
     * $imageFormat
     * @return self
     */
    public function setImageFormat(array $imageFormat)
    {
        $this->imageFormat = $imageFormat;

        return $this;
    }

    /**
     * Adds as description
     *
     * The description associated with the image in a specific language.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\DescriptionAType
     * $description
     */
    public function addToDescription(
        \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\DescriptionAType $description
    ) {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * The description associated with the image in a specific language.
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
     * The description associated with the image in a specific language.
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
     * The description associated with the image in a specific language.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description associated with the image in a specific language.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ImageDescriptionType\DescriptionAType[]
     * $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

