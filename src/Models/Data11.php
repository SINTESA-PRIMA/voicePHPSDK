<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data11 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $did;

    /**
     * @var int
     */
    private $activationCost;

    /**
     * @var int
     */
    private $monthlyCost;

    /**
     * @var string
     */
    private $didType;

    /**
     * @var int
     */
    private $active;

    /**
     * @param string $did
     * @param int $activationCost
     * @param int $monthlyCost
     * @param string $didType
     * @param int $active
     */
    public function __construct(string $did, int $activationCost, int $monthlyCost, string $didType, int $active)
    {
        $this->did = $did;
        $this->activationCost = $activationCost;
        $this->monthlyCost = $monthlyCost;
        $this->didType = $didType;
        $this->active = $active;
    }

    /**
     * Returns Did.
     */
    public function getDid(): string
    {
        return $this->did;
    }

    /**
     * Sets Did.
     *
     * @required
     * @maps did
     */
    public function setDid(string $did): void
    {
        $this->did = $did;
    }

    /**
     * Returns Activation Cost.
     */
    public function getActivationCost(): int
    {
        return $this->activationCost;
    }

    /**
     * Sets Activation Cost.
     *
     * @required
     * @maps activation_cost
     */
    public function setActivationCost(int $activationCost): void
    {
        $this->activationCost = $activationCost;
    }

    /**
     * Returns Monthly Cost.
     */
    public function getMonthlyCost(): int
    {
        return $this->monthlyCost;
    }

    /**
     * Sets Monthly Cost.
     *
     * @required
     * @maps monthly_cost
     */
    public function setMonthlyCost(int $monthlyCost): void
    {
        $this->monthlyCost = $monthlyCost;
    }

    /**
     * Returns Did Type.
     */
    public function getDidType(): string
    {
        return $this->didType;
    }

    /**
     * Sets Did Type.
     *
     * @required
     * @maps did_type
     */
    public function setDidType(string $didType): void
    {
        $this->didType = $didType;
    }

    /**
     * Returns Active.
     */
    public function getActive(): int
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @required
     * @maps active
     */
    public function setActive(int $active): void
    {
        $this->active = $active;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['did']             = $this->did;
        $json['activation_cost'] = $this->activationCost;
        $json['monthly_cost']    = $this->monthlyCost;
        $json['did_type']        = $this->didType;
        $json['active']          = $this->active;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
