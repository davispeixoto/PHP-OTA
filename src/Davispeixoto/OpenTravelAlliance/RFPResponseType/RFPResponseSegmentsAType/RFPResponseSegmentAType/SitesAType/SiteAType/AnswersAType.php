<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing AnswersAType
 */
class AnswersAType
{

    /**
     * Answer to custom questions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $answer
     */
    private $answer = null;

    /**
     * Adds as answer
     *
     * Answer to custom questions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType $answer
     */
    public function addToAnswer(\Davispeixoto\OpenTravelAlliance\CustomQuestionType $answer)
    {
        $this->answer[] = $answer;

        return $this;
    }

    /**
     * isset answer
     *
     * Answer to custom questions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * Answer to custom questions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * Answer to custom questions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomQuestionType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * Answer to custom questions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $answer
     * @return self
     */
    public function setAnswer(array $answer)
    {
        $this->answer = $answer;

        return $this;
    }


}

