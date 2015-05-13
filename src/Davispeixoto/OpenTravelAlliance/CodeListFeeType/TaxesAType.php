<?php

namespace Davispeixoto\OpenTravelAlliance\CodeListFeeType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{

    /**
     * Mandatory tax indicator.Example: trueImplementer: If true, the tax is mandatory.
     *
     * @property boolean $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * Tax reference ID.
     *
     * @property string $taxRPH
     */
    private $taxRPH = null;

    /**
     * Tax amount or percentage information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\AmountAType $amount
     */
    private $amount = null;

    /**
     * Tax type.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListFeeTaxType $type
     */
    private $type = null;

    /**
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @property string[] $description
     */
    private $description = null;

    /**
     * Tax qualifier information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType
     * $qualifiers
     */
    private $qualifiers = null;

    /**
     * Gets as mandatoryInd
     *
     * Mandatory tax indicator.Example: trueImplementer: If true, the tax is mandatory.
     *
     * @return boolean
     */
    public function getMandatoryInd()
    {
        return $this->mandatoryInd;
    }

    /**
     * Sets a new mandatoryInd
     *
     * Mandatory tax indicator.Example: trueImplementer: If true, the tax is mandatory.
     *
     * @param boolean $mandatoryInd
     * @return self
     */
    public function setMandatoryInd($mandatoryInd)
    {
        $this->mandatoryInd = $mandatoryInd;

        return $this;
    }

    /**
     * Gets as taxRPH
     *
     * Tax reference ID.
     *
     * @return string
     */
    public function getTaxRPH()
    {
        return $this->taxRPH;
    }

    /**
     * Sets a new taxRPH
     *
     * Tax reference ID.
     *
     * @param string $taxRPH
     * @return self
     */
    public function setTaxRPH($taxRPH)
    {
        $this->taxRPH = $taxRPH;

        return $this;
    }

    /**
     * Gets as amount
     *
     * Tax amount or percentage information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\AmountAType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Tax amount or percentage information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\AmountAType
     * $amount
     * @return self
     */
    public function setAmount(\Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\AmountAType $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as type
     *
     * Tax type.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListFeeTaxType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Tax type.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListFeeTaxType $type
     * @return self
     */
    public function setType(\Davispeixoto\OpenTravelAlliance\ListFeeTaxType $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Adds as description
     *
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @return self
     * @param string $description
     */
    public function addToDescription($description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @return string[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Tax description.Implementer: The associated language identifier for this
     * descriptive information is specified in the @Language attribute.
     *
     * @param string[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as qualifiers
     *
     * Tax qualifier information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Sets a new qualifiers
     *
     * Tax qualifier information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType
     * $qualifiers
     * @return self
     */
    public function setQualifiers(
        \Davispeixoto\OpenTravelAlliance\CodeListFeeType\TaxesAType\QualifiersAType $qualifiers
    ) {
        $this->qualifiers = $qualifiers;

        return $this;
    }


}

