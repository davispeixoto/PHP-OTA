<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OntologyCurrencyType
 *
 * Currency encoding, amount with ontology reference.
 * XSD Type: OntologyCurrencyType
 */
class OntologyCurrencyType
{

    /**
     * Currency code for monetary amounts.Example: USDNote: Best practices state an ISO
     * 4217 Currency Code format should be used. If another format is used, specify the
     * format in the @Context attribute.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Decimal places for associated @CurrencyCode.Example: 2
     *
     * @property integer $currencyDecimal
     */
    private $currencyDecimal = null;

    /**
     * Currency amount.Example: USDNote: ISO 4217 Currency Code format.
     *
     * @property integer $amount
     */
    private $amount = null;

    /**
     * Item context (source authority.)Example: ISO
     *
     * @property string $context
     */
    private $context = null;

    /**
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @property string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Gets as currencyCode
     *
     * Currency code for monetary amounts.Example: USDNote: Best practices state an ISO
     * 4217 Currency Code format should be used. If another format is used, specify the
     * format in the @Context attribute.
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
     * Currency code for monetary amounts.Example: USDNote: Best practices state an ISO
     * 4217 Currency Code format should be used. If another format is used, specify the
     * format in the @Context attribute.
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
     * Gets as currencyDecimal
     *
     * Decimal places for associated @CurrencyCode.Example: 2
     *
     * @return integer
     */
    public function getCurrencyDecimal()
    {
        return $this->currencyDecimal;
    }

    /**
     * Sets a new currencyDecimal
     *
     * Decimal places for associated @CurrencyCode.Example: 2
     *
     * @param integer $currencyDecimal
     * @return self
     */
    public function setCurrencyDecimal($currencyDecimal)
    {
        $this->currencyDecimal = $currencyDecimal;

        return $this;
    }

    /**
     * Gets as amount
     *
     * Currency amount.Example: USDNote: ISO 4217 Currency Code format.
     *
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Currency amount.Example: USDNote: ISO 4217 Currency Code format.
     *
     * @param integer $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as context
     *
     * Item context (source authority.)Example: ISO
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets a new context
     *
     * Item context (source authority.)Example: ISO
     *
     * @param string $context
     * @return self
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.Example: 1Implementer: This is a reference to a unique set of
     * ontology information with a unique ID that is specified in the Ontology/@RefID
     * attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;

        return $this;
    }


}

