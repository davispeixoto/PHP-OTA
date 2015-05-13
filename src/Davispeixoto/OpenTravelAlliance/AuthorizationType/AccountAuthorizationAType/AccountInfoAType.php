<?php

namespace Davispeixoto\OpenTravelAlliance\AuthorizationType\AccountAuthorizationAType;

/**
 * Class representing AccountInfoAType
 */
class AccountInfoAType
{

    /**
     * The name on the account.
     *
     * @property string $accountName
     */
    private $accountName = null;

    /**
     * Describes the name of the company to which the account is attached.
     *
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * Identifier for the account assigned by the merchant.
     *
     * @property string $accountID
     */
    private $accountID = null;

    /**
     * Password attached to the account.
     *
     * @property string $password
     */
    private $password = null;

    /**
     * Describes the type of the account. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as accountName
     *
     * The name on the account.
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets a new accountName
     *
     * The name on the account.
     *
     * @param string $accountName
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * Describes the name of the company to which the account is attached.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Describes the name of the company to which the account is attached.
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Gets as accountID
     *
     * Identifier for the account assigned by the merchant.
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * Identifier for the account assigned by the merchant.
     *
     * @param string $accountID
     * @return self
     */
    public function setAccountID($accountID)
    {
        $this->accountID = $accountID;

        return $this;
    }

    /**
     * Gets as password
     *
     * Password attached to the account.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * Password attached to the account.
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets as code
     *
     * Describes the type of the account. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Describes the type of the account. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }


}

