<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgAirSegmentType
 *
 * Provides details of an air segment
 * XSD Type: PkgAirSegmentType
 */
class PkgAirSegmentType extends FlightSegmentBaseType
{

    /**
     * Provides the recommended date and time of passenger check-in.
     *
     * @property \DateTime $checkInDate
     */
    private $checkInDate = null;

    /**
     * Indicates whether the flight is a scheduled or charter service.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * @property string $departureDay
     */
    private $departureDay = null;

    /**
     * The supplier's code to identify the travel arrangement for the package
     *
     * @property string $travelCode
     */
    private $travelCode = null;

    /**
     * A length of time.
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FeeType[] $supplementCharges
     */
    private $supplementCharges = null;

    /**
     * A collection of seat availability by class.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[]
     * $availableSeats
     */
    private $availableSeats = null;

    /**
     * Reference Place Holders of the passengers travelling on this flight segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType\PassengersAType
     * $passengers
     */
    private $passengers = null;

    /**
     * Gets as checkInDate
     *
     * Provides the recommended date and time of passenger check-in.
     *
     * @return \DateTime
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * Sets a new checkInDate
     *
     * Provides the recommended date and time of passenger check-in.
     *
     * @param \DateTime $checkInDate
     * @return self
     */
    public function setCheckInDate(\DateTime $checkInDate)
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    /**
     * Gets as type
     *
     * Indicates whether the flight is a scheduled or charter service.
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
     * Indicates whether the flight is a scheduled or charter service.
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
     * Gets as departureDay
     *
     * @return string
     */
    public function getDepartureDay()
    {
        return $this->departureDay;
    }

    /**
     * Sets a new departureDay
     *
     * @param string $departureDay
     * @return self
     */
    public function setDepartureDay($departureDay)
    {
        $this->departureDay = $departureDay;

        return $this;
    }

    /**
     * Gets as travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @return string
     */
    public function getTravelCode()
    {
        return $this->travelCode;
    }

    /**
     * Sets a new travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @param string $travelCode
     * @return self
     */
    public function setTravelCode($travelCode)
    {
        $this->travelCode = $travelCode;

        return $this;
    }

    /**
     * Gets as duration
     *
     * A length of time.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * A length of time.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Adds as charge
     *
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FeeType $charge
     */
    public function addToSupplementCharges(\Davispeixoto\OpenTravelAlliance\FeeType $charge)
    {
        $this->supplementCharges[] = $charge;

        return $this;
    }

    /**
     * isset supplementCharges
     *
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
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
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
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
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
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
     * A value representing a supplement for this journey (e.g. Aberdeen to Palma) over
     * the cost of the journey on which package basic price is calculated (e.g. Gatwick
     * to Palma). The element repeats to allow for charges in an alternative currency
     * to be shown.
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
     * Adds as seatAvailability
     *
     * A collection of seat availability by class.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seatAvailability
     */
    public function addToAvailableSeats(\Davispeixoto\OpenTravelAlliance\SeatAvailabilityType $seatAvailability)
    {
        $this->availableSeats[] = $seatAvailability;

        return $this;
    }

    /**
     * isset availableSeats
     *
     * A collection of seat availability by class.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAvailableSeats($index)
    {
        return isset($this->availableSeats[$index]);
    }

    /**
     * unset availableSeats
     *
     * A collection of seat availability by class.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAvailableSeats($index)
    {
        unset($this->availableSeats[$index]);
    }

    /**
     * Gets as availableSeats
     *
     * A collection of seat availability by class.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[]
     */
    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    /**
     * Sets a new availableSeats
     *
     * A collection of seat availability by class.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatAvailabilityType[] $availableSeats
     * @return self
     */
    public function setAvailableSeats(array $availableSeats)
    {
        $this->availableSeats = $availableSeats;

        return $this;
    }

    /**
     * Gets as passengers
     *
     * Reference Place Holders of the passengers travelling on this flight segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType\PassengersAType
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Sets a new passengers
     *
     * Reference Place Holders of the passengers travelling on this flight segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgAirSegmentType\PassengersAType
     * $passengers
     * @return self
     */
    public function setPassengers(\Davispeixoto\OpenTravelAlliance\PkgAirSegmentType\PassengersAType $passengers)
    {
        $this->passengers = $passengers;

        return $this;
    }


}

