<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing CreditCardRequirementsAType
 */
class CreditCardRequirementsAType
{

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * The policy number for the credit card information.
     *
     * @property string $policyNumber
     */
    private $policyNumber = null;

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType[]
     * $creditCardPurpose
     */
    private $creditCardPurpose = null;

    /**
     * Textual credit card information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $creditCardInfo
     */
    private $creditCardInfo = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as policyNumber
     *
     * The policy number for the credit card information.
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * The policy number for the credit card information.
     *
     * @param string $policyNumber
     * @return self
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Gets as action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Adds as creditCardPurpose
     *
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType
     * $creditCardPurpose
     */
    public function addToCreditCardPurpose(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType $creditCardPurpose
    ) {
        $this->creditCardPurpose[] = $creditCardPurpose;

        return $this;
    }

    /**
     * isset creditCardPurpose
     *
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCreditCardPurpose($index)
    {
        return isset($this->creditCardPurpose[$index]);
    }

    /**
     * unset creditCardPurpose
     *
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCreditCardPurpose($index)
    {
        unset($this->creditCardPurpose[$index]);
    }

    /**
     * Gets as creditCardPurpose
     *
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType[]
     */
    public function getCreditCardPurpose()
    {
        return $this->creditCardPurpose;
    }

    /**
     * Sets a new creditCardPurpose
     *
     * To specify the credit card purpose, e.g., guarantee, deposit.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\CreditCardRequirementsAType\CreditCardPurposeAType[]
     * $creditCardPurpose
     * @return self
     */
    public function setCreditCardPurpose(array $creditCardPurpose)
    {
        $this->creditCardPurpose = $creditCardPurpose;

        return $this;
    }

    /**
     * Adds as creditCardInfo
     *
     * Textual credit card information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $creditCardInfo
     */
    public function addToCreditCardInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $creditCardInfo)
    {
        $this->creditCardInfo[] = $creditCardInfo;

        return $this;
    }

    /**
     * isset creditCardInfo
     *
     * Textual credit card information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCreditCardInfo($index)
    {
        return isset($this->creditCardInfo[$index]);
    }

    /**
     * unset creditCardInfo
     *
     * Textual credit card information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCreditCardInfo($index)
    {
        unset($this->creditCardInfo[$index]);
    }

    /**
     * Gets as creditCardInfo
     *
     * Textual credit card information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType[]
     */
    public function getCreditCardInfo()
    {
        return $this->creditCardInfo;
    }

    /**
     * Sets a new creditCardInfo
     *
     * Textual credit card information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType[] $creditCardInfo
     * @return self
     */
    public function setCreditCardInfo(array $creditCardInfo)
    {
        $this->creditCardInfo = $creditCardInfo;

        return $this;
    }


}

