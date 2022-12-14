<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Data7 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $gender;

    /**
     * @param string $code
     * @param string $name
     * @param string $language
     * @param string $gender
     */
    public function __construct(string $code, string $name, string $language, string $gender)
    {
        $this->code = $code;
        $this->name = $name;
        $this->language = $language;
        $this->gender = $gender;
    }

    /**
     * Returns Code.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Language.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Sets Language.
     *
     * @required
     * @maps language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * Returns Gender.
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * Sets Gender.
     *
     * @required
     * @maps gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
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
        $json['code']     = $this->code;
        $json['name']     = $this->name;
        $json['language'] = $this->language;
        $json['gender']   = $this->gender;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
