<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType;

/**
 * Class representing AcceptedPaymtFormsAType
 */
class AcceptedPaymtFormsAType
{

    /**
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     * $acceptedPaymtForm
     */
    private $acceptedPaymtForm = null;

    /**
     * Adds as acceptedPaymtForm
     *
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType
     * $acceptedPaymtForm
     */
    public function addToAcceptedPaymtForm(
        \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType $acceptedPaymtForm
    ) {
        $this->acceptedPaymtForm[] = $acceptedPaymtForm;

        return $this;
    }

    /**
     * isset acceptedPaymtForm
     *
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAcceptedPaymtForm($index)
    {
        return isset($this->acceptedPaymtForm[$index]);
    }

    /**
     * unset acceptedPaymtForm
     *
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAcceptedPaymtForm($index)
    {
        unset($this->acceptedPaymtForm[$index]);
    }

    /**
     * Gets as acceptedPaymtForm
     *
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     */
    public function getAcceptedPaymtForm()
    {
        return $this->acceptedPaymtForm;
    }

    /**
     * Sets a new acceptedPaymtForm
     *
     * Provides details of acceptable types of payment (e.g. Credit or Debit Card)
     * together with applicable fees, if any.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgCostRS\PackageAType\AcceptedPaymtFormsAType\AcceptedPaymtFormAType[]
     * $acceptedPaymtForm
     * @return self
     */
    public function setAcceptedPaymtForm(array $acceptedPaymtForm)
    {
        $this->acceptedPaymtForm = $acceptedPaymtForm;

        return $this;
    }


}

