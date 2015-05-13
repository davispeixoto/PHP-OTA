<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType;

/**
 * Class representing GatewayAType
 */
class GatewayAType
{

    /**
     * Electronic commerce indicator.Example: 1Note: The ECI indicates the security
     * level associated with an Internet purchase transaction.
     *
     * @property string $eCI
     */
    private $eCI = null;

    /**
     * Merchant ID.Example: mycart
     *
     * @property string $merchantID
     */
    private $merchantID = null;

    /**
     * Processor ID.Example: 201
     *
     * @property string $processorID
     */
    private $processorID = null;

    /**
     * Transaction URL.
     *
     * @property string $uRL
     */
    private $uRL = null;

    /**
     * Cardholder authentication value information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType
     * $authenticationVerificationValue
     */
    private $authenticationVerificationValue = null;

    /**
     * Merchant transaction password information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType
     * $transactionPassword
     */
    private $transactionPassword = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as eCI
     *
     * Electronic commerce indicator.Example: 1Note: The ECI indicates the security
     * level associated with an Internet purchase transaction.
     *
     * @return string
     */
    public function getECI()
    {
        return $this->eCI;
    }

    /**
     * Sets a new eCI
     *
     * Electronic commerce indicator.Example: 1Note: The ECI indicates the security
     * level associated with an Internet purchase transaction.
     *
     * @param string $eCI
     * @return self
     */
    public function setECI($eCI)
    {
        $this->eCI = $eCI;

        return $this;
    }

    /**
     * Gets as merchantID
     *
     * Merchant ID.Example: mycart
     *
     * @return string
     */
    public function getMerchantID()
    {
        return $this->merchantID;
    }

    /**
     * Sets a new merchantID
     *
     * Merchant ID.Example: mycart
     *
     * @param string $merchantID
     * @return self
     */
    public function setMerchantID($merchantID)
    {
        $this->merchantID = $merchantID;

        return $this;
    }

    /**
     * Gets as processorID
     *
     * Processor ID.Example: 201
     *
     * @return string
     */
    public function getProcessorID()
    {
        return $this->processorID;
    }

    /**
     * Sets a new processorID
     *
     * Processor ID.Example: 201
     *
     * @param string $processorID
     * @return self
     */
    public function setProcessorID($processorID)
    {
        $this->processorID = $processorID;

        return $this;
    }

    /**
     * Gets as uRL
     *
     * Transaction URL.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Transaction URL.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Gets as authenticationVerificationValue
     *
     * Cardholder authentication value information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType
     */
    public function getAuthenticationVerificationValue()
    {
        return $this->authenticationVerificationValue;
    }

    /**
     * Sets a new authenticationVerificationValue
     *
     * Cardholder authentication value information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType
     * $authenticationVerificationValue
     * @return self
     */
    public function setAuthenticationVerificationValue(
        \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\AuthenticationVerificationValueAType $authenticationVerificationValue
    ) {
        $this->authenticationVerificationValue = $authenticationVerificationValue;

        return $this;
    }

    /**
     * Gets as transactionPassword
     *
     * Merchant transaction password information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType
     */
    public function getTransactionPassword()
    {
        return $this->transactionPassword;
    }

    /**
     * Sets a new transactionPassword
     *
     * Merchant transaction password information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType
     * $transactionPassword
     * @return self
     */
    public function setTransactionPassword(
        \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType\TransactionPasswordAType $transactionPassword
    ) {
        $this->transactionPassword = $transactionPassword;

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


}

