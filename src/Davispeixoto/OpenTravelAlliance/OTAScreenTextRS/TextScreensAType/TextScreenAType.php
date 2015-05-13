<?php

namespace Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType;

/**
 * Class representing TextScreenAType
 */
class TextScreenAType
{

    /**
     * A number assigned to this screen to identify its sequential order.
     *
     * @property integer $screenSequenceNum
     */
    private $screenSequenceNum = null;

    /**
     * A screen of text data or one line of text data.
     *
     * @property string[] $textData
     */
    private $textData = null;

    /**
     * Gets as screenSequenceNum
     *
     * A number assigned to this screen to identify its sequential order.
     *
     * @return integer
     */
    public function getScreenSequenceNum()
    {
        return $this->screenSequenceNum;
    }

    /**
     * Sets a new screenSequenceNum
     *
     * A number assigned to this screen to identify its sequential order.
     *
     * @param integer $screenSequenceNum
     * @return self
     */
    public function setScreenSequenceNum($screenSequenceNum)
    {
        $this->screenSequenceNum = $screenSequenceNum;

        return $this;
    }

    /**
     * Adds as textData
     *
     * A screen of text data or one line of text data.
     *
     * @return self
     * @param string $textData
     */
    public function addToTextData($textData)
    {
        $this->textData[] = $textData;

        return $this;
    }

    /**
     * isset textData
     *
     * A screen of text data or one line of text data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTextData($index)
    {
        return isset($this->textData[$index]);
    }

    /**
     * unset textData
     *
     * A screen of text data or one line of text data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTextData($index)
    {
        unset($this->textData[$index]);
    }

    /**
     * Gets as textData
     *
     * A screen of text data or one line of text data.
     *
     * @return string[]
     */
    public function getTextData()
    {
        return $this->textData;
    }

    /**
     * Sets a new textData
     *
     * A screen of text data or one line of text data.
     *
     * @param string[] $textData
     * @return self
     */
    public function setTextData(array $textData)
    {
        $this->textData = $textData;

        return $this;
    }


}

