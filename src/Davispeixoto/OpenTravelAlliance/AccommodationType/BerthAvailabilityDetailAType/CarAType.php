<?php

namespace Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType;

/**
 * Class representing CarAType
 */
class CarAType
{

    /**
     * The car number.
     *
     * @property string $number
     */
    private $number = null;

    /**
     * A compartment in this car.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[]
     * $compartment
     */
    private $compartment = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The car number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The car number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Adds as compartment
     *
     * A compartment in this car.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType
     * $compartment
     */
    public function addToCompartment(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType $compartment
    ) {
        $this->compartment[] = $compartment;

        return $this;
    }

    /**
     * isset compartment
     *
     * A compartment in this car.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompartment($index)
    {
        return isset($this->compartment[$index]);
    }

    /**
     * unset compartment
     *
     * A compartment in this car.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompartment($index)
    {
        unset($this->compartment[$index]);
    }

    /**
     * Gets as compartment
     *
     * A compartment in this car.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[]
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * A compartment in this car.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType[]
     * $compartment
     * @return self
     */
    public function setCompartment(array $compartment)
    {
        $this->compartment = $compartment;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

