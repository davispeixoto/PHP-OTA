<?php

namespace Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType\RecyclingAType;

/**
 * Class representing DetailsAType
 */
class DetailsAType
{

    /**
     * Products recycled.Example: Paper
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRecycledProductsType[]
     * $recycledProducts
     */
    private $recycledProducts = null;

    /**
     * Recycling facility locations.Example: GuestRooms
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRecycleFacilityLocationType[]
     * $recyclingLocations
     */
    private $recyclingLocations = null;

    /**
     * Adds as recycledProducts
     *
     * Products recycled.Example: Paper
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ListRecycledProductsType
     * $recycledProducts
     */
    public function addToRecycledProducts(\Davispeixoto\OpenTravelAlliance\ListRecycledProductsType $recycledProducts)
    {
        $this->recycledProducts[] = $recycledProducts;

        return $this;
    }

    /**
     * isset recycledProducts
     *
     * Products recycled.Example: Paper
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecycledProducts($index)
    {
        return isset($this->recycledProducts[$index]);
    }

    /**
     * unset recycledProducts
     *
     * Products recycled.Example: Paper
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecycledProducts($index)
    {
        unset($this->recycledProducts[$index]);
    }

    /**
     * Gets as recycledProducts
     *
     * Products recycled.Example: Paper
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListRecycledProductsType[]
     */
    public function getRecycledProducts()
    {
        return $this->recycledProducts;
    }

    /**
     * Sets a new recycledProducts
     *
     * Products recycled.Example: Paper
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRecycledProductsType[]
     * $recycledProducts
     * @return self
     */
    public function setRecycledProducts(array $recycledProducts)
    {
        $this->recycledProducts = $recycledProducts;

        return $this;
    }

    /**
     * Adds as recyclingLocations
     *
     * Recycling facility locations.Example: GuestRooms
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ListRecycleFacilityLocationType
     * $recyclingLocations
     */
    public function addToRecyclingLocations(
        \Davispeixoto\OpenTravelAlliance\ListRecycleFacilityLocationType $recyclingLocations
    ) {
        $this->recyclingLocations[] = $recyclingLocations;

        return $this;
    }

    /**
     * isset recyclingLocations
     *
     * Recycling facility locations.Example: GuestRooms
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecyclingLocations($index)
    {
        return isset($this->recyclingLocations[$index]);
    }

    /**
     * unset recyclingLocations
     *
     * Recycling facility locations.Example: GuestRooms
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecyclingLocations($index)
    {
        unset($this->recyclingLocations[$index]);
    }

    /**
     * Gets as recyclingLocations
     *
     * Recycling facility locations.Example: GuestRooms
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListRecycleFacilityLocationType[]
     */
    public function getRecyclingLocations()
    {
        return $this->recyclingLocations;
    }

    /**
     * Sets a new recyclingLocations
     *
     * Recycling facility locations.Example: GuestRooms
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRecycleFacilityLocationType[]
     * $recyclingLocations
     * @return self
     */
    public function setRecyclingLocations(array $recyclingLocations)
    {
        $this->recyclingLocations = $recyclingLocations;

        return $this;
    }


}

