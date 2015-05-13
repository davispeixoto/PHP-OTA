<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType;

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
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType\DetailedAType[]
     * $detailed
     */
    private $detailed = null;

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
     * Adds as detailed
     *
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType\DetailedAType
     * $detailed
     */
    public function addToDetailed(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType\DetailedAType $detailed
    ) {
        $this->detailed[] = $detailed;

        return $this;
    }

    /**
     * isset detailed
     *
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetailed($index)
    {
        return isset($this->detailed[$index]);
    }

    /**
     * unset detailed
     *
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetailed($index)
    {
        unset($this->detailed[$index]);
    }

    /**
     * Gets as detailed
     *
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType\DetailedAType[]
     */
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * Sets a new detailed
     *
     * Pricing for known participant(s), participant category(s) and group information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType\ExtraAType\PricingAType\DetailedAType[]
     * $detailed
     * @return self
     */
    public function setDetailed(array $detailed)
    {
        $this->detailed = $detailed;

        return $this;
    }


}

