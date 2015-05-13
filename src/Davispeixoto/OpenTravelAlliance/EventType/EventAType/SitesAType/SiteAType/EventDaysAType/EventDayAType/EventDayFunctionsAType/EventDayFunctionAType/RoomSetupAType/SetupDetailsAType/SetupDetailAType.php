<?php

namespace Davispeixoto\OpenTravelAlliance\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType;

/**
 * Class representing SetupDetailAType
 */
class SetupDetailAType
{

    /**
     * @property float $area
     */
    private $area = null;

    /**
     * @property float $height
     */
    private $height = null;

    /**
     * @property float $length
     */
    private $length = null;

    /**
     * @property float $width
     */
    private $width = null;

    /**
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @property string $units
     */
    private $units = null;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Indicates additional details of the function setup (e.g. risers, perimeter
     * seating). Refer to OpenTravel Code List Meeting Room Code (MRC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * A collection of comments associated with the function setup.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as area
     *
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * @param float $area
     * @return self
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Gets as height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Gets as length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Gets as width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Gets as units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be
     * generic such as metric or imperial or specific such as inches, feet, yards,
     * miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
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
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of
     * Measure Code (UOM).
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
     * Gets as code
     *
     * Indicates additional details of the function setup (e.g. risers, perimeter
     * seating). Refer to OpenTravel Code List Meeting Room Code (MRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Indicates additional details of the function setup (e.g. risers, perimeter
     * seating). Refer to OpenTravel Code List Meeting Room Code (MRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated with the function setup.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated with the function setup.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments associated with the function setup.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments associated with the function setup.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments associated with the function setup.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

