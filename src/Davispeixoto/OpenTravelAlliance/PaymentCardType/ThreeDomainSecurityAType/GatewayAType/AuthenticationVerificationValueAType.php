<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType;

/**
 * Class representing AuthenticationVerificationValueAType
 */
class AuthenticationVerificationValueAType
{

    /**
     * Secure representation.Example: 5dfc52b51bd35553df8592078de921bc
     * (encrypted)Example: xx44 (masked)
     *
     * @property \Davispeixoto\OpenTravelAlliance\EncryptionTokenType $secure
     */
    private $secure = null;

    /**
     * Plain text representation.Example: 7744
     *
     * @property string $plainText
     */
    private $plainText = null;

    /**
     * Gets as secure
     *
     * Secure representation.Example: 5dfc52b51bd35553df8592078de921bc
     * (encrypted)Example: xx44 (masked)
     *
     * @return \Davispeixoto\OpenTravelAlliance\EncryptionTokenType
     */
    public function getSecure()
    {
        return $this->secure;
    }

    /**
     * Sets a new secure
     *
     * Secure representation.Example: 5dfc52b51bd35553df8592078de921bc
     * (encrypted)Example: xx44 (masked)
     *
     * @param \Davispeixoto\OpenTravelAlliance\EncryptionTokenType $secure
     * @return self
     */
    public function setSecure(\Davispeixoto\OpenTravelAlliance\EncryptionTokenType $secure)
    {
        $this->secure = $secure;

        return $this;
    }

    /**
     * Gets as plainText
     *
     * Plain text representation.Example: 7744
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
     * Plain text representation.Example: 7744
     *
     * @param string $plainText
     * @return self
     */
    public function setPlainText($plainText)
    {
        $this->plainText = $plainText;

        return $this;
    }


}

