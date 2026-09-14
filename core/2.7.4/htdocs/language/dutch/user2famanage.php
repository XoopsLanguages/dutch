<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Tweefactorauthenticatie');
define('_US_2FAM_PASSWORD', 'Uw huidige wachtwoord');
define('_US_2FAM_ENABLE', 'Een authenticator instellen');
define('_US_2FAM_CONFIRM', 'Authenticator bevestigen');
define('_US_2FAM_CHOOSE', 'Kies hoe u uw tweede stap wilt ontvangen: een authenticator-app of een code per e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'E-mailcodes gebruiken');
define('_US_2FAM_EMAIL_HELP', 'E-mailcodes: er wordt telkens bij aanmelden een zescijferige code naar %s gestuurd. Minder veilig dan een authenticator-app, omdat iedereen die uw e-mail kan lezen deze stap kan doorlopen.');
define('_US_2FAM_EMAIL_STEP', 'We hebben een zescijferige code naar %s gestuurd. Voer deze hieronder in om te bevestigen. Deze is tien minuten geldig.');
define('_US_2FAM_CONFIRM_EMAIL', 'E-mailcodes bevestigen');
define('_US_2FAM_CODE_HELP_EMAIL', 'De zescijferige code uit de e-mail die we u zojuist hebben gestuurd.');
define('_US_2FAM_ENABLED_EMAIL', 'E-mailcodes zijn ingeschakeld. Voer om een wijziging aan te brengen uw huidige wachtwoord en de code die we u per e-mail sturen in, of een herstelcode. Gebruik de knop hieronder om een code aan te vragen.');
define('_US_2FAM_SEND', 'Stuur mij een code');
define('_US_2FAM_MANUAL', 'Handmatige installatiesleutel');
define('_US_2FAM_SCAN', 'QR-code voor uw authenticator-app');
define('_US_2FAM_STEP_APP', 'U heeft een authenticator nodig: elke app of wachtwoordbeheerder die tijdgebaseerde eenmalige codes (TOTP) genereert, werkt, op uw telefoon of computer. Als u er nog geen heeft, installeer dan eerst er een naar keuze (bijv. Google Authenticator, Microsoft Authenticator, Aegis of FreeOTP).');
define('_US_2FAM_STEP_ADD', 'Voeg in de app een account toe: scan deze QR-code, of kies handmatige invoer en typ de installatiesleutel die eronder wordt getoond.');
define('_US_2FAM_STEP_CODE', 'De app toont nu een zescijferige code die elke 30 seconden verandert. Typ de code die nu wordt getoond in het veld hieronder en bevestig.');
define('_US_2FAM_CODE_HELP', 'De zescijferige code die uw authenticator-app op dit moment toont.');
define('_US_2FAM_HTTP', 'Deze verbinding gebruikt gewone HTTP. Uw wachtwoord, sessie, installatiesleutel en herstelcodes kunnen worden onderschept. Gebruik indien mogelijk HTTPS.');
define('_US_2FAM_CODES', 'Bewaar deze herstelcodes nu');
define('_US_2FAM_CODES_HELP', 'Elke code werkt eenmalig. Deze codes worden niet opnieuw getoond. Bewaar ze op een veilige plek, gescheiden van dit account.');
define('_US_2FAM_DISABLE', 'Tweefactorauthenticatie uitschakelen');
define('_US_2FAM_REGENERATE', 'Herstelcodes vervangen');
define('_US_2FAM_ENABLED', 'Er is een authenticator ingesteld. Voer uw huidige wachtwoord en een authenticatie- of herstelcode in om een wijziging aan te brengen.');
define('_US_2FAM_DISABLED', 'Tweefactorauthenticatie is uitgeschakeld.');
define('_US_2FAM_PAUSED', 'De site heeft tweefactorcontroles gepauzeerd. Uw factor blijft behouden, en "onthoud mij" blijft niet beschikbaar voor ingestelde accounts.');
define('_US_2FAM_UNAVAILABLE', 'Instellen of beheren van tweefactorauthenticatie is niet beschikbaar. Neem contact op met de sitebeheerder.');
define('_US_2FAM_STARTAGAIN', 'De installatie is verlopen of het account is gewijzigd. Voer uw wachtwoord in om de installatie opnieuw te starten.');
define('_US_2FAM_BADPASSWORD', 'Uw huidige wachtwoord is niet geaccepteerd.');
define('_US_2FAM_RESET', 'Tweefactorauthenticatie van deze gebruiker resetten');
define('_US_2FAM_STATUS_NONE', 'Niet ingesteld');
define('_US_2FAM_STATUS_TOTP', 'Authenticator-app ingesteld');
define('_US_2FAM_STATUS_EMAIL', 'E-mailcodes ingesteld');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status niet beschikbaar');
define('_US_2FAM_RESET_HELP', 'Dit schakelt de tweede factor van de gebruiker uit, ongeacht de ingestelde methode, en trekt diens herstelcodes en "onthoud mij"-cookies in. Bestaande aangemelde sessies blijven actief. Voer uw eigen beheerderswachtwoord in om te bevestigen.');
define('_US_2FAM_RESET_DONE', 'De tweefactorauthenticatie van de gebruiker is gereset.');
define('_US_2FAM_BACK', 'Terug naar account');
define('_US_2FAM_DONE', 'Tweefactorauthenticatie is ingeschakeld.');
define('_US_2FAM_REPLACED', 'Eerdere herstelcodes zijn ingetrokken.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: tweefactorauthenticatie gewijzigd');
define('_US_2FAM_NOTICE_BODY', 'De tweefactorauthenticatie of herstelcodes van uw account bij %s zijn gewijzigd vanaf %s. Als u dit niet was, neem dan contact op met de sitebeheerder.');
define('_US_2FAM_RESET_SUBJECT', '%s: een beheerder heeft uw tweefactorauthenticatie gereset');
define('_US_2FAM_RESET_BODY', 'Een beheerder heeft uw tweede factor uitgeschakeld en de bijbehorende herstelcodes ingetrokken bij %s vanaf %s. Bestaande aangemelde sessies blijven actief. Meld u aan en stel tweefactorauthenticatie opnieuw in. Neem contact op met de sitebeheerder als dit onverwacht was.');
