<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentCardType;

/**
 * Class representing ThreeDomainSecurityAType
 */
class ThreeDomainSecurityAType
{

    /**
     * Merchant gateway information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType
     * $gateway
     */
    private $gateway = null;

    /**
     * Transaction results.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\ResultsAType
     * $results
     */
    private $results = null;

    /**
     * Gets as gateway
     *
     * Merchant gateway information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * Sets a new gateway
     *
     * Merchant gateway information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType
     * $gateway
     * @return self
     */
    public function setGateway(
        \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\GatewayAType $gateway
    ) {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * Gets as results
     *
     * Transaction results.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\ResultsAType
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sets a new results
     *
     * Transaction results.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\ResultsAType
     * $results
     * @return self
     */
    public function setResults(
        \Davispeixoto\OpenTravelAlliance\PaymentCardType\ThreeDomainSecurityAType\ResultsAType $results
    ) {
        $this->results = $results;

        return $this;
    }


}

