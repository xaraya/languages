<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Official Icon'] = 'Icône officiel';
$xarML_PHPBackend_entries['How To'] = 'Comment';
$xarML_PHPBackend_entries['Examples'] = 'Exemples';
$xarML_PHPBackend_entries['What is it?'] = 'Quest-ce que c\'est?';
$xarML_PHPBackend_entries['The Dynamic Data module lets you create and manage custom objects ("dataobjects") on a Xaraya site. Dataobjects hold certain types of information and interact with Xaraya. You can use them to replace or extend objects Xaraya already has available (such as users, privileges, blocks etc.), or to create completely new objects for your site, representing e.g. customers, surveys, publications etc., according to your specific needs. The DynamicData module is a core module within Xaraya and cannot be removed.'] = 'Le module de donnée synamique vous laisse créer et gérer des objets personnalisables (objets de données) sur le site de Xaraya. Les objets de données contient certains types d\'information et intéragur avec Xaraya. Vous pouvez les utiliser pour remplacer ou étendre les objets que Xaraya a déjà de disponibles (tel que utilisateurs, privilèges, blocs etc), ou pour créer des objets complètement nouveaux pour votre sute, représentant e.x. clients, sondages, publications etc, en accord à vos besoins spécifiquesé Le module de données dynamique est un module du noyau dans Xaraya et ne peut pas être supprimé.';
$xarML_PHPBackend_entries['Detail information on this module can be found'] = 'De l\'information détaillée sur ce module peuvent être trouvée';
$xarML_PHPBackend_entries['Concepts'] = 'Concepts';
$xarML_PHPBackend_entries['Dataobjects'] = 'objetsdedonnées';
$xarML_PHPBackend_entries['Dataobjects are Xaraya constructs that represent "things with data" in a Xaraya application. These can be real-life objects, such as news articles, projects, surveys, race tracks (depending on your application); or they can be Xaraya objects such as roles or privileges. Representing such diverse things as dataobjects lets you manage them in a consistent, and in many cases use the DynamicData module\'s own methods to do so. This saves development time and avoids duplication.'] = 'Les objets de données sont les constructions qui représentent \'\'les choses avec données) dans l\'application de Xaraya. Ceux-ci peuvent des objets réels, commes des articles de nouvelles, des porjets, des sondages, des pistes de course (dépendamment de votre application), ou ils peuvent être des objets Xaraya comme des rôles ou des privilèges. Représentant des choses diverses comme des objets de données il vous laisse les gérer de façon constante, et dans plusieurs cas il utilise les propres méthodes du module de données dynamiques pour le faire. Cela sauve du temps de développement et évite d\'être dupliqué.';
$xarML_PHPBackend_entries['Dataobjects have a simple basic structure. Each is given a unique ID, unique name, a label and some configuration settings. What sets one dataobject apart from another is the dataproperties it is given and the data they contain.'] = 'Les objets de données ont une simple structure de base. Chacun se voit donné un identifiant unique, un nom unique, une étiquette et certains paramètres de configuration. Ce qui diférencie un objet de donnée d\'un autre ce sont les propriétés de données qu\'ils se voient donné et les données qui\'il contient.';
$xarML_PHPBackend_entries['Dataproperties'] = 'propriétésdedonnée';
$xarML_PHPBackend_entries['A dataobject is characterized by its dataproperties. A dataproperty represents a certain type of information a dataobject contains. In the case of a news article this might be a title, author or article text. In the case of a role this might be a username, password, registration date, and so on. Dataobjects can have any number of dataproperties. Note that to be useful, however, a dataobject should always have an Itemid property, which represents a unique idea for that particular set of data (an "item") the dataobject contains.'] = 'UN objet de données est caractérisé par ces données de propriétés. Une propriété représente un certain type d\'information qu\'un objet de donnée contient. Dans le ecas d\'un article de nouvelles cela peut être un titre, un auteur, un texte d\'article. Dans le case d\'un rôle cela peout être un nom d\'utilisateur, un mot de passe, une date d\'enregistrement et ainsi de suite. Les objets de données peuvent avoir n\'importe quel nombre de propriétés de données. Noter que pour être utile, cependant, un onjet de donnée devrait toujours avoir une propriété d\'identifiant de temps, lequel représente une idée unique pour cet ensemble de donnée particulier ( un \'\'objet\'\') que l\'objet de donnée contient.';
$xarML_PHPBackend_entries['Dataproperties come in different flavors, or "types". Some of these model HTML constructs such as textboxes, radio buttons, file uploads, etc., and can also be used as standalone HTML widgets without reference to a dataobject. Others model more abstract or complex concepts: there is, for instance, a username dataproperty, a password dataproperty and so on. A summary list of each modules dataproperties is given in its overview page (see above).'] = 'Les propriétés de données vient en différentes saveurs, ou \'\'types\'\'. Quelques un de ces modèles HTML construits comme boîte de texte, les boutons de radio, téléchargement de fichier, etc, et peut aussi être utilisés seuls comme symbole graphique HTML sans référence à des objets de données. Les autres modèles de concepts plus abstrait et complexe: il y a, par instance, une propriété de donnée d\'utilisateur, une propriété de données de mot de passe et ainsi de suite. Une liste sommaire des propriétés de données de chaque module est donné dans cet aperçu de la page (voir ci-dessus).';
$xarML_PHPBackend_entries['Items'] = 'Objets';
$xarML_PHPBackend_entries['A dataobject and its dataproperties can be thought of as a container for holding different sets of data. A news article dataobject can contain specific articles, a roles dataobject can contain different users and groups. We refer to these sets of data as the dataobject\'s'] = 'Un objet de donnée et ces propriétés de données peut être pensé comme un contenant pour contenur différents ensembles de données. Un objet de données d\'un article de nouvelles peut contenir des articles spécifiques, un objet de données de rôles peuvent contenir différents utilisateurs et groupes. Nous référons à ces ensembles de données comme des objets de données.';
$xarML_PHPBackend_entries['items'] = 'objets';
$xarML_PHPBackend_entries['Note that different dataobjects can have the same items. For instance, a roles object used in a users profile display will show their name, user name, date of registration etc. A different dataobject used by the site administrator to track users may show the same item with additional fields, such as state and group memberships.'] = 'Noter que différents objets de données peuvent avoir les mêmes objets. Par exemple, un objet de rôle utilisé dans un  affichage d\'un profil d\'utilisateurmontrera leur nom, leur nom d\'utilisateur, la date d\'enregistrement etc Un objet de donnée différent utilisé par l\'administrateur du site pour tracer les utilisateurs pourrait montrer le même objet avec des champs additionnels, tel qu\'un état et des abonnements de groupe.';
$xarML_PHPBackend_entries['The Admin interface'] = 'L\'interface de L\'Admin';
$xarML_PHPBackend_entries['As an administrator, you can change the modules configuration by pointing your browser to the configuration page'] = 'En tant qu\'administrateur, vous pouvez changer la configuration du module en pointant votre navigateur dans la page de configuration.';
$xarML_PHPBackend_entries['Admin Menu → Dynamicdata → Modify Configuration'] = 'Menu Admin → Donnée dynamique → Modifer la  Configuration';
$xarML_PHPBackend_entries['. The configuration page includes the standard display options common to all core modules (see the Base module overview for an explanation of these).'] = '.La page de configuration inclut les options d\'affichage commun à tous les modules de noyau (voir l\'aperçu du module de base pour une explication de ceux-ci)';
$xarML_PHPBackend_entries['Available Blocks'] = 'Blocs disponibles';
$xarML_PHPBackend_entries['Form Block'] = 'Du bloc';
$xarML_PHPBackend_entries[': displays an input form for a dataobject. This can be used for "quick entry" of data by users, such as a registration.or a feedback submission.'] = ':affiche un formulaire d\'entrée pour un objet de donnée. Ceci peut être utilisé comme \'\'entrée rapide\'\' donnée par les utilisateurs tel que l\'enregistrement ou une soumission de commntaire.';
$xarML_PHPBackend_entries['Available Hooks'] = 'Crochets Disponibles';
$xarML_PHPBackend_entries['Search Hook'] = 'Rechercher le crochet';
$xarML_PHPBackend_entries[': allows user to search the content of the Dynamicdata module. This hook is known to be used by the Search module (a non-core module).'] = ':permet à l\'utilisateur de cherche le contenu du module de donnée dynamique. Ce crochet est connu pour être utilisé par le module de recherche (un module qui n\'est pas du noyau).';
$xarML_PHPBackend_entries['Available Dataproperties'] = 'propriétés de donnée disponible';
$xarML_PHPBackend_entries[': used for input and display of a dataproperty\'s configuration.'] = ':utilisé pour l\'entrée et affichage de la configuration des propriétés de données';
$xarML_PHPBackend_entries['Datasource'] = 'sourcededonnée';
$xarML_PHPBackend_entries[': displays a list of datasources of a dataobject as a dropdown.'] = ':affiche une liste des sournes de données d\'un objet de donnée comme liste déroulante.';
$xarML_PHPBackend_entries['Fieldstatus'] = 'statutduchamp';
$xarML_PHPBackend_entries[': displays the input and display status of a dataproperty as a set of two dropdowns.'] = ':affiche l\'entrée et le statut d\'affichage d\'un propriété de données comme un ensemble de deux listes déroulantes.';
$xarML_PHPBackend_entries['Fieldtype'] = 'type de Champ';
$xarML_PHPBackend_entries[': displays the list of available dataproperty types as a dropdown.'] = ':affiche la liste de type de propiriété de donnée disponible comme une liste déroulante.';
$xarML_PHPBackend_entries['Itemid'] = 'identifiant d\'objet';
$xarML_PHPBackend_entries[': used for input and display of autoincremented dataobject IDs.'] = ': utilisé pour l\'entrée et l\'affichage des identifiants d\'objets de dinnées auto incriminés.';
$xarML_PHPBackend_entries['Itemtype'] = 'type d\'objet';
$xarML_PHPBackend_entries[': a Combobox property used for input and display of dataobject itemtypes.'] = ':Une propriété de boîte combiné utilisé pour l\'entrée et l\'affichage des types d\'objets de données.';
$xarML_PHPBackend_entries[': an ObjectRef property used to display the items of the Objects dataobject (i.e. the available dataobjects). This is a special case of the ObjectRef property.'] = ':une propriété de référence d\'objet pour l\'affichage des objets de des objets de données (ex les objets de données disponibles. C\'est un cas spécial de propriété de référence d\'objet';
$xarML_PHPBackend_entries['ObjectRef'] = 'Référence d\'objet';
$xarML_PHPBackend_entries[': a Select property used to display the items of a dataobject.'] = ':une propriété sélectionné utilisé pour afficher les objets dUn objet de données';
$xarML_PHPBackend_entries['PropertyRef'] = 'Référence de propriété';
$xarML_PHPBackend_entries[': a Select property used to display the properties of a dataobject.'] = ':une propriété sélectionner utilisée pour afficher les propriétés d\'un objetdedonnée.';
$xarML_PHPBackend_entries['Subform'] = 'Sousforme';
$xarML_PHPBackend_entries[': a property used to model subitems of a dataobject.'] = ': une propriété utiliser pour modeler les sous-objets d\'un objet de donnée';
$xarML_PHPBackend_entries['Using the <xar:data-* ...> tags in your templates'] = 'Utilisant l\'étiquette <xar:data-* ...> dans vos modèles';
$xarML_PHPBackend_entries['Available tags'] = 'Étiquettes Disponibles';
$xarML_PHPBackend_entries['Tags on properties:show their input or output displays, or their labels:'] = 'Les étiquettes sur les propriétés affichent leur entrée ou les affichages sortants, ou leurs étiquettes:';
$xarML_PHPBackend_entries['<xar:data-input ... />
<xar:data-output ... />
<xar:data-label ... />'] = '<xar:data-input ... /> <xar:data-output ... /> <xar:data-label ... />';
$xarML_PHPBackend_entries['Tags on objects:show their forms, or item displays (one item) or item lists (many items):'] = 'Les étiquettes des objets affichent leurs formes, ou affiche l\'objet (un objet) ou une liste d\'objet (plusieurs objets):';
$xarML_PHPBackend_entries['<xar:data-form ... />
<xar:data-display ... />
<xar:data-view ... />'] = '<xar:data-form ... /> <xar:data-display ... /> <xar:data-view ... />';
$xarML_PHPBackend_entries['Special tags can be used to retrieve properties and values related to one or more items'] = 'Les étiquettes spéciales peuvent être utilisé ppur retrouver des propriétés et des valeurs reliées à un ou plusieurs objets.';
$xarML_PHPBackend_entries['<xar:data-getitem ... />
<xar:data-getitems ... />'] = '<xar:data-getitem ... /> <xar:data-getitems ... />';
$xarML_PHPBackend_entries['Working with lists of items (I)'] = 'Travailler avec des listes d\'objets (I)';
$xarML_PHPBackend_entries['The data-getitems tag retrieves a list of properties and item values from a dataobject:'] = 'Les étiquettes data-getitems retrouve une liste des propriétés et des valeurs d\'objet comme objet de données';
$xarML_PHPBackend_entries['<xar:data-getitems properties="$properties" values="$values" object="$myobject" />'] = '<xar:data-getitems properties="$properties" values="$values" object="$myobject" />';
$xarML_PHPBackend_entries['The properties and values (from the name and value attributes) can be used to display the list of items (see below). The list can be restricted by passing the tag an array of itemids::'] = 'Les propriétés et des valeurs (à partir du nom et des attribut de valeur) peuvent être utilisées pour afficher une liste des objets (voir ci-dessous). La liste peut être restreinte en passant l\'étiquette dans un tableau des identifiants d\'objet:';
$xarML_PHPBackend_entries['<xar:data-getitems properties="$properties" values="$values" object="$myobject"
itemids="$idlist" />'] = '<xar:data-getitems properties="$properties" values="$values" object="$myobject" itemids="$idlist" />';
$xarML_PHPBackend_entries['We can build headers for the list using the data-label tag:'] = 'Nous pouvons fabriquer des en-têtes pour la liste en utilisant  l\'étiquette de donnée';
$xarML_PHPBackend_entries['<xar:foreach in="$properties" key="$name">
<th width="10%">
<xar:data-label property="$properties[$name]" />
</th>
</xar:foreach>'] = '<xar:foreach in="$properties" key="$name"> <th width="10%"> <xar:data-label property="$properties[$name]" /> </th> </xar:foreach>';
$xarML_PHPBackend_entries['When looping over the individual items, the value for item $id) can be added dynamically:'] = 'Quand vous outrepasser sur des objets individuels, la valeur pour l\'objet $identifiant) peut être ajoutée dynamiquement:';
$xarML_PHPBackend_entries['<xar:foreach in="$properties" key="$name">
<td class="xar-norm">
<xar:if condition="isset($values[$id][$name])">
<xar:data-output property="$properties[$name]"
value="$values[$id][$name]" />
<xar:else />
&nbsp;
</xar:if>
</td>
</xar:foreach>'] = '<xar:foreach in="$properties" key="$name"> <td class="xar-norm"> <xar:if condition="isset($values[$id][$name])"> <xar:data-output property="$properties[$name]" value="$values[$id][$name]" /> <xar:else /> &nbsp; </xar:if> </td> </xar:foreach>';
$xarML_PHPBackend_entries['Working with lists of items (II)'] = 'Travaillant avec des listes d.objets (II)';
$xarML_PHPBackend_entries['The basic data-view tag shows all the items of an object'] = 'L\'étiquette d\'aperçu de donnée de base affiche tous les objets d\'un objet';
$xarML_PHPBackend_entries['<xar:data-view object="$myobject" />'] = '<xar:data-view object="$myobject" />';
$xarML_PHPBackend_entries['The display of hte data can be adapted by using a custom template or layout'] = 'L,affichage de la donéehte peut être adapté en utilisant un modèle ou une disposition personnalisé';
$xarML_PHPBackend_entries['<xar:data-view object="$myobject" layout="list" />
<xar:data-view object="$myobject" template="mylist" />'] = '<xar:data-view object="$myobject" layout="list" /> <xar:data-view object="$myobject" template="mylist" />';
$xarML_PHPBackend_entries['We can specify that only certain fields (properties) be shown. They will be displayed in the order entered (left to right, top to bottom). We can also select to display only certain items, given by their ids.'] = 'Nous pouvons spécifier que seulement certains champs (propriétés) soient affichés. Ils seront affichés dans l\'ordre où ils ont été entrées (gauche à droite, de haut en bas). Vous pouvez aussi sélectionner d\'afficher seulement certains objets, donné par leurs identifiants.';
$xarML_PHPBackend_entries['<xar:data-view object="$myobject" fieldlist="exid,name" />
<xar:data-view object="$myobject" itemids="1,20,273" />'] = '<xar:data-view object="$myobject" fieldlist="exid,name" /> <xar:data-view object="$myobject" itemids="1,20,273" />';
$xarML_PHPBackend_entries['We can specify sorts, number of items to be displayed, and specify filters (given by the where attribute):'] = 'Nous pouvons trier spécifiquement, le nombre d\'objets à être afficher, et spécifier les filtres ( qui sont donnés par l\'attribut où)';
$xarML_PHPBackend_entries['<xar:data-view object="$myobject" sort="hitcount,title"
where="authorid eq 2" numitems="20" />'] = '<xar:data-view object="$myobject" sort="hitcount,title" where="authorid eq 2" numitems="20" />';
$xarML_PHPBackend_entries['Working with a single items'] = 'Travaillant avec des objets simples';
$xarML_PHPBackend_entries['We can display a form for entering an item, or simply display an object item\'s data:'] = 'Nous pouvons afficher un formulaire en entrant un objet, ou simplement afficher les données d\'un objet:';
$xarML_PHPBackend_entries['<xar:data-form object="$object" />
<xar:data-display object="$object" />'] = '<xar:data-form object="$object" /> <xar:data-display object="$object" />';
$xarML_PHPBackend_entries['The tags can accept attributes, for instance to customize their display:'] = 'Les étiquettes peuvent accepter les attributs, par exemple pour personnaliser leur affichage:';
$xarML_PHPBackend_entries['<xar:data-form object="$object" template="mytemplate" layout="mylayout" />'] = '<xar:data-form object="$object" template="mytemplate" layout="mylayout" />';
$xarML_PHPBackend_entries['In the above example the object $object already contains the item we are interested in. We can load a specific item by specifying an itemid attribute:'] = 'Dans l\'exemple ci-dessus l\'objet $object  contient déjà l\'item par lequel nous sommes intéressés. Nous pouvons charger un objet spécifique en spécifiant un ttribut d\'identifiant d\'objet:';
$xarML_PHPBackend_entries['<xar:data-form object="$object" itemid="666" />'] = '<xar:data-form object="$object" itemid="666" />';
$xarML_PHPBackend_entries['We can also assemble an object item by getting the item first via a getitem tag:'] = 'Nnous pouvons aussi assembler un objet en obtennat l\'objet en premier via une étiquette donnée';
$xarML_PHPBackend_entries['<xar:data-getitem properties="$properties" object="$myobject" itemid="$id" />'] = '<xar:data-getitem properties="$properties" object="$myobject" itemid="$id" />';
$xarML_PHPBackend_entries['Note that in this example the attribute object can refer to an onject or its name. The itemid attribute defines which item\'s data to retrieve, and the output is an array of fields with that data, called $properties. We can then use the $properties array to define a custom display, such as givne below (a custom form for input would simply use data-input, rather than data-output, tags):'] = 'Noter que dans cet exemple l\'attribut d\'objet peut référer à un objet ou à son nom. L\'attribut d\'un identifiant d\'objet définit quelle donée d\'objet à retrouver, et les sorties dans un tableau de champ avec ces données, appelés $propriétés. Nous pouvons utiliser le tableau des $propriétés pour définir un affichage personnalisé, tel que donnée ci-dessous (un formulaire personnalisé pour l\'entrée utiliserai seulement de l\'entrée de donnée, plutôt que les sorties de données, les étiquettes):';
$xarML_PHPBackend_entries['<xar:foreach in="$properties" key="$field">
<tr class="xar-norm xar-valign-top">
<td>
<xar:data-label property="$properties[$field]" />:
</td>
<td>
<xar:data-output property="$properties[$field]" />
</td>
</tr>
</xar:foreach>'] = '<xar:foreach in="$properties" key="$field"> <tr class="xar-norm xar-valign-top"> <td> <xar:data-label property="$properties[$field]" />: </td> <td> <xar:data-output property="$properties[$field]" /> </td> </tr> </xar:foreach>';
$xarML_PHPBackend_entries['Working with a single item fields'] = 'Travaillant avec des champs d\'un objet';
$xarML_PHPBackend_entries['We can assemble the field from scratch by stipulating its attributes in a tag:'] = 'Nous pouvons assembler le champ à partir de rien en stipulant ces attributs dans une étiquette:';
$xarML_PHPBackend_entries['<xar:set name="myval">\'hello\'</xar:set>
<xar:data-input name="greeting" type="textbox" value="$myval" />'] = '<xar:set name="myval">\'hello\'</xar:set> <xar:data-input name="greeting" type="textbox" value="$myval" />';
$xarML_PHPBackend_entries['By passing the tag a dataproperty object, it will take on the properties of that object (type, value etc.)'] = 'En faisant passer à l\'étiquette un objet de propriété de données, il prendra les propriétés de cet objet (type, valeur, etc.)';
$xarML_PHPBackend_entries['<xar:data-input property="$myproperty" />'] = '<xar:data-input property="$myproperty" />';
$xarML_PHPBackend_entries['We can also override properties by explicitly adding other values as attributes:'] = 'Nous pouvons aussi remplacer les propriétés en ajoutant explicitement d\'autres valeurs comme attributs:';
$xarML_PHPBackend_entries['<xar:set name="myval">\'hello\'</xar:set>
<xar:data-input property="$myproperty" value="$myval" />'] = '<xar:set name="myval">\'hello\'</xar:set> <xar:data-input property="$myproperty" value="$myval" />';
$xarML_PHPBackend_entries['Dataproperty examples'] = 'Exemples de propriété de donnée';
$xarML_PHPBackend_entries['Dataproperties can be deployed as fields in a dataobject or as standalone widgets. The following are some examples of standalone dataproperties that can be included as tags on web pages.'] = 'Les propriétés de données peuvent être déployer comme champs dans un objet de données ou a des objets seuls. Voici des exemples de propriétés de données seules qui peuvent être inclut comme étiquettes sur les pages web.';
$xarML_PHPBackend_entries['Displays a dropdown of Xaraya groups:'] = 'Afficher une liste déroulante pour les groupes de Xaraya:';
$xarML_PHPBackend_entries['<xar:data-input type="grouplist"/>'] = '<xar:data-input type="grouplist"/>';
$xarML_PHPBackend_entries['Displays a configurable group of radio buttons for input:'] = 'Afficher un groupeconfigurable de  boutons de radio pour l\'entrée:';
$xarML_PHPBackend_entries['<xar:set name="options">
array(
array(\'id\' => \'red\',
\'name\' => \'Dark red\'),
array(\'id\' => \'green\',
\'name\' => \'Light green\'),
)
</xar:set>
<xar:data-input type="radio"
options="$options" value="green"
layout="vertical"/>'] = '<xar:set name="options"> array( array(\'id\' => \'red\', \'name\' => \'Dark red\'), array(\'id\' => \'green\', \'name\' => \'Light green\'), ) </xar:set> <xar:data-input type="radio" options="$options" value="green" layout="vertical"/>';
$xarML_PHPBackend_entries['Displays a configurable group of checkboxes for input:'] = 'Afficher un groupeconfigurable de case à cocher pour l\'entrée:';
$xarML_PHPBackend_entries['<xar:set name="options">
array(
array(\'id\' => \'red\',
\'name\' => \'Dark red\'),
array(\'id\' => \'green\',
\'name\' => \'Light green\'),
)
</xar:set>
<xar:data-input type="checkboxlist"
options="$options" value="green"
layout="vertical"/>'] = '<xar:set name="options"> array( array(\'id\' => \'red\', \'name\' => \'Dark red\'), array(\'id\' => \'green\', \'name\' => \'Light green\'), ) </xar:set> <xar:data-input type="checkboxlist" options="$options" value="green" layout="vertical"/>';
$xarML_PHPBackend_entries['Displays the user name of the current user:'] = 'Afficher le nom d\'utilisateur de l\'utilisateur actuel:';
$xarML_PHPBackend_entries['<xar:data-output type="username"
user="myself"/>'] = '<xar:data-output type="username" user="myself"/>';
$xarML_PHPBackend_entries['Displays a link to a url in an icon:'] = 'Afficher un lien d\'un url dans un icône:';
$xarML_PHPBackend_entries['<xar:data-output type="urlicon"
link="http://www.xaraya.com"/>'] = '<xar:data-output type="urlicon" link="http://www.xaraya.com"/>';
$xarML_PHPBackend_entries['Displays a dropdown of the files in a directory:'] = 'Afficher une liste déroulante pour les fichiers dans le registre:';
$xarML_PHPBackend_entries['<xar:data-input type="filepicker"
basedir="var/messaging/roles"/>'] = '<xar:data-input type="filepicker" basedir="var/messaging/roles"/>';
$xarML_PHPBackend_entries['Displays a popup calendar for dae input:'] = 'Affiche un calendrier apparaissant à l\'écran pour l\'entrée dae';
$xarML_PHPBackend_entries['<xar:data-input type="calendar"/>'] = '<xar:data-input type="calendar"/>';
?>