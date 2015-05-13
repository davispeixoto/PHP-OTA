<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TourActivityExtraRuleType
 *
 * Rules that apply to an extra.
 * XSD Type: TourActivityExtraRule
 */
class TourActivityExtraRuleType
{

    /**
     * If true, this extra is mandatory and must be included with the tour and/or
     * activity.
     *
     * @property boolean $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * If true, this extra is optional and may be included with and/or removed from the
     * tour and/or activity.
     *
     * @property boolean $optionalInd
     */
    private $optionalInd = null;

    /**
     * Indicates whether the extra applies to all participants or only the participants
     * that meet the specified rule criteria.
     *
     * @property string $applyTo
     */
    private $applyTo = null;

    /**
     * A description of the rule.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\ParticipantQualifierAType[]
     * $participantQualifier
     */
    private $participantQualifier = null;

    /**
     * Other rule information associated with this extra, including payment form types
     * accepted for deposits.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\OtherCriteriaAType
     * $otherCriteria
     */
    private $otherCriteria = null;

    /**
     * Gets as mandatoryInd
     *
     * If true, this extra is mandatory and must be included with the tour and/or
     * activity.
     *
     * @return boolean
     */
    public function getMandatoryInd()
    {
        return $this->mandatoryInd;
    }

    /**
     * Sets a new mandatoryInd
     *
     * If true, this extra is mandatory and must be included with the tour and/or
     * activity.
     *
     * @param boolean $mandatoryInd
     * @return self
     */
    public function setMandatoryInd($mandatoryInd)
    {
        $this->mandatoryInd = $mandatoryInd;

        return $this;
    }

    /**
     * Gets as optionalInd
     *
     * If true, this extra is optional and may be included with and/or removed from the
     * tour and/or activity.
     *
     * @return boolean
     */
    public function getOptionalInd()
    {
        return $this->optionalInd;
    }

    /**
     * Sets a new optionalInd
     *
     * If true, this extra is optional and may be included with and/or removed from the
     * tour and/or activity.
     *
     * @param boolean $optionalInd
     * @return self
     */
    public function setOptionalInd($optionalInd)
    {
        $this->optionalInd = $optionalInd;

        return $this;
    }

    /**
     * Gets as applyTo
     *
     * Indicates whether the extra applies to all participants or only the participants
     * that meet the specified rule criteria.
     *
     * @return string
     */
    public function getApplyTo()
    {
        return $this->applyTo;
    }

    /**
     * Sets a new applyTo
     *
     * Indicates whether the extra applies to all participants or only the participants
     * that meet the specified rule criteria.
     *
     * @param string $applyTo
     * @return self
     */
    public function setApplyTo($applyTo)
    {
        $this->applyTo = $applyTo;

        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the rule.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the rule.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as participantQualifier
     *
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\ParticipantQualifierAType
     * $participantQualifier
     */
    public function addToParticipantQualifier(
        \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\ParticipantQualifierAType $participantQualifier
    ) {
        $this->participantQualifier[] = $participantQualifier;

        return $this;
    }

    /**
     * isset participantQualifier
     *
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantQualifier($index)
    {
        return isset($this->participantQualifier[$index]);
    }

    /**
     * unset participantQualifier
     *
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantQualifier($index)
    {
        unset($this->participantQualifier[$index]);
    }

    /**
     * Gets as participantQualifier
     *
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\ParticipantQualifierAType[]
     */
    public function getParticipantQualifier()
    {
        return $this->participantQualifier;
    }

    /**
     * Sets a new participantQualifier
     *
     * Participant qualification information, including minimum age, actual age and/or
     * age category, associated with this extra rule.
     *
     * Qualifiers are used in combination with the @MandatoryInd and @OptionalInd to
     * further qualify if an extra is optional or mandatory based on a customers age,
     * birthdate and/or age category.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\ParticipantQualifierAType[]
     * $participantQualifier
     * @return self
     */
    public function setParticipantQualifier(array $participantQualifier)
    {
        $this->participantQualifier = $participantQualifier;

        return $this;
    }

    /**
     * Gets as otherCriteria
     *
     * Other rule information associated with this extra, including payment form types
     * accepted for deposits.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\OtherCriteriaAType
     */
    public function getOtherCriteria()
    {
        return $this->otherCriteria;
    }

    /**
     * Sets a new otherCriteria
     *
     * Other rule information associated with this extra, including payment form types
     * accepted for deposits.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\OtherCriteriaAType
     * $otherCriteria
     * @return self
     */
    public function setOtherCriteria(
        \Davispeixoto\OpenTravelAlliance\TourActivityExtraRuleType\OtherCriteriaAType $otherCriteria
    ) {
        $this->otherCriteria = $otherCriteria;

        return $this;
    }


}

