<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing CompatibleOffersAType
 */
class CompatibleOffersAType
{

    /**
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     * $compatibleOffer
     */
    private $compatibleOffer = null;

    /**
     * Adds as compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType
     * $compatibleOffer
     */
    public function addToCompatibleOffer(
        \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer
    ) {
        $this->compatibleOffer[] = $compatibleOffer;

        return $this;
    }

    /**
     * isset compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompatibleOffer($index)
    {
        return isset($this->compatibleOffer[$index]);
    }

    /**
     * unset compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompatibleOffer($index)
    {
        unset($this->compatibleOffer[$index]);
    }

    /**
     * Gets as compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     */
    public function getCompatibleOffer()
    {
        return $this->compatibleOffer;
    }

    /**
     * Sets a new compatibleOffer
     *
     * Defines which other offers this offer may be use in conjuction with.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     * $compatibleOffer
     * @return self
     */
    public function setCompatibleOffer(array $compatibleOffer)
    {
        $this->compatibleOffer = $compatibleOffer;

        return $this;
    }


}

