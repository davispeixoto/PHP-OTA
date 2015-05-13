<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgInvoiceDetailType
 *
 * A list of all the items making up a costed booking
 * XSD Type: PkgInvoiceDetail
 */
class PkgInvoiceDetailType
{

    /**
     * A collection of invoice item lines.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CostingItemType[] $costingItems
     */
    private $costingItems = null;

    /**
     * The total booking cost to the customer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\GrossAmountAType
     * $grossAmount
     */
    private $grossAmount = null;

    /**
     * The amount payable at the time of booking to secure the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\DepositAmountAType
     * $depositAmount
     */
    private $depositAmount = null;

    /**
     * The total fee earned by the agent for the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AgentCommissionAType[]
     * $agentCommission
     */
    private $agentCommission = null;

    /**
     * The amount payable by the agent, i.e. GrossAmount less Commission less Tax.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\NetAmountAType
     * $netAmount
     */
    private $netAmount = null;

    /**
     * A collection of tax item lines.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TaxesType $taxItems
     */
    private $taxItems = null;

    /**
     * The amount remaining to be paid by the customer i.e. GrossAmount less the
     * greater of DepositAmount and Amount Received.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\BalanceDueAmountAType
     * $balanceDueAmount
     */
    private $balanceDueAmount = null;

    /**
     * The payment amount received against the reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AmountReceivedAType
     * $amountReceived
     */
    private $amountReceived = null;

    /**
     * Adds as costingItem
     *
     * A collection of invoice item lines.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType $costingItem
     */
    public function addToCostingItems(\Davispeixoto\OpenTravelAlliance\CostingItemType $costingItem)
    {
        $this->costingItems[] = $costingItem;

        return $this;
    }

    /**
     * isset costingItems
     *
     * A collection of invoice item lines.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCostingItems($index)
    {
        return isset($this->costingItems[$index]);
    }

    /**
     * unset costingItems
     *
     * A collection of invoice item lines.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCostingItems($index)
    {
        unset($this->costingItems[$index]);
    }

    /**
     * Gets as costingItems
     *
     * A collection of invoice item lines.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CostingItemType[]
     */
    public function getCostingItems()
    {
        return $this->costingItems;
    }

    /**
     * Sets a new costingItems
     *
     * A collection of invoice item lines.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CostingItemType[] $costingItems
     * @return self
     */
    public function setCostingItems(array $costingItems)
    {
        $this->costingItems = $costingItems;

        return $this;
    }

    /**
     * Gets as grossAmount
     *
     * The total booking cost to the customer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\GrossAmountAType
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * Sets a new grossAmount
     *
     * The total booking cost to the customer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\GrossAmountAType
     * $grossAmount
     * @return self
     */
    public function setGrossAmount(\Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\GrossAmountAType $grossAmount)
    {
        $this->grossAmount = $grossAmount;

        return $this;
    }

    /**
     * Gets as depositAmount
     *
     * The amount payable at the time of booking to secure the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\DepositAmountAType
     */
    public function getDepositAmount()
    {
        return $this->depositAmount;
    }

    /**
     * Sets a new depositAmount
     *
     * The amount payable at the time of booking to secure the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\DepositAmountAType
     * $depositAmount
     * @return self
     */
    public function setDepositAmount(
        \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\DepositAmountAType $depositAmount
    ) {
        $this->depositAmount = $depositAmount;

        return $this;
    }

    /**
     * Adds as agentCommission
     *
     * The total fee earned by the agent for the booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AgentCommissionAType
     * $agentCommission
     */
    public function addToAgentCommission(
        \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AgentCommissionAType $agentCommission
    ) {
        $this->agentCommission[] = $agentCommission;

        return $this;
    }

    /**
     * isset agentCommission
     *
     * The total fee earned by the agent for the booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAgentCommission($index)
    {
        return isset($this->agentCommission[$index]);
    }

    /**
     * unset agentCommission
     *
     * The total fee earned by the agent for the booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAgentCommission($index)
    {
        unset($this->agentCommission[$index]);
    }

    /**
     * Gets as agentCommission
     *
     * The total fee earned by the agent for the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AgentCommissionAType[]
     */
    public function getAgentCommission()
    {
        return $this->agentCommission;
    }

    /**
     * Sets a new agentCommission
     *
     * The total fee earned by the agent for the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AgentCommissionAType[]
     * $agentCommission
     * @return self
     */
    public function setAgentCommission(array $agentCommission)
    {
        $this->agentCommission = $agentCommission;

        return $this;
    }

    /**
     * Gets as netAmount
     *
     * The amount payable by the agent, i.e. GrossAmount less Commission less Tax.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\NetAmountAType
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * Sets a new netAmount
     *
     * The amount payable by the agent, i.e. GrossAmount less Commission less Tax.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\NetAmountAType
     * $netAmount
     * @return self
     */
    public function setNetAmount(\Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\NetAmountAType $netAmount)
    {
        $this->netAmount = $netAmount;

        return $this;
    }

    /**
     * Gets as taxItems
     *
     * A collection of tax item lines.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TaxesType
     */
    public function getTaxItems()
    {
        return $this->taxItems;
    }

    /**
     * Sets a new taxItems
     *
     * A collection of tax item lines.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TaxesType $taxItems
     * @return self
     */
    public function setTaxItems(\Davispeixoto\OpenTravelAlliance\TaxesType $taxItems)
    {
        $this->taxItems = $taxItems;

        return $this;
    }

    /**
     * Gets as balanceDueAmount
     *
     * The amount remaining to be paid by the customer i.e. GrossAmount less the
     * greater of DepositAmount and Amount Received.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\BalanceDueAmountAType
     */
    public function getBalanceDueAmount()
    {
        return $this->balanceDueAmount;
    }

    /**
     * Sets a new balanceDueAmount
     *
     * The amount remaining to be paid by the customer i.e. GrossAmount less the
     * greater of DepositAmount and Amount Received.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\BalanceDueAmountAType
     * $balanceDueAmount
     * @return self
     */
    public function setBalanceDueAmount(
        \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\BalanceDueAmountAType $balanceDueAmount
    ) {
        $this->balanceDueAmount = $balanceDueAmount;

        return $this;
    }

    /**
     * Gets as amountReceived
     *
     * The payment amount received against the reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AmountReceivedAType
     */
    public function getAmountReceived()
    {
        return $this->amountReceived;
    }

    /**
     * Sets a new amountReceived
     *
     * The payment amount received against the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AmountReceivedAType
     * $amountReceived
     * @return self
     */
    public function setAmountReceived(
        \Davispeixoto\OpenTravelAlliance\PkgInvoiceDetailType\AmountReceivedAType $amountReceived
    ) {
        $this->amountReceived = $amountReceived;

        return $this;
    }


}

