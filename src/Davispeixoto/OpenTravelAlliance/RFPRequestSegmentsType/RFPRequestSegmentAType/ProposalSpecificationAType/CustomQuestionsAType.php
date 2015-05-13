<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType;

/**
 * Class representing CustomQuestionsAType
 */
class CustomQuestionsAType
{

    /**
     * Details regarding a particular question.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $customQuestion
     */
    private $customQuestion = null;

    /**
     * Adds as customQuestion
     *
     * Details regarding a particular question.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType $customQuestion
     */
    public function addToCustomQuestion(\Davispeixoto\OpenTravelAlliance\CustomQuestionType $customQuestion)
    {
        $this->customQuestion[] = $customQuestion;

        return $this;
    }

    /**
     * isset customQuestion
     *
     * Details regarding a particular question.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomQuestion($index)
    {
        return isset($this->customQuestion[$index]);
    }

    /**
     * unset customQuestion
     *
     * Details regarding a particular question.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomQuestion($index)
    {
        unset($this->customQuestion[$index]);
    }

    /**
     * Gets as customQuestion
     *
     * Details regarding a particular question.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomQuestionType[]
     */
    public function getCustomQuestion()
    {
        return $this->customQuestion;
    }

    /**
     * Sets a new customQuestion
     *
     * Details regarding a particular question.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $customQuestion
     * @return self
     */
    public function setCustomQuestion(array $customQuestion)
    {
        $this->customQuestion = $customQuestion;

        return $this;
    }


}

