<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

use Davispeixoto\OpenTravelAlliance\FareComponentType;

/**
 * Class representing ExchResidualFareComponentAType
 */
class ExchResidualFareComponentAType extends FareComponentType
{

    /**
     * The tax, fee, or charge amount information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $taxes
     */
    private $taxes = null;

    /**
     * The total residual value, including applicable tax, fees and charges.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType
     * $totalAmount
     */
    private $totalAmount = null;

    /**
     * Adds as tax
     *
     * The tax, fee, or charge amount information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType $tax
     */
    public function addToTaxes(\Davispeixoto\OpenTravelAlliance\AirTaxType $tax)
    {
        $this->taxes[] = $tax;

        return $this;
    }

    /**
     * isset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * The tax, fee, or charge amount information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes)
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * The total residual value, including applicable tax, fees and charges.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType
     * $totalAmount
     * @return self
     */
    public function setTotalAmount(
        \Davispeixoto\OpenTravelAlliance\EMDType\ExchResidualFareComponentAType\TotalAmountAType $totalAmount
    ) {
        $this->totalAmount = $totalAmount;

        return $this;
    }


}

