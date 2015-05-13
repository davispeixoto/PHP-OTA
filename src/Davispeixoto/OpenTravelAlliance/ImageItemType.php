<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ImageItemType
 *
 * Details for an image of a given category.
 * XSD Type: ImageItemType
 */
class ImageItemType
{

    /**
     * The unit of measure for the image item. Refer to OpenTravel Code list Unit of
     * Measure (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The width of the image item (unit specified by unit of measure).
     *
     * @property integer $width
     */
    private $width = null;

    /**
     * The height of the image item (unit specified by unit of measure).
     *
     * @property integer $height
     */
    private $height = null;

    /**
     * URL of the multimedia item for a specific format.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure for the image item. Refer to OpenTravel Code list Unit of
     * Measure (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure for the image item. Refer to OpenTravel Code list Unit of
     * Measure (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as width
     *
     * The width of the image item (unit specified by unit of measure).
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * The width of the image item (unit specified by unit of measure).
     *
     * @param integer $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets as height
     *
     * The height of the image item (unit specified by unit of measure).
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * The height of the image item (unit specified by unit of measure).
     *
     * @param integer $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL of the multimedia item for a specific format.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL of the multimedia item for a specific format.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }


}

