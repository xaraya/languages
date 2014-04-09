<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Related documentation on Blocks'] = 'Zugehörige Dokumentation zum Blöcke-Modul';
$xarML_PHPBackend_entries['Blocks Module - Xaraya Extension 13'] = 'Block-Modul - Xaraya-Erweiterung 13';
$xarML_PHPBackend_entries['official icon'] = 'Offizielles Icon';
$xarML_PHPBackend_entries['What is it?'] = 'Wozu dient es?';
$xarML_PHPBackend_entries['The Blocks Module controls the configuration, display position and grouping of \'blocks\'
of content or functionality on your website. From version 1.1.2, the Blocks module also can control access and levels of accessto blocks. The Blocks module is a core module within Xaraya and cannot be removed.'] = 'Das Blöcke-Modul kontrolliert die Inhalte, den Anzeigeort und die Gruppierung eines jeden "Blocks" auf Ihrer Website. Blöcke können die Hauptdarstellung auf der Seite um beliebige Inhalte und Verweise ergänzen. Blöcke können überall auf der Website platziert werden. Seit der Version 1.1.2 kann das Blöcke-Modul die Zugriffsrechte auf Blöcke kontrollieren. Es ist ein Kern-Modul von Xaraya und kann nicht entfernt werden.';
$xarML_PHPBackend_entries['How to use it?'] = 'Wie setzt man es ein?';
$xarML_PHPBackend_entries['Each module can provide a block type along with the code and templates for it. A block type defines a specific display
of content or functionality that you can place on your site. For example the Articles module provides a \'featured article\' block type,
and a \'top items\' block type. The Base module provides a \'menu\' block type, among others.'] = 'Jedes Modul kann einen oder mehrere Blocktypen mit einer zugehörigen Vorlage (Template) anbieten. Ein Blocktyp stellt den Inhalt oder die Funktion des Moduls auf eine bestimmte Weise dar. Beispielsweise bietet das Artikel-Modul die Blocktypen \'featured article\' (Von Ihnen ausgewählte Schlagzeilen) und \'top items\' (Am häufigsten gelesene Artikel) an. Das Basis-Modul bietet einen Blocktyp \'menu\'.';
$xarML_PHPBackend_entries['These different block types are installed at the time of module installation, and removed when a module is uninstalled.
The block types are also upgraded when a module is upgraded.'] = 'Blocktypen sind in den Herkunftsmodulen definiert und werden installiert, wenn Sie das Modul installieren. Sie können unter Verwendung des "Blockinstanz hinzufügen"-Bereichs aus jedem der bisher installierten Blocktypen eine neue Blockinstanz anlegen.';
$xarML_PHPBackend_entries['The Blocks module enables you to work with <strong>Block Types</strong> to:'] = 'Das Blöcke-Modul ermöglicht im Bereich <strong>Blocktypen</strong>:';
$xarML_PHPBackend_entries['<strong>View Block Types:</strong>'] = '<strong>Blocktypen anzeigen:</strong>';
$xarML_PHPBackend_entries['lists all the registered block types in your Xaraya installation with reference to which
module they belong.'] = 'listet alle installierten Blocktypen und deren Herkunftsmodule auf.';
$xarML_PHPBackend_entries['<strong>Add a New Block Type:</strong>'] = '<strong>Neuen Blocktyp hinzufügen:</strong>';
$xarML_PHPBackend_entries['scans a module for a new block type. This option is added mainly for Developer convenience.
Sometimes a developer provides a block type or upgrade of a block outside of a normal module release or
upgrade. This option allows the block to be loaded and registered in your Xaraya installation. Normally
you should never need to use this option in the process of administering your site.'] = 'ermöglicht das Hinzufügen und Aktualisieren von Blocktypen heraus (selten notwendig).';
$xarML_PHPBackend_entries['Using Blocks and Block Groups'] = 'Blöcke und Blockgruppen verwenden';
$xarML_PHPBackend_entries['There are a number of steps required to create a new block of content or functionality for your site, and display it:'] = 'Mit wenigen Schritten wird ein neuer Block angelegt und auf der Webseite positioniert:';
$xarML_PHPBackend_entries['Create a new block instance based on any of your installed block types'] = 'Hinzufügen einer neuen Blockinstanz basierend auf einem Blocktyp';
$xarML_PHPBackend_entries['Assign the block instance to an existing block group during block creation or modification (optional)'] = 'Zuordnen dieser Blockinstanz zu einer Blockgruppe';
$xarML_PHPBackend_entries['If you need a new block group, create one and then assign the block instance to it'] = 'Falls eine neue Blockgruppe gewünscht wird, ist diese zuvor anzulegen.';
$xarML_PHPBackend_entries['Add a <strong>blockgroup tag</strong> in your theme template so Xaraya knows where to display your blocks. eg
<code>&lt;xar:blockgroup name="right" id="right" /&gt;</code>.'] = 'Für diese neue Blockgruppe ist ein <strong>Blockgruppen-Tag</strong> in der Seitenvorlage (Theme Template) zu setzen, damit Xaraya weiss, wo die Gruppe angezeigt werden soll. Beispielsweise <code>&lt;xar:blockgroup name="rechtsoben" id="rechtsoben" /&gt;</code>.';
$xarML_PHPBackend_entries['Xaraya has pre-configured block groups created at installation time that include <em>right</em>,
<em>left</em>, <em>center</em>, <em>topnav</em> and <em>header</em> block groups. Special block group tags are used in the default Xaraya theme to
place and display them and the block instances already assigned to them. In the case of the default block groups
their name reflects the position where they are located in the default theme. You can rename these block groups as the names are not significant in themselves'] = 'Xaraya wird mit den vordefinierten Blockgruppen <em>right</em>, <em>left</em>, <em>center</em>, <em>topnav</em> und <em>header</em> installiert. Für diese Blockgruppen sind in der ebenfalls installierten Seitenvorlage (Theme) bereits Markierungen (Tags) vorhanden. Hierbei bezeichnen die Name der Blockgruppen ihre räumliche Position auf der Seite. Die Namen sind nicht funktionell bedingt und können geändert werden.';
$xarML_PHPBackend_entries['Note: you do not have to allocated a block instance to a blockgroup. You can place the block instance display directly
into your theme templates using a <strong>block</strong> tag. Please check <a href="#(1)">RFC0010</a> for details on using this tag.'] = 'Hinweis: Eine Blockinstanz braucht nicht zu einer Blockgruppe zugeordnet zu werden. Mit einem <strong>Block-Tag</strong> kann sie direkt in einer Seitenvorlage platziert werden. Weiteres zur Verwendung von Block-Tags siehe im <a href="#(1)">RFC0010</a>.';
$xarML_PHPBackend_entries['Creating and Viewing Block Groups'] = 'Hinzufügen und Anzeigen von Blockgruppen';
$xarML_PHPBackend_entries['The Blocks module provides a number of options to work with <strong>Block Goups</strong>:'] = 'Das Blöcke-Modul bietet zur Bearbeitung von Blockgruppen einen untergliederten Bereich mit:';
$xarML_PHPBackend_entries['<strong>View Block Groups:</strong>'] = '<strong>Blockgruppen:</strong>';
$xarML_PHPBackend_entries['displays all the defined Block Groups on your site with links to Edit or Delete options'] = 'Zeigt alle vorhandenen Blockgruppen auf der Webseite an und ermöglicht das Ändern und Löschen.';
$xarML_PHPBackend_entries['<strong>Add Block Group:</strong>'] = '<strong>Neue Blockgruppe hinzufügen</strong>:';
$xarML_PHPBackend_entries['option presents a simple input screen so you can add a new block group'] = 'Fügt eine neue Blockgruppe hinzu.<br />&nbsp;';
$xarML_PHPBackend_entries['Creating, Viewing and Modifying Block Instances'] = 'Hinzufügen, Anzeigen und Bearbeiten von Blockinstanzen';
$xarML_PHPBackend_entries['Creating and modifying block instances with Xaraya is simple:'] = 'Das Verwalten von Blockinstanzen ist einfach:';
$xarML_PHPBackend_entries['<strong>View Block Instances:</strong>'] = '<strong>Blöcke anzeigen</strong>:';
$xarML_PHPBackend_entries['displays all current block instances that are available for use in your Xaraya site. From this menu option
you can <code>modify</code> or <code>delete</code> any of the listed block instances.'] = 'Zeigt die aktuellen Blockinstanzen, die in Ihrem Xaraya-System definiert sind.';
$xarML_PHPBackend_entries['<strong>Add New Block Instance:</strong>'] = '<strong>Neuer Block</strong>:';
$xarML_PHPBackend_entries['Create and make available a new block instance for display on your site. As part of this process you
may nominate which block type to use for creation of the block instance, and optionally assign the block instance to a Block Group.'] = 'Erstellt eine neue Blockinstanz und macht diese verfügbar. In diesem Zuge können die Darstellungsparameter für die Inhalte bestimmt werden und die Blockinstanz einer Blockgruppe hinzugefügt werden.';
$xarML_PHPBackend_entries['<strong>Modify a Block Instance:</strong>'] = '<strong>Blockinstanz ändern:</strong>';
$xarML_PHPBackend_entries['from the View Block Instance listing provides the option to allocate the block instance
to one or more Block Groups. In addition, you can optionally specify whether the block instances should use an
override block instance (inner) template or block group (outer) template (see Templating Blocks and Block Groups). Each module also specifies any special content here that is available for configuration for this specific block type.'] = 'ausgehend vom \'Blöcke anzeigen\'-Bereich können Sie den Block zu einer oder mehreren Blockgruppen zuordnen. Weiterhin kann dort festgelegt werden, ob ein \'inneres Template\' der Blockinstanz oder ein \'äußeres Template\' der Blockgruppe zur Darstellung der Blockinstanz verwendet werden soll. Diese würden das übliche Seitentemplate überdecken.';
$xarML_PHPBackend_entries['Templating Blocks and Block Groups'] = 'Blockgruppenzuordnung und Templates';
$xarML_PHPBackend_entries['As with other Xaraya content, you can provide your own override templates for block
instances and create your own templates for block groups. To do this note the following:'] = 'Wie mit anderen Inhalten bei Xaraya, können überdeckende Templates für Blockinstanzen und für Blockgruppen festgelegt werden. Dazu sind:';
$xarML_PHPBackend_entries['<strong>Inner template</strong> is used for display of the content in a block instance and
supplied by the module that provides the block type. They can be overridden like any other Xaraya template.
Overrides for for block instance <strong>inner</strong> templates should be be placed in
<code>themes/[yourtheme]/modules/[themodule]/blocks</code> where <code>[themodule]</code> is the module providing
the block type. The general name for the template is <code>blocktype-innertemplatename.xt</code>'] = 'Das <strong>Innere Template</strong> wird benutzt um den Inhalt einer Blockinstanz anzuzeigen. Es wird vom Herkunftsmodul des zugrundeliegenden Blocktyps bereitgestellt. Um die Ausgabe zu ändern, soll die Datei des überdeckenden Templates für diese Blockinstanz in <code>themes/[ihrthemename]/modules/[derherkunftsmodulname]/blocks</code> gespeichert werden. Der übliche Name für dieses Template ist <code>blocktyp-innerestemplatename.xt</code>';
$xarML_PHPBackend_entries['<strong> Outer template</strong> is the name given to the template used for the block instance\'s block group.
Some \'outer\' templates are installed by default with Xaraya, but you can also create your own \'outer\'
templates. The <strong>outer templates</strong> are stored in your <code>theme/[yourtheme]/blocks</code>
directory. If there is no specific block group template the block group will use the preinstalled \'default\'
block group template.'] = 'Das <strong>Äußere Template</strong> bezeichnet die Vorlage zur Darstellung der Blockgruppe. Einige \'Äußere Vorlagen\' werden bereits mit Xaraya installiert. Zusätzlich können eigene Vorlagen erstellt und im Verzeichnis <code>themes/[ihrthemename]/blocks</code> gespeichert werden. Falls kein Template für die Blockgruppe eingestellt ist, verwende die Blockgruppe das vorinstallierte default.xt-Template';
$xarML_PHPBackend_entries['How to tell Xaraya which inner and outer templates to use'] = 'Verwendung von \'inneren\' und \'äußeren\' Vorlagen';
$xarML_PHPBackend_entries['You can tell Xaraya which inner and outer templates to use when you create a
new block instance or modify an existing one. Using the Blocks module, there are two places you can set either the inner
template, the outer template or both.'] = 'Im Blöcke-Modul gibt es zwei Orte, an denen die Verwendung spezieller Vorlagen festgelegt wird.';
$xarML_PHPBackend_entries['The field labelled <strong>Instance Template (optional):</strong> sets the default
inner and outer template used for the block instance and any block group. You can specify inner, outer, both inner and outer or none.
You use the following format: <code>[outer-template][semi-colon][inner-template]</code>. Both are specified without the file extension.'] = 'Das <strong>Blockinstanz-Vorlagen</strong> bezeichnete Feld bestimmt die Vorlagen für die Blockinstanz und die Blockgruppe. Die für die Blockinstanz definierte Vorlage wird verwendet, wenn keine weitere/andere Vorlage für die Blockgruppe definiert ist. Das Format ist: [outer-template][semi-colon][inner-template].';
$xarML_PHPBackend_entries['If you add a block instance to a block group, another input field will appear, labelled with the name of the block group.
You can also add a specific inner, outer or both inner and outer template in this field using the same syntax. Specifying
an inner or outer template in this block group template field will override any other templates.'] = 'Falls eine Blockinstanz einer Blockgruppe zugeordnet wird, erscheint ein weiteres Eingabefeld für die optionalen Vorlagen. Es ist mit <strong>[Publikationstyp]-Vorlagen:</strong> bezeichnet. Auch hier können die Vorlagen festgelegt werden. Die Einstellung hier überdeckt alle anderen Vorlagen.';
$xarML_PHPBackend_entries['<strong>An example:</strong> if you create an articles\' featureditems block instance and you are using the Xaraya_Classic default theme'] = '<strong>Beispiel:</strong> Die Blockinstanz \'featureditems\' wird mit dem Artikel-Moduls vorinstalliert. Die Webseite verwendet das vorinstallierte Theme \'Xaraya_Classic\'.';
$xarML_PHPBackend_entries['By default, this block instance will use the article module\'s inner template called <code>featureditems.xd</code> located in modules/articles/xartemplates/blocks'] = 'Standardmäßig wird der Inhalt dieser Blockinstanz mit der inneren Vorlage aus dem Artikel-Modul, genannt <code>featureditems.xd</code>, gespeichert in <code>modules/articles/xartemplates/blocks</code> angezeigt werden.';
$xarML_PHPBackend_entries['If you have allocated the featured article block instance to a block group called \'right\' it will use, by default, the outer template
located at <code>themes/Xaraya_Classic/blocks/right.xt</code>. If the \'right\' outer template did not exist it will use one called \'default.xt\'
in that same directory.'] = 'Typischerweise befindet sich die Blockinstanz \'featureditems\' in der Blockgruppe \'right\'. Als äußere Vorlage wird standardgemäß die Datei <code>themes/Xaraya_Classic/blocks/right.xt</code> verwendet. Existiert diese nicht, wird die Vorlage <code>default.xt</code> im selben Verzeichnis verwendet.';
$xarML_PHPBackend_entries['If you wish to override both outer and inner templates for the featureditems block then the syntax example of:
<strong>left;weeklyfeature</strong> would mean means the outer template is one created and called <code><strong>left</strong>.xt</code> in the <code>themes/Xaraya_Classic/blocks</code> directory.
The article module\'s featureditems block instance will be displayed using the <code>themes/Xaraya_Classic/modules/articles/blocks/featureditems-<strong>weeklyfeature</strong>.xt</code> template.
You could just specify outer or inner template if required by adding <code>left;</code> or <code>;weeklyfeature</code> to specify outer and inner respectively.'] = 'Falls nun eine Überdeckung der inneren und äußeren Vorlagen für den featureditems-Block beispielsweise mit einer <strong>oberen;Wochenschlagzeile</strong> gewünscht wird, ist folgendes vorzunehmen. Die äußere Vorlage ist anzulegen und unter <code><strong>oberen</strong>.xt</code> im 
Verzeichnis <code>themes/Xaraya_Classic/blocks</code> zu speichern. Die Blockinstanz wird angezeigt werden aus der anzulegenden Vorlage <code>themes/Xaraya_Classic/modules/articles/blocks/featureditems-<strong>Wochenschlagzeile</strong>.xt</code>. Die äußeren und inneren Vorlagen sind mit <code>oberen;</code> oder <code>;Wochenschlagzeile</code> festlegen.<br />&nbsp;';
$xarML_PHPBackend_entries['Included Blocks'] = 'Angebotene Blöcke';
$xarML_PHPBackend_entries['The Blocks Module has no blocks included at this time.'] = 'Das Blöcke-Modul enthält keine Blöcke, weil es nur administrativen Zwecken dient.';
$xarML_PHPBackend_entries['Included Hooks'] = 'Angebotene Hooks';
$xarML_PHPBackend_entries['The Blocks Module has no hooks included at this time.'] = 'Keine';
$xarML_PHPBackend_entries['Further Information'] = 'Weitere Information';
$xarML_PHPBackend_entries['Further information on the Blocks module can be found at'] = 'Weitere Information über das Block-Modul kann gefunden werden bei';
$xarML_PHPBackend_entries['Blocks Module Extension page at <a href="#(1)" title="#(2)" >Xaraya Extension and Releases</a>.
Click on Version History tab at the bottom to get the latest release information.'] = 'Die Xaraya-Informationsseite des Blöcke-Moduls befindet sich bei <a href="#(1)" title="#(2)">Xaraya Erweiterungen und Freigaben</a> (en).';
$xarML_PHPBackend_entries['Related tutorials and documentation on Blocks found at <a href="#(1)" title="#(2)">Xaraya Documentation.</a>'] = 'Zugehörige Erläuterungen und die Dokumentation befindet sich bei <a href="#(1)" title="#(2)">Xaraya Dokumentation</a> (en).';
$xarML_PHPBackend_entries['Blocks Module Overview'] = 'Blöcke-Modul Übersicht';
$xarML_PHPBackend_entries['Version'] = 'Version';
?>