<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Mode of Operation'] = 'Operationsmodus';
$xarML_PHPBackend_entries['The multilanguage system (MLS) works in three different modes.'] = 'Das Multilanguage-System (MLS) arbeitet in drei unterschiedlichen Modi.';
$xarML_PHPBackend_entries['Please note that you cannot use UNBOXED mode of the MultiLanguage system unless you have php 4.3.0
with the mbstring extension compiled in.'] = 'Bitte beachten Sie, dass Sie den UNBOXED-Modus nur verwenden können, wenn eine PHP-Version größer als 4.3.0 mit der mbstring-Erweiterung installiert ist. Sollte dies nicht der Fall sein, wird Ihre Seite nach dem Umschalten auf UNBOXED <strong>nicht mehr zugänglich sein, auch nicht für Administratoren.</strong><br >&nbsp;<br />Beachten Sie vor eventuellen Änderungen die Wechselwirkungen zwischen den Zeichensätzen in der Datenbank und dem Webserver.';
$xarML_PHPBackend_entries['Single Language Mode (SINGLE)'] = 'Einzelsprachlicher Modus (SINGLE)';
$xarML_PHPBackend_entries['MLS uses only one character set, typically single byte but potentially multi byte if mb_string is
built in. All information is stored coherently with the chosen character set (at installation time),
and also user data is meaningful in the chosen character set.'] = 'Das Sprachsystem verwendet nur einen Zeichensatz für die komplette Webseite. Mittlerweile typisch sind multi byte-Zeichensätze (Unicode), falls mb_string verfügbar ist. Wenn ein Unicode-Zeichensatz (kurz: UTF) eingesetzt wird, ist SINGLE die <strong>beste Lösung</strong>, weil Zeichen aus verschiedenen Sprachen gemeinsam verarbeitet werden können.';
$xarML_PHPBackend_entries['Per Page Mode (BOXED)'] = 'Pro Seite-Modus (BOXED)';
$xarML_PHPBackend_entries['MLS can use more than one character set in the site (the same consideration for the single or multi byte matter as
above can be applied here), but only one character set per page is used (this is an obvious concept maybe,
but important to understand). Due to this fact content cannot be shared across through different
language areas (for example an Arabic comment won\'t be shown in the English area even if
they are referring to the same object, e.g. an article available in both English and Arabic).
Another point is that every operation involves only a single language. This mode can produce
unexpected results if mb_string is not installed.'] = 'Hierbei wird mehr als ein Zeichensatz von Xaraya verwendet, aber nur jeweils ein Zeichensatz pro ausgelieferter HTML-Seite. Dadurch kann der Seiteninhalt nicht in verschiedenen Sprachbereichen angezeigt werden, ein arabischer Kommentar würde nie unter einem hebräischen Artikel erscheinen können (aus technischen Gründen). Dieser Modus kann unvorhergesehene Ergebnisse liefern, falss mb_string nicht installiert ist.';
$xarML_PHPBackend_entries['It is installed on this server, so you can give this mode a try'] = 'Wenn sie auf diesem Server installiert ist, können Sie einen Versuch mit diesem Modus starten';
$xarML_PHPBackend_entries['WARNING: mb_string is NOT installed on this server, proceed with caution'] = 'WARNUNG: mb_string ist NICHT auf diesem Server installiert, mit Vorsicht fortfahren';
$xarML_PHPBackend_entries['Full Multilanguage (UNBOXED) (experimental!)'] = 'Volle Mehrsprachigkeit (UNBOXED) (experimentell!)';
$xarML_PHPBackend_entries['MLS uses an universal character set to represent everything (read: UTF-8). This guarantees that no
conversion is needed for the content representation. Every page is always shown according to
the user chosen language, but the page can contain texts in other languages
(for example a French article and comments inside an English page).'] = 'MLS uses an universal character set to represent everything (read: UTF-8). This guarantees that no conversion is needed for the content representation. Every page is always shown according to the user chosen language, but the page can contain texts in other languages (for example a French article and comments inside an English page).';
$xarML_PHPBackend_entries['Language/Locale Configuration'] = 'Konfiguration der Sprachen / Lokalisierung';
$xarML_PHPBackend_entries['The following locales are available to this site:'] = 'Die folgenden Lokalisierungen sind auf dieser Site verfügbar:';
$xarML_PHPBackend_entries['Default Locale:'] = 'Standard-Locale:';
?>