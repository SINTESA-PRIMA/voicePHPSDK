<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IntentDeleteRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $aiName;

    /**
     * @var string
     */
    private $displayName;

    /**
     * @param string $aiName
     * @param string $displayName
     */
    public function __construct(string $aiName, string $displayName)
    {
        $this->aiName = $aiName;
        $this->displayName = $displayName;
    }

    /**
     * Returns Ai Name.
     */
    public function getAiName(): string
    {
        return $this->aiName;
    }

    /**
     * Sets Ai Name.
     *
     * @required
     * @maps ai_name
     */
    public function setAiName(string $aiName): void
    {
        $this->aiName = $aiName;
    }

    /**
     * Returns Display Name.
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * Sets Display Name.
     *
     * @required
     * @maps display_name
     */
    public function setDisplayName(string $displayName): void
    {
        $this->displayName = $displayName;
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
        $json['ai_name']      = $this->aiName;
        $json['display_name'] = $this->displayName;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
