<?php
// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS fysieke paden');
define('LEGEND_DATABASE', 'Databasetekenset');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS bibliotheekmap');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS map met gegevensbestanden');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', 'Databasetekenset en sortering');
define('DB_COLLATION_HELP', "Vanaf 4.12 ondersteunt MySQL aangepaste tekensets en sortering. Het is echter complexer dan verwacht, dus breng GEEN wijzigingen aan tenzij u zeker bent van uw keuze.");
define('DB_COLLATION_NOCHANGE', 'Niet wijzigen');

define('XOOPS_PATH_FOUND', 'Pad gevonden.');
define('ERR_COULD_NOT_ACCESS', 'Kon geen toegang krijgen tot de opgegeven map. Controleer of deze bestaat en leesbaar is voor de server.');
define('CHECKING_PERMISSIONS', 'Bestands- en maprechten controleren...');
define('ERR_NEED_WRITE_ACCESS', 'De server moet schrijftoegang krijgen tot de volgende bestanden en map<br>(d.w.z. <em>chmod 777 mapnaam</em> op een UNIX/LINUX-server)');
define('IS_NOT_WRITABLE', '%s is NIET beschrijfbaar.');
define('IS_WRITABLE', '%s is beschrijfbaar.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Fout bij het schrijven van inhoud naar mainfile.php. Schrijf de inhoud handmatig naar mainfile.php.');
