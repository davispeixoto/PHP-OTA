<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing BaseInvCountType
 *
 * The set of changes in the number of units of base inventory for one inventory
 * type (code) to be made on the server. The server must successfully update all
 * messages. Failure to update any single status message will result in the failure
 * of all messages.
 * XSD Type: BaseInvCountType
 */
class BaseInvCountType
{

    /**
     * Information on what the InvCountNotif Message applies to (i.e. the combination
     * of inventory and/or rate codes) and the period of application.
     *
     * @property \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * A collection of inventory counts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     * $invCounts
     */
    private $invCounts = null;

    /**
     * Communicates additional information about inventory that is not available for
     * sale.Communicates information about inventory that is not available for sale.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BaseInvCountType\OffSellAType
     * $offSell
     */
    private $offSell = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify
     * each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination
     * of inventory and/or rate codes) and the period of application.
     *
     * @return \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the InvCountNotif Message applies to (i.e. the combination
     * of inventory and/or rate codes) and the period of application.
     *
     * @param \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType
     * $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(
        \Davispeixoto\OpenTravelAlliance\StatusApplicationControlType $statusApplicationControl
    ) {
        $this->statusApplicationControl = $statusApplicationControl;

        return $this;
    }

    /**
     * Adds as invCount
     *
     * A collection of inventory counts.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType
     * $invCount
     */
    public function addToInvCounts(
        \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType $invCount
    ) {
        $this->invCounts[] = $invCount;

        return $this;
    }

    /**
     * isset invCounts
     *
     * A collection of inventory counts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInvCounts($index)
    {
        return isset($this->invCounts[$index]);
    }

    /**
     * unset invCounts
     *
     * A collection of inventory counts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInvCounts($index)
    {
        unset($this->invCounts[$index]);
    }

    /**
     * Gets as invCounts
     *
     * A collection of inventory counts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     */
    public function getInvCounts()
    {
        return $this->invCounts;
    }

    /**
     * Sets a new invCounts
     *
     * A collection of inventory counts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\BaseInvCountType\InvCountsAType\InvCountAType[]
     * $invCounts
     * @return self
     */
    public function setInvCounts(array $invCounts)
    {
        $this->invCounts = $invCounts;

        return $this;
    }

    /**
     * Gets as offSell
     *
     * Communicates additional information about inventory that is not available for
     * sale.Communicates information about inventory that is not available for sale.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BaseInvCountType\OffSellAType
     */
    public function getOffSell()
    {
        return $this->offSell;
    }

    /**
     * Sets a new offSell
     *
     * Communicates additional information about inventory that is not available for
     * sale.Communicates information about inventory that is not available for sale.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BaseInvCountType\OffSellAType $offSell
     * @return self
     */
    public function setOffSell(\Davispeixoto\OpenTravelAlliance\BaseInvCountType\OffSellAType $offSell)
    {
        $this->offSell = $offSell;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify
     * each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
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
     * The unique identifier element allows the trading partners to uniquely identify
     * each InvCountNotifRQ, (i.e. the entire message) for transaction traceability.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

