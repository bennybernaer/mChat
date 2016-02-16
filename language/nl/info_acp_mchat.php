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
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_MCHAT_CONFIG'						=> 'Configuratie',
	'ACP_CAT_MCHAT'							=> 'mChat',
	'ACP_MCHAT_TITLE'						=> 'Mini-Chat Extensie voor phpBB 3.1',
	'ACP_MCHAT_VERSION'						=> 'Versie',
	'UCP_CAT_MCHAT'							=> 'mChat Voorkeuren',
	'UCP_MCHAT_CONFIG'						=> 'Gebruikers mChat Voorkeuren',
	
	// ACP configuration sections
	'MCHAT_SETTINGS_INDEX'					=> 'Forumoverzicht instellingen',
	'MCHAT_SETTINGS_CUSTOM'					=> 'Aangepaste pagina instellingen',
	'MCHAT_SETTINGS_ARCHIVE'				=> 'Archiefpagina instellingen',
	'MCHAT_SETTINGS_POSTS'					=> 'Nieuwe berichten instellingen',
	'MCHAT_SETTINGS_MESSAGES'				=> 'Berichten instellingen',
	'MCHAT_SETTINGS_PRUNE'					=> 'Opruim instellingen',
	'MCHAT_SETTINGS_STATS'					=> 'Wie is er aan het chatten instellingen',

	// ACP entries
	'ACP_MCHAT_RULES'				=> 'Regels',
	'ACP_MCHAT_RULES_EXPLAIN'		=> 'Voer de regels van het forum hier in. Elke regel op een nieuwe lijn. HTML code is toegestaan <em>Er is een limiet van 255 tekens.</em><br />Dit bericht kan worden vertaald: bewerk de MCHAT_RULES_MESSAGE taal code in /ext/dmzx/mchat/language/XX/common.php.',
	'LOG_MCHAT_CONFIG_UPDATE'		=> '<strong>Update mChat configuratie</strong>',
	'MCHAT_CONFIG_SAVED'			=> 'Mini Chat configuratie is bijgewerkt',
	'MCHAT_TITLE'					=> 'Mini-Chat',
	'MCHAT_AVATARS'					=> 'Toon avatars',
	'MCHAT_AVATARS_EXPLAIN'			=> 'Als je ja hebt aangevinkt, zullen verkleinde gebruikers avatars worden getoond',
	'MCHAT_ON_INDEX'				=> 'mChat tonen op de indexpagina',
	'MCHAT_INDEX_HEIGHT'			=> 'Indexpagina hoogte',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'	=> 'De hoogte van de mChat box op de indexpagina uitgedrukt in pixels, kun je hier aanpassen.<br /><em>Je bent gelimiteerd tussen de 50 en 1000</em>.',
	'MCHAT_LOCATION'				=> 'Locatie op het Forum',
	'MCHAT_TOP_OF_FORUM'			=> 'Bovenaan op het Forum',
	'MCHAT_BOTTOM_OF_FORUM'			=> 'Onderaan op het Forum',
	'MCHAT_REFRESH'					=> 'Vernieuwen'
	'MCHAT_REFRESH_EXPLAIN'			=> 'Aantal seconden dat de mChat automatische ververst wordt.<br /><em>Je bent gelimiteerd tussen 5 en 60 seconden</em>.',
	'MCHAT_LIVE_UPDATES'					=> 'Live updates van bewerkte of verwijderde berichten',
	'MCHAT_LIVE_UPDATES_EXPLAIN'			=> 'Als een gebruiker een bericht bewerkt of verwijderd, zullen de veranderen meteen zichtbaar zijn voor anderen, zonder de pagina te hoeven herladen. Schakel dit uit als je laadproblemen ondervindt.',
	'MCHAT_PRUNE'					=> 'Inschakelen opschonen van berichten',
	'MCHAT_PRUNE_EXPLAIN'			=> 'Vink Ja aan als je het opschonen van berichten wilt inschakelen.<br /><em>Werkt alleen als een gebruiker de gemaakte of archief pagina bekijkt</em>.',
	'MCHAT_PRUNE_NUM'				=> 'Het aantal berichten welke bewaard moeten worden in de mChat',
	'MCHAT_MESSAGE_LIMIT'			=> 'Berichten limiet',
	'MCHAT_MESSAGE_LIMIT_EXPLAIN'	=> 'Maximaal aantal berichten, welke getoond worden in de mChat.<br /><em>Aanbevolen is tussen de 10 en 30 berichten</em>.',
	'MCHAT_MESSAGE_NUM'				=> 'Indexpagina berichten limiet',
	'MCHAT_MESSAGE_NUM_EXPLAIN'		=> 'Het maximale aantal berichten, welke getoond worden in de mChat op de indexpagina.<br /><em>Aanbevolen is tussen de 10 en 50 berichten</em>.',
	'MCHAT_ARCHIVE_LIMIT'			=> 'Archief limiet',
	'MCHAT_ARCHIVE_LIMIT_EXPLAIN'	=> 'Het maximale aantal berichten, welke getoond worden in de mChat op de Archief pagina.<br /><em>Aanbevolen is tussen de 25 en 50 berichten</em>.',
	'MCHAT_FLOOD_TIME'				=> 'Wachttijd plaatsen volgende bericht, na reeds geplaatst bericht',
	'MCHAT_FLOOD_TIME_EXPLAIN'		=> 'Het aantal seconden dat een gebruiker moet wachten om een volgend bericht te plaatsen in de mChat.<br /><em>Aanbevolen is tussen de 5 en 30 seconden, 0 is uitschakelen van deze functie</em>.',
	'MCHAT_EDIT_DELETE_LIMIT'				=> 'De tijd om berichten te bewerken of verwijderen',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'		=> 'Berichten ouder dan het aantal seconden kunnen niet meer door de gebruiker worden bewerkt.<br />Gebruikers die <em>bewerk/verwijder permissies of moderator permissies hebben zijn uitgesloten</em> van deze tijdlimiet.<br />Zet op 0 om het bewerken/verwijderen van berichten altijd toe te staan.',
	'MCHAT_MAX_MESSAGE_LENGTH'		=> 'Maximale berichten lengte',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'	=> 'Maximaal toegestane aantal karakters per gepost bericht.<br /><em>anbevolen is tussen de 100 en 500 karakters, 0 is uitschakelen van deze functie</em>.',
	'MCHAT_CUSTOM_PAGE'				=> 'Aangepaste pagina',
	'MCHAT_CUSTOM_PAGE_EXPLAIN'		=> 'Toestaan om gebruik te maken van de mChat op de aangepaste pagina',
	'MCHAT_CUSTOM_HEIGHT'			=> 'Aangepaste pagina hoogte',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'	=> 'De hoogte van de mChat box in pixels op de aangepaste mChat pagina.<br /><em>Je bent gelimiteerd tussen de 50 en 1000 pixels</em>.',
	'MCHAT_DATE_FORMAT'				=> 'Datum weergave',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'De gebruikte syntax is identiek aan de PHP <a href="http://www.php.net/date">date()</a> functie.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Aangepast…',
	'MCHAT_BBCODES_DISALLOWED'				=> 'Verboden bbcodes',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'	=> 'Hier kun je de bbcodes plaatsen, die <strong>niet</strong>zijn toegstaan<strong>not</strong> om te gebruiken in een bericht.<br />Aparte BBCodes met een verticale balk , bijvoorbeeld: <br />b|i|u|code|list|list=|flash|quote and/or a %scustom bbcode tag name%s',
	'MCHAT_STATIC_MESSAGE'			=> 'Statisch bericht',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'	=> 'Hier kan je een statisch bericht definieren, welke getoond wordt aan de gebruikers van de mChat.<br />Stel 0 in om de vertoning uit te schakelen.  Je bent gelimiteerd tot 255 karakters.<br /><strong>Deze boodschap kan worden vertaald..</strong> (Je moet de mchat_lang.php file aanpassen en lees de instructies).',
	'MCHAT_USER_TIMEOUT'			=> 'Gebruiker timeout',
	'MCHAT_USER_TIMEOUT_EXPLAIN'	=> 'Stel hier de seconden in, wanneer de sessie van een gebruiker eindigd. Stel 0 om de timeout uit te schakelen.<br /><em>Je bent gelimiteerd tot de %sforum instellingen voor de chat sessie, welke momenteel is ingesteld op %s seconden</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'	=> 'Aantal smilie limiet',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'	=> 'Stel hier het aantal smilie limiet in voor de chat berichten',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'	=> 'Minimum karakters limit',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'	=> 'Stel ja in om het aantal minimum karakters in te stellen voor een chat bericht',
	'MCHAT_NEW_POSTS_TOPIC'				=> 'Toon nieuwe berichten',
	'MCHAT_NEW_POSTS_TOPIC_EXPLAIN'		=> 'Stel ja in om nieuwe berichten te plaatsen in een chat bericht<br /><strong>Je moet de add-on voor de nieuwe post meldingen geïnstalleerd hebben</strong> (binnen de directory van de download voor deze extensie).',
	'MCHAT_NEW_POSTS_REPLY'					=> 'Toon nieuwe berichten',
	'MCHAT_NEW_POSTS_REPLY_EXPLAIN'			=> 'Allow replies from the forum to be posted in the chat.',
	'MCHAT_NEW_POSTS_EDIT'					=> 'Toon bewerkte berichten',
	'MCHAT_NEW_POSTS_EDIT_EXPLAIN'			=> 'Sta toe dat bewerkte berichten uit het forum worden geplaatst in de chat.',
	'MCHAT_NEW_POSTS_QUOTE'					=> 'Toon gequote berichten',
	'MCHAT_NEW_POSTS_QUOTE_EXPLAIN'			=> 'Sta toe dat quotes uit berichten uit het forum worden geplaats in de chat.',

	'MCHAT_WHOIS'							=> 'Toon <em>Wie is aan het chatten</em> onder de chat',
	'MCHAT_STATS_INDEX'				=> 'Statistieken op de indexpagina tonen',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Laat zien wie aan het chatten is in de statistieken sectie op het forum',
	'MCHAT_WHOIS_REFRESH'					=> 'Wie is aan het chatten herlaad interval',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'			=> 'Aantal seconden voordat wie is aan het chatten herlaad.<br /><em>Er is een limiet van 30 tot 300 seconds.</em>',
	'MCHAT_MESSAGE_TOP'						=> 'Locatie van nieuwe berichten',
	'MCHAT_MESSAGE_TOP_EXPLAIN'				=> 'Nieuwe berichten worden getoond boven of onder in de chat.',
	'MCHAT_BOTTOM'							=> 'Onder',
	'MCHAT_TOP'								=> 'Boven',
	'MCHAT_PAUSE_ON_INPUT'					=> 'Pauzeer bij input',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'			=> 'Herlaad de chat niet als de gebruiker een bericht schrijft',
	'MCHAT_PURGE'							=> 'Verwijder nu alle berichten',
	'MCHAT_PURGE_CONFIRM'					=> 'Bevestig het verwijderen van alle berichten',
	'MCHAT_PURGED'							=> 'Alle mini-chat berichten zijn succesvol verwijderd',

	// Error reporting
	'TOO_SMALL_MCHAT_ARCHIVE_LIMIT'			=> 'De achrief limiet waarde is te klein.',
	'TOO_LARGE_MCHAT_ARCHIVE_LIMIT'			=> 'De archief limiet waarde is te groot.',
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'		=> 'De geweigerde bbcodes waarde is te lang.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'			=> 'De aangepaste hoogte waarde is te klein.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'			=> 'De aangepaste hoogte waarde is te groot.',
	'TOO_LONG_MCHAT_DATE'					=> 'Het datumformaat dat je hebt ingevuld is te lang.',
	'TOO_SHORT_MCHAT_DATE'					=> 'Het datumformaat dat je hebt ingevuld is te kort.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'			=> 'De opruim tijd waarde is te klein.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'			=> 'De opruim tijd waarde is te groot.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'			=> 'De index hoogte waarde is te klein.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'			=> 'De index hoogte waarde is te groot.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'		=> 'De max berichten lengte waarde is te klein.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'		=> 'De max berichten lengte waarde is te groot.',
	'TOO_SMALL_MCHAT_MESSAGE_LIMIT'			=> 'De bericht limiet waarde is te klein.',
	'TOO_LARGE_MCHAT_MESSAGE_LIMIT'			=> 'De bericht limiet waarde is te groot.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM'			=> 'Het aantal weer te geven berichten op de indexpagina is te klein.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM'			=> 'Het aantla weer te geven berichten op de indexpagina is te groot.',
	'TOO_SMALL_MCHAT_REFRESH'				=> 'De herlaad waarde is te klein.',
	'TOO_LARGE_MCHAT_REFRESH'				=> 'De herlaad waarde is te groot.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'			=> 'De statisch bericht waarde is te lang.',
	'TOO_SMALL_MCHAT_TIMEOUT'				=> 'De gebruikerstime-out waarde is te kort',
	'TOO_LARGE_MCHAT_TIMEOUT'				=> 'De gebruikerstime-out waarde is te lang.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'			=> 'De whois herlaad waarde is te klein.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'			=> 'De whois herlaad waarde is te groot.',

	// User perms
	'ACL_U_MCHAT_USE'			=> 'Je kunt mChat gebruiken',
	'ACL_U_MCHAT_VIEW'			=> 'Je kunt mChat bekijken',
	'ACL_U_MCHAT_EDIT'			=> 'Je kunt mchat berichten bewerken',
	'ACL_U_MCHAT_DELETE'			=> 'Je kunt mChat berichten verwijderen',
	'ACL_U_MCHAT_IP'			=> 'Je kunt mChat IP adressen bekijken',
	'ACL_U_MCHAT_PM'			=> 'Kan gebruik maken van privéberichten',
	'ACL_U_MCHAT_LIKE'			=> 'Kan berichten leuk vinden',
	'ACL_U_MCHAT_QUOTE'			=> 'Kan berichten quoten',
	'ACL_U_MCHAT_FLOOD_IGNORE'		=> 'Je kunt mChat de hoeveelheid aan data negeren',
	'ACL_U_MCHAT_ARCHIVE'			=> 'Je kunt het archief van mChat bekijken',
	'ACL_U_MCHAT_BBCODE'			=> 'Je kunt de bbcode in mChat gebruiken',
	'ACL_U_MCHAT_SMILIES'			=> 'Je kunt de smilies in mChat gebruiken',
	'ACL_U_MCHAT_URLS'			=> 'Je kunt urls posten in mChat',
	
	// Admin perms
	'ACL_A_MCHAT'				=> array('lang' => 'Kan mChat instellingen beheren', 'cat' => 'permissions'), // Using a phpBB category here
));
