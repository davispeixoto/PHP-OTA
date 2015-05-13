<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAuthorizationRS\AuthorizationAType;

/**
 * Class representing AuthorizationResultAType
 */
class AuthorizationResultAType
{

    /**
     * The unique code returned by the authorizing party. This is returned for
     * successful authorizations.
     *
     * @property string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * The date and time that the approval was issued.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $approvalDateTime
     */
    private $approvalDateTime = null;

    /**
     * Information returned by the credit card vendor describing the results of the
     * processing of the request.
     *
     * @property string $result
     */
    private $result = null;

    /**
     * The result of the address validation.
     *
     * @property string $addressResultCode
     */
    private $addressResultCode = null;

    /**
     * A response from the validation of the Card Verification Code (CVC/CSC- Card
     * Security Code or CVV/CVS Card Verification Value), a security feature for credit
     * card transactions.
     *
     * @property string $cVCResult
     */
    private $cVCResult = null;

    /**
     * Additional response information.
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as authorizationCode
     *
     * The unique code returned by the authorizing party. This is returned for
     * successful authorizations.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Sets a new authorizationCode
     *
     * The unique code returned by the authorizing party. This is returned for
     * successful authorizations.
     *
     * @param string $authorizationCode
     * @return self
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;

        return $this;
    }

    /**
     * Gets as approvalDateTime
     *
     * The date and time that the approval was issued.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getApprovalDateTime()
    {
        return $this->approvalDateTime;
    }

    /**
     * Sets a new approvalDateTime
     *
     * The date and time that the approval was issued.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $approvalDateTime
     * @return self
     */
    public function setApprovalDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $approvalDateTime)
    {
        $this->approvalDateTime = $approvalDateTime;

        return $this;
    }

    /**
     * Gets as result
     *
     * Information returned by the credit card vendor describing the results of the
     * processing of the request.
     *
     * @return string
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Sets a new result
     *
     * Information returned by the credit card vendor describing the results of the
     * processing of the request.
     *
     * @param string $result
     * @return self
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Gets as addressResultCode
     *
     * The result of the address validation.
     *
     * @return string
     */
    public function getAddressResultCode()
    {
        return $this->addressResultCode;
    }

    /**
     * Sets a new addressResultCode
     *
     * The result of the address validation.
     *
     * @param string $addressResultCode
     * @return self
     */
    public function setAddressResultCode($addressResultCode)
    {
        $this->addressResultCode = $addressResultCode;

        return $this;
    }

    /**
     * Gets as cVCResult
     *
     * A response from the validation of the Card Verification Code (CVC/CSC- Card
     * Security Code or CVV/CVS Card Verification Value), a security feature for credit
     * card transactions.
     *
     * @return string
     */
    public function getCVCResult()
    {
        return $this->cVCResult;
    }

    /**
     * Sets a new cVCResult
     *
     * A response from the validation of the Card Verification Code (CVC/CSC- Card
     * Security Code or CVV/CVS Card Verification Value), a security feature for credit
     * card transactions.
     *
     * @param string $cVCResult
     * @return self
     */
    public function setCVCResult($cVCResult)
    {
        $this->cVCResult = $cVCResult;

        return $this;
    }

    /**
     * Gets as description
     *
     * Additional response information.
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
     * Additional response information.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }


}

