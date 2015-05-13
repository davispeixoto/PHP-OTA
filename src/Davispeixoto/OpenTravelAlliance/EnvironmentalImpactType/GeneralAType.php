<?php

namespace Davispeixoto\OpenTravelAlliance\EnvironmentalImpactType;

/**
 * Class representing GeneralAType
 */
class GeneralAType
{

    /**
     * Certification credentials available indicator.Example: trueImplementer: If true,
     * the property is willing to provide a copy of their certification.
     *
     * @property boolean $certificationAvailInd
     */
    private $certificationAvailInd = null;

    /**
     * Guest sensitivity indicator.Example: trueImplementer: If true, the property
     * accommodates guests with chemical sensitivities and/or allergies.
     *
     * @property boolean $chemicalAllergiesInd
     */
    private $chemicalAllergiesInd = null;

    /**
     * Environmentally responsible cleaning products indicator.Example:
     * trueImplementer: If true, the property uses environmentally responsible cleaning
     * products.
     *
     * @property boolean $environmentalCleanersInd
     */
    private $environmentalCleanersInd = null;

    /**
     * Linen reuse program indicator.Example: trueImplementer: If true, the property
     * has a linen reuse program.
     *
     * @property mixed $linenReuseInd
     */
    private $linenReuseInd = null;

    /**
     * Supplier procurement policy indicator.Example: trueImplementer: If true, the
     * property has an environmental procurement policy in place for its suppliers.
     *
     * @property boolean $procurementPolicyInd
     */
    private $procurementPolicyInd = null;

    /**
     * Environmental certification program participation description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $certification
     */
    private $certification = null;

    /**
     * Active environmental program description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $environmental
     */
    private $environmental = null;

    /**
     * Gets as certificationAvailInd
     *
     * Certification credentials available indicator.Example: trueImplementer: If true,
     * the property is willing to provide a copy of their certification.
     *
     * @return boolean
     */
    public function getCertificationAvailInd()
    {
        return $this->certificationAvailInd;
    }

    /**
     * Sets a new certificationAvailInd
     *
     * Certification credentials available indicator.Example: trueImplementer: If true,
     * the property is willing to provide a copy of their certification.
     *
     * @param boolean $certificationAvailInd
     * @return self
     */
    public function setCertificationAvailInd($certificationAvailInd)
    {
        $this->certificationAvailInd = $certificationAvailInd;

        return $this;
    }

    /**
     * Gets as chemicalAllergiesInd
     *
     * Guest sensitivity indicator.Example: trueImplementer: If true, the property
     * accommodates guests with chemical sensitivities and/or allergies.
     *
     * @return boolean
     */
    public function getChemicalAllergiesInd()
    {
        return $this->chemicalAllergiesInd;
    }

    /**
     * Sets a new chemicalAllergiesInd
     *
     * Guest sensitivity indicator.Example: trueImplementer: If true, the property
     * accommodates guests with chemical sensitivities and/or allergies.
     *
     * @param boolean $chemicalAllergiesInd
     * @return self
     */
    public function setChemicalAllergiesInd($chemicalAllergiesInd)
    {
        $this->chemicalAllergiesInd = $chemicalAllergiesInd;

        return $this;
    }

    /**
     * Gets as environmentalCleanersInd
     *
     * Environmentally responsible cleaning products indicator.Example:
     * trueImplementer: If true, the property uses environmentally responsible cleaning
     * products.
     *
     * @return boolean
     */
    public function getEnvironmentalCleanersInd()
    {
        return $this->environmentalCleanersInd;
    }

    /**
     * Sets a new environmentalCleanersInd
     *
     * Environmentally responsible cleaning products indicator.Example:
     * trueImplementer: If true, the property uses environmentally responsible cleaning
     * products.
     *
     * @param boolean $environmentalCleanersInd
     * @return self
     */
    public function setEnvironmentalCleanersInd($environmentalCleanersInd)
    {
        $this->environmentalCleanersInd = $environmentalCleanersInd;

        return $this;
    }

    /**
     * Gets as linenReuseInd
     *
     * Linen reuse program indicator.Example: trueImplementer: If true, the property
     * has a linen reuse program.
     *
     * @return mixed
     */
    public function getLinenReuseInd()
    {
        return $this->linenReuseInd;
    }

    /**
     * Sets a new linenReuseInd
     *
     * Linen reuse program indicator.Example: trueImplementer: If true, the property
     * has a linen reuse program.
     *
     * @param mixed $linenReuseInd
     * @return self
     */
    public function setLinenReuseInd($linenReuseInd)
    {
        $this->linenReuseInd = $linenReuseInd;

        return $this;
    }

    /**
     * Gets as procurementPolicyInd
     *
     * Supplier procurement policy indicator.Example: trueImplementer: If true, the
     * property has an environmental procurement policy in place for its suppliers.
     *
     * @return boolean
     */
    public function getProcurementPolicyInd()
    {
        return $this->procurementPolicyInd;
    }

    /**
     * Sets a new procurementPolicyInd
     *
     * Supplier procurement policy indicator.Example: trueImplementer: If true, the
     * property has an environmental procurement policy in place for its suppliers.
     *
     * @param boolean $procurementPolicyInd
     * @return self
     */
    public function setProcurementPolicyInd($procurementPolicyInd)
    {
        $this->procurementPolicyInd = $procurementPolicyInd;

        return $this;
    }

    /**
     * Adds as certification
     *
     * Environmental certification program participation description.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $certification
     */
    public function addToCertification(\Davispeixoto\OpenTravelAlliance\ParagraphType $certification)
    {
        $this->certification[] = $certification;

        return $this;
    }

    /**
     * isset certification
     *
     * Environmental certification program participation description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCertification($index)
    {
        return isset($this->certification[$index]);
    }

    /**
     * unset certification
     *
     * Environmental certification program participation description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCertification($index)
    {
        unset($this->certification[$index]);
    }

    /**
     * Gets as certification
     *
     * Environmental certification program participation description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * Environmental certification program participation description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $certification
     * @return self
     */
    public function setCertification(array $certification)
    {
        $this->certification = $certification;

        return $this;
    }

    /**
     * Adds as environmental
     *
     * Active environmental program description.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $environmental
     */
    public function addToEnvironmental(\Davispeixoto\OpenTravelAlliance\ParagraphType $environmental)
    {
        $this->environmental[] = $environmental;

        return $this;
    }

    /**
     * isset environmental
     *
     * Active environmental program description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEnvironmental($index)
    {
        return isset($this->environmental[$index]);
    }

    /**
     * unset environmental
     *
     * Active environmental program description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEnvironmental($index)
    {
        unset($this->environmental[$index]);
    }

    /**
     * Gets as environmental
     *
     * Active environmental program description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getEnvironmental()
    {
        return $this->environmental;
    }

    /**
     * Sets a new environmental
     *
     * Active environmental program description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $environmental
     * @return self
     */
    public function setEnvironmental(array $environmental)
    {
        $this->environmental = $environmental;

        return $this;
    }


}

