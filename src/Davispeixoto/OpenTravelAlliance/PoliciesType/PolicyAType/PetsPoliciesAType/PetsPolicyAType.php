<?php

namespace Davispeixoto\OpenTravelAlliance\PoliciesType\PolicyAType\PetsPoliciesAType;

/**
 * Class representing PetsPolicyAType
 */
class PetsPolicyAType
{

    /**
     * Use OpenTravel Code Table Pet Policy Code list (PET).
     *
     * @property string $petsPolicyCode
     */
    private $petsPolicyCode = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @property float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @property string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * Maximum Number of Pets allowed in the accommodation provided.
     *
     * @property integer $maxPetQuantity
     */
    private $maxPetQuantity = null;

    /**
     * @property float $refundableDeposit
     */
    private $refundableDeposit = null;

    /**
     * Specifies the charge associated with a pet staying in the room.
     *
     * @property float $nonRefundableFee
     */
    private $nonRefundableFee = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Used to provide charge information for a pet. Refer to OpenTravel Code list
     * Charge Type (CHG).
     *
     * @property string $chargeCode
     */
    private $chargeCode = null;

    /**
     * When true, there is a restriction associated with this pet policy. When false,
     * there is not a restriction associated with this pet policy.
     *
     * @property boolean $restrictionInd
     */
    private $restrictionInd = null;

    /**
     * This is used to designate the minimum pet weight allowed. The unit of measure
     * code may indicate the associated unit of weight measure (e.g., pounds or
     * kilograms).
     *
     * @property float $minUnitOfMeasureQuantity
     */
    private $minUnitOfMeasureQuantity = null;

    /**
     * A description of the pet policy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     */
    private $description = null;

    /**
     * Gets as petsPolicyCode
     *
     * Use OpenTravel Code Table Pet Policy Code list (PET).
     *
     * @return string
     */
    public function getPetsPolicyCode()
    {
        return $this->petsPolicyCode;
    }

    /**
     * Sets a new petsPolicyCode
     *
     * Use OpenTravel Code Table Pet Policy Code list (PET).
     *
     * @param string $petsPolicyCode
     * @return self
     */
    public function setPetsPolicyCode($petsPolicyCode)
    {
        $this->petsPolicyCode = $petsPolicyCode;

        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as
     * metric or imperial or specific such as inches, feet, yards, miles, millimeters,
     * centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer
     * to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;

        return $this;
    }

    /**
     * Gets as maxPetQuantity
     *
     * Maximum Number of Pets allowed in the accommodation provided.
     *
     * @return integer
     */
    public function getMaxPetQuantity()
    {
        return $this->maxPetQuantity;
    }

    /**
     * Sets a new maxPetQuantity
     *
     * Maximum Number of Pets allowed in the accommodation provided.
     *
     * @param integer $maxPetQuantity
     * @return self
     */
    public function setMaxPetQuantity($maxPetQuantity)
    {
        $this->maxPetQuantity = $maxPetQuantity;

        return $this;
    }

    /**
     * Gets as refundableDeposit
     *
     * @return float
     */
    public function getRefundableDeposit()
    {
        return $this->refundableDeposit;
    }

    /**
     * Sets a new refundableDeposit
     *
     * @param float $refundableDeposit
     * @return self
     */
    public function setRefundableDeposit($refundableDeposit)
    {
        $this->refundableDeposit = $refundableDeposit;

        return $this;
    }

    /**
     * Gets as nonRefundableFee
     *
     * Specifies the charge associated with a pet staying in the room.
     *
     * @return float
     */
    public function getNonRefundableFee()
    {
        return $this->nonRefundableFee;
    }

    /**
     * Sets a new nonRefundableFee
     *
     * Specifies the charge associated with a pet staying in the room.
     *
     * @param float $nonRefundableFee
     * @return self
     */
    public function setNonRefundableFee($nonRefundableFee)
    {
        $this->nonRefundableFee = $nonRefundableFee;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as chargeCode
     *
     * Used to provide charge information for a pet. Refer to OpenTravel Code list
     * Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeCode()
    {
        return $this->chargeCode;
    }

    /**
     * Sets a new chargeCode
     *
     * Used to provide charge information for a pet. Refer to OpenTravel Code list
     * Charge Type (CHG).
     *
     * @param string $chargeCode
     * @return self
     */
    public function setChargeCode($chargeCode)
    {
        $this->chargeCode = $chargeCode;

        return $this;
    }

    /**
     * Gets as restrictionInd
     *
     * When true, there is a restriction associated with this pet policy. When false,
     * there is not a restriction associated with this pet policy.
     *
     * @return boolean
     */
    public function getRestrictionInd()
    {
        return $this->restrictionInd;
    }

    /**
     * Sets a new restrictionInd
     *
     * When true, there is a restriction associated with this pet policy. When false,
     * there is not a restriction associated with this pet policy.
     *
     * @param boolean $restrictionInd
     * @return self
     */
    public function setRestrictionInd($restrictionInd)
    {
        $this->restrictionInd = $restrictionInd;

        return $this;
    }

    /**
     * Gets as minUnitOfMeasureQuantity
     *
     * This is used to designate the minimum pet weight allowed. The unit of measure
     * code may indicate the associated unit of weight measure (e.g., pounds or
     * kilograms).
     *
     * @return float
     */
    public function getMinUnitOfMeasureQuantity()
    {
        return $this->minUnitOfMeasureQuantity;
    }

    /**
     * Sets a new minUnitOfMeasureQuantity
     *
     * This is used to designate the minimum pet weight allowed. The unit of measure
     * code may indicate the associated unit of weight measure (e.g., pounds or
     * kilograms).
     *
     * @param float $minUnitOfMeasureQuantity
     * @return self
     */
    public function setMinUnitOfMeasureQuantity($minUnitOfMeasureQuantity)
    {
        $this->minUnitOfMeasureQuantity = $minUnitOfMeasureQuantity;

        return $this;
    }

    /**
     * Adds as description
     *
     * A description of the pet policy.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $description
     */
    public function addToDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $description)
    {
        $this->description[] = $description;

        return $this;
    }

    /**
     * isset description
     *
     * A description of the pet policy.
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
     * A description of the pet policy.
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
     * A description of the pet policy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the pet policy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;

        return $this;
    }


}

