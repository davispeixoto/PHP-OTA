<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType;

/**
 * Class representing PricingAType
 */
class PricingAType
{

    /**
     * Summary pricing that is not associated with a participant category and/or group.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $summary
     */
    private $summary = null;

    /**
     * Pricing for one or more participant category(s).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType\DetailAType[]
     * $detail
     */
    private $detail = null;

    /**
     * Gets as summary
     *
     * Summary pricing that is not associated with a participant category and/or group.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityChargeType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary pricing that is not associated with a participant category and/or group.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityChargeType $summary
     * @return self
     */
    public function setSummary(\Davispeixoto\OpenTravelAlliance\TourActivityChargeType $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Adds as detail
     *
     * Pricing for one or more participant category(s).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType\DetailAType
     * $detail
     */
    public function addToDetail(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType\DetailAType $detail
    ) {
        $this->detail[] = $detail;

        return $this;
    }

    /**
     * isset detail
     *
     * Pricing for one or more participant category(s).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Pricing for one or more participant category(s).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Pricing for one or more participant category(s).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType\DetailAType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Pricing for one or more participant category(s).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType\PricingAType\DetailAType[]
     * $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}

