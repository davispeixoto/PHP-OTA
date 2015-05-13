<?php

namespace Davispeixoto\OpenTravelAlliance\ExtrasInfoType;

/**
 * Class representing AdditionalInfoPromptAType
 */
class AdditionalInfoPromptAType
{

    /**
     * The text of a prompt for additional information
     *
     * @property string $additionalInfoText
     */
    private $additionalInfoText = null;

    /**
     * The line number to define the sequence of the prompt
     *
     * @property integer $lineNumber
     */
    private $lineNumber = null;

    /**
     * Gets as additionalInfoText
     *
     * The text of a prompt for additional information
     *
     * @return string
     */
    public function getAdditionalInfoText()
    {
        return $this->additionalInfoText;
    }

    /**
     * Sets a new additionalInfoText
     *
     * The text of a prompt for additional information
     *
     * @param string $additionalInfoText
     * @return self
     */
    public function setAdditionalInfoText($additionalInfoText)
    {
        $this->additionalInfoText = $additionalInfoText;

        return $this;
    }

    /**
     * Gets as lineNumber
     *
     * The line number to define the sequence of the prompt
     *
     * @return integer
     */
    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    /**
     * Sets a new lineNumber
     *
     * The line number to define the sequence of the prompt
     *
     * @param integer $lineNumber
     * @return self
     */
    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;

        return $this;
    }


}

