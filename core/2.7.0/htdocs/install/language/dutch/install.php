<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Help-tekst tonen/verbergen');
// License
//define('LICENSE_NOT_WRITEABLE', 'Licentiebestand "%s" is NIET beschrijfbaar!');
//define('LICENSE_IS_WRITEABLE', '%s Licentie is beschrijfbaar.');
// Configuration check page
define('SERVER_API', 'Server-API');
define('PHP_EXTENSION', '%s extensie');
define('CHAR_ENCODING', 'Tekencodering');
define('XML_PARSING', 'XML-verwerking');
define('REQUIREMENTS', 'Vereisten');
define('_PHP_VERSION', 'PHP versie');
define('RECOMMENDED_SETTINGS', 'Aanbevolen instellingen');
define('RECOMMENDED_EXTENSIONS', 'Aanbevolen extensies');
define('SETTING_NAME', 'Instellingsnaam');
define('RECOMMENDED', 'Aanbevolen');
define('CURRENT', 'Huidig');
define('RECOMMENDED_EXTENSIONS_MSG', 'Deze extensies zijn niet vereist voor normaal gebruik, maar kunnen nodig zijn om
 enkele specifieke functies te verkennen (zoals de meertalige of RSS-ondersteuning). Het wordt daarom aanbevolen om ze te laten installeren.');
define('NONE', 'Geen');
define('SUCCESS', 'Succes');
define('WARNING', 'Waarschuwing');
define('FAILED', 'Mislukt');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS installatiewizard');
define('LANGUAGE_SELECTION', 'Taalkeuze');
define('LANGUAGE_SELECTION_TITLE', 'Selecteer uw taal');        // L128
define('INTRODUCTION', 'Introductie');
define('INTRODUCTION_TITLE', 'Welkom bij de XOOPS installatiewizard');        // L0
define('CONFIGURATION_CHECK', 'Configuratiecontrole');
define('CONFIGURATION_CHECK_TITLE', 'Uw serverconfiguratie controleren');
define('PATHS_SETTINGS', 'Paginstellingen');
define('PATHS_SETTINGS_TITLE', 'Paginstellingen');
define('DATABASE_CONNECTION', 'Databaseverbinding');
define('DATABASE_CONNECTION_TITLE', 'Databaseverbinding');
define('DATABASE_CONFIG', 'Databaseconfiguratie');
define('DATABASE_CONFIG_TITLE', 'Databaseconfiguratie');
define('CONFIG_SAVE', 'Configuratie opslaan');
define('CONFIG_SAVE_TITLE', 'Uw systeemconfiguratie opslaan');
define('TABLES_CREATION', 'Tabellen aanmaken');
define('TABLES_CREATION_TITLE', 'Database tabellen aanmaken');
define('INITIAL_SETTINGS', 'Initiële instellingen');
define('INITIAL_SETTINGS_TITLE', 'Voer uw initiële instellingen in');
define('DATA_INSERTION', 'Gegevens invoegen');
define('DATA_INSERTION_TITLE', 'Uw instellingen opslaan in de database');
define('WELCOME', 'Welkom');
define('WELCOME_TITLE', 'Welkom op uw XOOPS-site');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS fysieke paden');
define('XOOPS_URLS', 'Weblocaties');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS documenteert het fysieke rootpad');
define('XOOPS_ROOT_PATH_HELP', 'Fysiek pad naar de map XOOPS documenten (geleverd) ZONDER afsluitende slash');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotheekmap');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS map met gegevensbestanden');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', 'Websitelocatie (URL)'); // L56
define('XOOPS_URL_HELP', 'Hoofd-URL dat wordt gebruikt om toegang te krijgen tot uw XOOPS-installatie'); // L58
define('LEGEND_CONNECTION', 'Serververbinding');
define('LEGEND_DATABASE', 'Database'); // L51
define('DB_HOST_LABEL', 'Serverhostnaam');    // L27
define('DB_HOST_HELP', 'Hostnaam van de databaseserver. Als u het niet zeker weet, werkt <em>localhost</em> in de meeste gevallen'); // L67
define('DB_USER_LABEL', 'Gebruikersnaam');    // L28
define('DB_USER_HELP', 'Naam van het gebruikersaccount dat zal worden gebruikt om verbinding te maken met de databaseserver'); // L65
define('DB_PASS_LABEL', 'Wachtwoord');    // L52
define('DB_PASS_HELP', 'Wachtwoord van uw databasegebruikersaccount'); // L68
define('DB_NAME_LABEL', 'Databasenaam');    // L29
define('DB_NAME_HELP', 'De naam van de database op de host. Het installatieprogramma zal proberen de database te maken als deze niet bestaat'); // L64
define('DB_CHARSET_LABEL', 'Database tekenset');
define('DB_CHARSET_HELP', 'MySQL bevat ondersteuning voor tekensets waarmee u gegevens kunt opslaan met behulp van verschillende tekensets en vergelijkingen kunt uitvoeren op basis van verschillende sorteringen.');
define('DB_COLLATION_LABEL', 'Database sortering');
define('DB_COLLATION_HELP', 'Een sortering is een set regels voor het vergelijken van tekens in een tekenset.');
define('DB_PREFIX_LABEL', 'Tabelprefix');    // L30
define('DB_PREFIX_HELP', 'Dit voorvoegsel wordt toegevoegd aan alle nieuwe tabellen die worden gemaakt om naamconflicten in de database te voorkomen. Als u het niet zeker weet, kunt u gewoon de standaardwaarde behouden'); // L63
define('DB_PCONNECT_LABEL', 'Permanente verbinding gebruiken');    // L54
define('DB_PCONNECT_HELP', "Standaard is 'Nee'. Laat het leeg als u het niet zeker weet"); // L69
define('DB_DATABASE_LABEL', 'Database');
define('LEGEND_ADMIN_ACCOUNT', 'Beheerdersaccount');
define('ADMIN_LOGIN_LABEL', 'Beheerder login'); // L37
define('ADMIN_EMAIL_LABEL', 'Beheerder e-mail'); // L38
define('ADMIN_PASS_LABEL', 'Beheerderswachtwoord'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Wachtwoord bevestigen'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Vorige'); // L42
define('BUTTON_NEXT', 'Doorgaan'); // L47
// Messages
define('XOOPS_FOUND', '%s gevonden');
define('CHECKING_PERMISSIONS', 'Bestands- en maprechten controleren...'); // L82
define('IS_NOT_WRITABLE', '%s is NIET beschrijfbaar.'); // L83
define('IS_WRITABLE', '%s is beschrijfbaar.'); // L84
define('XOOPS_PATH_FOUND', 'Pad gevonden.');
//define('READY_CREATE_TABLES', 'Er zijn geen XOOPS-tabellen gedetecteerd.<br>Het installatieprogramma is nu klaar om de XOOPS-systeemtabellen te maken.');
define('XOOPS_TABLES_FOUND', 'De XOOPS systeemtabellen bestaan al in uw database.'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS systeemtabellen zijn aangemaakt.');
//define('READY_INSERT_DATA', 'Het installatieprogramma is nu klaar om de eerste gegevens in uw database in te voegen.');
//define('READY_SAVE_MAINFILE', 'Het installatieprogramma is nu klaar om de opgegeven instellingen op te slaan in <em>mainfile.php</em>.');
define('SAVED_MAINFILE', 'Instellingen opgeslagen');
define('SAVED_MAINFILE_MSG', 'Het installatieprogramma heeft de opgegeven instellingen opgeslagen in <em>mainfile.php</em> en <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'XOOPS gegevens gevonden in database.');
define('DATA_INSERTED', 'Initiële gegevens zijn ingevoerd in de database.');
// %s is database name
define('DATABASE_CREATED', 'Database %s aangemaakt!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Kan tabel %s niet maken'); // L118
define('TABLE_CREATED', 'Tabel %s aangemaakt.'); // L45
define('ROWS_INSERTED', '%d gegevens ingevoegd in tabel %s.'); // L119
define('ROWS_FAILED', 'Het invoegen van %d gegevens in tabel %s is mislukt.'); // L120
define('TABLE_ALTERED', 'Tabel %s bijgewerkt.'); // L133
define('TABLE_NOT_ALTERED', 'Het bijwerken van tabel %s is mislukt.'); // L134
define('TABLE_DROPPED', 'Tabel %s verwijderd.'); // L163
define('TABLE_NOT_DROPPED', 'Het verwijderen van tabel %s is mislukt.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Kon geen toegang krijgen tot de opgegeven map. Controleer of deze bestaat en leesbaar is voor de server.');
define('ERR_NO_XOOPS_FOUND', 'Er kon geen XOOPS-installatie worden gevonden in de opgegeven map.');
define('ERR_INVALID_EMAIL', 'Ongeldig e-mailadres'); // L73
define('ERR_REQUIRED', 'Informatie is vereist.'); // L41
define('ERR_PASSWORD_MATCH', 'De twee wachtwoorden komen niet overeen');
define('ERR_NEED_WRITE_ACCESS', 'De server moet schrijftoegang krijgen tot de volgende bestanden en mappen<br>(d.w.z. <em>chmod 775 mapnaam</em> op een UNIX/LINUX-server)<br>Als ze niet beschikbaar zijn of niet correct zijn aangemaakt, maak dan handmatig een map aan en stel de juiste machtigingen in.');
define('ERR_NO_DATABASE', 'Kan database niet aanmaken. Neem contact op met de serverbeheerder voor meer informatie.'); // L31
define('ERR_NO_DBCONNECTION', 'Kan geen verbinding maken met de databaseserver.'); // L106
define('ERR_WRITING_CONSTANT', 'Het schrijven van constante %s is mislukt.'); // L122
define('ERR_COPY_MAINFILE', 'Kon het distributiebestand niet kopiëren naar %s');
define('ERR_WRITE_MAINFILE', 'Kan niet schrijven naar %s. Controleer de bestandsrechten en probeer het opnieuw.');
define('ERR_READ_MAINFILE', 'Kon %s niet openen om te lezen');
define('ERR_INVALID_DBCHARSET', "De tekenset '%s' wordt niet ondersteund.");
define('ERR_INVALID_DBCOLLATION', "De sortering '%s' wordt niet ondersteund.");
define('ERR_CHARSET_NOT_SET', 'De standaardtekenset is niet ingesteld voor de XOOPS-database.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Ondersteuning');
define('LOGIN', 'Authenticatie');
define('LOGIN_TITLE', 'Authenticatie');
define('USER_LOGIN', 'Beheerderslogin');
define('USERNAME', 'Gebruikersnaam:');
define('PASSWORD', 'Wachtwoord :');
define('ICONV_CONVERSION', 'Tekensetconversie');
define('ZLIB_COMPRESSION', 'Zlib-compressie');
define('IMAGE_FUNCTIONS', 'Beeldfuncties');
define('IMAGE_METAS', 'Metagegevens van afbeeldingen (exif)');
define('FILTER_FUNCTIONS', 'Filterfuncties');
define('ADMIN_EXIST', 'Het beheerdersaccount bestaat al.');
define('CONFIG_SITE', 'Siteconfiguratie');
define('CONFIG_SITE_TITLE', 'Siteconfiguratie');
define('MODULES', 'Module-installatie');
define('MODULES_TITLE', 'Module-installatie');
define('THEME', 'Thema selecteren');
define('THEME_TITLE', 'Selecteer het standaardthema');
define('INSTALLED_MODULES', 'De volgende modules zijn geïnstalleerd.');
define('NO_MODULES_FOUND', 'Geen modules gevonden.');
define('NO_INSTALLED_MODULES', 'Geen module geïnstalleerd.');
define('THEME_NO_SCREENSHOT', 'Geen schermafbeelding gevonden');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Wachtwoordsterkte');
define('PASSWORD_DESC', 'Wachtwoord niet ingevoerd');
define('PASSWORD_GENERATOR', 'Wachtwoordgenerator');
define('PASSWORD_GENERATE', 'Genereren');
define('PASSWORD_COPY', 'Kopiëren');
define('PASSWORD_VERY_WEAK', 'Zeer zwak');
define('PASSWORD_WEAK', 'Zwak');
define('PASSWORD_BETTER', 'Beter');
define('PASSWORD_MEDIUM', 'Gemiddeld');
define('PASSWORD_STRONG', 'Sterk');
define('PASSWORD_STRONGEST', 'Sterkst');
//2.5.7
define('WRITTEN_LICENSE', 'schreef XOOPS %s Licentiecode: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Opnieuw proberen');
define('CHMOD_CHGRP_IGNORE', 'Toch gebruiken');
define('CHMOD_CHGRP_ERROR', 'Het installatieprogramma kan mogelijk het configuratiebestand %1$s.<p>PHP niet schrijven onder gebruiker %2$s en groep %3$s.<p>De directory %4$s/ bevat gebruiker %5$s en groep %6$s');
//2.5.9
define("CURL_HTTP", "Klant URL Bibliotheek (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Cookiedomein voor de website');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domein om cookies in te stellen. Mag leeg zijn, de volledige host van URL (www.example.com) of het geregistreerde domein zonder subdomeinen (example.com) om te delen tussen subdomeinen (www.example.com en blog.example.com).');
define('INTL_SUPPORT', 'Internationaliseringsfuncties');
define('XOOPS_SOURCE_CODE', "XOOPS op GitHub");
define('XOOPS_INSTALLING', 'Installeren');
define('XOOPS_ERROR_ENCOUNTERED', 'Fout');
define('XOOPS_ERROR_SEE_BELOW', 'Zie hieronder voor berichten.');
define('MODULES_AVAILABLE', 'Beschikbare modules');
define('INSTALL_THIS_MODULE', '%s toevoegen');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Kon het configuratiebestand %s niet kopiëren');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS Site');
define('_WEBSITE_SLOGAN', 'Gebruik het gewoon!');
define('_WEBSITE_META_KEYWORDS', 'xoops, webapplicatieframework, cms, contentmanagementsysteem');
define('_WEBSITE_FOOTER', "Mogelijk gemaakt door XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>Het XOOPS-project</a>");
define('_WEBSITE_COPYRIGHT', 'Auteursrecht © 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS is een dynamisch objectgeoriënteerd gebaseerd open source portalscript geschreven in PHP.');
define('_WEBSITE_CENSOR_REPLACE', 'OOPS');
