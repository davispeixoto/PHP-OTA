<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType;

/**
 * Class representing TransactionPasswordAType
 */
class TransactionPasswordAType
{

    /**
     * Secure representation.Example: AEGHV234AUD54367 (tokenized)Example:
     * 5dfc52b51bd35553df8592078de921bc (encrypted)Example: xxxxxxxxxxxx4444 (masked)
     *
     * @property \Davispeixoto\OpenTravelAlliance\EncryptionTokenType $secure
     */
    private $secure = null;

    /**
     * Plain text representation.Example: acG@26!w
     *
     * @property string $plainText
     */
    private $plainText = null;

    /**
     * Gets as secure
     *
     * Secure representation.Example: AEGHV234AUD54367 (tokenized)Example:
     * 5dfc52b51bd35553df8592078de921bc (encrypted)Example: xxxxxxxxxxxx4444 (masked)
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
     * Secure representation.Example: AEGHV234AUD54367 (tokenized)Example:
     * 5dfc52b51bd35553df8592078de921bc (encrypted)Example: xxxxxxxxxxxx4444 (masked)
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
     * Plain text representation.Example: acG@26!w
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
     * Plain text representation.Example: acG@26!w
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

