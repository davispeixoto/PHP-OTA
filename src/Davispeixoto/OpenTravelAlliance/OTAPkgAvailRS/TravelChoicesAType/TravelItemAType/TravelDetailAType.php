<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType;

/**
 * Class representing TravelDetailAType
 */
class TravelDetailAType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[] $outwardTravel
     */
    private $outwardTravel = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[] $returnTravel
     */
    private $returnTravel = null;

    /**
     * Adds as outwardTravel
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType $outwardTravel
     */
    public function addToOutwardTravel(\Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType $outwardTravel)
    {
        $this->outwardTravel[] = $outwardTravel;

        return $this;
    }

    /**
     * isset outwardTravel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOutwardTravel($index)
    {
        return isset($this->outwardTravel[$index]);
    }

    /**
     * unset outwardTravel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOutwardTravel($index)
    {
        unset($this->outwardTravel[$index]);
    }

    /**
     * Gets as outwardTravel
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[]
     */
    public function getOutwardTravel()
    {
        return $this->outwardTravel;
    }

    /**
     * Sets a new outwardTravel
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[] $outwardTravel
     * @return self
     */
    public function setOutwardTravel(array $outwardTravel)
    {
        $this->outwardTravel = $outwardTravel;

        return $this;
    }

    /**
     * Adds as returnTravel
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType $returnTravel
     */
    public function addToReturnTravel(\Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType $returnTravel)
    {
        $this->returnTravel[] = $returnTravel;

        return $this;
    }

    /**
     * isset returnTravel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReturnTravel($index)
    {
        return isset($this->returnTravel[$index]);
    }

    /**
     * unset returnTravel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReturnTravel($index)
    {
        unset($this->returnTravel[$index]);
    }

    /**
     * Gets as returnTravel
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[]
     */
    public function getReturnTravel()
    {
        return $this->returnTravel;
    }

    /**
     * Sets a new returnTravel
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgTravelSegmentType[] $returnTravel
     * @return self
     */
    public function setReturnTravel(array $returnTravel)
    {
        $this->returnTravel = $returnTravel;

        return $this;
    }


}

