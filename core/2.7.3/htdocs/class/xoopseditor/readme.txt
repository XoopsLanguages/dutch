xoopseditor biedt een collectief van editors voor XOOPS

gebruikershandleiding:

1 controleer de bestanden xoops_version.php onder /xoopseditor/ om er zeker van te zijn dat deze nieuwer zijn dan uw huidige

2 upload /xoopseditor/ naar /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configureer voorkeuren waar van toepassing
3.1 ./dhtmlext(alle editors)/taal/: maak uw lokale taalbestand gebaseerd op english.php
3.3 ./dhtmlext(alle editors)/editor_registry.php: configuraties instellen voor de editor: volgorde - weergavevolgorde als de editorselectie wordt gebruikt, 0 voor uitgeschakeld; nohtml - werkt voor niet-html-syntaxis
3.3 ./FCKeditor/module/: kopieer de bestanden naar de modulesmappen voor het geval dat modulespecifieke uploadrechten, opslag- en editoropties vereist zijn
3.3.1 ./FCKeditor/module/fckeditor.config.js: voor editoropties hoeft u deze meestal niet te wijzigen
3.3.2 ./FCKeditor/module/fckeditor.connector.php: om de map op te geven voor het bladeren door bestanden (en het uploaden van opslag) => XOOPS/uploads/XOOPS_FCK_FOLDER/, de map moet handmatig worden aangemaakt
3.3.3 ./FCKeditor/module/fckeditor.upload.php: specificeer uploadrechten en uploadopslag
3.4 XOOPS/uploads/fckeditor/: om de map te maken als FCKeditor is ingeschakeld, gebruikt voor uploads waarvan de uploadmap niet is opgegeven
3.5 ./tinymce/tinymce/jscripts/: download uw lokale taalbestanden van http://tinymce.moxiecode.com/language.php

4 controleer de bestandsnamen: voor een hoofdlettergevoelig systeem met bestandsnamen, zorg ervoor dat de bestandsnamen letterlijk correct zijn, d.w.z. dat "FCKeditor" niet identiek is aan "fckeditor"

5 controleer /xoopseditor/sampleform.inc.php voor de ontwikkelingshandleiding
