<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CustomQuestionType
 *
 *
 * XSD Type: CustomQuestionType
 */
class CustomQuestionType
{

    /**
     * A unique ID used to identify a question
     *
     * @property string $questionID
     */
    private $questionID = null;

    /**
     * Defines the type of question being asked (i.e., text, text area, single
     * selection, multiple selection or numeric). Refer to OpenTravel code list
     * Question Type (QST).
     *
     * @property string $questionTypeCode
     */
    private $questionTypeCode = null;

    /**
     * Code used to define the category for a question (e.g., food and beverage,
     * security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @property string $questionCategoryCode
     */
    private $questionCategoryCode = null;

    /**
     * When true, indicates an answer is required. When false, a question does not need
     * to be answered.
     *
     * @property boolean $answerRequiredInd
     */
    private $answerRequiredInd = null;

    /**
     * Text for a specific question.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $questionText
     */
    private $questionText = null;

    /**
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomQuestionType\ProvidedAnswerChoicesAType[]
     * $providedAnswerChoices
     */
    private $providedAnswerChoices = null;

    /**
     * Answer for a specific question.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $answerText
     */
    private $answerText = null;

    /**
     * Gets as questionID
     *
     * A unique ID used to identify a question
     *
     * @return string
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * Sets a new questionID
     *
     * A unique ID used to identify a question
     *
     * @param string $questionID
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;

        return $this;
    }

    /**
     * Gets as questionTypeCode
     *
     * Defines the type of question being asked (i.e., text, text area, single
     * selection, multiple selection or numeric). Refer to OpenTravel code list
     * Question Type (QST).
     *
     * @return string
     */
    public function getQuestionTypeCode()
    {
        return $this->questionTypeCode;
    }

    /**
     * Sets a new questionTypeCode
     *
     * Defines the type of question being asked (i.e., text, text area, single
     * selection, multiple selection or numeric). Refer to OpenTravel code list
     * Question Type (QST).
     *
     * @param string $questionTypeCode
     * @return self
     */
    public function setQuestionTypeCode($questionTypeCode)
    {
        $this->questionTypeCode = $questionTypeCode;

        return $this;
    }

    /**
     * Gets as questionCategoryCode
     *
     * Code used to define the category for a question (e.g., food and beverage,
     * security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @return string
     */
    public function getQuestionCategoryCode()
    {
        return $this->questionCategoryCode;
    }

    /**
     * Sets a new questionCategoryCode
     *
     * Code used to define the category for a question (e.g., food and beverage,
     * security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @param string $questionCategoryCode
     * @return self
     */
    public function setQuestionCategoryCode($questionCategoryCode)
    {
        $this->questionCategoryCode = $questionCategoryCode;

        return $this;
    }

    /**
     * Gets as answerRequiredInd
     *
     * When true, indicates an answer is required. When false, a question does not need
     * to be answered.
     *
     * @return boolean
     */
    public function getAnswerRequiredInd()
    {
        return $this->answerRequiredInd;
    }

    /**
     * Sets a new answerRequiredInd
     *
     * When true, indicates an answer is required. When false, a question does not need
     * to be answered.
     *
     * @param boolean $answerRequiredInd
     * @return self
     */
    public function setAnswerRequiredInd($answerRequiredInd)
    {
        $this->answerRequiredInd = $answerRequiredInd;

        return $this;
    }

    /**
     * Gets as questionText
     *
     * Text for a specific question.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Sets a new questionText
     *
     * Text for a specific question.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $questionText
     * @return self
     */
    public function setQuestionText(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Adds as providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomQuestionType\ProvidedAnswerChoicesAType
     * $providedAnswerChoices
     */
    public function addToProvidedAnswerChoices(
        \Davispeixoto\OpenTravelAlliance\CustomQuestionType\ProvidedAnswerChoicesAType $providedAnswerChoices
    ) {
        $this->providedAnswerChoices[] = $providedAnswerChoices;

        return $this;
    }

    /**
     * isset providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProvidedAnswerChoices($index)
    {
        return isset($this->providedAnswerChoices[$index]);
    }

    /**
     * unset providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProvidedAnswerChoices($index)
    {
        unset($this->providedAnswerChoices[$index]);
    }

    /**
     * Gets as providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomQuestionType\ProvidedAnswerChoicesAType[]
     */
    public function getProvidedAnswerChoices()
    {
        return $this->providedAnswerChoices;
    }

    /**
     * Sets a new providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomQuestionType\ProvidedAnswerChoicesAType[]
     * $providedAnswerChoices
     * @return self
     */
    public function setProvidedAnswerChoices(array $providedAnswerChoices)
    {
        $this->providedAnswerChoices = $providedAnswerChoices;

        return $this;
    }

    /**
     * Gets as answerText
     *
     * Answer for a specific question.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextTextType
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }

    /**
     * Sets a new answerText
     *
     * Answer for a specific question.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextTextType $answerText
     * @return self
     */
    public function setAnswerText(\Davispeixoto\OpenTravelAlliance\FormattedTextTextType $answerText)
    {
        $this->answerText = $answerText;

        return $this;
    }


}

