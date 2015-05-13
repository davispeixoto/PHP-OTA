<?php

namespace Davispeixoto\OpenTravelAlliance\OTAScreenTextRS;

/**
 * Class representing TextScreensAType
 */
class TextScreensAType
{

    /**
     * If true, one line of text screen data is being sent per TextData element.
     *
     * @property boolean $screenLineInd
     */
    private $screenLineInd = null;

    /**
     * The number of rows for the screen..
     *
     * @property string $screenRowsNum
     */
    private $screenRowsNum = null;

    /**
     * The number of columns for the screen.
     *
     * @property string $screenColumnsNum
     */
    private $screenColumnsNum = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * If true, the screens returned have been merged into a continuous string in one
     * TextScreen element.
     *
     * @property boolean $mergeScreenIndicator
     */
    private $mergeScreenIndicator = null;

    /**
     * If true, there are more screens to be returned.
     *
     * @property boolean $moreIndicator
     */
    private $moreIndicator = null;

    /**
     * One screen of text data.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType\TextScreenAType[]
     * $textScreen
     */
    private $textScreen = null;

    /**
     * Gets as screenLineInd
     *
     * If true, one line of text screen data is being sent per TextData element.
     *
     * @return boolean
     */
    public function getScreenLineInd()
    {
        return $this->screenLineInd;
    }

    /**
     * Sets a new screenLineInd
     *
     * If true, one line of text screen data is being sent per TextData element.
     *
     * @param boolean $screenLineInd
     * @return self
     */
    public function setScreenLineInd($screenLineInd)
    {
        $this->screenLineInd = $screenLineInd;

        return $this;
    }

    /**
     * Gets as screenRowsNum
     *
     * The number of rows for the screen..
     *
     * @return string
     */
    public function getScreenRowsNum()
    {
        return $this->screenRowsNum;
    }

    /**
     * Sets a new screenRowsNum
     *
     * The number of rows for the screen..
     *
     * @param string $screenRowsNum
     * @return self
     */
    public function setScreenRowsNum($screenRowsNum)
    {
        $this->screenRowsNum = $screenRowsNum;

        return $this;
    }

    /**
     * Gets as screenColumnsNum
     *
     * The number of columns for the screen.
     *
     * @return string
     */
    public function getScreenColumnsNum()
    {
        return $this->screenColumnsNum;
    }

    /**
     * Sets a new screenColumnsNum
     *
     * The number of columns for the screen.
     *
     * @param string $screenColumnsNum
     * @return self
     */
    public function setScreenColumnsNum($screenColumnsNum)
    {
        $this->screenColumnsNum = $screenColumnsNum;

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
     * Gets as mergeScreenIndicator
     *
     * If true, the screens returned have been merged into a continuous string in one
     * TextScreen element.
     *
     * @return boolean
     */
    public function getMergeScreenIndicator()
    {
        return $this->mergeScreenIndicator;
    }

    /**
     * Sets a new mergeScreenIndicator
     *
     * If true, the screens returned have been merged into a continuous string in one
     * TextScreen element.
     *
     * @param boolean $mergeScreenIndicator
     * @return self
     */
    public function setMergeScreenIndicator($mergeScreenIndicator)
    {
        $this->mergeScreenIndicator = $mergeScreenIndicator;

        return $this;
    }

    /**
     * Gets as moreIndicator
     *
     * If true, there are more screens to be returned.
     *
     * @return boolean
     */
    public function getMoreIndicator()
    {
        return $this->moreIndicator;
    }

    /**
     * Sets a new moreIndicator
     *
     * If true, there are more screens to be returned.
     *
     * @param boolean $moreIndicator
     * @return self
     */
    public function setMoreIndicator($moreIndicator)
    {
        $this->moreIndicator = $moreIndicator;

        return $this;
    }

    /**
     * Adds as textScreen
     *
     * One screen of text data.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType\TextScreenAType
     * $textScreen
     */
    public function addToTextScreen(
        \Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType\TextScreenAType $textScreen
    ) {
        $this->textScreen[] = $textScreen;

        return $this;
    }

    /**
     * isset textScreen
     *
     * One screen of text data.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTextScreen($index)
    {
        return isset($this->textScreen[$index]);
    }

    /**
     * unset textScreen
     *
     * One screen of text data.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTextScreen($index)
    {
        unset($this->textScreen[$index]);
    }

    /**
     * Gets as textScreen
     *
     * One screen of text data.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType\TextScreenAType[]
     */
    public function getTextScreen()
    {
        return $this->textScreen;
    }

    /**
     * Sets a new textScreen
     *
     * One screen of text data.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAScreenTextRS\TextScreensAType\TextScreenAType[]
     * $textScreen
     * @return self
     */
    public function setTextScreen(array $textScreen)
    {
        $this->textScreen = $textScreen;

        return $this;
    }


}

