<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleRentalTransactionType
 *
 * This contains the information typically used in a rental transaction, such as
 * charges, contract number or pickup date/time.
 * XSD Type: VehicleRentalTransactionType
 */
class VehicleRentalTransactionType
{

    /**
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PickUpReturnDetailsAType[]
     * $pickUpReturnDetails
     */
    private $pickUpReturnDetails = null;

    /**
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being rented.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\VehicleAType
     * $vehicle
     */
    private $vehicle = null;

    /**
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     * $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * The anticipated total cost of a rental, the sum of the individual charges,
     * optional charges, and associated fees.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\TotalChargeAType
     * $totalCharge
     */
    private $totalCharge = null;

    /**
     * A confirmation number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $confID
     */
    private $confID = null;

    /**
     * A contract number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID
     */
    private $contractID = null;

    /**
     * Adds as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PickUpReturnDetailsAType
     * $pickUpReturnDetails
     */
    public function addToPickUpReturnDetails(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PickUpReturnDetailsAType $pickUpReturnDetails
    ) {
        $this->pickUpReturnDetails[] = $pickUpReturnDetails;

        return $this;
    }

    /**
     * isset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPickUpReturnDetails($index)
    {
        return isset($this->pickUpReturnDetails[$index]);
    }

    /**
     * unset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPickUpReturnDetails($index)
    {
        unset($this->pickUpReturnDetails[$index]);
    }

    /**
     * Gets as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PickUpReturnDetailsAType[]
     */
    public function getPickUpReturnDetails()
    {
        return $this->pickUpReturnDetails;
    }

    /**
     * Sets a new pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PickUpReturnDetailsAType[]
     * $pickUpReturnDetails
     * @return self
     */
    public function setPickUpReturnDetails(array $pickUpReturnDetails)
    {
        $this->pickUpReturnDetails = $pickUpReturnDetails;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being rented.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This
     * is the actual vehicle being rented.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\VehicleAType
     * $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Gets as rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(\Davispeixoto\OpenTravelAlliance\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate = $rentalRate;

        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType
     * $pricedEquip
     */
    public function addToPricedEquips(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
    ) {
        $this->pricedEquips[] = $pricedEquip;

        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with
     * the charges associated with this equipment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     * $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips)
    {
        $this->pricedEquips = $pricedEquips;

        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this rental.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee
     */
    public function addToFees(\Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;

        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this rental.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this rental.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges,
     * optional charges, and associated fees.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges,
     * optional charges, and associated fees.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\TotalChargeAType
     * $totalCharge
     * @return self
     */
    public function setTotalCharge(
        \Davispeixoto\OpenTravelAlliance\VehicleRentalTransactionType\TotalChargeAType $totalCharge
    ) {
        $this->totalCharge = $totalCharge;

        return $this;
    }

    /**
     * Gets as confID
     *
     * A confirmation number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $confID
     * @return self
     */
    public function setConfID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $confID)
    {
        $this->confID = $confID;

        return $this;
    }

    /**
     * Gets as contractID
     *
     * A contract number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getContractID()
    {
        return $this->contractID;
    }

    /**
     * Sets a new contractID
     *
     * A contract number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID
     * @return self
     */
    public function setContractID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $contractID)
    {
        $this->contractID = $contractID;

        return $this;
    }


}

