<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: nl

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Foutrapportage en prestatieanalyse met PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'DebugBar weergeven');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Smarty Debug inschakelen');
define('_MI_DEBUGBAR_FILESDEBUG', 'Tabblad ingesloten bestanden inschakelen');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Toon alle PHP-bestanden die tijdens het verzoek zijn geladen');
define('_MI_DEBUGBAR_SLOWQUERY', 'Drempelwaarde trage query (seconden)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Query\'s trager dan dit worden rood gemarkeerd (bijv. 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Query-logboek');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Alle query\'s of alleen trage query\'s en fouten');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Alle query\'s');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Alleen traag en fouten');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Ray-integratie inschakelen');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Debug-gegevens naar de Ray-app sturen');

define('_MI_DEBUGBAR_ADMENU1', 'Start');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Over');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Terug naar beheer van ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Overzicht');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Disclaimer');
\define('_MI_DEBUGBAR_LICENSE', 'Licentie');
\define('_MI_DEBUGBAR_SUPPORT', 'Ondersteuning');
