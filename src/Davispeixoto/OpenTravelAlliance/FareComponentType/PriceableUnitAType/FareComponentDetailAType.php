<?php

namespace Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType;

/**
 * Class representing FareComponentDetailAType
 */
class FareComponentDetailAType
{

    /**
     * A sequential number representing the order of the fare comonents within the fare
     * component calculation.
     *
     * @property integer $number
     */
    private $number = null;

    /**
     * The tariff number where the fare data is filed.
     *
     * @property string $tariffNumber
     */
    private $tariffNumber = null;

    /**
     * The rule number within the tariff where the fare data is filed.
     *
     * @property string $ruleNumber
     */
    private $ruleNumber = null;

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.Example: us
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * A validating carrier assigned code that allows a fare rule modification or
     * override.
     *
     * @property string $waiverCode
     */
    private $waiverCode = null;

    /**
     * The passenger type code.
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * System generated data indicating the ticketed fare is from a specific rule filed
     * fare sent by the issuing system.
     *
     * @property string $ruleCode
     */
    private $ruleCode = null;

    /**
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * The applicable Tour/Value Coding/Contract/Commercial Agreement Reference Code
     * used to price the fare component.
     *
     * @property string $agreementCode
     */
    private $agreementCode = null;

    /**
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\CouponSequenceAType[]
     * $couponSequence
     */
    private $couponSequence = null;

    /**
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\ConstructionPrincipleAType[]
     * $constructionPrinciple
     */
    private $constructionPrinciple = null;

    /**
     * The base, base net, and base sell amounts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\BaseAmountAType[]
     * $baseAmount
     */
    private $baseAmount = null;

    /**
     * Ticket designation code and qualifier.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\TicketDesignatorAType[]
     * $ticketDesignator
     */
    private $ticketDesignator = null;

    /**
     * Gets as number
     *
     * A sequential number representing the order of the fare comonents within the fare
     * component calculation.
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * A sequential number representing the order of the fare comonents within the fare
     * component calculation.
     *
     * @param integer $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Gets as tariffNumber
     *
     * The tariff number where the fare data is filed.
     *
     * @return string
     */
    public function getTariffNumber()
    {
        return $this->tariffNumber;
    }

    /**
     * Sets a new tariffNumber
     *
     * The tariff number where the fare data is filed.
     *
     * @param string $tariffNumber
     * @return self
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;

        return $this;
    }

    /**
     * Gets as ruleNumber
     *
     * The rule number within the tariff where the fare data is filed.
     *
     * @return string
     */
    public function getRuleNumber()
    {
        return $this->ruleNumber;
    }

