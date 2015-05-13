<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType;

/**
 * Class representing TravelItemAType
 *
 * Details of a travel component e.g. a set of travel legs making up a travel
 * component or a single item defining a round-trip journey.
 */
class TravelItemAType
{

    /**
     * Used to indicate whether or not the accommodation associated with the package is
     * available with this travel journey.
     *
     * @property boolean $accomOKFlag
     */
    private $accomOKFlag = null;

    /**
     * Provides details of travel arrangements by segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelDetailAType[]
     * $travelDetail
     */
    private $travelDetail = null;

    /**
     * Provides information on a complete travel journey.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelJourneyAType
     * $travelJourney
     */
    private $travelJourney = null;

    /**
     * A collection of supplementary charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharges
     */
    private $supplementCharges = null;

    /**
     * A collection of items of essential information relating to travel items.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgCautionType[] $cautions
     */
    private $cautions = null;

    /**
     * Gets as accomOKFlag
     *
     * Used to indicate whether or not the accommodation associated with the package is
     * available with this travel journey.
     *
     * @return boolean
     */
    public function getAccomOKFlag()
    {
        return $this->accomOKFlag;
    }

    /**
     * Sets a new accomOKFlag
     *
     * Used to indicate whether or not the accommodation associated with the package is
     * available with this travel journey.
     *
     * @param boolean $accomOKFlag
     * @return self
     */
    public function setAccomOKFlag($accomOKFlag)
    {
        $this->accomOKFlag = $accomOKFlag;

        return $this;
    }

    /**
     * Adds as travelDetail
     *
     * Provides details of travel arrangements by segment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelDetailAType
     * $travelDetail
     */
    public function addToTravelDetail(
        \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelDetailAType $travelDetail
    ) {
        $this->travelDetail[] = $travelDetail;

        return $this;
    }

    /**
     * isset travelDetail
     *
     * Provides details of travel arrangements by segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelDetail($index)
    {
        return isset($this->travelDetail[$index]);
    }

    /**
     * unset travelDetail
     *
     * Provides details of travel arrangements by segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelDetail($index)
    {
        unset($this->travelDetail[$index]);
    }

    /**
     * Gets as travelDetail
     *
     * Provides details of travel arrangements by segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelDetailAType[]
     */
    public function getTravelDetail()
    {
        return $this->travelDetail;
    }

    /**
     * Sets a new travelDetail
     *
     * Provides details of travel arrangements by segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelDetailAType[]
     * $travelDetail
     * @return self
     */
    public function setTravelDetail(array $travelDetail)
    {
        $this->travelDetail = $travelDetail;

        return $this;
    }

    /**
     * Gets as travelJourney
     *
     * Provides information on a complete travel journey.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelJourneyAType
     */
    public function getTravelJourney()
    {
        return $this->travelJourney;
    }

    /**
     * Sets a new travelJourney
     *
     * Provides information on a complete travel journey.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelJourneyAType
     * $travelJourney
     * @return self
     */
    public function setTravelJourney(
        \Davispeixoto\OpenTravelAlliance\OTAPkgAvailRS\TravelChoicesAType\TravelItemAType\TravelJourneyAType $travelJourney
    ) {
        $this->travelJourney = $travelJourney;

        return $this;
    }

    /**
     * Adds as supplementCharge
     *
     * A collection of supplementary charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $supplementCharge
     */
    public function addToSupplementCharges(\Davispeixoto\OpenTravelAlliance\FeeType $supplementCharge)
    {
        $this->supplementCharges[] = $supplementCharge;

        return $this;
    }

    /**
     * isset supplementCharges
     *
     * A collection of supplementary charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplementCharges($index)
    {
        return isset($this->supplementCharges[$index]);
    }

    /**
     * unset supplementCharges
     *
     * A collection of supplementary charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplementCharges($index)
    {
        unset($this->supplementCharges[$index]);
    }

    /**
     * Gets as supplementCharges
     *
     * A collection of supplementary charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FeeType[]
     */
    public function getSupplementCharges()
    {
        return $this->supplementCharges;
    }

    /**
     * Sets a new supplementCharges
     *
     * A collection of supplementary charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharges
     * @return self
     */
    public function setSupplementCharges(array $supplementCharges)
    {
        $this->supplementCharges = $supplementCharges;

        return $this;
    }

    /**
     * Adds as caution
     *
     * A collection of items of essential information relating to travel items.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgCautionType $caution
     */
    public function addToCautions(\Davispeixoto\OpenTravelAlliance\PkgCautionType $caution)
    {
        $this->cautions[] = $caution;

        return $this;
    }

    /**
     * isset cautions
     *
     * A collection of items of essential information relating to travel items.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCautions($index)
    {
        return isset($this->cautions[$index]);
    }

    /**
     * unset cautions
     *
     * A collection of items of essential information relating to travel items.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCautions($index)
    {
        unset($this->cautions[$index]);
    }

    /**
     * Gets as cautions
     *
     * A collection of items of essential information relating to travel items.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgCautionType[]
     */
    public function getCautions()
    {
        return $this->cautions;
    }

    /**
     * Sets a new cautions
     *
     * A collection of items of essential information relating to travel items.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgCautionType[] $cautions
     * @return self
     */
    public function setCautions(array $cautions)
    {
        $this->cautions = $cautions;

        return $this;
    }


}

