<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class Rcode implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $callbackKey;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var string
     */
    private $textToSpeech;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $voiceRepeat;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var string
     */
    private $callbackUrl;

    /**
     * @param string $transactionId
     * @param string $callbackKey
     * @param string $destination
     * @param string $textToSpeech
     * @param string $language
     * @param string $gender
     * @param string $voiceRepeat
     * @param string $externalId
     * @param string $callbackUrl
     */
    public function __construct(
        string $transactionId,
        string $callbackKey,
        string $destination,
        string $textToSpeech,
        string $language,
        string $gender,
        string $voiceRepeat,
        string $externalId,
        string $callbackUrl
    ) {
        $this->transactionId = $transactionId;
        $this->callbackKey = $callbackKey;
        $this->destination = $destination;
        $this->textToSpeech = $textToSpeech;
        $this->language = $language;
        $this->gender = $gender;
        $this->voiceRepeat = $voiceRepeat;
        $this->externalId = $externalId;
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * Returns Transaction Id.
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * Sets Transaction Id.
     *
     * @required
     * @maps transaction_id
     */
    public function setTransactionId(string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * Returns Callback Key.
     */
    public function getCallbackKey(): string
    {
        return $this->callbackKey;
    }

    /**
     * Sets Callback Key.
     *
     * @required
     * @maps callback_key
     */
    public function setCallbackKey(string $callbackKey): void
    {
        $this->callbackKey = $callbackKey;
    }

    /**
     * Returns Destination.
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * Sets Destination.
     *
     * @required
     * @maps destination
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * Returns Text to Speech.
     */
    public function getTextToSpeech(): string
    {
        return $this->textToSpeech;
    }

    /**
     * Sets Text to Speech.
     *
     * @required
     * @maps text_to_speech
     */
    public function setTextToSpeech(string $textToSpeech): void
    {
        $this->textToSpeech = $textToSpeech;
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
     * Returns Voice Repeat.
     */
    public function getVoiceRepeat(): string
    {
        return $this->voiceRepeat;
    }

    /**
     * Sets Voice Repeat.
     *
     * @required
     * @maps VoiceRepeat
     */
    public function setVoiceRepeat(string $voiceRepeat): void
    {
        $this->voiceRepeat = $voiceRepeat;
    }

    /**
     * Returns External Id.
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }

    /**
     * Sets External Id.
     *
     * @required
     * @maps external_id
     */
    public function setExternalId(string $externalId): void
    {
        $this->externalId = $externalId;
    }

    /**
     * Returns Callback Url.
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * Sets Callback Url.
     *
     * @required
     * @maps callback_url
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
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
        $json['transaction_id'] = $this->transactionId;
        $json['callback_key']   = $this->callbackKey;
        $json['destination']    = $this->destination;
        $json['text_to_speech'] = $this->textToSpeech;
        $json['language']       = $this->language;
        $json['gender']         = $this->gender;
        $json['VoiceRepeat']    = $this->voiceRepeat;
        $json['external_id']    = $this->externalId;
        $json['callback_url']   = $this->callbackUrl;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
