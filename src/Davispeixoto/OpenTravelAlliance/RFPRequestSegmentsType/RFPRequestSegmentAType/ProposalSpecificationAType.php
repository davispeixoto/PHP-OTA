<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing ProposalSpecificationAType
 */
class ProposalSpecificationAType
{

    /**
     * The date the requestor requires a response/proposal.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue
     */
    private $responseDue = null;

    /**
     * The date the requestor intends to decide on a particular site.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue
     */
    private $decisionDue = null;

    /**
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @property string $responseFormat
     */
    private $responseFormat = null;

    /**
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @property string $responseLanguage
     */
    private $responseLanguage = null;

    /**
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @property boolean $preliminaryCutIndicator
     */
    private $preliminaryCutIndicator = null;

    /**
     * Defines the date that the preliminary cut will be made.
     *
     * @property \DateTime $preliminaryCutDate
     */
    private $preliminaryCutDate = null;

    /**
     * Date the RFP or RFPs were distributed.
     *
     * @property \DateTime $rFPDistributionDate
     */
    private $rFPDistributionDate = null;

    /**
     * Date the RFP or RFPs were published.
     *
     * @property \DateTime $rFPPublishedDate
     */
    private $rFPPublishedDate = null;

    /**
     * The date the RFP was created.
     *
     * @property \DateTime $rFPCreationDate
     */
    private $rFPCreationDate = null;

    /**
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     * $keyDecisionFactors
     */
    private $keyDecisionFactors = null;

    /**
     * Used to provide information on where and when the sites should present their
     * proposals to the meeting planners.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType
     * $presentation
     */
    private $presentation = null;

    /**
     * Comments regarding the proposal itself.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * A container for collecting custom questions and answers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $customQuestions
     */
    private $customQuestions = null;

    /**
     * Gets as responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getResponseDue()
    {
        return $this->responseDue;
    }

    /**
     * Sets a new responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue
     * @return self
     */
    public function setResponseDue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $responseDue)
    {
        $this->responseDue = $responseDue;

        return $this;
    }

    /**
     * Gets as decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDecisionDue()
    {
        return $this->decisionDue;
    }

    /**
     * Sets a new decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue
     * @return self
     */
    public function setDecisionDue(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $decisionDue)
    {
        $this->decisionDue = $decisionDue;

        return $this;
    }

    /**
     * Gets as responseFormat
     *
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getResponseFormat()
    {
        return $this->responseFormat;
    }

    /**
     * Sets a new responseFormat
     *
     * The format of the response the requestor would like to receive the response
     * (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $responseFormat
     * @return self
     */
    public function setResponseFormat($responseFormat)
    {
        $this->responseFormat = $responseFormat;

        return $this;
    }

    /**
     * Gets as responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @return string
     */
    public function getResponseLanguage()
    {
        return $this->responseLanguage;
    }

    /**
     * Sets a new responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g.
     * English, Spanish, French).
     *
     * @param string $responseLanguage
     * @return self
     */
    public function setResponseLanguage($responseLanguage)
    {
        $this->responseLanguage = $responseLanguage;

        return $this;
    }

    /**
     * Gets as preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @return boolean
     */
    public function getPreliminaryCutIndicator()
    {
        return $this->preliminaryCutIndicator;
    }

    /**
     * Sets a new preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of
     * finalists. If false, no preliminary cut.
     *
     * @param boolean $preliminaryCutIndicator
     * @return self
     */
    public function setPreliminaryCutIndicator($preliminaryCutIndicator)
    {
        $this->preliminaryCutIndicator = $preliminaryCutIndicator;

        return $this;
    }

    /**
     * Gets as preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @return \DateTime
     */
    public function getPreliminaryCutDate()
    {
        return $this->preliminaryCutDate;
    }

    /**
     * Sets a new preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @param \DateTime $preliminaryCutDate
     * @return self
     */
    public function setPreliminaryCutDate(\DateTime $preliminaryCutDate)
    {
        $this->preliminaryCutDate = $preliminaryCutDate;

        return $this;
    }

    /**
     * Gets as rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @return \DateTime
     */
    public function getRFPDistributionDate()
    {
        return $this->rFPDistributionDate;
    }

    /**
     * Sets a new rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @param \DateTime $rFPDistributionDate
     * @return self
     */
    public function setRFPDistributionDate(\DateTime $rFPDistributionDate)
    {
        $this->rFPDistributionDate = $rFPDistributionDate;

        return $this;
    }

    /**
     * Gets as rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @return \DateTime
     */
    public function getRFPPublishedDate()
    {
        return $this->rFPPublishedDate;
    }

    /**
     * Sets a new rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @param \DateTime $rFPPublishedDate
     * @return self
     */
    public function setRFPPublishedDate(\DateTime $rFPPublishedDate)
    {
        $this->rFPPublishedDate = $rFPPublishedDate;

        return $this;
    }

    /**
     * Gets as rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @return \DateTime
     */
    public function getRFPCreationDate()
    {
        return $this->rFPCreationDate;
    }

    /**
     * Sets a new rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @param \DateTime $rFPCreationDate
     * @return self
     */
    public function setRFPCreationDate(\DateTime $rFPCreationDate)
    {
        $this->rFPCreationDate = $rFPCreationDate;

        return $this;
    }

    /**
     * Adds as keyDecisionFactor
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType
     * $keyDecisionFactor
     */
    public function addToKeyDecisionFactors(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor
    ) {
        $this->keyDecisionFactors[] = $keyDecisionFactor;

        return $this;
    }

    /**
     * isset keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetKeyDecisionFactors($index)
    {
        return isset($this->keyDecisionFactors[$index]);
    }

    /**
     * unset keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetKeyDecisionFactors($index)
    {
        unset($this->keyDecisionFactors[$index]);
    }

    /**
     * Gets as keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     */
    public function getKeyDecisionFactors()
    {
        return $this->keyDecisionFactors;
    }

    /**
     * Sets a new keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     * $keyDecisionFactors
     * @return self
     */
    public function setKeyDecisionFactors(array $keyDecisionFactors)
    {
        $this->keyDecisionFactors = $keyDecisionFactors;

        return $this;
    }

    /**
     * Gets as presentation
     *
     * Used to provide information on where and when the sites should present their
     * proposals to the meeting planners.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Sets a new presentation
     *
     * Used to provide information on where and when the sites should present their
     * proposals to the meeting planners.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType
     * $presentation
     * @return self
     */
    public function setPresentation(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType $presentation
    ) {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Adds as comments
     *
     * Comments regarding the proposal itself.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * isset comments
     *
     * Comments regarding the proposal itself.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Comments regarding the proposal itself.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Comments regarding the proposal itself.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments regarding the proposal itself.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Adds as customQuestion
     *
     * A container for collecting custom questions and answers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType $customQuestion
     */
    public function addToCustomQuestions(\Davispeixoto\OpenTravelAlliance\CustomQuestionType $customQuestion)
    {
        $this->customQuestions[] = $customQuestion;

        return $this;
    }

    /**
     * isset customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomQuestions($index)
    {
        return isset($this->customQuestions[$index]);
    }

    /**
     * unset customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomQuestions($index)
    {
        unset($this->customQuestions[$index]);
    }

    /**
     * Gets as customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomQuestionType[]
     */
    public function getCustomQuestions()
    {
        return $this->customQuestions;
    }

    /**
     * Sets a new customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomQuestionType[] $customQuestions
     * @return self
     */
    public function setCustomQuestions(array $customQuestions)
    {
        $this->customQuestions = $customQuestions;

        return $this;
    }


}

