<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CodeListExtensionType
 *
 * Choice between summary and detailed code extension information.
 * XSD Type: CodeListExtension
 */
class CodeListExtensionType
{

    /**
     * Charge information specified indicator.Example: trueImplementer: If true, charge
     * information has been specified and the Detail/Charge element should be parsed.
     *
     * @property boolean $chargeInd
     */
    private $chargeInd = null;

    /**
     * Proximity information specified indicator.Example: trueImplementer: If true,
     * proximity information has been specified and the @Proximity attribute should be
     * parsed.
     *
     * @property boolean $proximityInd
     */
    private $proximityInd = null;

    /**
     * Quantity information specified indicator.Example: trueImplementer: If true,
     * quantity information has been specified and the @Quantity attribute should be
     * parsed.
     *
     * @property boolean $quantityInd
     */
    private $quantityInd = null;

    /**
     * Schedule information specified indicator.Example: trueImplementer: If true,
     * schedule information has been specified and the Detail/Schedule element should
     * be parsed.
     *
     * @property boolean $scheduleInd
     */
    private $scheduleInd = null;

    /**
     * Summary code information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType $summary
     */
    private $summary = null;

    /**
     * Detail code information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CodeListDetailExtensionType $detail
     */
    private $detail = null;

    /**
     * Gets as chargeInd
     *
     * Charge information specified indicator.Example: trueImplementer: If true, charge
     * information has been specified and the Detail/Charge element should be parsed.
     *
     * @return boolean
     */
    public function getChargeInd()
    {
        return $this->chargeInd;
    }

    /**
     * Sets a new chargeInd
     *
     * Charge information specified indicator.Example: trueImplementer: If true, charge
     * information has been specified and the Detail/Charge element should be parsed.
     *
     * @param boolean $chargeInd
     * @return self
     */
    public function setChargeInd($chargeInd)
    {
        $this->chargeInd = $chargeInd;

        return $this;
    }

    /**
     * Gets as proximityInd
     *
     * Proximity information specified indicator.Example: trueImplementer: If true,
     * proximity information has been specified and the @Proximity attribute should be
     * parsed.
     *
     * @return boolean
     */
    public function getProximityInd()
    {
        return $this->proximityInd;
    }

    /**
     * Sets a new proximityInd
     *
     * Proximity information specified indicator.Example: trueImplementer: If true,
     * proximity information has been specified and the @Proximity attribute should be
     * parsed.
     *
     * @param boolean $proximityInd
     * @return self
     */
    public function setProximityInd($proximityInd)
    {
        $this->proximityInd = $proximityInd;

        return $this;
    }

    /**
     * Gets as quantityInd
     *
     * Quantity information specified indicator.Example: trueImplementer: If true,
     * quantity information has been specified and the @Quantity attribute should be
     * parsed.
     *
     * @return boolean
     */
    public function getQuantityInd()
    {
        return $this->quantityInd;
    }

    /**
     * Sets a new quantityInd
     *
     * Quantity information specified indicator.Example: trueImplementer: If true,
     * quantity information has been specified and the @Quantity attribute should be
     * parsed.
     *
     * @param boolean $quantityInd
     * @return self
     */
    public function setQuantityInd($quantityInd)
    {
        $this->quantityInd = $quantityInd;

        return $this;
    }

    /**
     * Gets as scheduleInd
     *
     * Schedule information specified indicator.Example: trueImplementer: If true,
     * schedule information has been specified and the Detail/Schedule element should
     * be parsed.
     *
     * @return boolean
     */
    public function getScheduleInd()
    {
        return $this->scheduleInd;
    }

    /**
     * Sets a new scheduleInd
     *
     * Schedule information specified indicator.Example: trueImplementer: If true,
     * schedule information has been specified and the Detail/Schedule element should
     * be parsed.
     *
     * @param boolean $scheduleInd
     * @return self
     */
    public function setScheduleInd($scheduleInd)
    {
        $this->scheduleInd = $scheduleInd;

        return $this;
    }

    /**
     * Gets as summary
     *
     * Summary code information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary code information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType $summary
     * @return self
     */
    public function setSummary(\Davispeixoto\OpenTravelAlliance\CodeListSummaryExtensionType $summary)
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Gets as detail
     *
     * Detail code information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CodeListDetailExtensionType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Detail code information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CodeListDetailExtensionType $detail
     * @return self
     */
    public function setDetail(\Davispeixoto\OpenTravelAlliance\CodeListDetailExtensionType $detail)
    {
        $this->detail = $detail;

        return $this;
    }


}

