<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing MeetingRoomCodeType
 *
 *
 * XSD Type: MeetingRoomCodeType
 */
class MeetingRoomCodeType
{

    /**
     * This is used to define items that may be available for any of the meeting rooms.
     * Refer to OpenTravel Code List Meeting Room Code (MRC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
     *
     * @property string $existsCode
     */
    private $existsCode = null;

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
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * This is used for discounts that apply to meetings (eg. corporate, military).
     * Refer to OpenTravel Code List Discounts Available (DIS).
     *
     * @property string $discountsAvailableCode
     */
    private $discountsAvailableCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * The minimum charge for this meeting room code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    private $charge = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\MultimediaDescriptionsType
     * $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Gets as code
     *
     * This is used to define items that may be available for any of the meeting rooms.
     * Refer to OpenTravel Code List Meeting Room Code (MRC).
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
     * This is used to define items that may be available for any of the meeting rooms.
     * Refer to OpenTravel Code List Meeting Room Code (MRC).
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
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
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
     * This attribute is used to explicitly define whether an amenity or service is
     * offered. Refer to OpenTravel Code list Option Type Code (OTC). This is used in
     * conjunction with Code.
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
     * Gets as discountsAvailableCode
     *
     * This is used for discounts that apply to meetings (eg. corporate, military).
     * Refer to OpenTravel Code List Discounts Available (DIS).
     *
     * @return string
     */
    public function getDiscountsAvailableCode()
    {
        return $this->discountsAvailableCode;
    }

    /**
     * Sets a new discountsAvailableCode
     *
     * This is used for discounts that apply to meetings (eg. corporate, military).
     * Refer to OpenTravel Code List Discounts Available (DIS).
     *
     * @param string $discountsAvailableCode
     * @return self
     */
    public function setDiscountsAvailableCode($discountsAvailableCode)
    {
        $this->discountsAvailableCode = $discountsAvailableCode;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as charge
     *
     * The minimum charge for this meeting room code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The minimum charge for this meeting room code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     * @return self
     */
    public function setCharge(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Gets as multimediaDescriptions
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


}

