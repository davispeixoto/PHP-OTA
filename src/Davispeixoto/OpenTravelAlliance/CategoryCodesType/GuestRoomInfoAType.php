<?php

namespace Davispeixoto\OpenTravelAlliance\CategoryCodesType;

/**
 * Class representing GuestRoomInfoAType
 */
class GuestRoomInfoAType
{

    /**
     * Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @property boolean $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @property string $codeDetail
     */
    private $codeDetail = null;

    /**
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

    /**
     * A collection of rate range information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     * $rateRanges
     */
    private $rateRanges = null;

    /**
     * Multimedia information about the guest room.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the guest room.
     *
     * @property string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Guest Room Info (GRI).
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
     * Refer to OpenTravel Code List Guest Room Info (GRI).
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
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @return boolean
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *  false
     *
     * @param boolean $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;

        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;

        return $this;
    }

    /**
     * Gets as quantity
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
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether the Code applies. Refer to
     * OpenTravel Code list Option Type Code (OTC). This is used in conjunction with
     * Code.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;

        return $this;
    }

    /**
     * Adds as rateRange
     *
     * A collection of rate range information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType
     * $rateRange
     */
    public function addToRateRanges(
        \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType $rateRange
    ) {
        $this->rateRanges[] = $rateRange;

        return $this;
    }

    /**
     * isset rateRanges
     *
     * A collection of rate range information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateRanges($index)
    {
        return isset($this->rateRanges[$index]);
    }

    /**
     * unset rateRanges
     *
     * A collection of rate range information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateRanges($index)
    {
        unset($this->rateRanges[$index]);
    }

    /**
     * Gets as rateRanges
     *
     * A collection of rate range information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     */
    public function getRateRanges()
    {
        return $this->rateRanges;
    }

    /**
     * Sets a new rateRanges
     *
     * A collection of rate range information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CategoryCodesType\GuestRoomInfoAType\RateRangesAType\RateRangeAType[]
     * $rateRanges
     * @return self
     */
    public function setRateRanges(array $rateRanges)
    {
        $this->rateRanges = $rateRanges;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the guest room.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the guest room.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(
        \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType $multimediaDescriptions
    ) {
        $this->multimediaDescriptions = $multimediaDescriptions;

        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the guest room.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the guest room.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;

        return $this;
    }


}