    /**
     * Sets a new ruleNumber
     *
     * The rule number within the tariff where the fare data is filed.
     *
     * @param string $ruleNumber
     * @return self
     */
    public function setRuleNumber($ruleNumber)
    {
        $this->ruleNumber = $ruleNumber;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a company by the company code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country location of the company headquarters.Example: us
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as waiverCode
     *
     * A validating carrier assigned code that allows a fare rule modification or
     * override.
     *
     * @return string
     */
    public function getWaiverCode()
    {
        return $this->waiverCode;
    }

    /**
     * Sets a new waiverCode
     *
     * A validating carrier assigned code that allows a fare rule modification or
     * override.
     *
     * @param string $waiverCode
     * @return self
     */
    public function setWaiverCode($waiverCode)
    {
        $this->waiverCode = $waiverCode;

        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * The passenger type code.
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * The passenger type code.
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * Gets as ruleCode
     *
     * System generated data indicating the ticketed fare is from a specific rule filed
     * fare sent by the issuing system.
     *
     * @return string
     */
    public function getRuleCode()
    {
        return $this->ruleCode;
    }

    /**
     * Sets a new ruleCode
     *
     * System generated data indicating the ticketed fare is from a specific rule filed
     * fare sent by the issuing system.
     *
     * @param string $ruleCode
     * @return self
     */
    public function setRuleCode($ruleCode)
    {
        $this->ruleCode = $ruleCode;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
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
     * The applicable code as provided for in ATA SIPP Reso 110.16 or IATA Reso 728.
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
     * Gets as agreementCode
     *
     * The applicable Tour/Value Coding/Contract/Commercial Agreement Reference Code
     * used to price the fare component.
     *
     * @return string
     */
    public function getAgreementCode()
    {
        return $this->agreementCode;
    }

    /**
     * Sets a new agreementCode
     *
     * The applicable Tour/Value Coding/Contract/Commercial Agreement Reference Code
     * used to price the fare component.
     *
     * @param string $agreementCode
     * @return self
     */
    public function setAgreementCode($agreementCode)
    {
        $this->agreementCode = $agreementCode;

        return $this;
    }

    /**
     * Adds as couponSequence
     *
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\CouponSequenceAType
     * $couponSequence
     */
    public function addToCouponSequence(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\CouponSequenceAType $couponSequence
    ) {
        $this->couponSequence[] = $couponSequence;

        return $this;
    }

    /**
     * isset couponSequence
     *
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCouponSequence($index)
    {
        return isset($this->couponSequence[$index]);
    }

    /**
     * unset couponSequence
     *
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCouponSequence($index)
    {
        unset($this->couponSequence[$index]);
    }

    /**
     * Gets as couponSequence
     *
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\CouponSequenceAType[]
     */
    public function getCouponSequence()
    {
        return $this->couponSequence;
    }

    /**
     * Sets a new couponSequence
     *
     * Sequence number, coupon/itinerary sequence nbr, from and to city codes, stopover
     * indicator, and airline designator.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\CouponSequenceAType[]
     * $couponSequence
     * @return self
     */
    public function setCouponSequence(array $couponSequence)
    {
        $this->couponSequence = $couponSequence;

        return $this;
    }

    /**
     * Adds as constructionPrinciple
     *
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\ConstructionPrincipleAType
     * $constructionPrinciple
     */
    public function addToConstructionPrinciple(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\ConstructionPrincipleAType $constructionPrinciple
    ) {
        $this->constructionPrinciple[] = $constructionPrinciple;

        return $this;
    }

    /**
     * isset constructionPrinciple
     *
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConstructionPrinciple($index)
    {
        return isset($this->constructionPrinciple[$index]);
    }

    /**
     * unset constructionPrinciple
     *
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConstructionPrinciple($index)
    {
        unset($this->constructionPrinciple[$index]);
    }

    /**
     * Gets as constructionPrinciple
     *
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\ConstructionPrincipleAType[]
     */
    public function getConstructionPrinciple()
    {
        return $this->constructionPrinciple;
    }

    /**
     * Sets a new constructionPrinciple
     *
     * Principle indicator, from and to airport/city code, amount and percent.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\ConstructionPrincipleAType[]
     * $constructionPrinciple
     * @return self
     */
    public function setConstructionPrinciple(array $constructionPrinciple)
    {
        $this->constructionPrinciple = $constructionPrinciple;

        return $this;
    }

    /**
     * Adds as baseAmount
     *
     * The base, base net, and base sell amounts.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\BaseAmountAType
     * $baseAmount
     */
    public function addToBaseAmount(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\BaseAmountAType $baseAmount
    ) {
        $this->baseAmount[] = $baseAmount;

        return $this;
    }

    /**
     * isset baseAmount
     *
     * The base, base net, and base sell amounts.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaseAmount($index)
    {
        return isset($this->baseAmount[$index]);
    }

    /**
     * unset baseAmount
     *
     * The base, base net, and base sell amounts.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaseAmount($index)
    {
        unset($this->baseAmount[$index]);
    }

    /**
     * Gets as baseAmount
     *
     * The base, base net, and base sell amounts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\BaseAmountAType[]
     */
    public function getBaseAmount()
    {
        return $this->baseAmount;
    }

    /**
     * Sets a new baseAmount
     *
     * The base, base net, and base sell amounts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\BaseAmountAType[]
     * $baseAmount
     * @return self
     */
    public function setBaseAmount(array $baseAmount)
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Adds as ticketDesignator
     *
     * Ticket designation code and qualifier.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\TicketDesignatorAType
     * $ticketDesignator
     */
    public function addToTicketDesignator(
        \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\TicketDesignatorAType $ticketDesignator
    ) {
        $this->ticketDesignator[] = $ticketDesignator;

        return $this;
    }

    /**
     * isset ticketDesignator
     *
     * Ticket designation code and qualifier.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTicketDesignator($index)
    {
        return isset($this->ticketDesignator[$index]);
    }

    /**
     * unset ticketDesignator
     *
     * Ticket designation code and qualifier.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTicketDesignator($index)
    {
        unset($this->ticketDesignator[$index]);
    }

    /**
     * Gets as ticketDesignator
     *
     * Ticket designation code and qualifier.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\TicketDesignatorAType[]
     */
    public function getTicketDesignator()
    {
        return $this->ticketDesignator;
    }

    /**
     * Sets a new ticketDesignator
     *
     * Ticket designation code and qualifier.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType\TicketDesignatorAType[]
     * $ticketDesignator
     * @return self
     */
    public function setTicketDesignator(array $ticketDesignator)
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }


}

