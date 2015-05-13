<?php

namespace Davispeixoto\OpenTravelAlliance\CustomerType;

use Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing PaymentFormAType
 */
class PaymentFormAType extends PaymentFormType
{

    /**
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @property string $transferAction
     */
    private $transferAction = null;

    /**
     * When true, indicates the preferred form of payment.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

    /**
     * A reference to the company from which this element has been inherited.
     *
     * @property string $parentCompanyRef
     */
    private $parentCompanyRef = null;

    /**
     * The supplier for whom this is the preferred method of payment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerType\PaymentFormAType\AssociatedSupplierAType
     * $associatedSupplier
     */
    private $associatedSupplier = null;

    /**
     * Gets as transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @return string
     */
    public function getTransferAction()
    {
        return $this->transferAction;
    }

    /**
     * Sets a new transferAction
     *
     * Indicates under what conditions the element will be transfered to the booking.
     *
     * @param string $transferAction
     * @return self
     */
    public function setTransferAction($transferAction)
    {
        $this->transferAction = $transferAction;

        return $this;
    }

    /**
     * Gets as defaultInd
     *
     * When true, indicates the preferred form of payment.
     *
     * @return boolean
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates the preferred form of payment.
     *
     * @param boolean $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;

        return $this;
    }

    /**
     * Gets as parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @return string
     */
    public function getParentCompanyRef()
    {
        return $this->parentCompanyRef;
    }

    /**
     * Sets a new parentCompanyRef
     *
     * A reference to the company from which this element has been inherited.
     *
     * @param string $parentCompanyRef
     * @return self
     */
    public function setParentCompanyRef($parentCompanyRef)
    {
        $this->parentCompanyRef = $parentCompanyRef;

        return $this;
    }

    /**
     * Gets as associatedSupplier
     *
     * The supplier for whom this is the preferred method of payment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CustomerType\PaymentFormAType\AssociatedSupplierAType
     */
    public function getAssociatedSupplier()
    {
        return $this->associatedSupplier;
    }

    /**
     * Sets a new associatedSupplier
     *
     * The supplier for whom this is the preferred method of payment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CustomerType\PaymentFormAType\AssociatedSupplierAType
     * $associatedSupplier
     * @return self
     */
    public function setAssociatedSupplier(
        \Davispeixoto\OpenTravelAlliance\CustomerType\PaymentFormAType\AssociatedSupplierAType $associatedSupplier
    ) {
        $this->associatedSupplier = $associatedSupplier;

        return $this;
    }


}

