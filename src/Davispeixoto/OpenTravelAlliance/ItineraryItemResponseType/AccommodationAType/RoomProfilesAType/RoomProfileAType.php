<?php

namespace Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType;

use Davispeixoto\OpenTravelAlliance\RoomProfileType;

/**
 * Class representing RoomProfileAType
 */
class RoomProfileAType extends RoomProfileType
{

    /**
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType[]
     * $prices
     */
    private $prices = null;

    /**
     * Adds as prices
     *
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType
     * $prices
     */
    public function addToPrices(
        \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType $prices
    ) {
        $this->prices[] = $prices;

        return $this;
    }

    /**
     * isset prices
     *
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPrices($index)
    {
        return isset($this->prices[$index]);
    }

    /**
     * unset prices
     *
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPrices($index)
    {
        unset($this->prices[$index]);
    }

    /**
     * Gets as prices
     *
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType[]
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * Sets a new prices
     *
     * A collection of room-based passenger-level prices. These will be either actual
     * prices or supplemental charges dependent on the SupplementIndicator attribute.
     * When these are actual prices, they may be by MealPlan (e.g., room prices on
     * HalfBoard arrangement, together with prices on Full Board).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ItineraryItemResponseType\AccommodationAType\RoomProfilesAType\RoomProfileAType\PricesAType[]
     * $prices
     * @return self
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;

        return $this;
    }


}

