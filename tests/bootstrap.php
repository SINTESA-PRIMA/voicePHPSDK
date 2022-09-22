<?php
/*
 * VoiceApiCall
 *
 * This file was automatically generated for provoice by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

/**
 * Load the composer's autoload file so that we don't have to require files
 * manually in our code. Also load helper classes for tests.
 */
$vendor_dir = getenv('COMPOSER_VENDOR_DIR') ?: 'vendor';

require __DIR__.'/../' . $vendor_dir . '/autoload.php';
require __DIR__.'/HttpCallBackCatcher.php';
require __DIR__.'/TestHelper.php';
require __DIR__.'/ClientFactory.php';
