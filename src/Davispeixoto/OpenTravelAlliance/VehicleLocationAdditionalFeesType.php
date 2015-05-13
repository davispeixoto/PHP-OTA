<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationAdditionalFeesType
 *
 * The Vehicle Location Additional Fees Type is used to define information on
 * additional fees, taxes and surcharges that are included in the cost of a rental,
 * when renting from this facility. Different facilities are required to impose
 * different fees and surcharges based upon location and local laws.
 * XSD Type: VehicleLocationAdditionalFeesType
 */
class VehicleLocationAdditionalFeesType
{

    /**
     * Information on additional taxes that may apply to the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\TaxesAType
     * $taxes
     */
    private $taxes = null;

    /**
     * Information on additional fees that may apply to the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType
     * $fees
     */
    private $fees = null;

    /**
     * Information on additional surcharges that may apply to the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType
     * $surcharges
     */
    private $surcharges = null;

    /**
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType
     * $miscellaneousCharges
     */
    private $miscellaneousCharges = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as taxes
     *
     * Information on additional taxes that may apply to the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\TaxesAType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Information on additional taxes that may apply to the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\TaxesAType
     * $taxes
     * @return self
     */
    public function setTaxes(\Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\TaxesAType $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Gets as fees
     *
     * Information on additional fees that may apply to the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Information on additional fees that may apply to the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType
     * $fees
     * @return self
     */
    public function setFees(\Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\FeesAType $fees)
    {
        $this->fees = $fees;

        return $this;
    }

    /**
     * Gets as surcharges
     *
     * Information on additional surcharges that may apply to the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType
     */
    public function getSurcharges()
    {
        return $this->surcharges;
    }

    /**
     * Sets a new surcharges
     *
     * Information on additional surcharges that may apply to the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType
     * $surcharges
     * @return self
     */
    public function setSurcharges(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\SurchargesAType $surcharges
    ) {
        $this->surcharges = $surcharges;

        return $this;
    }

    /**
     * Gets as miscellaneousCharges
     *
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType
     */
    public function getMiscellaneousCharges()
    {
        return $this->miscellaneousCharges;
    }

    /**
     * Sets a new miscellaneousCharges
     *
     * Information on additional miscellaneous charges that may apply to the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType
     * $miscellaneousCharges
     * @return self
     */
    public function setMiscellaneousCharges(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalFeesType\MiscellaneousChargesAType $miscellaneousCharges
    ) {
        $this->miscellaneousCharges = $miscellaneousCharges;

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

