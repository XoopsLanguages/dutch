<?php
//
// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Jouw site</h3>
<p>U heeft nu toegang tot de <a href='../index.php'>startpagina van uw site</a>.</p>
<h3>Steun</h3>
<p>Bezoek <a href='https://xoops.org/' rel='external'>Het XOOPS-project</a></p>
<p><strong>AANDACHT :</strong> Uw site bevat momenteel de minimale functionaliteit. 
Bezoek alsjeblieft <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
voor meer informatie over het uitbreiden van XOOPS naar tekstpagina's, fotogalerijen, forums en meer, 
met <em>modules</em> en waarmee u het uiterlijk van uw XOOPS kunt aanpassen <em>thema's</em>.</p>
";

$content .= "<h3>Beveiligingsconfiguratie</h3>
<p>Het installatieprogramma zal proberen uw site te configureren uit veiligheidsoverwegingen. Controleer nogmaals of:
<div class='confirmMsg'>
De <em>mainfile.php</em> is alleen-lezen.<br>
Verwijder de map <em>{$installer_modified}</em> (of <em>install</em> als de naam niet automatisch door het installatieprogramma is gewijzigd) vanaf uw server.
</div>
</p>
";
