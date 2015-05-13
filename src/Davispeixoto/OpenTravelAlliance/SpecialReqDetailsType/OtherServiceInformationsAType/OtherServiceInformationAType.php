<?php

namespace Davispeixoto\OpenTravelAlliance\SpecialReqDetailsType\OtherServiceInformationsAType;

use Davispeixoto\OpenTravelAlliance\OtherServiceInfoType;

/**
 * Class representing OtherServiceInformationAType
 */
class OtherServiceInformationAType extends OtherServiceInfoType
{

    /**
     * Unique value associated with the OSI.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Indicates the required modification to the element.
     *
     * @property string $operation
     */
    private $operation = null;

    /**
     * Gets as rPH
     *
     * Unique value associated with the OSI.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Unique value associated with the OSI.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }


}

