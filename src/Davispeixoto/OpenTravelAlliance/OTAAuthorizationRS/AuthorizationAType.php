<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS;

/**
 * Class representing AuthorizationAType
 */
class AuthorizationAType
{

    /**
     * The original authorization request information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AuthorizationType
     * $authorizationDetail
     */
    private $authorizationDetail = null;

    /**
     * Result information from the authorization process.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS\AuthorizationAType\AuthorizationResultAType
     * $authorizationResult
     */
    private $authorizationResult = null;

    /**
     * Defines one or more business errors for this authorization.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * A collection of comments associated with the authorization information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * Gets as authorizationDetail
     *
     * The original authorization request information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AuthorizationType
     */
    public function getAuthorizationDetail()
    {
        return $this->authorizationDetail;
    }

    /**
     * Sets a new authorizationDetail
     *
     * The original authorization request information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AuthorizationType $authorizationDetail
     * @return self
     */
    public function setAuthorizationDetail(\Davispeixoto\OpenTravelAlliance\AuthorizationType $authorizationDetail)
    {
        $this->authorizationDetail = $authorizationDetail;

        return $this;
    }

    /**
     * Gets as authorizationResult
     *
     * Result information from the authorization process.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS\AuthorizationAType\AuthorizationResultAType
     */
    public function getAuthorizationResult()
    {
        return $this->authorizationResult;
    }

    /**
     * Sets a new authorizationResult
     *
     * Result information from the authorization process.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS\AuthorizationAType\AuthorizationResultAType
     * $authorizationResult
     * @return self
     */
    public function setAuthorizationResult(
        \Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS\AuthorizationAType\AuthorizationResultAType $authorizationResult
    ) {
        $this->authorizationResult = $authorizationResult;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Defines one or more business errors for this authorization.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Defines one or more business errors for this authorization.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Defines one or more business errors for this authorization.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Defines one or more business errors for this authorization.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Defines one or more business errors for this authorization.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated with the authorization information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType $comment
     */
    public function addToComments(\Davispeixoto\OpenTravelAlliance\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated with the authorization information.
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
     * A collection of comments associated with the authorization information.
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
     * A collection of comments associated with the authorization information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments associated with the authorization information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

