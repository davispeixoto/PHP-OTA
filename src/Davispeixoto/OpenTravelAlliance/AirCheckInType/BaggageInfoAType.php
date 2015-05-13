<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

/**
 * Class representing BaggageInfoAType
 */
class BaggageInfoAType
{

    /**
     * Identifies the passenger under whose name the bags are checked.
     *
     * @property string $passengerRPH
     */
    private $passengerRPH = null;

    /**
     * Total number of bags checked for this passenger or baggage pool.
     *
     * @property integer $checkedBagCountTotal
     */
    private $checkedBagCountTotal = null;

    /**
     * Total number of hand bags carried on by this passenger or baggage pool.
     *
     * @property integer $handBagCountTotal
     */
    private $handBagCountTotal = null;

    /**
     * Identifies whether the passenger associated with this baggage is the head of a
     * baggage pool. If true, the passenger is head of a baggage pool.
     *
     * @property boolean $headOfBaggagePoolInd
     */
    private $headOfBaggagePoolInd = null;

    /**
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType[]
     * $checkedBaggageDetails
     */
    private $checkedBaggageDetails = null;

    /**
     * Specifies the total weight of checked baggage for a specific passenger or
     * baggage pool.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBagWeightTotalAType
     * $checkedBagWeightTotal
     */
    private $checkedBagWeightTotal = null;

    /**
     * Specifies the total weight of hand baggage for a specific passenger or baggage
     * pool.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\HandBagWeightTotalAType
     * $handBagWeightTotal
     */
    private $handBagWeightTotal = null;

    /**
     * Gets as passengerRPH
     *
     * Identifies the passenger under whose name the bags are checked.
     *
     * @return string
     */
    public function getPassengerRPH()
    {
        return $this->passengerRPH;
    }

    /**
     * Sets a new passengerRPH
     *
     * Identifies the passenger under whose name the bags are checked.
     *
     * @param string $passengerRPH
     * @return self
     */
    public function setPassengerRPH($passengerRPH)
    {
        $this->passengerRPH = $passengerRPH;

        return $this;
    }

    /**
     * Gets as checkedBagCountTotal
     *
     * Total number of bags checked for this passenger or baggage pool.
     *
     * @return integer
     */
    public function getCheckedBagCountTotal()
    {
        return $this->checkedBagCountTotal;
    }

    /**
     * Sets a new checkedBagCountTotal
     *
     * Total number of bags checked for this passenger or baggage pool.
     *
     * @param integer $checkedBagCountTotal
     * @return self
     */
    public function setCheckedBagCountTotal($checkedBagCountTotal)
    {
        $this->checkedBagCountTotal = $checkedBagCountTotal;

        return $this;
    }

    /**
     * Gets as handBagCountTotal
     *
     * Total number of hand bags carried on by this passenger or baggage pool.
     *
     * @return integer
     */
    public function getHandBagCountTotal()
    {
        return $this->handBagCountTotal;
    }

    /**
     * Sets a new handBagCountTotal
     *
     * Total number of hand bags carried on by this passenger or baggage pool.
     *
     * @param integer $handBagCountTotal
     * @return self
     */
    public function setHandBagCountTotal($handBagCountTotal)
    {
        $this->handBagCountTotal = $handBagCountTotal;

        return $this;
    }

    /**
     * Gets as headOfBaggagePoolInd
     *
     * Identifies whether the passenger associated with this baggage is the head of a
     * baggage pool. If true, the passenger is head of a baggage pool.
     *
     * @return boolean
     */
    public function getHeadOfBaggagePoolInd()
    {
        return $this->headOfBaggagePoolInd;
    }

    /**
     * Sets a new headOfBaggagePoolInd
     *
     * Identifies whether the passenger associated with this baggage is the head of a
     * baggage pool. If true, the passenger is head of a baggage pool.
     *
     * @param boolean $headOfBaggagePoolInd
     * @return self
     */
    public function setHeadOfBaggagePoolInd($headOfBaggagePoolInd)
    {
        $this->headOfBaggagePoolInd = $headOfBaggagePoolInd;

        return $this;
    }

    /**
     * Adds as checkedBaggageDetails
     *
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType
     * $checkedBaggageDetails
     */
    public function addToCheckedBaggageDetails(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType $checkedBaggageDetails
    ) {
        $this->checkedBaggageDetails[] = $checkedBaggageDetails;

        return $this;
    }

    /**
     * isset checkedBaggageDetails
     *
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCheckedBaggageDetails($index)
    {
        return isset($this->checkedBaggageDetails[$index]);
    }

    /**
     * unset checkedBaggageDetails
     *
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCheckedBaggageDetails($index)
    {
        unset($this->checkedBaggageDetails[$index]);
    }

    /**
     * Gets as checkedBaggageDetails
     *
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType[]
     */
    public function getCheckedBaggageDetails()
    {
        return $this->checkedBaggageDetails;
    }

    /**
     * Sets a new checkedBaggageDetails
     *
     * Information for each piece of baggage being checked in for a specific passenger
     * or pool.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBaggageDetailsAType[]
     * $checkedBaggageDetails
     * @return self
     */
    public function setCheckedBaggageDetails(array $checkedBaggageDetails)
    {
        $this->checkedBaggageDetails = $checkedBaggageDetails;

        return $this;
    }

    /**
     * Gets as checkedBagWeightTotal
     *
     * Specifies the total weight of checked baggage for a specific passenger or
     * baggage pool.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBagWeightTotalAType
     */
    public function getCheckedBagWeightTotal()
    {
        return $this->checkedBagWeightTotal;
    }

    /**
     * Sets a new checkedBagWeightTotal
     *
     * Specifies the total weight of checked baggage for a specific passenger or
     * baggage pool.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBagWeightTotalAType
     * $checkedBagWeightTotal
     * @return self
     */
    public function setCheckedBagWeightTotal(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\CheckedBagWeightTotalAType $checkedBagWeightTotal
    ) {
        $this->checkedBagWeightTotal = $checkedBagWeightTotal;

        return $this;
    }

    /**
     * Gets as handBagWeightTotal
     *
     * Specifies the total weight of hand baggage for a specific passenger or baggage
     * pool.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\HandBagWeightTotalAType
     */
    public function getHandBagWeightTotal()
    {
        return $this->handBagWeightTotal;
    }

    /**
     * Sets a new handBagWeightTotal
     *
     * Specifies the total weight of hand baggage for a specific passenger or baggage
     * pool.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\HandBagWeightTotalAType
     * $handBagWeightTotal
     * @return self
     */
    public function setHandBagWeightTotal(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType\HandBagWeightTotalAType $handBagWeightTotal
    ) {
        $this->handBagWeightTotal = $handBagWeightTotal;

        return $this;
    }


}

