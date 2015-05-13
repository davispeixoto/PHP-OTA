<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType;

/**
 * Class representing ATPCODiagnosticAType
 */
class ATPCODiagnosticAType
{

    /**
     * Shows ATPCO record S5 diagnostic information.
     *
     * @property integer $s5
     */
    private $s5 = null;

    /**
     * Shows ATPCO record S7 diagnostic information.
     *
     * @property integer $s7
     */
    private $s7 = null;

    /**
     * ATPCO record S7 sequence number.
     *
     * @property integer $s7SequenceNo
     */
    private $s7SequenceNo = null;

    /**
     * Gets as s5
     *
     * Shows ATPCO record S5 diagnostic information.
     *
     * @return integer
     */
    public function getS5()
    {
        return $this->s5;
    }

    /**
     * Sets a new s5
     *
     * Shows ATPCO record S5 diagnostic information.
     *
     * @param integer $s5
     * @return self
     */
    public function setS5($s5)
    {
        $this->s5 = $s5;

        return $this;
    }

    /**
     * Gets as s7
     *
     * Shows ATPCO record S7 diagnostic information.
     *
     * @return integer
     */
    public function getS7()
    {
        return $this->s7;
    }

    /**
     * Sets a new s7
     *
     * Shows ATPCO record S7 diagnostic information.
     *
     * @param integer $s7
     * @return self
     */
    public function setS7($s7)
    {
        $this->s7 = $s7;

        return $this;
    }

    /**
     * Gets as s7SequenceNo
     *
     * ATPCO record S7 sequence number.
     *
     * @return integer
     */
    public function getS7SequenceNo()
    {
        return $this->s7SequenceNo;
    }

    /**
     * Sets a new s7SequenceNo
     *
     * ATPCO record S7 sequence number.
     *
     * @param integer $s7SequenceNo
     * @return self
     */
    public function setS7SequenceNo($s7SequenceNo)
    {
        $this->s7SequenceNo = $s7SequenceNo;

        return $this;
    }


}

