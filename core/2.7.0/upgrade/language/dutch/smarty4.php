<?php

// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4-migratie');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Scannerresultaten');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Scan uitvoeren');
define('_XOOPS_SMARTY4_SCANNER_END', 'Sluit scanner af');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regel');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Overeenkomst');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Bestand');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Aantal reparaties');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Handmatige beoordeling vereist');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Kan automatisch worden aangepast: elke itemvariabele wordt hernoemd door "_item" toe te voegen (bijv. "foo" wordt "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Niet beschrijfbaar');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opties voor opnieuw scannen');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Klik op het selectievakje "Ja" hieronder en klik vervolgens op de knop Scan uitvoeren om te proberen eventuele gevonden problemen automatisch op te lossen.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Markeer als voltooid');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Sjabloonmap (optioneel)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Sjabloonextensie (optioneel)');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduceert een belangrijke verandering: Smarty 4</h3>

<p>Helaas kan deze verandering mogelijk enkele oudere thema's verstoren. Zorg er daarom voor dat u deze stappen volgt voordat u doorgaat met de upgrade:

<li>Voer preflight.php uit om te controleren op verouderde thema's of modulesjablonen.</li>
<li>Als er problemen worden vastgesteld, raadpleeg dan dit document om inzicht te krijgen in de noodzakelijke wijzigingen voordat u doorgaat met de upgrade.</li>
<li>Nadat u de vereiste wijzigingen heeft aangebracht, voert u preflight.php opnieuw uit.</li>
<li>Als er geen problemen meer zijn, kunt u het upgradeproces starten.</li>
</p>
EOT,
);
