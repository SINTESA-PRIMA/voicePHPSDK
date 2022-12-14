<?php

declare(strict_types=1);

/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace VoiceApiCallLib\Models;

use stdClass;

class IVRNewRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $ivrName;

    /**
     * @var string
     */
    private $ivrTitle;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $annauncementText;

    /**
     * @var string
     */
    private $maxTrying;

    /**
     * @var string
     */
    private $exitKey;

    /**
     * @var string
     */
    private $backMenu;

    /**
     * @var string
     */
    private $mainMenu;

    /**
     * @var string
     */
    private $keyPressed;

    /**
     * @var string
     */
    private $ivrParent;

    /**
     * @var string
     */
    private $ivrAction;

    /**
     * @param string $action
     * @param string $ivrName
     * @param string $ivrTitle
     * @param string $lang
     * @param string $gender
     * @param string $annauncementText
     * @param string $maxTrying
     * @param string $exitKey
     * @param string $backMenu
     * @param string $mainMenu
     * @param string $keyPressed
     * @param string $ivrParent
     * @param string $ivrAction
     */
    public function __construct(
        string $action,
        string $ivrName,
        string $ivrTitle,
        string $lang,
        string $gender,
        string $annauncementText,
        string $maxTrying,
        string $exitKey,
        string $backMenu,
        string $mainMenu,
        string $keyPressed,
        string $ivrParent,
        string $ivrAction
    ) {
        $this->action = $action;
        $this->ivrName = $ivrName;
        $this->ivrTitle = $ivrTitle;
        $this->lang = $lang;
        $this->gender = $gender;
        $this->annauncementText = $annauncementText;
        $this->maxTrying = $maxTrying;
        $this->exitKey = $exitKey;
        $this->backMenu = $backMenu;
        $this->mainMenu = $mainMenu;
        $this->keyPressed = $keyPressed;
        $this->ivrParent = $ivrParent;
        $this->ivrAction = $ivrAction;
    }

    /**
     * Returns Action.
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * Sets Action.
     *
     * @required
     * @maps action
     */
    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    /**
     * Returns Ivr Name.
     */
    public function getIvrName(): string
    {
        return $this->ivrName;
    }

    /**
     * Sets Ivr Name.
     *
     * @required
     * @maps ivr_name
     */
    public function setIvrName(string $ivrName): void
    {
        $this->ivrName = $ivrName;
    }

    /**
     * Returns Ivr Title.
     */
    public function getIvrTitle(): string
    {
        return $this->ivrTitle;
    }

    /**
     * Sets Ivr Title.
     *
     * @required
     * @maps ivr_title
     */
    public function setIvrTitle(string $ivrTitle): void
    {
        $this->ivrTitle = $ivrTitle;
    }

    /**
     * Returns Lang.
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * Sets Lang.
     *
     * @required
     * @maps lang
     */
    public function setLang(string $lang): void
    {
        $this->lang = $lang;
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
     * Returns Annauncement Text.
     */
    public function getAnnauncementText(): string
    {
        return $this->annauncementText;
    }

    /**
     * Sets Annauncement Text.
     *
     * @required
     * @maps annauncement_text
     */
    public function setAnnauncementText(string $annauncementText): void
    {
        $this->annauncementText = $annauncementText;
    }

    /**
     * Returns Max Trying.
     */
    public function getMaxTrying(): string
    {
        return $this->maxTrying;
    }

    /**
     * Sets Max Trying.
     *
     * @required
     * @maps max_trying
     */
    public function setMaxTrying(string $maxTrying): void
    {
        $this->maxTrying = $maxTrying;
    }

    /**
     * Returns Exit Key.
     */
    public function getExitKey(): string
    {
        return $this->exitKey;
    }

    /**
     * Sets Exit Key.
     *
     * @required
     * @maps exit_key
     */
    public function setExitKey(string $exitKey): void
    {
        $this->exitKey = $exitKey;
    }

    /**
     * Returns Back Menu.
     */
    public function getBackMenu(): string
    {
        return $this->backMenu;
    }

    /**
     * Sets Back Menu.
     *
     * @required
     * @maps back_menu
     */
    public function setBackMenu(string $backMenu): void
    {
        $this->backMenu = $backMenu;
    }

    /**
     * Returns Main Menu.
     */
    public function getMainMenu(): string
    {
        return $this->mainMenu;
    }

    /**
     * Sets Main Menu.
     *
     * @required
     * @maps main_menu
     */
    public function setMainMenu(string $mainMenu): void
    {
        $this->mainMenu = $mainMenu;
    }

    /**
     * Returns Key Pressed.
     */
    public function getKeyPressed(): string
    {
        return $this->keyPressed;
    }

    /**
     * Sets Key Pressed.
     *
     * @required
     * @maps key_pressed
     */
    public function setKeyPressed(string $keyPressed): void
    {
        $this->keyPressed = $keyPressed;
    }

    /**
     * Returns Ivr Parent.
     */
    public function getIvrParent(): string
    {
        return $this->ivrParent;
    }

    /**
     * Sets Ivr Parent.
     *
     * @required
     * @maps ivr_parent
     */
    public function setIvrParent(string $ivrParent): void
    {
        $this->ivrParent = $ivrParent;
    }

    /**
     * Returns Ivr Action.
     */
    public function getIvrAction(): string
    {
        return $this->ivrAction;
    }

    /**
     * Sets Ivr Action.
     *
     * @required
     * @maps ivr_action
     */
    public function setIvrAction(string $ivrAction): void
    {
        $this->ivrAction = $ivrAction;
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
        $json['action']            = $this->action;
        $json['ivr_name']          = $this->ivrName;
        $json['ivr_title']         = $this->ivrTitle;
        $json['lang']              = $this->lang;
        $json['gender']            = $this->gender;
        $json['annauncement_text'] = $this->annauncementText;
        $json['max_trying']        = $this->maxTrying;
        $json['exit_key']          = $this->exitKey;
        $json['back_menu']         = $this->backMenu;
        $json['main_menu']         = $this->mainMenu;
        $json['key_pressed']       = $this->keyPressed;
        $json['ivr_parent']        = $this->ivrParent;
        $json['ivr_action']        = $this->ivrAction;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
