<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Tweede stap');
define('_US_2FA_PROMPT', 'Voer de code uit uw authenticator-app in');
define('_US_2FA_CODE', 'Authenticatiecode');
define('_US_2FA_PROMPT_EMAIL', 'We hebben een zescijferige code naar %s gestuurd. Voer deze hieronder in.');
define('_US_2FA_CODE_EMAIL', 'Code uit uw e-mail');
define('_US_2FA_SEND', 'Nieuwe code verzenden');
define('_US_2FA_SENT', 'Er is een nieuwe code naar %s verzonden. Deze is tien minuten geldig.');
define('_US_2FA_SEND_WAIT', 'Er is minder dan een minuut geleden een code verzonden. Controleer uw inbox en spammap voordat u een nieuwe aanvraagt.');
define('_US_2FA_SEND_FAILED', 'De code kon nu niet worden verzonden. Probeer het straks opnieuw, of gebruik een herstelcode.');
define('_US_2FA_EMAIL_SUBJECT', '%s: uw aanmeldcode');
define('_US_2FA_EMAIL_BODY', 'Uw aanmeldcode voor %s is:

%s

Deze is %d minuten geldig en werkt eenmalig. Als u dit niet hebt aangevraagd, negeer dan dit bericht en overweeg uw wachtwoord te wijzigen.');
define('_US_2FA_RECOVERY', 'In plaats daarvan een herstelcode gebruiken');
define('_US_2FA_RECOVERY_HINT', 'Elke herstelcode werkt eenmalig. Bij gebruik ervan ontvangt u een e-mail.');
define('_US_2FA_SUBMIT', 'Doorgaan');
define('_US_2FA_STARTAGAIN', 'Deze aanmelding is verlopen of onderbroken. Begin opnieuw.');
define('_US_2FA_BACKTOLOGIN', 'Terug naar het aanmeldformulier');
define('_US_2FA_BADCODE', 'Die code is niet geaccepteerd.');
define('_US_2FA_LOCKED', 'Te veel pogingen. De tweede stap is vijftien minuten vergrendeld; een herstelcode werkt nog wel.');
define('_US_2FA_UNAVAILABLE', 'De tweede stap is nu niet beschikbaar. Een herstelcode werkt nog wel, of neem contact op met de sitebeheerder.');
define('_US_2FA_REQUIRED', 'Voor dit account is tweefactorauthenticatie ingeschakeld. Meld u aan via de aanmeldpagina van de site.');
define('_US_2FA_HTTP_LOGIN', 'Deze pop-up kan een tweefactoraanmelding via HTTP niet voltooien omdat uw wachtwoord onversleuteld zou worden verzonden. Gebruik in plaats daarvan de sitelogin, of vraag de beheerder HTTPS voor de site in te schakelen.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: tweede stap vergrendeld');
define('_US_2FA_LOCKED_MAIL_BODY', 'Er zijn vijf onjuiste codes voor de tweede stap ingevoerd voor uw account bij %s vanaf %s. De tweede stap is vijftien minuten vergrendeld. Als u dit niet was, wijzig dan uw wachtwoord.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: er is een herstelcode gebruikt');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Er is een herstelcode gebruikt om aan te melden bij uw account bij %s vanaf %s. Die code werkt niet meer. Als u dit niet was, wijzig dan uw wachtwoord en stel uw herstelcodes opnieuw in.');
