<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IntentEditRequest implements \JsonSerializable
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
     * @var string
     */
    private $trainingPhrases;

    /**
     * @var string
     */
    private $messageTexts;

    /**
     * @param string $aiName
     * @param string $displayName
     * @param string $trainingPhrases
     * @param string $messageTexts
     */
    public function __construct(string $aiName, string $displayName, string $trainingPhrases, string $messageTexts)
    {
        $this->aiName = $aiName;
        $this->displayName = $displayName;
        $this->trainingPhrases = $trainingPhrases;
        $this->messageTexts = $messageTexts;
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
     * Returns Training Phrases.
     */
    public function getTrainingPhrases(): string
    {
        return $this->trainingPhrases;
    }

    /**
     * Sets Training Phrases.
     *
     * @required
     * @maps training_phrases
     */
    public function setTrainingPhrases(string $trainingPhrases): void
    {
        $this->trainingPhrases = $trainingPhrases;
    }

    /**
     * Returns Message Texts.
     */
    public function getMessageTexts(): string
    {
        return $this->messageTexts;
    }

    /**
     * Sets Message Texts.
     *
     * @required
     * @maps message_texts
     */
    public function setMessageTexts(string $messageTexts): void
    {
        $this->messageTexts = $messageTexts;
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
        $json['ai_name']          = $this->aiName;
        $json['display_name']     = $this->displayName;
        $json['training_phrases'] = $this->trainingPhrases;
        $json['message_texts']    = $this->messageTexts;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
