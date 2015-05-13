<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing DocumentInstructionsAType
 */
class DocumentInstructionsAType
{

    /**
     * When true, the stored document instructions should not be used in ticketing.
     *
     * @property boolean $overrideStoredInd
     */
    private $overrideStoredInd = null;

    /**
     * When true, use the primary stored document instruction in ticketing.
     *
     * @property boolean $usePrimaryInd
     */
    private $usePrimaryInd = null;

    /**
     * A stored document instruction number to be used in ticketing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType\DocumentInstructionAType[]
     * $documentInstruction
     */
    private $documentInstruction = null;

    /**
     * Gets as overrideStoredInd
     *
     * When true, the stored document instructions should not be used in ticketing.
     *
     * @return boolean
     */
    public function getOverrideStoredInd()
    {
        return $this->overrideStoredInd;
    }

    /**
     * Sets a new overrideStoredInd
     *
     * When true, the stored document instructions should not be used in ticketing.
     *
     * @param boolean $overrideStoredInd
     * @return self
     */
    public function setOverrideStoredInd($overrideStoredInd)
    {
        $this->overrideStoredInd = $overrideStoredInd;

        return $this;
    }

    /**
     * Gets as usePrimaryInd
     *
     * When true, use the primary stored document instruction in ticketing.
     *
     * @return boolean
     */
    public function getUsePrimaryInd()
    {
        return $this->usePrimaryInd;
    }

    /**
     * Sets a new usePrimaryInd
     *
     * When true, use the primary stored document instruction in ticketing.
     *
     * @param boolean $usePrimaryInd
     * @return self
     */
    public function setUsePrimaryInd($usePrimaryInd)
    {
        $this->usePrimaryInd = $usePrimaryInd;

        return $this;
    }

    /**
     * Adds as documentInstruction
     *
     * A stored document instruction number to be used in ticketing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType\DocumentInstructionAType
     * $documentInstruction
     */
    public function addToDocumentInstruction(
        \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType\DocumentInstructionAType $documentInstruction
    ) {
        $this->documentInstruction[] = $documentInstruction;

        return $this;
    }

    /**
     * isset documentInstruction
     *
     * A stored document instruction number to be used in ticketing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocumentInstruction($index)
    {
        return isset($this->documentInstruction[$index]);
    }

    /**
     * unset documentInstruction
     *
     * A stored document instruction number to be used in ticketing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocumentInstruction($index)
    {
        unset($this->documentInstruction[$index]);
    }

    /**
     * Gets as documentInstruction
     *
     * A stored document instruction number to be used in ticketing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType\DocumentInstructionAType[]
     */
    public function getDocumentInstruction()
    {
        return $this->documentInstruction;
    }

    /**
     * Sets a new documentInstruction
     *
     * A stored document instruction number to be used in ticketing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\DocumentInstructionsAType\DocumentInstructionAType[]
     * $documentInstruction
     * @return self
     */
    public function setDocumentInstruction(array $documentInstruction)
    {
        $this->documentInstruction = $documentInstruction;

        return $this;
    }


}

