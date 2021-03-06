<?php

/**
 * Google Tag Manager extension for phpBB v3.
 *
 * @package phpBB extension: danirod/tagmanager
 * @copyright (C) 2017 Dani Rodríguez <danirod@outlook.com>
 * @license GNU General Public License v3.0
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
    'TAGMANAGER_KEY' => 'ID de Google Tag Manager',
    'TAGMANAGER_KEY_EXPLAIN' => 'Introduce aquí el ID de contenedor tal como lo ves en el panel de control de Google Tag Manager.'
));