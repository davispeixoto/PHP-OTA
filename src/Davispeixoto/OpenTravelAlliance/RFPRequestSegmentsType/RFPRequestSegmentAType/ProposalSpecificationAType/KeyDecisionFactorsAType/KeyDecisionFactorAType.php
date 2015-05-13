<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType;

/**
 * Class representing KeyDecisionFactorAType
 */
class KeyDecisionFactorAType
{

    /**
     * Used to define the key decision factor. Refer to OpenTravel Code List Key
     * Decision Factors.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Defines a ranking scale based on integers; meaning and scale is based on
     * individual implementations. Typically 1 would indicate most important.
     *
     * @property integer $ranking
     */
    private $ranking = null;

    /**
     * Gets as code
     *
     * Used to define the key decision factor. Refer to OpenTravel Code List Key
     * Decision Factors.
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
     * Used to define the key decision factor. Refer to OpenTravel Code List Key
     * Decision Factors.
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
     * Gets as ranking
     *
     * Defines a ranking scale based on integers; meaning and scale is based on
     * individual implementations. Typically 1 would indicate most important.
     *
     * @return integer
     */
    public function getRanking()
    {
        return $this->ranking;
    }

    /**
     * Sets a new ranking
     *
     * Defines a ranking scale based on integers; meaning and scale is based on
     * individual implementations. Typically 1 would indicate most important.
     *
     * @param integer $ranking
     * @return self
     */
    public function setRanking($ranking)
    {
        $this->ranking = $ranking;

        return $this;
    }


}

