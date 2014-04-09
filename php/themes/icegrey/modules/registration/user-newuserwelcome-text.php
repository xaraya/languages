<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Dear #$values[\'name\']#,
You or someone in your name has registered a new user at: #$sitename# under the user name
Username: #$values[\'uname\']#
Your account is now active and can be accessed with this user name and your password by clicking here: #xarServerGetBaseURL()#
If this has been an error no further action from you is required, and we apologize for any inconvenience.
Sincerely yours,
#$sitename# #$adminname#'] = 'Sehr geehrte(r) #$values[\'name\']#, Sie oder jemand in Ihrem Namen hat sich registriert: #$sitename# unter dem benutzername: #$values[\'uname\']# Ihr Konto ist nun aktiv und kann mit Ihrem Benutzer und Passwort genutzt werden indem Sie hier klicken: #xarServerGetBaseURL()# Falls es sich hierbei um einen Fehler handelt, ist keine weitere Aktion nötig und wir entschuldigen uns allfällige umtriebe. Mit freundlichen Grüssen, #$sitename# #$adminname#';
?>