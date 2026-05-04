<?php

// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Upgradeprogramma</h2>

<p>
<em>Upgraden</em> zal deze XOOPS-installatie onderzoeken en eventuele benodigde patches aanbrengen om deze compatibel te maken 
met de nieuwe XOOPS-code. Patches kunnen databasewijzigingen omvatten, waarbij standaardinstellingen voor nieuwe worden toegevoegd
configuratie-items, bestands- en gegevensupdates en meer.
<p>
Na elke patch rapporteert de upgrader de status en wacht tot uw invoer doorgaat. Bij de
einde van de upgrade, gaat de controle over naar de updatefunctie van de systeemmodule.

<div class="alert alert-warning">
Zodra de upgrade is voltooid, vergeet dan niet het volgende te doen:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> verwijder de upgrademap</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> update alle modules die zijn gewijzigd</li>
</div>

EOT,
);
