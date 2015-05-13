<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgReservationType
 *
 * Details of a Package Holiday reservation object.
 * XSD Type: PkgReservation
 */
class PkgReservationType
{

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * The reference for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Details of a booked package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PackageResponseType $package
     */
    private $package = null;

    /**
     * Information on the person who is the contact for the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     */
    private $contactDetail = null;

    /**
     * Details of all passengers in a reservation or reservation segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItems
     */
    private $passengerListItems = null;

    /**
     * A collection of insurance policy details supplied by the customers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     * $ownInsuranceChoices
     */
    private $ownInsuranceChoices = null;

    /**
     * Info on ticketing fulfilment,
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgReservationType\TicketingInfoAType
     * $ticketingInfo
     */
    private $ticketingInfo = null;

    /**
     * The cost breakdown for a package.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $invoiceDetail
     */
    private $invoiceDetail = null;

    /**
     * Details of each transaction posted against a reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TransactionType[] $transactions
     */
    private $transactions = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as source
     *
     * Point of sale object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The reference for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The reference for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as package
     *
     * Details of a booked package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PackageResponseType
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * Details of a booked package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PackageResponseType $package
     * @return self
     */
    public function setPackage(\Davispeixoto\OpenTravelAlliance\PackageResponseType $package)
    {
        $this->package = $package;

        return $this;
    }

    /**
     * Gets as contactDetail
     *
     * Information on the person who is the contact for the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContactDetail()
    {
        return $this->contactDetail;
    }

    /**
     * Sets a new contactDetail
     *
     * Information on the person who is the contact for the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail
     * @return self
     */
    public function setContactDetail(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contactDetail)
    {
        $this->contactDetail = $contactDetail;

        return $this;
    }

    /**
     * Adds as passengerListItem
     *
     * Details of all passengers in a reservation or reservation segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType
     * $passengerListItem
     */
    public function addToPassengerListItems(
        \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType $passengerListItem
    ) {
        $this->passengerListItems[] = $passengerListItem;

        return $this;
    }

    /**
     * isset passengerListItems
     *
     * Details of all passengers in a reservation or reservation segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerListItems($index)
    {
        return isset($this->passengerListItems[$index]);
    }

    /**
     * unset passengerListItems
     *
     * Details of all passengers in a reservation or reservation segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerListItems($index)
    {
        unset($this->passengerListItems[$index]);
    }

    /**
     * Gets as passengerListItems
     *
     * Details of all passengers in a reservation or reservation segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     */
    public function getPassengerListItems()
    {
        return $this->passengerListItems;
    }

    /**
     * Sets a new passengerListItems
     *
     * Details of all passengers in a reservation or reservation segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgPassengerListItemType[]
     * $passengerListItems
     * @return self
     */
    public function setPassengerListItems(array $passengerListItems)
    {
        $this->passengerListItems = $passengerListItems;

        return $this;
    }

    /**
     * Adds as ownInsuranceChoice
     *
     * A collection of insurance policy details supplied by the customers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType
     * $ownInsuranceChoice
     */
    public function addToOwnInsuranceChoices(
        \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType $ownInsuranceChoice
    ) {
        $this->ownInsuranceChoices[] = $ownInsuranceChoice;

        return $this;
    }

    /**
     * isset ownInsuranceChoices
     *
     * A collection of insurance policy details supplied by the customers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOwnInsuranceChoices($index)
    {
        return isset($this->ownInsuranceChoices[$index]);
    }

    /**
     * unset ownInsuranceChoices
     *
     * A collection of insurance policy details supplied by the customers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOwnInsuranceChoices($index)
    {
        unset($this->ownInsuranceChoices[$index]);
    }

    /**
     * Gets as ownInsuranceChoices
     *
     * A collection of insurance policy details supplied by the customers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     */
    public function getOwnInsuranceChoices()
    {
        return $this->ownInsuranceChoices;
    }

    /**
     * Sets a new ownInsuranceChoices
     *
     * A collection of insurance policy details supplied by the customers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OwnInsuranceChoiceType[]
     * $ownInsuranceChoices
     * @return self
     */
    public function setOwnInsuranceChoices(array $ownInsuranceChoices)
    {
        $this->ownInsuranceChoices = $ownInsuranceChoices;

        return $this;
    }

    /**
     * Gets as ticketingInfo
     *
     * Info on ticketing fulfilment,
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgReservationType\TicketingInfoAType
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Sets a new ticketingInfo
     *
     * Info on ticketing fulfilment,
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgReservationType\TicketingInfoAType
     * $ticketingInfo
     * @return self
     */
    public function setTicketingInfo(
        \Davispeixoto\OpenTravelAlliance\PkgReservationType\TicketingInfoAType $ticketingInfo
    ) {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }

    /**
     * Gets as invoiceDetail
     *
     * The cost breakdown for a package.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType
     */
    public function getInvoiceDetail()
    {
        return $this->invoiceDetail;
    }

    /**
     * Sets a new invoiceDetail
     *
     * The cost breakdown for a package.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $invoiceDetail
     * @return self
     */
    public function setInvoiceDetail(\Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType $invoiceDetail)
    {
        $this->invoiceDetail = $invoiceDetail;

        return $this;
    }

    /**
     * Adds as transaction
     *
     * Details of each transaction posted against a reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TransactionType $transaction
     */
    public function addToTransactions(\Davispeixoto\OpenTravelAlliance\TransactionType $transaction)
    {
        $this->transactions[] = $transaction;

        return $this;
    }

    /**
     * isset transactions
     *
     * Details of each transaction posted against a reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTransactions($index)
    {
        return isset($this->transactions[$index]);
    }

    /**
     * unset transactions
     *
     * Details of each transaction posted against a reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTransactions($index)
    {
        unset($this->transactions[$index]);
    }

    /**
     * Gets as transactions
     *
     * Details of each transaction posted against a reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TransactionType[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * Sets a new transactions
     *
     * Details of each transaction posted against a reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TransactionType[] $transactions
     * @return self
     */
    public function setTransactions(array $transactions)
    {
        $this->transactions = $transactions;

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

