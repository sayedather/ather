<?php
/**
*
* application [English]
*
* @package language
* @copyright (c) 2016 Ather
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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
	'APPLICATION_SUBJECT'			=> 'Application from %s',
	'APPLICATION_MESSAGE'			=> 'A user has applied with the following information using the application form.<br /><br />[b]Name:[/b] %1$s<br />[b]Xbox Gamertag:[/b] %2$s<br />[b]Location:[/b] %3$s<br />[b]Timezone:[/b] %4$s<br />[b]Age:[/b] %5$s<br />[b]How long playing World of Tanks?[/b] %6$s<br />[b]Previous Clan Experience?[/b] %7$s<br />[b]Which Clan?[/b] %8$s<br />[b]Why Lowe?[/b] %9$s<br />[b]How did you hear about us?[/b] %10$s<br />[b]What other Xbox titles do you play?[/b] %11$s',
	'APPLICATION_SEND'				=> 'Your application has been sent to the administrators of this board. They’ll decide in the coming days.',
	'APPLICATION_PAGETITLE'			=> 'Application form',
	'APPLICATION_WELCOME_MESSAGE'	=> 'Welcome to the application form. We have clan positions open that you may, if you feel you’re the right person, wish to apply for. Please fill out the form below to be considered for the clan. Good luck!',

));
