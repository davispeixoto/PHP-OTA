<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing EncryptionTokenType
 *
 * Secure information that supports PCI tokens, data masking and other encryption
 * methods.OpenTravel Best Practice: Use of Encrypted, Masked or Tokenized
 * Information: Certain OpenTravel schema may have combinations payment and/or
 * account information with other personally identifying information, such as
 * customer name and date of birth. For enhanced customer privacy and security, it
 * is RECOMMENDED that the payment and account information be protected, using
 * tokenization or some other encryption method and displayed in a masked format.
 * XSD Type: EncryptionTokenType
 */
class EncryptionTokenType
{

    /**
     * Database key.Example: KHC32198gt4Note: This contains a key required to retrieve
     * the full payment instrument details compliant with PCI DSS standards.
     *
     * @property string $encryptionKey
     */
    private $encryptionKey = null;

    /**
     * Encryption key method.Example: RotatingKeyEnvironment_DailyKeyDeveloper: This
     * contains a reference to the key generation method being used - this is NOT the
     * key value.
     *
     * @property string $encryptionKeyMethod
     */
    private $encryptionKeyMethod = null;

    /**
     * Encryption method.Example: Triple DESOpenTravel Best Practice: Encryption
     * Method: When using the OpenTravel Encryption element, it is RECOMMENDED that all
     * trading partners be informed of all encryption methods being used in advance of
     * implementation to ensure message processing compatibility.
     *
     * @property string $encryptionMethod
     */
    private $encryptionMethod = null;

    /**
     * Encrypted value.Example: 5dfc52b51bd35553df8592078de921bc
     *
     * @property string $encryptedValue
     */
    private $encryptedValue = null;

    /**
     * Masked data.Example: xxxxxxxxxxxx9922
     *
     * @property string $mask
     */
    private $mask = null;

    /**
     * Tokenized information. Example: AEGHV234AUD54367
     *
     * @property string $token
     */
    private $token = null;

    /**
     * Provider ID.Example: Shift4 (payment)Developer: This contains a provider ID if
     * multiple providers are used for secure information exchange.
     *
     * @property string $tokenProviderID
     */
    private $tokenProviderID = null;

    /**
     * Specifies the method that was used to authenticate the card.
     *
     * @property string $authenticationMethod
     */
    private $authenticationMethod = null;

    /**
     * Non-secure (plain text) value.
     *
     * @property string $plainText
     */
    private $plainText = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Identifies an error that occurred in the processing of the payment card.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    private $warning = null;

    /**
     * Gets as encryptionKey
     *
     * Database key.Example: KHC32198gt4Note: This contains a key required to retrieve
     * the full payment instrument details compliant with PCI DSS standards.
     *
     * @return string
     */
    public function getEncryptionKey()
    {
        return $this->encryptionKey;
    }

    /**
     * Sets a new encryptionKey
     *
     * Database key.Example: KHC32198gt4Note: This contains a key required to retrieve
     * the full payment instrument details compliant with PCI DSS standards.
     *
     * @param string $encryptionKey
     * @return self
     */
    public function setEncryptionKey($encryptionKey)
    {
        $this->encryptionKey = $encryptionKey;

        return $this;
    }

    /**
     * Gets as encryptionKeyMethod
     *
     * Encryption key method.Example: RotatingKeyEnvironment_DailyKeyDeveloper: This
     * contains a reference to the key generation method being used - this is NOT the
     * key value.
     *
     * @return string
     */
    public function getEncryptionKeyMethod()
    {
        return $this->encryptionKeyMethod;
    }

    /**
     * Sets a new encryptionKeyMethod
     *
     * Encryption key method.Example: RotatingKeyEnvironment_DailyKeyDeveloper: This
     * contains a reference to the key generation method being used - this is NOT the
     * key value.
     *
     * @param string $encryptionKeyMethod
     * @return self
     */
    public function setEncryptionKeyMethod($encryptionKeyMethod)
    {
        $this->encryptionKeyMethod = $encryptionKeyMethod;

        return $this;
    }

