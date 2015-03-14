<?php
/**
*
* @package phpBB Extension - mChat
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
*/


/**
* DO NOT CHANGE!
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

// Adding new category
$lang['permission_cat']['mchat'] = 'mChat';

// Adding the permissions
$lang = array_merge($lang, array(

	'MCHAT_TITLE'				=> 'Mini-Chat',
	'MCHAT_ADD'					=> 'Verzenden',
	'MCHAT_ANNOUNCEMENT'		=> 'Mededeling',
	'MCHAT_ARCHIVE'				=> 'Archief',	
	'MCHAT_ARCHIVE_PAGE'		=> 'Mini-Chat Archief',	
	'MCHAT_BBCODES'				=> 'BBCodes',
	'MCHAT_CLEAN'				=> 'Opschonen',
	'MCHAT_CLEANED'				=> 'Alle berichten zijn succesvol verwijerd',
	'MCHAT_CLEAR_INPUT'			=> 'Reset',
	'MCHAT_COPYRIGHT'			=> '<a href="http://rmcgirr83.org">RMcGirr83</a> &copy; <a href="http://www.dmzx-web.net" title="www.dmzx-web.net">dmzx</a>',
	'MCHAT_CUSTOM_BBCODES'		=> 'Aangepaste BBCodes',
	'MCHAT_DELALLMESS'			=> 'Alle berichten verwijderen?',
	'MCHAT_DELCONFIRM'			=> 'Weet je zeker dat je dit bericht wil verwijderen?',
	'MCHAT_DELITE'				=> 'Verwijer',
	'MCHAT_EDIT'				=> 'Bewerk',
	'MCHAT_EDITINFO'			=> 'Bewerk het bericht en klik op OK',
	'MCHAT_ENABLE'				=> 'Sorry, de Mini-Chat is momenteel onbereikbaar',	
	'MCHAT_ERROR'				=> 'Fout',	
	'MCHAT_FLOOD'				=> 'Je kunt niet zo snel achter elkaar berichten plaatsen',	
	'MCHAT_FOE'					=> 'Dit bericht is geplaatst door <strong>%1$s</strong>, die staat momenteel op jouw negeerlijst.',
	'MCHAT_HELP'				=> 'mChat Regels',
	'MCHAT_HIDE_LIST'			=> 'Verberg lijst',	
	'MCHAT_HOUR'				=> 'uur ',
	'MCHAT_HOURS'				=> 'uren',
	'MCHAT_IP'					=> 'IP whois voor',
	
	'MCHAT_MINUTE'				=> 'minuut ',
	'MCHAT_MINUTES'				=> 'minuten ',
	'MCHAT_MESS_LONG'			=> 'Het bericht is te lang.\nBeperk het bericht tot %s karakters',	
	'MCHAT_NO_CUSTOM_PAGE'		=> 'De mChat aangepaste pagina is niet beschikbaar op dit tijdstip!',	
	'MCHAT_NOACCESS'			=> 'Je hebt geen permissies om berichten in de mChat te plaatsen',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Je hebt geen permissies om het archief te bekijken',	
	'MCHAT_NOJAVASCRIPT'		=> 'Jouw browser ondersteund geen JavaScript of JavaScript is uitgeschakeld',		
	'MCHAT_NOMESSAGE'			=> 'Geen berichten',
	'MCHAT_NOMESSAGEINPUT'		=> 'Je hebt geen tekst ingevuld',
	'MCHAT_NOSMILE'				=> 'Smilies niet gevonden',
	'MCHAT_NOTINSTALLED_USER'	=> 'mChat is niet geïnstalleerd.  Contacteer de forumeigenaar.',
	'MCHAT_NOT_INSTALLED'		=> 'Er missen mChat databasetabellen .<br />Voer alsjeblieft de %sinstaller%s uit om de database bij te werken.',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Gepauzeerd',
	'MCHAT_LOAD'				=> 'Laden',      
	'MCHAT_PERMISSIONS'			=> 'Verander gebruikerspermissies',
	'MCHAT_REFRESHING'			=> 'Herladen...',
	'MCHAT_REFRESH_NO'			=> 'Autoupdate staat uit',
	'MCHAT_REFRESH_YES'			=> 'Autoupdate elke <strong>%d</strong> seconden',
	'MCHAT_RESPOND'				=> 'Reageren op gebruiker',
	'MCHAT_RESET_QUESTION'		=> 'Invoerveld leegmaken?',
	'MCHAT_SESSION_OUT'			=> 'De chatsessie is verlopen',	
	'MCHAT_SHOW_LIST'			=> 'Toon lijst',
	'MCHAT_SECOND'				=> 'seconde ',
	'MCHAT_SECONDS'				=> 'secondes ',
	'MCHAT_SESSION_ENDS'		=> 'Chatsessie verloopt over',
	'MCHAT_SMILES'				=> 'Smilies',

	'MCHAT_TOTALMESSAGES'		=> 'Totaal aantal berichten: <strong>%s</strong>',
	'MCHAT_USESOUND'			=> 'Geluid gebruiken?',
	

	'MCHAT_ONLINE_USERS_TOTAL'			=> 'In totaal zijn er <strong>%d</strong> gebruikers aan het chatten ',
	'MCHAT_ONLINE_USER_TOTAL'			=> 'In totaal is er <strong>%d</strong> gebruiker aan het chatten ',
	'MCHAT_NO_CHATTERS'					=> 'Niemand is aan het chatten',
	'MCHAT_ONLINE_EXPLAIN'				=> 'gebaseerd op de online gebruikers gedurende %s',
	
	'WHO_IS_CHATTING'			=> 'Who is aan het chatten',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'Herlaadt elke <strong>%d</strong> seconden',
	'MCHAT_NEW_TOPIC'			=> '<strong>Nieuw onderwerp</strong>',		
	'MCHAT_NEW_REPLY'			=> '<strong>Nieuwe reactie</strong>',	
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'mChat Voorkeure',
	
	'DISPLAY_MCHAT' 	=> 'Toon mChat op de indexpagina',
	'SOUND_MCHAT'		=> 'Schakel mChat geluid in',
	'DISPLAY_STATS_INDEX'	=> 'Toon de Wie is aan het chatten statistieken op de indexpagina',
	'DISPLAY_NEW_TOPICS'	=> 'Toon nieuwe onderwerpen in de chat',
	'DISPLAY_AVATARS'	=> 'Toon avatars in de chat',
	'CHAT_AREA'		=> 'Invoerveld',
	'CHAT_AREA_EXPLAIN'	=> 'Choose which type of area to use to input a chat:<br />A text area or<br />an input area',
	'INPUT_AREA'		=> 'Invoerveld (klein)',
	'TEXT_AREA'			=> 'Invoerarea (groot)',	
	// ACP
	'ACP_MCHAT_RULES_EXPLAIN'		=> 'Voer hier de regels van het forum in.  Elke regel op een nieuwe lijn.<br />Maximaal 255 tekens zijn toegestaan.<br /><strong>Dit bericht kan worden vertaald.</strong> (je moet daarvoor het mchat_lang.php bestand bewerken en de instructie's lezen).',
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>mChat instellingen gewijzigd </strong>',
	'MCHAT_CONFIG_SAVED'			=> 'Mini Chat instellingen zijn gewijzigd',
	'MCHAT_TITLE'					=> 'Mini-Chat',
	'MCHAT_VERSION'					=> 'Versie:',
	'MCHAT_ENABLE'					=> 'Schakel de mChat extensie in',
	'MCHAT_ENABLE_EXPLAIN'			=> 'Schakel de mChat globaal in of uit.',
	'MCHAT_AVATARS'					=> 'Toon avaters',
	'MCHAT_AVATARS_EXPLAIN'			=> 'Indien ja, zullen verkleinde avatars worden getoond',	
	'MCHAT_ON_INDEX'				=> 'mChat op indexpagina',
	'MCHAT_ON_INDEX_EXPLAIN'		=> 'Sta toe dat de mChat op de indexpagina getoond wordt.',
	'MCHAT_INDEX_HEIGHT'			=> 'Indexpagina hoogte',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'	=> 'De hoogte van de chatbox in pixels op de indexpagina van het forum.<br /><em>Er is een limiet van 50 tot 1000 pixels</em>.',
	'MCHAT_LOCATION'				=> 'Locatie op forum',
	'MCHAT_LOCATION_EXPLAIN'		=> 'Kies de locatie van de mChat op de indexpagina.',
	'MCHAT_TOP_OF_FORUM'			=> 'Bovenaan het forum',
	'MCHAT_BOTTOM_OF_FORUM'			=> 'Onderaan het forum',
	'MCHAT_REFRESH'					=> 'Herladen',
	'MCHAT_REFRESH_EXPLAIN'			=> 'Aantal seconden voordat de chat automatisch herlaadt.<br /><em>Er is een limiet van 5 tot 60 seconden</em>.',
	'MCHAT_PRUNE'					=> 'Schakel opruiming',
	'MCHAT_PRUNE_EXPLAIN'			=> 'Stel in op ja om de opruim functie in de schakelen.<br /><em>Dit gebeurd alleen als een gebruiker de aangepaste- of de archiefpagina bezoekt.</em>.',
	'MCHAT_PRUNE_NUM'				=> 'Opruim getal',
	'MCHAT_PRUNE_NUM_EXPLAIN'		=> 'Het aantal berichten die moeten overblijven in chat.',	
	'MCHAT_MESSAGE_LIMIT'			=> 'Berichtlimiet',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'	=> 'Het maximale aantal berichten dat in de chat wordt getoond.<br /><em>Aanbevolen van 10 tot 30 berichten</em>.',
	'MCHAT_MESSAGE_NUM'				=> 'Indexpagina berichtlimiet',
	'MCHAT_MESSAGE_NUM_EXPLAIN'	=> 'Het maximale aantal berichten dat in de chat wordt getoond op de indexpagina.<br /><em>Aanbevolen van 10 tot 50 berichten</em>.',
	'MCHAT_ARCHIVE_LIMIT'			=> 'Archieflimiet',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'	=> 'The maximum number of messages to show per page on the archive page.<br /> <em>Recommended from 25 to 50</em>.',
	'MCHAT_FLOOD_TIME'				=> 'Flood time',
	'MCHAT_FLOOD_TIME_EXPLAIN'		=> 'The number of seconds a user must wait before posting another message in the chat.<br /><em>Recommended 5 to 30, set to 0 to disable</em>.',
	'MCHAT_MAX_MESSAGE_LENGTH'			=> 'Max message length',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'	=> 'Max number of characters allowed per message posted.<br /><em>Recommended from 100 to 500, set to 0 to disable</em>.',
	'MCHAT_CUSTOM_PAGE'				=> 'Custom Page',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'		=> 'Allow the use of the custom page',
	'MCHAT_CUSTOM_HEIGHT'			=> 'Custom Page Height',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'	=> 'The height of the chat box in pixels on the seperate mChat page.<br /><em>You are limited from 50 to 1000</em>.',
	'MCHAT_DATE_FORMAT'				=> 'Date format',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'The syntax used is identical to the PHP <a href="http://www.php.net/date">date()</a> function.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Custom…',
	'MCHAT_WHOIS'					=> 'Whois',
	'MCHAT_WHOIS_EXPLAIN'			=> 'Allow a display of users who are chatting',
	'MCHAT_WHOIS_REFRESH'			=> 'Whois refresh',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'	=> 'Number of seconds before whois stats refreshes.<br /><em>You are limited from 30 to 300 seconds</em>.',
	'MCHAT_BBCODES_DISALLOWED'		=> 'Disallowed bbcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'	=> 'Here you can input the bbcodes that are <strong>not</strong> to be used in a message.<br />Separate bbcodes with a vertical bar, for example: <br />b|i|u|code|list|list=|flash|quote and/or a %scustom bbcode tag name%s',
	'MCHAT_STATIC_MESSAGE'			=> 'Static Message',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'	=> 'Here you can define a static message to display to users of the chat.  HTML code is allowed.<br />Set to empty to disable the display.  You are limited to 255 characters.<br /><strong>This message can be translated.</strong>  (you must edit the mchat_lang.php file and read the instructions).',
	'MCHAT_USER_TIMEOUT'			=> 'User Timeout',
	'MCHAT_USER_TIMEOUT_EXPLAIN'	=> 'Set the amount of time, in seconds, until a users session in the chat ends. Set to 0 for no timeout.<br /><em>You are limited to the %sforum config setting for sessions%s which is currently set to %s seconds</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'	=> 'Override smilie limit',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Set to yes to override the forums smilie limit setting for chat messages',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'	=> 'Override minimum characters limit',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Set to yes to override the forums minimum characters setting for chat messages',
	'MCHAT_NEW_POSTS'				=> 'Display New Posts',
	'MCHAT_NEW_POSTS_EXPLAIN'		=> 'Set to yes to allow new posts from the forum to be posted into the chat message area<br /><strong>You must have the add-on for new post notifications installed</strong> (within the contrib directory of the extension download).',
	'MCHAT_MAIN'					=> 'Main Configuration',
	'MCHAT_STATS'					=> 'Whois Chatting',
	'MCHAT_STATS_INDEX'				=> 'Stats on Index',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Show who is chatting with in the stats section of the forum',
	'MCHAT_MESSAGES'				=> 'Message Settings',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Pause on input',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'If set Yes, then the chat will not autoupdate upon a user entering a message in the input area',
	
	// error reporting
	'MCHAT_NEEDS_UPDATING'	=> 'The mChat extension needs updating.  Please have a forum founder visit this section to run the installer.',
	'MCHAT_WRONG_VERSION'	=> 'The wrong version of the extension is installed.  Please run the %sinstaller%s for the new version of the modification.',
	'WARNING'	=> 'Warning',
	'TOO_LONG_DATE'		=> 'The date format you entered is too long.',
	'TOO_SHORT_DATE'	=> 'The date format you entered is too short.',
	'TOO_SMALL_REFRESH'	=> 'The refresh value is too small.',
	'TOO_LARGE_REFRESH'	=> 'The refresh value is too large.',
	'TOO_SMALL_MESSAGE_LIMIT'	=> 'The message limit value is too small.',
	'TOO_LARGE_MESSAGE_LIMIT'	=> 'The message limit value is too large.',
	'TOO_SMALL_ARCHIVE_LIMIT'	=> 'The archive limit value is too small.',
	'TOO_LARGE_ARCHIVE_LIMIT'	=> 'The archive limit value is too large.',
	'TOO_SMALL_FLOOD_TIME'	=> 'The flood time value is too small.',
	'TOO_LARGE_FLOOD_TIME'	=> 'The flood time value is too large.',
	'TOO_SMALL_MAX_MESSAGE_LNGTH'	=> 'The max message length value is too small.',
	'TOO_LARGE_MAX_MESSAGE_LNGTH'	=> 'The max message length value is too large.',
	'TOO_SMALL_MAX_WORDS_LNGTH'	=> 'The max words length value is too small.',
	'TOO_LARGE_MAX_WORDS_LNGTH'	=> 'The max words length value is too large.',
	'TOO_SMALL_WHOIS_REFRESH'	=> 'The whois refresh value is too small.',
	'TOO_LARGE_WHOIS_REFRESH'	=> 'The whois refresh value is too large.',	
	'TOO_SMALL_INDEX_HEIGHT'	=> 'The index height value is too small.',
	'TOO_LARGE_INDEX_HEIGHT'	=> 'The index height value is too large.',
	'TOO_SMALL_CUSTOM_HEIGHT'	=> 'The custom height value is too small.',
	'TOO_LARGE_CUSTOM_HEIGHT'	=> 'The custom height value is too large.',
	'TOO_SHORT_STATIC_MESSAGE'	=> 'The static message value is too short.',
	'TOO_LONG_STATIC_MESSAGE'	=> 'The static message value is too long.',	
	'TOO_SMALL_TIMEOUT'	=> 'The user timeout value is too small.',
	'TOO_LARGE_TIMEOUT'	=> 'The user timeout value is too large.',
	'UCP_CAT_MCHAT'		=> 'mChat',
	'UCP_MCHAT_CONFIG'	=> 'mChat', //Preferences
	'LOG_MCHAT_TABLE_PRUNED'	=> 'mChat Table was pruned',
	'ACP_USER_MCHAT'			=> 'mChat Settings',
	'LOG_DELETED_MCHAT'      => '<strong>Deleted mChat message</strong><br />» %1$s',
	'LOG_EDITED_MCHAT'      => '<strong>Edited mChat message</strong><br />» %1$s',	
	'MCHAT_MESSAGE_LNGTH_EXPLAIN'   => 'Characters remaining: <span class="charsLeft error"><strong>%d</strong></span>',
	'MCHAT_TOP_POSTERS'            => 'Top Spammers',
	'MCHAT_NEW_CHAT'            => 'New Chat Message!',
	'FONT_COLOR'				=> 'Font colour',
	'FONT_COLOR_HIDE'			=> 'Hide font colour',
	'FONT_HUGE'					=> 'Huge',
	'FONT_LARGE'				=> 'Large',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Font size',
	'FONT_SMALL'				=> 'Small',
	'FONT_TINY'					=> 'Tiny',
	'MCHAT_SEND_PM'             => 'Send Private Message',
    'MCHAT_PM'                  => '(PM)',
	'MORE_SMILIES'              => 'More Smilies',
));
