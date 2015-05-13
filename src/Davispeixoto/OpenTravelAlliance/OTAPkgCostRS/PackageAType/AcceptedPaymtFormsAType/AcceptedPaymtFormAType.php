<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType;

use Davispeixoto\OpenTravelAlliance\MonetaryRuleType;

/**
 * Class representing AcceptedPaymtFormAType
 */
class AcceptedPaymtFormAType extends MonetaryRuleType
{

    /**
     * Code identifying the issuer of a Switch debit card.
     *
     * @property string $issuerCode
     */
    private $issuerCode = null;

    /**
     * Gets as issuerCode
     *
     * Code identifying the issuer of a Switch debit card.
     *
     * @return string
     */
    public function getIssuerCode()
    {
        return $this->issuerCode;
    }

    /**
     * Sets a new issuerCode
     *
     * Code identifying the issuer of a Switch debit card.
     *
     * @param string $issuerCode
     * @return self
     */
    public function setIssuerCode($issuerCode)
    {
        $this->issuerCode = $issuerCode;

        return $this;
    }


}

