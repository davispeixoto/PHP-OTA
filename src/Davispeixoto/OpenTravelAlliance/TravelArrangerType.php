<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelArrangerType
 *
 * Companies or individuals responsible for making travel plans or transactions
 * either for the customer or company.
 * XSD Type: TravelArrangerType
 */
class TravelArrangerType extends CompanyNameType
{

    /**
     * When true, indicates a default value should be used.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Type of service making travel plans or transactions (e.g., travel agency, etc.).
     *
     * @property string $travelArrangerType
     */
    private $travelArrangerType = null;

    /**
     * A unique reference for a travel arranger within this message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * A remark associated with the travel arranger.
     *
     * @property string $remark
     */
    private $remark = null;

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
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
     * When true, indicates a default value should be used.
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
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as travelArrangerType
     *
     * Type of service making travel plans or transactions (e.g., travel agency, etc.).
     *
     * @return string
     */
    public function getTravelArrangerType()
    {
        return $this->travelArrangerType;
    }

    /**
     * Sets a new travelArrangerType
     *
     * Type of service making travel plans or transactions (e.g., travel agency, etc.).
     *
     * @param string $travelArrangerType
     * @return self
     */
    public function setTravelArrangerType($travelArrangerType)
    {
        $this->travelArrangerType = $travelArrangerType;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique reference for a travel arranger within this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference for a travel arranger within this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the travel arranger.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the travel arranger.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

        return $this;
    }


}

