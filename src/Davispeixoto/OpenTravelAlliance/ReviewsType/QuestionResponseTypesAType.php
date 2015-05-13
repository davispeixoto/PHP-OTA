<?php

namespace Davispeixoto\OpenTravelAlliance\ReviewsType;

/**
 * Class representing QuestionResponseTypesAType
 */
class QuestionResponseTypesAType
{

    /**
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     * $questionResponseType
     */
    private $questionResponseType = null;

    /**
     * Adds as questionResponseType
     *
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType
     * $questionResponseType
     */
    public function addToQuestionResponseType(
        \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType $questionResponseType
    ) {
        $this->questionResponseType[] = $questionResponseType;

        return $this;
    }

    /**
     * isset questionResponseType
     *
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQuestionResponseType($index)
    {
        return isset($this->questionResponseType[$index]);
    }

    /**
     * unset questionResponseType
     *
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQuestionResponseType($index)
    {
        unset($this->questionResponseType[$index]);
    }

    /**
     * Gets as questionResponseType
     *
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     */
    public function getQuestionResponseType()
    {
        return $this->questionResponseType;
    }

    /**
     * Sets a new questionResponseType
     *
     * A type of response that applies to a question. Example: A question may have
     * rating that are associated to the questions. 1 = Excellent
     * 2= Good
     * 3= Satisfactory
     * 4 = Unsatisfactory
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\ReviewsType\QuestionResponseTypesAType\QuestionResponseTypeAType[]
     * $questionResponseType
     * @return self
     */
    public function setQuestionResponseType(array $questionResponseType)
    {
        $this->questionResponseType = $questionResponseType;

        return $this;
    }


}

