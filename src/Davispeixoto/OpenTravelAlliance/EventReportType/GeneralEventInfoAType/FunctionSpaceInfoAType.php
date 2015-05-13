<?php

namespace Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType;

/**
 * Class representing FunctionSpaceInfoAType
 */
class FunctionSpaceInfoAType
{

    /**
     * When true, indicates the event required function space.
     *
     * @property boolean $functionSpaceIndicator
     */
    private $functionSpaceIndicator = null;

    /**
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @property string[] $propertyTypeCode
     */
    private $propertyTypeCode = null;

    /**
     * When true, indicates function space was required prior to the official start of
     * the event.
     *
     * @property boolean $preFunctionSpaceIndicator
     */
    private $preFunctionSpaceIndicator = null;

    /**
     * When true, indicates the event requires a move-in or set-up prior to the actual
     * start of the event.
     *
     * @property boolean $preEventSetupIndicator
     */
    private $preEventSetupIndicator = null;

    /**
     * Defines the duration necessary for move-in.
     *
     * @property \DateInterval $moveInRequirement
     */
    private $moveInRequirement = null;

    /**
     * Defines the duration necessary for move-out.
     *
     * @property \DateInterval $moveOutRequirement
     */
    private $moveOutRequirement = null;

    /**
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @property string[] $utilityCode
     */
    private $utilityCode = null;

    /**
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @property string[] $telecommunicationCode
     */
    private $telecommunicationCode = null;

    /**
     * Information regarding the largest function space for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\LargestFunctionSpaceAType
     * $largestFunctionSpace
     */
    private $largestFunctionSpace = null;

    /**
     * General breakout session information for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\BreakoutSessionsAType
     * $breakoutSessions
     */
    private $breakoutSessions = null;

    /**
     * General function space requirements for this event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\FunctionSpaceRequirementsAType[]
     * $functionSpaceRequirements
     */
    private $functionSpaceRequirements = null;

    /**
     * A collection of comments regarding the general function space information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as functionSpaceIndicator
     *
     * When true, indicates the event required function space.
     *
     * @return boolean
     */
    public function getFunctionSpaceIndicator()
    {
        return $this->functionSpaceIndicator;
    }

    /**
     * Sets a new functionSpaceIndicator
     *
     * When true, indicates the event required function space.
     *
     * @param boolean $functionSpaceIndicator
     * @return self
     */
    public function setFunctionSpaceIndicator($functionSpaceIndicator)
    {
        $this->functionSpaceIndicator = $functionSpaceIndicator;

        return $this;
    }

    /**
     * Adds as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @return self
     * @param string $propertyTypeCode
     */
    public function addToPropertyTypeCode($propertyTypeCode)
    {
        $this->propertyTypeCode[] = $propertyTypeCode;

        return $this;
    }

    /**
     * isset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyTypeCode($index)
    {
        return isset($this->propertyTypeCode[$index]);
    }

    /**
     * unset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyTypeCode($index)
    {
        unset($this->propertyTypeCode[$index]);
    }

    /**
     * Gets as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @return string[]
     */
    public function getPropertyTypeCode()
    {
        return $this->propertyTypeCode;
    }

    /**
     * Sets a new propertyTypeCode
     *
     * Used to indicate the type of facilities used for this event. Refer to OpenTravel
     * Code List Property Class Type (PCT).
     *
     * @param string $propertyTypeCode
     * @return self
     */
    public function setPropertyTypeCode(array $propertyTypeCode)
    {
        $this->propertyTypeCode = $propertyTypeCode;

        return $this;
    }

    /**
     * Gets as preFunctionSpaceIndicator
     *
     * When true, indicates function space was required prior to the official start of
     * the event.
     *
     * @return boolean
     */
    public function getPreFunctionSpaceIndicator()
    {
        return $this->preFunctionSpaceIndicator;
    }

    /**
     * Sets a new preFunctionSpaceIndicator
     *
     * When true, indicates function space was required prior to the official start of
     * the event.
     *
     * @param boolean $preFunctionSpaceIndicator
     * @return self
     */
    public function setPreFunctionSpaceIndicator($preFunctionSpaceIndicator)
    {
        $this->preFunctionSpaceIndicator = $preFunctionSpaceIndicator;

        return $this;
    }

    /**
     * Gets as preEventSetupIndicator
     *
     * When true, indicates the event requires a move-in or set-up prior to the actual
     * start of the event.
     *
     * @return boolean
     */
    public function getPreEventSetupIndicator()
    {
        return $this->preEventSetupIndicator;
    }

    /**
     * Sets a new preEventSetupIndicator
     *
     * When true, indicates the event requires a move-in or set-up prior to the actual
     * start of the event.
     *
     * @param boolean $preEventSetupIndicator
     * @return self
     */
    public function setPreEventSetupIndicator($preEventSetupIndicator)
    {
        $this->preEventSetupIndicator = $preEventSetupIndicator;

        return $this;
    }

    /**
     * Gets as moveInRequirement
     *
     * Defines the duration necessary for move-in.
     *
     * @return \DateInterval
     */
    public function getMoveInRequirement()
    {
        return $this->moveInRequirement;
    }

    /**
     * Sets a new moveInRequirement
     *
     * Defines the duration necessary for move-in.
     *
     * @param \DateInterval $moveInRequirement
     * @return self
     */
    public function setMoveInRequirement(\DateInterval $moveInRequirement)
    {
        $this->moveInRequirement = $moveInRequirement;

        return $this;
    }