    /**
     * Gets as encryptionMethod
     *
     * Encryption method.Example: Triple DESOpenTravel Best Practice: Encryption
     * Method: When using the OpenTravel Encryption element, it is RECOMMENDED that all
     * trading partners be informed of all encryption methods being used in advance of
     * implementation to ensure message processing compatibility.
     *
     * @return string
     */
    public function getEncryptionMethod()
    {
        return $this->encryptionMethod;
    }

    /**
     * Sets a new encryptionMethod
     *
     * Encryption method.Example: Triple DESOpenTravel Best Practice: Encryption
     * Method: When using the OpenTravel Encryption element, it is RECOMMENDED that all
     * trading partners be informed of all encryption methods being used in advance of
     * implementation to ensure message processing compatibility.
     *
     * @param string $encryptionMethod
     * @return self
     */
    public function setEncryptionMethod($encryptionMethod)
    {
        $this->encryptionMethod = $encryptionMethod;

        return $this;
    }

    /**
     * Gets as encryptedValue
     *
     * Encrypted value.Example: 5dfc52b51bd35553df8592078de921bc
     *
     * @return string
     */
    public function getEncryptedValue()
    {
        return $this->encryptedValue;
    }

    /**
     * Sets a new encryptedValue
     *
     * Encrypted value.Example: 5dfc52b51bd35553df8592078de921bc
     *
     * @param string $encryptedValue
     * @return self
     */
    public function setEncryptedValue($encryptedValue)
    {
        $this->encryptedValue = $encryptedValue;

        return $this;
    }

    /**
     * Gets as mask
     *
     * Masked data.Example: xxxxxxxxxxxx9922
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Sets a new mask
     *
     * Masked data.Example: xxxxxxxxxxxx9922
     *
     * @param string $mask
     * @return self
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Gets as token
     *
     * Tokenized information. Example: AEGHV234AUD54367
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Sets a new token
     *
     * Tokenized information. Example: AEGHV234AUD54367
     *
     * @param string $token
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Gets as tokenProviderID
     *
     * Provider ID.Example: Shift4 (payment)Developer: This contains a provider ID if
     * multiple providers are used for secure information exchange.
     *
     * @return string
     */
    public function getTokenProviderID()
    {
        return $this->tokenProviderID;
    }

    /**
     * Sets a new tokenProviderID
     *
     * Provider ID.Example: Shift4 (payment)Developer: This contains a provider ID if
     * multiple providers are used for secure information exchange.
     *
     * @param string $tokenProviderID
     * @return self
     */
    public function setTokenProviderID($tokenProviderID)
    {
        $this->tokenProviderID = $tokenProviderID;

        return $this;
    }

    /**
     * Gets as authenticationMethod
     *
     * Specifies the method that was used to authenticate the card.
     *
     * @return string
     */
    public function getAuthenticationMethod()
    {
        return $this->authenticationMethod;
    }

    /**
     * Sets a new authenticationMethod
     *
     * Specifies the method that was used to authenticate the card.
     *
     * @param string $authenticationMethod
     * @return self
     */
    public function setAuthenticationMethod($authenticationMethod)
    {
        $this->authenticationMethod = $authenticationMethod;

        return $this;
    }

    /**
     * Gets as plainText
     *
     * Non-secure (plain text) value.
     *
     * @return string
     */
    public function getPlainText()
    {
        return $this->plainText;
    }

    /**
     * Sets a new plainText
     *
     * Non-secure (plain text) value.
     *
     * @param string $plainText
     * @return self
     */
    public function setPlainText($plainText)
    {
        $this->plainText = $plainText;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * Gets as warning
     *
     * Identifies an error that occurred in the processing of the payment card.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * Identifies an error that occurred in the processing of the payment card.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     * @return self
     */
    public function setWarning(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warning = $warning;

        return $this;
    }


}

