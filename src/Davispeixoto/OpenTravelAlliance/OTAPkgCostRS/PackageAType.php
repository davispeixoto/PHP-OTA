<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgCostRS;

use Davispeixoto\OpenTravelAlliance\PackageResponseType;

/**
 * Class representing PackageAType
 */
class PackageAType extends PackageResponseType
{

    /**
     * A summary of the basic costs for the package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $costSummary
     */
    private $costSummary = null;

    /**
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     * $acceptedPaymtForms
     */
    private $acceptedPaymtForms = null;

    /**
     * Gets as costSummary
     *
     * A summary of the basic costs for the package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType
     */
    public function getCostSummary()
    {
        return $this->costSummary;
    }

    /**
     * Sets a new costSummary
     *
     * A summary of the basic costs for the package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $costSummary
     * @return self
     */
    public function setCostSummary(\Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $costSummary)
    {
        $this->costSummary = $costSummary;

        return $this;
    }

    /**
     * Adds as acceptedPaymtForm
     *
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType
     * $acceptedPaymtForm
     */
    public function addToAcceptedPaymtForms(
        \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType $acceptedPaymtForm
    ) {
        $this->acceptedPaymtForms[] = $acceptedPaymtForm;

        return $this;
    }

    /**
     * isset acceptedPaymtForms
     *
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptedPaymtForms($index)
    {
        return isset($this->acceptedPaymtForms[$index]);
    }

    /**
     * unset acceptedPaymtForms
     *
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptedPaymtForms($index)
    {
        unset($this->acceptedPaymtForms[$index]);
    }

    /**
     * Gets as acceptedPaymtForms
     *
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     */
    public function getAcceptedPaymtForms()
    {
        return $this->acceptedPaymtForms;
    }

    /**
     * Sets a new acceptedPaymtForms
     *
     * Details of the forms of payment accepted for this package. This item may not be
     * present when there is a credit agreement in place.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     * $acceptedPaymtForms
     * @return self
     */
    public function setAcceptedPaymtForms(array $acceptedPaymtForms)
    {
        $this->acceptedPaymtForms = $acceptedPaymtForms;

        return $this;
    }


}

