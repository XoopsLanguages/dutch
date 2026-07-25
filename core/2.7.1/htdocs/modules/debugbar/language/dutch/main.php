<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: nl

define('_MD_DEBUGBAR_DEBUG', 'Debuggen');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Ingesloten bestanden');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP-versie');
define('_MD_DEBUGBAR_NONE', 'Geen');
define('_MD_DEBUGBAR_ERRORS', 'Fouten');
define('_MD_DEBUGBAR_DEPRECATED', 'Verouderd');
define('_MD_DEBUGBAR_QUERIES', 'Zoekopdrachten');
define('_MD_DEBUGBAR_BLOCKS', 'Blokken');
define('_MD_DEBUGBAR_EXTRA', 'Extra');
define('_MD_DEBUGBAR_TIMERS', 'Timers');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s kostte %s seconden om te laden.');
define('_MD_DEBUGBAR_TOTAL', 'Totaal');
define('_MD_DEBUGBAR_NOT_CACHED', 'Niet gecached');
define('_MD_DEBUGBAR_CACHED', 'Gecached (vernieuwt elke %s seconden)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(lege tekenreeks)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool WAAR');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool ONWAAR');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Databasequery\'s');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Geheugengebruik');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d zoekopdrachten');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicaten)');
define('_MD_DEBUGBAR_BYTES', '%s bytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s versie');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Foutnummer: %s Foutmelding: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Fout #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Uitzondering');
define('_MD_DEBUGBAR_RAY_QUERY', 'Zoekopdracht #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LANGZAAM');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Blokkeren (gecacht %ds)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Blokkeren (niet in cache opgeslagen)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Dumpen');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Sjablooncontext');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(geen sjabloonvariabelen)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d vars)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'Directory "modules/debugbar/%s" is niet aangemaakt');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Kan map "%s" niet aanmaken tijdens het kopiëren van middelen');
