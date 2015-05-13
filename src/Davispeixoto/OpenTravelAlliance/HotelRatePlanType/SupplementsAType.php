<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRatePlanType;

/**
 * Class representing SupplementsAType
 */
class SupplementsAType
{

    /**
     * Single supplement with conditions of application.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType[]
     * $supplement
     */
    private $supplement = null;

    /**
     * Adds as supplement
     *
     * Single supplement with conditions of application.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType
     * $supplement
     */
    public function addToSupplement(
        \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType $supplement
    ) {
        $this->supplement[] = $supplement;

        return $this;
    }

    /**
     * isset supplement
     *
     * Single supplement with conditions of application.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplement($index)
    {
        return isset($this->supplement[$index]);
    }

    /**
     * unset supplement
     *
     * Single supplement with conditions of application.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplement($index)
    {
        unset($this->supplement[$index]);
    }

    /**
     * Gets as supplement
     *
     * Single supplement with conditions of application.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType[]
     */
    public function getSupplement()
    {
        return $this->supplement;
    }

    /**
     * Sets a new supplement
     *
     * Single supplement with conditions of application.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRatePlanType\SupplementsAType\SupplementAType[]
     * $supplement
     * @return self
     */
    public function setSupplement(array $supplement)
    {
        $this->supplement = $supplement;

        return $this;
    }


}

