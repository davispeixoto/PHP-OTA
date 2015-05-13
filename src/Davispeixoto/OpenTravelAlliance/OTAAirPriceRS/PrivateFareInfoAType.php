<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRS;

/**
 * Class representing PrivateFareInfoAType
 */
class PrivateFareInfoAType
{

    /**
     * The passenger type code for this private fare.
     *
     * @property string $pTCCode
     */
    private $pTCCode = null;

    /**
     * Used to identify a quote.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Used to identify the leg pairing in a flight itinerary.
     *
     * @property integer $fareComponentNbr
     */
    private $fareComponentNbr = null;

    /**
     * Used to specify the type of information being sent in the Text field.
     *
     * @property string $textType
     */
    private $textType = null;

    /**
     * Additional information for the airline private fare.
     *
     * @property string $text
     */
    private $text = null;

    /**
     * Gets as pTCCode
     *
     * The passenger type code for this private fare.
     *
     * @return string
     */
    public function getPTCCode()
    {
        return $this->pTCCode;
    }

    /**
     * Sets a new pTCCode
     *
     * The passenger type code for this private fare.
     *
     * @param string $pTCCode
     * @return self
     */
    public function setPTCCode($pTCCode)
    {
        $this->pTCCode = $pTCCode;

        return $this;
    }

    /**
     * Gets as quoteID
     *
     * Used to identify a quote.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * Used to identify a quote.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Gets as fareComponentNbr
     *
     * Used to identify the leg pairing in a flight itinerary.
     *
     * @return integer
     */
    public function getFareComponentNbr()
    {
        return $this->fareComponentNbr;
    }

    /**
     * Sets a new fareComponentNbr
     *
     * Used to identify the leg pairing in a flight itinerary.
     *
     * @param integer $fareComponentNbr
     * @return self
     */
    public function setFareComponentNbr($fareComponentNbr)
    {
        $this->fareComponentNbr = $fareComponentNbr;

        return $this;
    }

    /**
     * Gets as textType
     *
     * Used to specify the type of information being sent in the Text field.
     *
     * @return string
     */
    public function getTextType()
    {
        return $this->textType;
    }

    /**
     * Sets a new textType
     *
     * Used to specify the type of information being sent in the Text field.
     *
     * @param string $textType
     * @return self
     */
    public function setTextType($textType)
    {
        $this->textType = $textType;

        return $this;
    }

    /**
     * Gets as text
     *
     * Additional information for the airline private fare.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Additional information for the airline private fare.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }


}

