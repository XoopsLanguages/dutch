<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Machtigingen');
define('_MD_A_MYMENU_MYPREFERENCES','Voorkeuren');
// index.php
define('_AM_TH_DATETIME', 'Tijd');
define('_AM_TH_USER', 'Gebruiker');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Typ');
define('_AM_TH_DESCRIPTION', 'Beschrijving');
define('_AM_TH_BADIPS','Slechte IP\'s<br><br><span style="font-weight:normal;">Schrijf elke IP een regel<br>leeg betekent dat alle IP\'s zijn toegestaan</span>');
define('_AM_TH_GROUP1IPS','Toegestane IP\'s voor groep=1<br><br><span style="font-weight:normal;">Schrijf elke IP een regel.<br>192.168. betekent 192.168.*<br>blank betekent dat alle IP\'s zijn toegestaan</span>');
define('_AM_LABEL_COMPACTLOG', 'Compact logboek');
define('_AM_BUTTON_COMPACTLOG', 'Comprimeren!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Gedupliceerde (IP,Type) records worden verwijderd');
define('_AM_LABEL_REMOVEALL', 'Alle records verwijderen');
define('_AM_BUTTON_REMOVEALL', 'Alles verwijderen!');
define('_AM_JS_REMOVEALLCONFIRM', 'Alle logs worden absoluut verwijderd. Gaat het echt goed met je?');
define('_AM_LABEL_REMOVE', 'Verwijder de aangevinkte records:');
define('_AM_BUTTON_REMOVE', 'Verwijderen!');
define('_AM_JS_REMOVECONFIRM', 'Verwijderen OK?');
define('_AM_MSG_IPFILESUPDATED', 'Bestanden voor IP\'s zijn bijgewerkt');
define('_AM_MSG_BADIPSCANTOPEN', 'Het bestand voor slechte IP kan niet worden geopend');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Het bestand voor het toestaan van groep=1 kan niet worden geopend');
define('_AM_MSG_REMOVED', 'Records zijn verwijderd');
define('_AM_MSG_DELFAILED', 'Het verwijderen van records is niet gelukt');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Maak de map configs schrijfbaar: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Voorvoegselbeheer');
define('_AM_MSG_DBUPDATED', 'Database succesvol bijgewerkt!');
define('_AM_CONFIRM_DELETE', 'Alle gegevens worden verwijderd. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Als u het voorvoegsel wilt wijzigen, <br> bewerk %s/data/secure.php handmatig.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Niet beveiligd');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Als u een afbeelding -NG- ziet of als de link terugkeert naar de normale pagina, is uw XOOPS_TRUST_PATH niet correct geplaatst. De beste plaats voor XOOPS_TRUST_PATH is buiten DocumentRoot. Als je dat niet kunt doen, moet je .htaccess (DENY FROM ALL) net onder XOOPS_TRUST_PATH plaatsen als de op een na beste manier.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Controleer of PHP bestanden in TRUST_PATH zijn ingesteld op alleen-lezen (de fout moet een 404,403- of 500-fout zijn)');
define('_AM_ADV_REGISTERGLOBALS',"Indien 'AAN', nodigt deze instelling uit tot een verscheidenheid aan injecterende aanvallen. Als je kunt, zet dan 'register_globals off' in php.ini, of als dat niet mogelijk is, maak of bewerk dan .htaccess in je XOOPS directory:");
define('_AM_ADV_ALLOWURLFOPEN',"Als deze instelling 'AAN' staat, kunnen aanvallers willekeurige scripts uitvoeren op externe servers.<br>Alleen de beheerder kan deze optie wijzigen.<br>Als u een beheerder bent, bewerkt u php.ini of httpd.conf.<br><b>Voorbeeld van httpd.conf:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Anders kunt u het claimen bij uw beheerders.");
define('_AM_ADV_USETRANSSID',"Indien 'AAN', wordt uw sessie-ID weergegeven in ankertags enz.<br>Om het kapen van sessies te voorkomen, voegt u een regel toe aan .htaccess in XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Deze instelling nodigt uit tot 'SQL-injecties'.<br>Vergeet niet om 'Force sanitizing *' AAN te zetten in de voorkeuren van deze module.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Ga naar prefixbeheer');
define('_AM_ADV_MAINUNPATCHED', 'Je moet je hoofdbestand.php bewerken zoals geschreven in README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Uw databasefactory is klaar voor DBLayer Trapping anti-SQL-injectie');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Uw databasefactory is niet gereed voor DBLayer Trapping anti-SQL-Injection. Sommige patches zijn vereist.');
define('_AM_ADV_SUBTITLECHECK', 'Controleer of Protector goed werkt');
define('_AM_ADV_CHECKCONTAMI', 'Besmetting');
define('_AM_ADV_CHECKISOCOM', 'Geïsoleerde opmerkingen');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'en plaats daarin de onderstaande regel:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Voorvoegsel');
define('_AM_PROTECTOR_TABLES', 'Tabellen');
define('_AM_PROTECTOR_UPDATED', 'Bijgewerkt');
define('_AM_PROTECTOR_COPY', 'Kopiëren');
define('_AM_PROTECTOR_ACTIONS', 'Acties');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Verbied de IP\'s op gecontroleerde records:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Verboden!');
define('_AM_JS_BANCONFIRM', 'IP Banen oké?');
define('_AM_MSG_BANNEDIP', 'IP\'s zijn geblokkeerd');
define('_AM_ADMINSTATS_TITLE', 'Protector logboeksamenvatting');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Vorige maand');
define('_AM_ADMINSTATS_LAST_WEEK', 'Vorige week');
define('_AM_ADMINSTATS_LAST_DAY', 'Laatste dag');
define('_AM_ADMINSTATS_LAST_HOUR', 'Laatste uur');
