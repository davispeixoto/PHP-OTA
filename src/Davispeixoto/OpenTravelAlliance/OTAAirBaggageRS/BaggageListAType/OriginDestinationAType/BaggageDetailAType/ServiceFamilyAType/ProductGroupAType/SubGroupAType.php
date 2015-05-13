<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType;

/**
 * Class representing SubGroupAType
 */
class SubGroupAType
{

    /**
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @property string $codeSource
     */
    private $codeSource = null;

    /**
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @property string $additionalCode
     */
    private $additionalCode = null;

    /**
     * Additional baggage information.Example: First checked bag fee to/from South
     * America
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $description
     */
    private $description = null;

    /**
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @property string $brandedFareName
     */
    private $brandedFareName = null;

    /**
     * The name of the ancillary item.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * A short description of the ancillary item.
     *
     * @property string $shortDescription
     */
    private $shortDescription = null;

    /**
     * A detailed description of the ancillary item.
     *
     * @property string $longDescription
     */
    private $longDescription = null;

    /**
     * Baggage details for one RFISC product code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BaggageDetailAType
     * $baggageDetail
     */
    private $baggageDetail = null;

    /**
     * Booking and upgrade instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BookingInstructionAType
     * $bookingInstruction
     */
    private $bookingInstruction = null;

    /**
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferType[] $offer
     */
    private $offer = null;

    /**
     * Baggage pricing information, including amounts, tax(s), pricing rules, pricing
     * influencers, exchange rate and redemption amounts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\TicketBoxAType
     * $ticketBox
     */
    private $ticketBox = null;

    /**
     * ATPCO diagnostic information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\ATPCODiagnosticAType
     * $aTPCODiagnostic
     */
    private $aTPCODiagnostic = null;

    /**
     * Gets as codeSource
     *
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @return string
     */
    public function getCodeSource()
    {
        return $this->codeSource;
    }

    /**
     * Sets a new codeSource
     *
     * The source for the @RFISC_Code and @Code definitions. Note that setting this
     * attribute at this level will override the global CodeSource attribute set at a
     * higher level in the message.
     *
     * @param string $codeSource
     * @return self
     */
    public function setCodeSource($codeSource)
    {
        $this->codeSource = $codeSource;

        return $this;
    }

    /**
     * Gets as code
     *
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
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
     * A unique product sub-group code that may be airline defined or a RFISC (reason
     * for issuance sub-code.)The three character alphanumeric RFISC.
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
     * Gets as additionalCode
     *
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @return string
     */
    public function getAdditionalCode()
    {
        return $this->additionalCode;
    }

    /**
     * Sets a new additionalCode
     *
     * An additional code that further defines the sub-group.The three character
     * alphanumeric RFISC.
     *
     * @param string $additionalCode
     * @return self
     */
    public function setAdditionalCode($additionalCode)
    {
        $this->additionalCode = $additionalCode;

        return $this;
    }

    /**
     * Gets as description
     *
     * Additional baggage information.Example: First checked bag fee to/from South
     * America
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Additional baggage information.Example: First checked bag fee to/from South
     * America
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\FreeTextType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets as brandedFareName
     *
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @return string
     */
    public function getBrandedFareName()
    {
        return $this->brandedFareName;
    }

    /**
     * Sets a new brandedFareName
     *
     * A pure fare that sits within a fare family. This is a fare associated with a
     * brand (fare basis code) and at this level does not describe what is included.
     *
     * @param string $brandedFareName
     * @return self
     */
    public function setBrandedFareName($brandedFareName)
    {
        $this->brandedFareName = $brandedFareName;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the ancillary item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the ancillary item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as shortDescription
     *
     * A short description of the ancillary item.
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
     * A short description of the ancillary item.
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
     * Gets as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param string $longDescription
     * @return self
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Gets as baggageDetail
     *
     * Baggage details for one RFISC product code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BaggageDetailAType
     */
    public function getBaggageDetail()
    {
        return $this->baggageDetail;
    }

    /**
     * Sets a new baggageDetail
     *
     * Baggage details for one RFISC product code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BaggageDetailAType
     * $baggageDetail
     * @return self
     */
    public function setBaggageDetail(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BaggageDetailAType $baggageDetail
    ) {
        $this->baggageDetail = $baggageDetail;

        return $this;
    }

    /**
     * Gets as bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BookingInstructionAType
     */
    public function getBookingInstruction()
    {
        return $this->bookingInstruction;
    }

    /**
     * Sets a new bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BookingInstructionAType
     * $bookingInstruction
     * @return self
     */
    public function setBookingInstruction(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\BookingInstructionAType $bookingInstruction
    ) {
        $this->bookingInstruction = $bookingInstruction;

        return $this;
    }

    /**
     * Adds as offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferType $offer
     */
    public function addToOffer(\Davispeixoto\OpenTravelAlliance\AirOfferType $offer)
    {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferType[] $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Baggage pricing information, including amounts, tax(s), pricing rules, pricing
     * influencers, exchange rate and redemption amounts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Baggage pricing information, including amounts, tax(s), pricing rules, pricing
     * influencers, exchange rate and redemption amounts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Gets as ticketBox
     *
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\TicketBoxAType
     */
    public function getTicketBox()
    {
        return $this->ticketBox;
    }

    /**
     * Sets a new ticketBox
     *
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\TicketBoxAType
     * $ticketBox
     * @return self
     */
    public function setTicketBox(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\TicketBoxAType $ticketBox
    ) {
        $this->ticketBox = $ticketBox;

        return $this;
    }

    /**
     * Gets as aTPCODiagnostic
     *
     * ATPCO diagnostic information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\ATPCODiagnosticAType
     */
    public function getATPCODiagnostic()
    {
        return $this->aTPCODiagnostic;
    }

    /**
     * Sets a new aTPCODiagnostic
     *
     * ATPCO diagnostic information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\ATPCODiagnosticAType
     * $aTPCODiagnostic
     * @return self
     */
    public function setATPCODiagnostic(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType\ServiceFamilyAType\ProductGroupAType\SubGroupAType\ATPCODiagnosticAType $aTPCODiagnostic
    ) {
        $this->aTPCODiagnostic = $aTPCODiagnostic;

        return $this;
    }


}

