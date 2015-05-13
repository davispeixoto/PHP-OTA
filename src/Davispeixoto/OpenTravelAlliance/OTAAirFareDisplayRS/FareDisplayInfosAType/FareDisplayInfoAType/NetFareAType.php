<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType;

/**
 * Class representing NetFareAType
 */
class NetFareAType
{

    /**
     * The minimum amount at which this fare can be sold.
     *
     * @property float $minAmount
     */
    private $minAmount = null;

    /**
     * The maximum amount at which this fare can be sold.
     *
     * @property float $maxAmount
     */
    private $maxAmount = null;

    /**
     * The name of the agency that can distribute the fare.
     *
     * @property string $distributorName
     */
    private $distributorName = null;

    /**
     * The fare basis code for this fare.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * The actual fare.
     *
     * @property float $fareAmount
     */
    private $fareAmount = null;

    /**
     * The code specifying the monetary unit for this fare. Use ISO 4217 3 alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare for any amount.
     *
     * @property boolean $unlimitedAmountInd
     */
    private $unlimitedAmountInd = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority to
     * update the fare.
     *
     * @property boolean $updateFareInd
     */
    private $updateFareInd = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare.
     *
     * @property boolean $sellInd
     */
    private $sellInd = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority to
     * ticket the fare.
     *
     * @property boolean $ticketInd
     */
    private $ticketInd = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority for
     * the fare to be viewed.
     *
     * @property boolean $viewInd
     */
    private $viewInd = null;

    /**
     * If true, the airline has granted the distributor of the fare the authority to
     * redistribute the fare.
     *
     * @property boolean $redistributeInd
     */
    private $redistributeInd = null;

    /**
     * Gets as minAmount
     *
     * The minimum amount at which this fare can be sold.
     *
     * @return float
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }

    /**
     * Sets a new minAmount
     *
     * The minimum amount at which this fare can be sold.
     *
     * @param float $minAmount
     * @return self
     */
    public function setMinAmount($minAmount)
    {
        $this->minAmount = $minAmount;

        return $this;
    }

    /**
     * Gets as maxAmount
     *
     * The maximum amount at which this fare can be sold.
     *
     * @return float
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * Sets a new maxAmount
     *
     * The maximum amount at which this fare can be sold.
     *
     * @param float $maxAmount
     * @return self
     */
    public function setMaxAmount($maxAmount)
    {
        $this->maxAmount = $maxAmount;

        return $this;
    }

    /**
     * Gets as distributorName
     *
     * The name of the agency that can distribute the fare.
     *
     * @return string
     */
    public function getDistributorName()
    {
        return $this->distributorName;
    }

    /**
     * Sets a new distributorName
     *
     * The name of the agency that can distribute the fare.
     *
     * @param string $distributorName
     * @return self
     */
    public function setDistributorName($distributorName)
    {
        $this->distributorName = $distributorName;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * The fare basis code for this fare.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * The fare basis code for this fare.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Gets as fareAmount
     *
     * The actual fare.
     *
     * @return float
     */
    public function getFareAmount()
    {
        return $this->fareAmount;
    }

    /**
     * Sets a new fareAmount
     *
     * The actual fare.
     *
     * @param float $fareAmount
     * @return self
     */
    public function setFareAmount($fareAmount)
    {
        $this->fareAmount = $fareAmount;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying the monetary unit for this fare. Use ISO 4217 3 alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying the monetary unit for this fare. Use ISO 4217 3 alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as unlimitedAmountInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare for any amount.
     *
     * @return boolean
     */
    public function getUnlimitedAmountInd()
    {
        return $this->unlimitedAmountInd;
    }

    /**
     * Sets a new unlimitedAmountInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare for any amount.
     *
     * @param boolean $unlimitedAmountInd
     * @return self
     */
    public function setUnlimitedAmountInd($unlimitedAmountInd)
    {
        $this->unlimitedAmountInd = $unlimitedAmountInd;

        return $this;
    }

    /**
     * Gets as updateFareInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * update the fare.
     *
     * @return boolean
     */
    public function getUpdateFareInd()
    {
        return $this->updateFareInd;
    }

    /**
     * Sets a new updateFareInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * update the fare.
     *
     * @param boolean $updateFareInd
     * @return self
     */
    public function setUpdateFareInd($updateFareInd)
    {
        $this->updateFareInd = $updateFareInd;

        return $this;
    }

    /**
     * Gets as sellInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare.
     *
     * @return boolean
     */
    public function getSellInd()
    {
        return $this->sellInd;
    }

    /**
     * Sets a new sellInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * sell the fare.
     *
     * @param boolean $sellInd
     * @return self
     */
    public function setSellInd($sellInd)
    {
        $this->sellInd = $sellInd;

        return $this;
    }

    /**
     * Gets as ticketInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * ticket the fare.
     *
     * @return boolean
     */
    public function getTicketInd()
    {
        return $this->ticketInd;
    }

    /**
     * Sets a new ticketInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * ticket the fare.
     *
     * @param boolean $ticketInd
     * @return self
     */
    public function setTicketInd($ticketInd)
    {
        $this->ticketInd = $ticketInd;

        return $this;
    }

    /**
     * Gets as viewInd
     *
     * If true, the airline has granted the distributor of the fare the authority for
     * the fare to be viewed.
     *
     * @return boolean
     */
    public function getViewInd()
    {
        return $this->viewInd;
    }

    /**
     * Sets a new viewInd
     *
     * If true, the airline has granted the distributor of the fare the authority for
     * the fare to be viewed.
     *
     * @param boolean $viewInd
     * @return self
     */
    public function setViewInd($viewInd)
    {
        $this->viewInd = $viewInd;

        return $this;
    }

    /**
     * Gets as redistributeInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * redistribute the fare.
     *
     * @return boolean
     */
    public function getRedistributeInd()
    {
        return $this->redistributeInd;
    }

    /**
     * Sets a new redistributeInd
     *
     * If true, the airline has granted the distributor of the fare the authority to
     * redistribute the fare.
     *
     * @param boolean $redistributeInd
     * @return self
     */
    public function setRedistributeInd($redistributeInd)
    {
        $this->redistributeInd = $redistributeInd;

        return $this;
    }


}

