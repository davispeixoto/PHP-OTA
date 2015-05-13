<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing RatePlanLevelFeeAType
 */
class RatePlanLevelFeeAType
{

    /**
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @property string $uRI
     */
    private $uRI = null;

    /**
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType\FeeAType[]
     * $fee
     */
    private $fee = null;

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code,
     * room amenity, etc.
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
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

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
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;

        return $this;
    }

    /**
     * Adds as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType\FeeAType
     * $fee
     */
    public function addToFee(\Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType\FeeAType $fee)
    {
        $this->fee[] = $fee;

        return $this;
    }

    /**
     * isset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType\FeeAType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Fee Amount that is applied to the rate. Fees are used for non tax amounts like
     * service charges.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\RatePlanLevelFeeAType\FeeAType[]
     * $fee
     * @return self
     */
    public function setFee(array $fee)
    {
        $this->fee = $fee;

        return $this;
    }


}

