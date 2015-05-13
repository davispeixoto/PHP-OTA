<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeType\PolicyAType\CancelPolicyAType;

use Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing GuaranteeAcceptedAType
 */
class GuaranteeAcceptedAType extends PaymentFormType
{

    /**
     * A description of the guarantee.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @property boolean $noCardHolderInfoReqInd
     */
    private $noCardHolderInfoReqInd = null;

    /**
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @property boolean $nameReqInd
     */
    private $nameReqInd = null;

    /**
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @property boolean $addressReqInd
     */
    private $addressReqInd = null;

    /**
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @property boolean $phoneReqInd
     */
    private $phoneReqInd = null;

    /**
     * Gets as description
     *
     * A description of the guarantee.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the guarantee.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @return boolean
     */
    public function getNoCardHolderInfoReqInd()
    {
        return $this->noCardHolderInfoReqInd;
    }

    /**
     * Sets a new noCardHolderInfoReqInd
     *
     * If true, no credit card holder information is required. If false, it is not
     * required.
     *
     * @param boolean $noCardHolderInfoReqInd
     * @return self
     */
    public function setNoCardHolderInfoReqInd($noCardHolderInfoReqInd)
    {
        $this->noCardHolderInfoReqInd = $noCardHolderInfoReqInd;

        return $this;
    }

    /**
     * Gets as nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @return boolean
     */
    public function getNameReqInd()
    {
        return $this->nameReqInd;
    }

    /**
     * Sets a new nameReqInd
     *
     * If true, the credit card holder name is required. If false, it is not required.
     *
     * @param boolean $nameReqInd
     * @return self
     */
    public function setNameReqInd($nameReqInd)
    {
        $this->nameReqInd = $nameReqInd;

        return $this;
    }

    /**
     * Gets as addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @return boolean
     */
    public function getAddressReqInd()
    {
        return $this->addressReqInd;
    }

    /**
     * Sets a new addressReqInd
     *
     * If true, credit card holder address is required. If false, it is not required.
     *
     * @param boolean $addressReqInd
     * @return self
     */
    public function setAddressReqInd($addressReqInd)
    {
        $this->addressReqInd = $addressReqInd;

        return $this;
    }

    /**
     * Gets as phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @return boolean
     */
    public function getPhoneReqInd()
    {
        return $this->phoneReqInd;
    }

    /**
     * Sets a new phoneReqInd
     *
     * If true, credit card holder phone number is required. If false, it is not
     * required.
     *
     * @param boolean $phoneReqInd
     * @return self
     */
    public function setPhoneReqInd($phoneReqInd)
    {
        $this->phoneReqInd = $phoneReqInd;

        return $this;
    }


}

