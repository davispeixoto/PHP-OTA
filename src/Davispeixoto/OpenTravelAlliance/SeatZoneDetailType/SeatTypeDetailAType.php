<?php

namespace Davispeixoto\OpenTravelAlliance\SeatZoneDetailType;

/**
 * Class representing SeatTypeDetailAType
 */
class SeatTypeDetailAType
{

    /**
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @property integer $totalQty
     */
    private $totalQty = null;

    /**
     * The quantity of all available seats for the specified seat type in the seat
     * zone.
     *
     * @property integer $availableQty
     */
    private $availableQty = null;

    /**
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     */
    private $features = null;

    /**
     * Gets as type
     *
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with
     * features.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as totalQty
     *
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @return integer
     */
    public function getTotalQty()
    {
        return $this->totalQty;
    }

    /**
     * Sets a new totalQty
     *
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @param integer $totalQty
     * @return self
     */
    public function setTotalQty($totalQty)
    {
        $this->totalQty = $totalQty;

        return $this;
    }

    /**
     * Gets as availableQty
     *
     * The quantity of all available seats for the specified seat type in the seat
     * zone.
     *
     * @return integer
     */
    public function getAvailableQty()
    {
        return $this->availableQty;
    }

    /**
     * Sets a new availableQty
     *
     * The quantity of all available seats for the specified seat type in the seat
     * zone.
     *
     * @param integer $availableQty
     * @return self
     */
    public function setAvailableQty($availableQty)
    {
        $this->availableQty = $availableQty;

        return $this;
    }

    /**
     * Adds as features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features
     */
    public function addToFeatures(\Davispeixoto\OpenTravelAlliance\SeatFeaturesType $features)
    {
        $this->features[] = $features;

        return $this;
    }

    /**
     * isset features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an
     * item from the list or use the Other_ list value and enter a seat feature in the
     * @extension attribute that is known to trading partners.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatFeaturesType[] $features
     * @return self
     */
    public function setFeatures(array $features)
    {
        $this->features = $features;

        return $this;
    }


}

