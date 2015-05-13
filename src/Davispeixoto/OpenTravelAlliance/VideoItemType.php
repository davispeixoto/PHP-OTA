<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VideoItemType
 *
 * Details for a video of a given category.
 * XSD Type: VideoItemType
 */
class VideoItemType
{

    /**
     * The unit of measure associated with all the dimensions of the multimedia item.
     * Refer to OpenTravel Code list Unit of Measure (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The width of the video item (unit specified by unit of measure).
     *
     * @property integer $width
     */
    private $width = null;

    /**
     * The height of the video item (unit specified by unit of measure).
     *
     * @property integer $height
     */
    private $height = null;

    /**
     * The bit rate of the video item.
     *
     * @property integer $bitRate
     */
    private $bitRate = null;

    /**
     * The length of the video item (unit specified by unit of measure).
     *
     * @property integer $length
     */
    private $length = null;

    /**
     * Identifies the language of the multimedia item.
     *
     * @property string $language
     */
    private $language = null;

    /**
     * The code associated with the format of the multimedia item. Refer to OpenTravel
     * Code list Content Format Code (CFC).
     *
     * @property string $format
     */
    private $format = null;

    /**
     * The size of the multimedia file in bytes.
     *
     * @property integer $fileSize
     */
    private $fileSize = null;

    /**
     * The name of the multimedia file.
     *
     * @property string $fileName
     */
    private $fileName = null;

    /**
     * Source website of the video.Example: YouTube
     *
     * @property string $streamingSource
     */
    private $streamingSource = null;

    /**
     * URL of the multimedia item for a specific format.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure associated with all the dimensions of the multimedia item.
     * Refer to OpenTravel Code list Unit of Measure (UOM).
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
     * The unit of measure associated with all the dimensions of the multimedia item.
     * Refer to OpenTravel Code list Unit of Measure (UOM).
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
     * The width of the video item (unit specified by unit of measure).
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
     * The width of the video item (unit specified by unit of measure).
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
     * The height of the video item (unit specified by unit of measure).
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
     * The height of the video item (unit specified by unit of measure).
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
     * Gets as bitRate
     *
     * The bit rate of the video item.
     *
     * @return integer
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * The bit rate of the video item.
     *
     * @param integer $bitRate
     * @return self
     */
    public function setBitRate($bitRate)
    {
        $this->bitRate = $bitRate;

        return $this;
    }

    /**
     * Gets as length
     *
     * The length of the video item (unit specified by unit of measure).
     *
     * @return integer
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length of the video item (unit specified by unit of measure).
     *
     * @param integer $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Gets as language
     *
     * Identifies the language of the multimedia item.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Identifies the language of the multimedia item.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Gets as format
     *
     * The code associated with the format of the multimedia item. Refer to OpenTravel
     * Code list Content Format Code (CFC).
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * The code associated with the format of the multimedia item. Refer to OpenTravel
     * Code list Content Format Code (CFC).
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Gets as fileSize
     *
     * The size of the multimedia file in bytes.
     *
     * @return integer
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Sets a new fileSize
     *
     * The size of the multimedia file in bytes.
     *
     * @param integer $fileSize
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;

        return $this;
    }

    /**
     * Gets as fileName
     *
     * The name of the multimedia file.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * The name of the multimedia file.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Gets as streamingSource
     *
     * Source website of the video.Example: YouTube
     *
     * @return string
     */
    public function getStreamingSource()
    {
        return $this->streamingSource;
    }

    /**
     * Sets a new streamingSource
     *
     * Source website of the video.Example: YouTube
     *
     * @param string $streamingSource
     * @return self
     */
    public function setStreamingSource($streamingSource)
    {
        $this->streamingSource = $streamingSource;

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

