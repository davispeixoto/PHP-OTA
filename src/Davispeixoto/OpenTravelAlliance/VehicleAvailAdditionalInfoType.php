<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailAdditionalInfoType
 *
 * The VehicleAvailAdditionalInfoType complex type identifies the data that
 * describes supplemental information made available as part of describing the
 * availability and rate of one or more vehicles.
 * XSD Type: VehicleAvailAdditionalInfoType
 */
class VehicleAvailAdditionalInfoType
{

    /**
     * Chargeable period.
     *
     * @property \DateInterval $chargeablePeriod
     */
    private $chargeablePeriod = null;

    /**
     * A collection of coverages, along with associated price and details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as chargeablePeriod
     *
     * Chargeable period.
     *
     * @return \DateInterval
     */
    public function getChargeablePeriod()
    {
        return $this->chargeablePeriod;
    }

    /**
     * Sets a new chargeablePeriod
     *
     * Chargeable period.
     *
     * @param \DateInterval $chargeablePeriod
     * @return self
     */
    public function setChargeablePeriod(\DateInterval $chargeablePeriod)
    {
        $this->chargeablePeriod = $chargeablePeriod;

        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Davispeixoto\OpenTravelAlliance\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;

        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of coverages, along with associated price and details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages)
    {
        $this->pricedCoverages = $pricedCoverages;

        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Davispeixoto\OpenTravelAlliance\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;

        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of
     * PaymentRules would be used if there were payment rules that were applicable to a
     * specific vehicle type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules)
    {
        $this->paymentRules = $paymentRules;

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