    /**
     * Gets as moveOutRequirement
     *
     * Defines the duration necessary for move-out.
     *
     * @return \DateInterval
     */
    public function getMoveOutRequirement()
    {
        return $this->moveOutRequirement;
    }

    /**
     * Sets a new moveOutRequirement
     *
     * Defines the duration necessary for move-out.
     *
     * @param \DateInterval $moveOutRequirement
     * @return self
     */
    public function setMoveOutRequirement(\DateInterval $moveOutRequirement)
    {
        $this->moveOutRequirement = $moveOutRequirement;

        return $this;
    }

    /**
     * Adds as utilityCode
     *
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @return self
     * @param string $utilityCode
     */
    public function addToUtilityCode($utilityCode)
    {
        $this->utilityCode[] = $utilityCode;

        return $this;
    }

    /**
     * isset utilityCode
     *
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUtilityCode($index)
    {
        return isset($this->utilityCode[$index]);
    }

    /**
     * unset utilityCode
     *
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUtilityCode($index)
    {
        unset($this->utilityCode[$index]);
    }

    /**
     * Gets as utilityCode
     *
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @return string[]
     */
    public function getUtilityCode()
    {
        return $this->utilityCode;
    }

    /**
     * Sets a new utilityCode
     *
     * Type of utility(ies) required for this event's function space (e.g., air,
     * natural gas). Refer to OpenTravel Code list Utility Service Code (USC).
     *
     * @param string $utilityCode
     * @return self
     */
    public function setUtilityCode(array $utilityCode)
    {
        $this->utilityCode = $utilityCode;

        return $this;
    }

    /**
     * Adds as telecommunicationCode
     *
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @return self
     * @param string $telecommunicationCode
     */
    public function addToTelecommunicationCode($telecommunicationCode)
    {
        $this->telecommunicationCode[] = $telecommunicationCode;

        return $this;
    }

    /**
     * isset telecommunicationCode
     *
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelecommunicationCode($index)
    {
        return isset($this->telecommunicationCode[$index]);
    }

    /**
     * unset telecommunicationCode
     *
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelecommunicationCode($index)
    {
        unset($this->telecommunicationCode[$index]);
    }

    /**
     * Gets as telecommunicationCode
     *
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @return string[]
     */
    public function getTelecommunicationCode()
    {
        return $this->telecommunicationCode;
    }

    /**
     * Sets a new telecommunicationCode
     *
     * Telecommunication service(s) required for the event (e.g., analog phone line,
     * ethernet connection). Refer to OpenTravel Code list Business Srvc Type (BUS).
     *
     * @param string $telecommunicationCode
     * @return self
     */
    public function setTelecommunicationCode(array $telecommunicationCode)
    {
        $this->telecommunicationCode = $telecommunicationCode;

        return $this;
    }

    /**
     * Gets as largestFunctionSpace
     *
     * Information regarding the largest function space for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\LargestFunctionSpaceAType
     */
    public function getLargestFunctionSpace()
    {
        return $this->largestFunctionSpace;
    }

    /**
     * Sets a new largestFunctionSpace
     *
     * Information regarding the largest function space for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\LargestFunctionSpaceAType
     * $largestFunctionSpace
     * @return self
     */
    public function setLargestFunctionSpace(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\LargestFunctionSpaceAType $largestFunctionSpace
    ) {
        $this->largestFunctionSpace = $largestFunctionSpace;

        return $this;
    }

    /**
     * Gets as breakoutSessions
     *
     * General breakout session information for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\BreakoutSessionsAType
     */
    public function getBreakoutSessions()
    {
        return $this->breakoutSessions;
    }

    /**
     * Sets a new breakoutSessions
     *
     * General breakout session information for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\BreakoutSessionsAType
     * $breakoutSessions
     * @return self
     */
    public function setBreakoutSessions(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\BreakoutSessionsAType $breakoutSessions
    ) {
        $this->breakoutSessions = $breakoutSessions;

        return $this;
    }

    /**
     * Adds as functionSpaceRequirements
     *
     * General function space requirements for this event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\FunctionSpaceRequirementsAType
     * $functionSpaceRequirements
     */
    public function addToFunctionSpaceRequirements(
        \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\FunctionSpaceRequirementsAType $functionSpaceRequirements
    ) {
        $this->functionSpaceRequirements[] = $functionSpaceRequirements;

        return $this;
    }

    /**
     * isset functionSpaceRequirements
     *
     * General function space requirements for this event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFunctionSpaceRequirements($index)
    {
        return isset($this->functionSpaceRequirements[$index]);
    }

    /**
     * unset functionSpaceRequirements
     *
     * General function space requirements for this event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFunctionSpaceRequirements($index)
    {
        unset($this->functionSpaceRequirements[$index]);
    }

    /**
     * Gets as functionSpaceRequirements
     *
     * General function space requirements for this event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\FunctionSpaceRequirementsAType[]
     */
    public function getFunctionSpaceRequirements()
    {
        return $this->functionSpaceRequirements;
    }

    /**
     * Sets a new functionSpaceRequirements
     *
     * General function space requirements for this event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType\FunctionSpaceRequirementsAType[]
     * $functionSpaceRequirements
     * @return self
     */
    public function setFunctionSpaceRequirements(array $functionSpaceRequirements)
    {
        $this->functionSpaceRequirements = $functionSpaceRequirements;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments regarding the general function space information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments regarding the general function space information.
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
     * A collection of comments regarding the general function space information.
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
     * A collection of comments regarding the general function space information.
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
     * A collection of comments regarding the general function space information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

