<?php

namespace Davispeixoto\OpenTravelAlliance\CustomQuestionType;

use Davispeixoto\OpenTravelAlliance\FormattedTextTextType;

/**
 * Class representing ProvidedAnswerChoicesAType
 */
class ProvidedAnswerChoicesAType extends FormattedTextTextType
{

    /**
     * A unique ID used to identify an answer.
     *
     * @property string $answerID
     */
    private $answerID = null;

    /**
     * Gets as answerID
     *
     * A unique ID used to identify an answer.
     *
     * @return string
     */
    public function getAnswerID()
    {
        return $this->answerID;
    }

    /**
     * Sets a new answerID
     *
     * A unique ID used to identify an answer.
     *
     * @param string $answerID
     * @return self
     */
    public function setAnswerID($answerID)
    {
        $this->answerID = $answerID;

        return $this;
    }


}

