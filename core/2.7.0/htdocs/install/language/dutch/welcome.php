<?php
//
// _LANGCODE: nl
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> is een open source
    Object-georiënteerd webpublicatiesysteem geschreven in PHP. Het is een ideaal hulpmiddel voor
    het ontwikkelen van kleine tot grote dynamische gemeenschapswebsites, intra-bedrijfsportals, bedrijfsportals, weblogs en nog veel meer.
</p>
<p>
    XOOPS wordt vrijgegeven onder de voorwaarden van de
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Algemene publieke licentie (GPL)</a>
    versie 2 of hoger, en is gratis te gebruiken en aan te passen.
    Het is gratis om opnieuw te distribueren zolang u zich houdt aan de distributievoorwaarden van GPL.
</p>
<h3>Vereisten</h3>
<ul>
    <li>WWW Server (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, enz.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 of hoger, 8.4+ aanbevolen</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 of hoger, 8.4.5+ aanbevolen </li>
</ul>
<h3>Voordat je install</h3>
<ol>
    <li>Stel WWW server, PHP en databaseserver correct in.</li>
    <li>Bereid een database voor uw XOOPS-site voor.</li>
    <li>Bereid een gebruikersaccount voor en verleen de gebruiker toegang tot de database.</li>
    <li>Maak deze mappen en bestanden schrijfbaar: %s</li>
    <li>Uit veiligheidsoverwegingen wordt u ten zeerste aangeraden de twee onderstaande mappen te verwijderen <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">documentwortel</a> en wijzig de mapnamen: %s</li>
    <li>Maak (indien nog niet aanwezig) en maak deze mappen schrijfbaar: %s</li>
    <li>Schakel cookie en JavaScript van uw browser in.</li>
</ol>
<h3>Speciale opmerkingen</h3>
<ol>
    <li>Voor sommige specifieke systeemsoftwarecombinaties zijn mogelijk aanvullende configuraties nodig om te kunnen werken
    met XOOPS. Als een van deze onderwerpen op uw omgeving van toepassing is, bekijk dan het volledige document
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    installatiehandleiding</a> voor meer informatie.<br><br>

    <li><strong>SELinux</strong> ingeschakelde systemen (zoals <strong>CentOS</strong>  En <strong>RHEL</strong>) vereisen mogelijk wijzigingen in de beveiligingscontext
    voor XOOPS-mappen naast de normale bestandsrechten om mappen schrijfbaar te maken.
    Raadpleeg uw systeemdocumentatie en/of systeembeheerder.
</ol>
';

return $content;

