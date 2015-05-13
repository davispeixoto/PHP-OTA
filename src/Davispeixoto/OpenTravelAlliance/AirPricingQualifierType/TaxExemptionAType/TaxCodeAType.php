<?php

namespace Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType;

/**
 * Class representing TaxCodeAType
 */
class TaxCodeAType
{

    /**
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in
     * combination with the @ExtDesignatorCode.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType
     * $designatorCode
     */
    private $designatorCode = null;

    /**
     * Tax type(s) associated with the designator code.
     *
     * @property string[] $taxType
     */
    private $taxType = null;

    /**
     * Gets as designatorCode
     *
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in
     * combination with the @ExtDesignatorCode.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType
     */
    public function getDesignatorCode()
    {
        return $this->designatorCode;
    }

    /**
     * Sets a new designatorCode
     *
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in
     * combination with the @ExtDesignatorCode.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType
     * $designatorCode
     * @return self
     */
    public function setDesignatorCode(
        \Davispeixoto\OpenTravelAlliance\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType $designatorCode
    ) {
        $this->designatorCode = $designatorCode;

        return $this;
    }

    /**
     * Adds as taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @return self
     * @param string $taxType
     */
    public function addToTaxType($taxType)
    {
        $this->taxType[] = $taxType;

        return $this;
    }

    /**
     * isset taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTaxType($index)
    {
        return isset($this->taxType[$index]);
    }

    /**
     * unset taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTaxType($index)
    {
        unset($this->taxType[$index]);
    }

    /**
     * Gets as taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @return string[]
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param string[] $taxType
     * @return self
     */
    public function setTaxType(array $taxType)
    {
        $this->taxType = $taxType;

        return $this;
    }


}

