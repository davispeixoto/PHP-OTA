<?php

namespace Davispeixoto\OpenTravelAlliance\AccountInfoType;

/**
 * Class representing SecurityInfoAType
 */
class SecurityInfoAType
{

    /**
     * @property string $username
     */
    private $username = null;

    /**
     * @property string $password
     */
    private $password = null;

    /**
     * Alternate method to password for account access.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType\PasswordHintAType[]
     * $passwordHint
     */
    private $passwordHint = null;

    /**
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets as password
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
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Adds as passwordHint
     *
     * Alternate method to password for account access.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType\PasswordHintAType
     * $passwordHint
     */
    public function addToPasswordHint(
        \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType\PasswordHintAType $passwordHint
    ) {
        $this->passwordHint[] = $passwordHint;

        return $this;
    }

    /**
     * isset passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPasswordHint($index)
    {
        return isset($this->passwordHint[$index]);
    }

    /**
     * unset passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPasswordHint($index)
    {
        unset($this->passwordHint[$index]);
    }

    /**
     * Gets as passwordHint
     *
     * Alternate method to password for account access.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType\PasswordHintAType[]
     */
    public function getPasswordHint()
    {
        return $this->passwordHint;
    }

    /**
     * Sets a new passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AccountInfoType\SecurityInfoAType\PasswordHintAType[]
     * $passwordHint
     * @return self
     */
    public function setPasswordHint(array $passwordHint)
    {
        $this->passwordHint = $passwordHint;

        return $this;
    }


}

