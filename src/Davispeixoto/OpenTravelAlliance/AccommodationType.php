<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AccommodationType
 *
 * Type of accommodation including classes of Seat, berth, compartment on a train
 * with seat map detail.
 * XSD Type: AccommodationType
 */
class AccommodationType
{

    /**
     * The quantity.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * The seat type, such as Seat and Sleeperette.
     *
     * @property string $seat
     */
    private $seat = null;

    /**
     * Provides details on the seat map.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     * $seatAvailabilityDetail
     */
    private $seatAvailabilityDetail = null;

    /**
     * The berth type, such as Sleeper and Couchette.
     *
     * @property string $berth
     */
    private $berth = null;

    /**
     * Provides details on the berth map.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     * $berthAvailabilityDetail
     */
    private $berthAvailabilityDetail = null;

    /**
     * The accommodation class, such as First Class and Second Class.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationClassType $class
     */
    private $class = null;

    /**
     * The compartment type, such as Family and Single.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AccommodationType\CompartmentAType
     * $compartment
     */
    private $compartment = null;

    /**
     * Gets as quantity
     *
     * The quantity.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as seat
     *
     * The seat type, such as Seat and Sleeperette.
     *
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Sets a new seat
     *
     * The seat type, such as Seat and Sleeperette.
     *
     * @param string $seat
     * @return self
     */
    public function setSeat($seat)
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * Adds as car
     *
     * Provides details on the seat map.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType
     * $car
     */
    public function addToSeatAvailabilityDetail(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType $car
    ) {
        $this->seatAvailabilityDetail[] = $car;

        return $this;
    }

    /**
     * isset seatAvailabilityDetail
     *
     * Provides details on the seat map.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatAvailabilityDetail($index)
    {
        return isset($this->seatAvailabilityDetail[$index]);
    }

    /**
     * unset seatAvailabilityDetail
     *
     * Provides details on the seat map.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatAvailabilityDetail($index)
    {
        unset($this->seatAvailabilityDetail[$index]);
    }

    /**
     * Gets as seatAvailabilityDetail
     *
     * Provides details on the seat map.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     */
    public function getSeatAvailabilityDetail()
    {
        return $this->seatAvailabilityDetail;
    }

    /**
     * Sets a new seatAvailabilityDetail
     *
     * Provides details on the seat map.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\SeatAvailabilityDetailAType\CarAType[]
     * $seatAvailabilityDetail
     * @return self
     */
    public function setSeatAvailabilityDetail(array $seatAvailabilityDetail)
    {
        $this->seatAvailabilityDetail = $seatAvailabilityDetail;

        return $this;
    }

    /**
     * Gets as berth
     *
     * The berth type, such as Sleeper and Couchette.
     *
     * @return string
     */
    public function getBerth()
    {
        return $this->berth;
    }

    /**
     * Sets a new berth
     *
     * The berth type, such as Sleeper and Couchette.
     *
     * @param string $berth
     * @return self
     */
    public function setBerth($berth)
    {
        $this->berth = $berth;

        return $this;
    }

    /**
     * Adds as car
     *
     * Provides details on the berth map.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType
     * $car
     */
    public function addToBerthAvailabilityDetail(
        \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType $car
    ) {
        $this->berthAvailabilityDetail[] = $car;

        return $this;
    }

    /**
     * isset berthAvailabilityDetail
     *
     * Provides details on the berth map.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBerthAvailabilityDetail($index)
    {
        return isset($this->berthAvailabilityDetail[$index]);
    }

    /**
     * unset berthAvailabilityDetail
     *
     * Provides details on the berth map.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBerthAvailabilityDetail($index)
    {
        unset($this->berthAvailabilityDetail[$index]);
    }

    /**
     * Gets as berthAvailabilityDetail
     *
     * Provides details on the berth map.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     */
    public function getBerthAvailabilityDetail()
    {
        return $this->berthAvailabilityDetail;
    }

    /**
     * Sets a new berthAvailabilityDetail
     *
     * Provides details on the berth map.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccommodationType\BerthAvailabilityDetailAType\CarAType[]
     * $berthAvailabilityDetail
     * @return self
     */
    public function setBerthAvailabilityDetail(array $berthAvailabilityDetail)
    {
        $this->berthAvailabilityDetail = $berthAvailabilityDetail;

        return $this;
    }

    /**
     * Gets as class
     *
     * The accommodation class, such as First Class and Second Class.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationClassType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * The accommodation class, such as First Class and Second Class.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationClassType $class
     * @return self
     */
    public function setClass(\Davispeixoto\OpenTravelAlliance\AccommodationClassType $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Gets as compartment
     *
     * The compartment type, such as Family and Single.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AccommodationType\CompartmentAType
     */
    public function getCompartment()
    {
        return $this->compartment;
    }

    /**
     * Sets a new compartment
     *
     * The compartment type, such as Family and Single.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AccommodationType\CompartmentAType
     * $compartment
     * @return self
     */
    public function setCompartment(\Davispeixoto\OpenTravelAlliance\AccommodationType\CompartmentAType $compartment)
    {
        $this->compartment = $compartment;

        return $this;
    }


}

