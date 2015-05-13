<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType;

/**
 * Class representing UpgradeAType
 */
class UpgradeAType
{

    /**
     * The upgrade method that should be applied to the offer.
     *
     * @property string $upgradeMethod
     */
    private $upgradeMethod = null;

    /**
     * The upgrade booking class.
     *
     * @property string $upgradeDesigCode
     */
    private $upgradeDesigCode = null;

    /**
     * Upgrade instruction text.
     *
     * @property string[] $instruction
     */
    private $instruction = null;

    /**
     * Gets as upgradeMethod
     *
     * The upgrade method that should be applied to the offer.
     *
     * @return string
     */
    public function getUpgradeMethod()
    {
        return $this->upgradeMethod;
    }

    /**
     * Sets a new upgradeMethod
     *
     * The upgrade method that should be applied to the offer.
     *
     * @param string $upgradeMethod
     * @return self
     */
    public function setUpgradeMethod($upgradeMethod)
    {
        $this->upgradeMethod = $upgradeMethod;

        return $this;
    }

    /**
     * Gets as upgradeDesigCode
     *
     * The upgrade booking class.
     *
     * @return string
     */
    public function getUpgradeDesigCode()
    {
        return $this->upgradeDesigCode;
    }

    /**
     * Sets a new upgradeDesigCode
     *
     * The upgrade booking class.
     *
     * @param string $upgradeDesigCode
     * @return self
     */
    public function setUpgradeDesigCode($upgradeDesigCode)
    {
        $this->upgradeDesigCode = $upgradeDesigCode;

        return $this;
    }

    /**
     * Adds as instruction
     *
     * Upgrade instruction text.
     *
     * @return self
     * @param string $instruction
     */
    public function addToInstruction($instruction)
    {
        $this->instruction[] = $instruction;

        return $this;
    }

    /**
     * isset instruction
     *
     * Upgrade instruction text.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInstruction($index)
    {
        return isset($this->instruction[$index]);
    }

    /**
     * unset instruction
     *
     * Upgrade instruction text.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInstruction($index)
    {
        unset($this->instruction[$index]);
    }

    /**
     * Gets as instruction
     *
     * Upgrade instruction text.
     *
     * @return string[]
     */
    public function getInstruction()
    {
        return $this->instruction;
    }

    /**
     * Sets a new instruction
     *
     * Upgrade instruction text.
     *
     * @param string[] $instruction
     * @return self
     */
    public function setInstruction(array $instruction)
    {
        $this->instruction = $instruction;

        return $this;
    }


}

