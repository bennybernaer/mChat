<?php

/**
*
* @package phpBB Extension - mChat
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Dutch translation by Dutch Translators (https://github.com/dutch-translators)
*
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
	'MCHAT_TITLE'				=> 'Mini-Chat',
	'MCHAT_ADD'					=> 'Versturen',
	'MCHAT_ANNOUNCEMENT'		=> 'Aankondiging',
	'MCHAT_ARCHIVE'				=> 'Archief',
	'MCHAT_ARCHIVE_PAGE'		=> 'Mini-Chat Archief',
	'MCHAT_BBCODES'				=> 'BBCodes',
	'MCHAT_CUSTOM_BBCODES'		=> 'gebruik BBCodes',
	'MCHAT_DELCONFIRM'			=> 'Ben je akkoord om te verwijderen?',
	'MCHAT_EDIT'					=> 'Bewerk',
	'MCHAT_EDITINFO'				=> 'Bewerk het bericht en klik op OK',
	'MCHAT_FLOOD'					=> 'Je kunt niet zo snel achter elkaar een bericht plaatsen',
	'MCHAT_FOE'					=> 'Dit bericht was gemaakt door <strong>%1$s</strong> die momenteel op jouw negeerlijst staat.',
	'MCHAT_HELP'				=> 'Regels',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d uur',
		2 => '%1$d uren',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d minuut',
		2 => '%1$d minuten',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d seconde',
		2 => '%1$d seconden',
	),
	'MCHAT_IP'					=> 'IP whois voor %1$s',
	'MCHAT_MESS_LONG'			=> 'Jouw bericht is te lang. Beperk dit a.u.b. tot %1$d karakters',
	'MCHAT_NO_CUSTOM_PAGE'		=> 'De aangepaste mChat pagina is niet actief op dit moment!',
	'MCHAT_NO_RULES'				=> 'De mChat regels pagina is niet achtief op dit moment!',
	'MCHAT_NOACCESS'				=> 'Je hebt geen permissie om een bericht in de mChat te plaatsen',
	'MCHAT_NOACCESS_ARCHIVE'	=> 'Je hebt geen permissie om het archief te bekijken',
	'MCHAT_NOJAVASCRIPT'		=> 'Je browser ondersteunt geen JavaScript of JavaScript is uitgeschakeld',
	'MCHAT_NOMESSAGE'			=> 'Geen berichten',
	'MCHAT_NOMESSAGEINPUT'		=> 'Je hebt geen bericht ingevoerd',
	'MCHAT_NOSMILE'				=> 'Smilies zijn niet gevonden',
	'MCHAT_OK'					=> 'OK',
	'MCHAT_PAUSE'				=> 'Pauze',
	'MCHAT_PERMISSIONS'			=> 'Verander gebruikers permissie',
	'MCHAT_REFRESHING'			=> 'Verversen...',
	'MCHAT_REFRESH_NO'			=> 'Verversen is uit',
	'MCHAT_REFRESH_YES'			=> 'Ververs iedere <strong>%1$d</strong> seconden',
	'MCHAT_RESPOND'				=> 'Reageer naar gebruiker',
	'MCHAT_RESET_QUESTION'		=> 'Schoon het ingave veld op?',
	'MCHAT_SESSION_OUT'			=> 'Chat sessie is verlopen',

	'MCHAT_SESSION_ENDS'		=> 'Chat sessie eindigdt in',
	'MCHAT_SMILES'				=> 'Smilies',
	'MCHAT_TOTALMESSAGES'		=> 'Totaal aantal berichten: <strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> 'Gebruik geluid',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Niemand is aan het chatten',
		1 => 'In totaal is er <strong>%1$d</strong> gebruiker aan het chatten',
		2 => 'In totaal zijn er <strong>%1$d</strong> gebruikers aan het chatten',
	),
	'MCHAT_ONLINE_EXPLAIN'				=> 'gebaseerd op actieve gebruikers over de afgelopen %1$s',
	'WHO_IS_CHATTING'			=> 'Wie is aan het chatten',
	'WHO_IS_REFRESH_EXPLAIN'	=> 'ververst iedere <strong>%d</strong> seconden',
	'MCHAT_NEW_POST'				=> 'Heeft een onderwerp geplaatst: %1$s in %2$s',
	'MCHAT_NEW_REPLY'				=> 'Heeft een bericht geplaatst: %1$s in %2$s',
	'MCHAT_NEW_QUOTE'				=> 'Heeft gerageerd met een quote: %1$s in %2$s',
	'MCHAT_NEW_EDIT'				=> 'Heeft een bericht bewerkt: %1$s in %2$s',
	
	// UCP
	'UCP_PROFILE_MCHAT'	=> 'mChat voorkeuren',
	'DISPLAY_MCHAT' 	=> 'Toon mChat op de index pagina',
	'SOUND_MCHAT'		=> 'Inschakelen geluid mChat',
	'DISPLAY_STATS_INDEX'	=> 'Toon de wie is er aan het chatten op de index pagina',
	'DISPLAY_NEW_TOPICS'	=> 'Toon nieuwe topics in de chat',
	'DISPLAY_AVATARS'	=> 'Toon avatars in de chat',
	'CHAT_AREA'		=> 'Invoer type',
	'CHAT_AREA_EXPLAIN'				=> 'Het type veld dat gebruikt wordt om berichten in te schrijven',
	'INPUT_AREA'					=> 'Input veld',
	'TEXT_AREA'						=> 'Tekst gebied',
	'UCP_CAT_MCHAT'		=> 'mChat',
	'UCP_MCHAT_CONFIG'	=> 'mChat',
	
	//Preferences
	'LOG_MCHAT_TABLE_PRUNED'	=> 'mChat tabellen zijn geleegd',
	'ACP_USER_MCHAT'			=> 'mChat Instellingen',
	'LOG_DELETED_MCHAT'	  => '<strong>Verwijder mChat berichten</strong><br />» %1$s',
	'LOG_EDITED_MCHAT'	  => '<strong>Bewerk mChat berichten</strong><br />» %1$s',
	'MCHAT_NEW_CHAT'				=> 'Nieuw chatbericht!',
	'MCHAT_SEND_PM'					=> 'Stuur privébericht',
	'MCHAT_LIKE'					=> 'Vind dit bericht leuk',
	'MCHAT_LIKES'					=> 'Vindt dit bericht leuk',
	
	// Custom translations for administrators
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
