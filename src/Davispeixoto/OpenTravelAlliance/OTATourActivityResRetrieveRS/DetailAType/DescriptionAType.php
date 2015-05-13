<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityResRetrieveRS\DetailAType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{

    /**
     * If true, guides will be available.
     *
     * @property boolean $guideInd
     */
    private $guideInd = null;

    /**
     * A brief description of guide services.
     *
     * @property string $guideOverview
     */
    private $guideOverview = null;

    /**
     * The number of free child places that have been secured.
     *
     * @property integer $freeChildrenQty
     */
    private $freeChildrenQty = null;

    /**
     * A short description up to 500 characters.
     *
     * @property string $shortDescription
     */
    private $shortDescription = null;

    /**
     * URLs to descriptive information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     */
    private $uRL = null;

    /**
     * Gets as guideInd
     *
     * If true, guides will be available.
     *
     * @return boolean
     */
    public function getGuideInd()
    {
        return $this->guideInd;
    }

    /**
     * Sets a new guideInd
     *
     * If true, guides will be available.
     *
     * @param boolean $guideInd
     * @return self
     */
    public function setGuideInd($guideInd)
    {
        $this->guideInd = $guideInd;

        return $this;
    }

    /**
     * Gets as guideOverview
     *
     * A brief description of guide services.
     *
     * @return string
     */
    public function getGuideOverview()
    {
        return $this->guideOverview;
    }

    /**
     * Sets a new guideOverview
     *
     * A brief description of guide services.
     *
     * @param string $guideOverview
     * @return self
     */
    public function setGuideOverview($guideOverview)
    {
        $this->guideOverview = $guideOverview;

        return $this;
    }

    /**
     * Gets as freeChildrenQty
     *
     * The number of free child places that have been secured.
     *
     * @return integer
     */
    public function getFreeChildrenQty()
    {
        return $this->freeChildrenQty;
    }

    /**
     * Sets a new freeChildrenQty
     *
     * The number of free child places that have been secured.
     *
     * @param integer $freeChildrenQty
     * @return self
     */
    public function setFreeChildrenQty($freeChildrenQty)
    {
        $this->freeChildrenQty = $freeChildrenQty;

        return $this;
    }

    /**
     * Gets as shortDescription
     *
     * A short description up to 500 characters.
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description up to 500 characters.
     *
     * @param string $shortDescription
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Adds as uRL
     *
     * URLs to descriptive information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\URLType $uRL
     */
    public function addToURL(\Davispeixoto\OpenTravelAlliance\URLType $uRL)
    {
        $this->uRL[] = $uRL;

        return $this;
    }

    /**
     * isset uRL
     *
     * URLs to descriptive information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * URLs to descriptive information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * URLs to descriptive information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URLs to descriptive information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }


}

