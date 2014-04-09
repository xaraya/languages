<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Official Icon'] = 'Icône officiel';
$xarML_PHPBackend_entries['What is it?'] = 'Quest-ce que c\'est';
$xarML_PHPBackend_entries['The Privileges module manages privileges on a Xaraya site. Privileges give users and groups
different types of access (viewing, changing, deleting etc.) to resources and content on the site. They are the basic components of Xaraya\'s security system. The Privileges module is a core module within Xaraya and cannot be removed.'] = 'Le module des privilèges gérent les privilèges sur un site Xaraya. Les privilèges donnent aux utilisateurs et aux groupes différents types d\'accès (voir,changer,supprimer,etc) aux ressources et au cpntenu sur le site. Ils sont les composants de base du système de sécurité Xaraya. Le module des privilèges est un module du noyau dans Xaraya et ne peut pas être supprimés.';
$xarML_PHPBackend_entries['Detail information on this module can be found'] = 'De l\'information détaillée  sur ce module peut être trouvé';
$xarML_PHPBackend_entries['Here are some of the things you can do with privileges:'] = 'Voici quelques unes des choses que vous pouvez faire avec les privilèges:';
$xarML_PHPBackend_entries['Xaraya\'s privileges are extremely flexible. You can define privileges at the level
of site, realms, modules, component classes within modules, or single instances of
those classes.'] = 'les privilèges de Xaraya sont extrêmement flexible. Vous ppouvez définir les privilèges ua niveau du site, des domaines, des modules, les composants de classe dans les modules ou des examples simples de ces classes.';
$xarML_PHPBackend_entries['You can use privileges as building blocks. Assemble them into compound privileges
tailored to any specific role on the site.'] = 'Vous pouvez utiliser les privilèges comme blocs de construction. Les assembler dans les privilèges composés conçu pour n\'importe quel rôle spécifique sur le site.';
$xarML_PHPBackend_entries['You can assign privileges to roles which then pass them on to their children in the
roles hierarchy through inheritance.'] = 'Vous pouvez assiger les privilèges aux rôles qui les passent ensuite à leur enfants dans la hiérarchie des rôles à traver l\'héritage.';
$xarML_PHPBackend_entries['Using the realms functionality you can subdivide one site into many "virtual" sites
sharing the same resources.'] = 'En utilisant la fonctionnalité des domaines vous pouvez sous diviser un site en plusieurs sites \'\'virtuels\'\' partageant les mêmes ressources.';
$xarML_PHPBackend_entries['Concepts'] = 'Concepts';
$xarML_PHPBackend_entries['Masks'] = 'Masques';
$xarML_PHPBackend_entries['Masks are the "barriers to entry" that restrict access to code and data. The are created during the installation of Xaraya, or whenever a new module is added. Masks are deployed in'] = 'Les masques sont les \'\'barrières d\'entrée\'\' qui restreigne l\'accès au code et au donnée. Il ssont créés durant l\'installation de Xaraya, ou à n\'importe quel moment où un nouveau module est ajouté. Les masques sont déployés dans';
$xarML_PHPBackend_entries['security checks'] = 'vérifications de la sécurité';
$xarML_PHPBackend_entries['throughout the system. A security check compares the current user\'s privileges against its mask, and decides whether to grant access or not.'] = 'à travers le système. Une vérification de sécurité compare les privilèges de l\'utilisateur actuel contre les masques, et décide si il doit accorder l\'accès ou non';
$xarML_PHPBackend_entries['Privileges grant certain acess rights to the users or groups they are assigned to. Most modules and Xaray itself come with a set of predefined privileges that can be used, but site administrators can create. modify and assign new privileges as required. You can also combine privileges by using them as elements to create compound privileges. There is no limit to the number of privileges you can create or their levels of nesting.'] = 'Les privilèges donnent un certain droits d,accès aux utilisateurs et au groupes auquels ils sont assignées. La pluspart des modules et Xaraya lui-même viennent avec un ensemble de privilèges pré définis qui peuvent être utilisé, mais les administrateurs du site peuvent créer, modifier, et assigner de nouveaux privilèges au besoin. Vous pouvez aussi combiner les privilèges en les utilisant comme éléments pour créer des privilèges combinés. Il n\'y a pas de limite aux nombres de privilèges que vous pouvez créer ou à leurs niveaux de résidence.';
$xarML_PHPBackend_entries['Access Levels'] = 'Niveaux d\'accès';
$xarML_PHPBackend_entries['When you create a privilege that applies to a given module, component and instance, you give it an access level whcih represents the rights a user with the provilege has in the area it applies to. The access levels are:'] = 'Quand vous créez un privilège qui s\'applique a un module donnée, un composant ou un incident, vous lui donnez un niveau d\'accès qui représente les droits qu\'un utilisateur avec le privilège a dans la zone à laquelle il s\'applique. Les niveaux d\'accès sont:';
$xarML_PHPBackend_entries['None:'] = 'Aucun';
$xarML_PHPBackend_entries[' no access'] = 'pas d\'accès';
$xarML_PHPBackend_entries['Overview:'] = 'Aperçu';
$xarML_PHPBackend_entries[' access to some part of the content, but not full content. This level is often used deciding which items in a list to show.'] = 'accès à certaines parties du contenu, mais pas au contenu entier. Ce niveau est souvent utilisé pour décider quels objets dans une liste seront affichés.';
$xarML_PHPBackend_entries['Read:'] = 'lire';
$xarML_PHPBackend_entries[' full read access'] = 'accès de lecture total';
$xarML_PHPBackend_entries['Comment:'] = 'Commentaire:';
$xarML_PHPBackend_entries[' allows a user to submit content eg submit a document, submit a
comment'] = 'permet à un utilisateur de soumettre le contenu ex. soumettre un document, soumettre un commentaire';
$xarML_PHPBackend_entries['Moderate:'] = 'Modérer:';
$xarML_PHPBackend_entries[' may vary from module to module but usually allows editing of other
users\' content'] = 'peut varier d\'un module à un autre module mais permet habituellement d\'éditer le contenu des autres utilisateurs';
$xarML_PHPBackend_entries['Edit:'] = 'Éditer:';
$xarML_PHPBackend_entries[' can edit content but not add or delete'] = 'peut éditer du contenu mais pas ajouter ou supprimer';
$xarML_PHPBackend_entries['Add:'] = 'Ajouter:';
$xarML_PHPBackend_entries[' can add and edit but not delete'] = 'peut ajouter et éditer mais ne peut pas supprimer';
$xarML_PHPBackend_entries['Delete:'] = 'Supprimer:';
$xarML_PHPBackend_entries[' can delete content as well as add and edit. This level is also known as'] = 'peut supprimer du contenu aussi bien qu\'en ajouter ou en éditer. ce niveau est aussi connu comme';
$xarML_PHPBackend_entries['Manage'] = 'Gérer:';
$xarML_PHPBackend_entries[', and is usually used to allow full modification of a module\'s data, without access to its configuration settings.'] = ', et est habituellement utilisé pour permettre la modification complète des données d\'un module, sans l\'accès à ces paramètres de configuration.';
$xarML_PHPBackend_entries['Admin:'] = 'Admin:';
$xarML_PHPBackend_entries[' full administration access'] = 'Accès complet à l\'administration';
$xarML_PHPBackend_entries['.
Note that the exact meaning of the access levels will vary somewhat across modules. Module authors are free to define how access levels apply to their module(s).'] = '.Note que le sens exact des niveaux d\'accès variera un peu à travers les modules. Les auteurs de module sont libres de définir comment les niveaux d\'accès s\'appliquent à leur (s) module (s).';
$xarML_PHPBackend_entries['Predefined Privileges'] = 'Privilèges pré définis';
$xarML_PHPBackend_entries['Xaraya comes preconfigured with a minimal set of privileges that are loaded when you run the installer. These will vary according to the configuration you chose. Examples are:'] = 'Xarya vient pré configuré avec un ensemble minimum de privilèges qui sont chargés quand vous éxécuter l\'installation. Ceux-ci varieront en accord avec la configuration que tu choisis, Les exemples sont:';
$xarML_PHPBackend_entries['Administration:'] = 'Le module des privilèges n\'a pas de';
$xarML_PHPBackend_entries['a privilege that gives a role complete access to all
resources on the site. At installation this privilege is assigned to the role Administrators group and is inherited by the default site administrator (known as'] = 'un privilège qui donne a un rôle un accès complet à toutes les ressources sur le site. À l\'installation ce privilège est assigné au groupe d\'administrateurs de rôle et est hérité par l\'administrateur par défaut du site (cconu comme';
$xarML_PHPBackend_entries['admin'] = 'admin';
$xarML_PHPBackend_entries[').'] = ').';
$xarML_PHPBackend_entries['CasualAccess:'] = 'Accès casuel';
$xarML_PHPBackend_entries['this is the privilege assigned to unregistered users (known as'] = 'ceci est un privlège assigné aux utilisateurs non-enregistrés (connu comme';
$xarML_PHPBackend_entries['anonymous'] = 'anonyme';
$xarML_PHPBackend_entries[') on the site. It is initially defined to allow viewing access of the front page, as well as
access to the login block.'] = ')sur le site. Il est défini initialement pour permettre l\'accès visuel de la page d\'accueil, aussi bien que l\'accès au bloc de connexion.';
$xarML_PHPBackend_entries['GeneralLock:'] = 'Vérouillage Général';
$xarML_PHPBackend_entries['a privilege that restricts access to certain basic roles and privileges the system requires, such as the default admininstrator. This is to avoid inadvertent removal.'] = 'un privlège qui restreint l\'accès à certains rôles de bases et à certains privilèges que le système requiert, tel que l\'administrateur par défaut. C\'est pour éviter la suppression par inadvertance.';
$xarML_PHPBackend_entries['All privileges in the system can be changed or removed but it is recommended you do not remove the default and lock privileges unless you are sure you understand what you are doing.'] = 'Tout les privilèges dans le système peuvent être changer ou supprimer mais il est recommandé que vous ne supprimiez pas les privilèges par défaut et de vérouillage à moins que d\'être certain de comprendre ce que vous faites.';
$xarML_PHPBackend_entries['The Admin interface'] = 'L\'interface de l\'Admin';
$xarML_PHPBackend_entries['As an administrator, you can change the module\'s configuration by pointing your browser to the configuration page'] = 'En tant qu\'administrateur, vous pouvez changer la configuration du module en pointant votre navigateur dans la page de configuration.';
$xarML_PHPBackend_entries['Admin Menu → Privileges → Modify Configuration'] = 'Menu Admin→ Privilèges → Modifier la Configuration';
$xarML_PHPBackend_entries['. The configuration page includes the standard display options common to all core modules (see the Base module overview for an explanation of these).'] = '.La page de configuration inclut les options d\'affichage commun à tous les modules de noyau (voir l\'aperçu du module de base pour une explication de ceux-ci)';
$xarML_PHPBackend_entries['In addition, this module also supports the following configuration options:'] = 'En plus, ce module supporte aussi les options de configuration suivantes:';
$xarML_PHPBackend_entries['Exception redirect:'] = 'Exception et redirection';
$xarML_PHPBackend_entries[' insufficient access rights usually result in an error message. If this option is checked users that are not logged in will be redirected to the login page instead..'] = 'droits d\'accès insuficiant résulte habituellement en un message d\'erreur. Si cette option est cocher les utilisateurs qui sont connectés seront redirigé à la page de connexion à la place.';
$xarML_PHPBackend_entries['Last resort admin:'] = 'admin de dernier recours';
$xarML_PHPBackend_entries[' lets you create an emergency user that can be useful in recovering a site if normal users are shut out because privileges have been misconfigured or corrupted. Checking this option will display a link to the page where the last resort admin is created.'] = 'vous laisse créer un utilisateur d\'urgence qui peut être utile pour récupérer un site si les utilisateurs normaux se voient interdire l\'entrée parce que les privilèges sont mal configurés ou corrompus. Cocher cette option affichera un lien sur la page où l\'admin de dernier recours est créer';
$xarML_PHPBackend_entries['Realms support:'] = 'Support des domaines';
$xarML_PHPBackend_entries[' checking this option opens a page which lets you define the behavior of'] = 'cocher cette option ouvre une page qui vous lisse définir le comportement de';
$xarML_PHPBackend_entries['realms'] = 'Domaines';
$xarML_PHPBackend_entries['in your privileges, and also an entry on the Privileges menu for creating and managing realms. Realms are used in conjunction with privileges to create different "views" of a site according to which realms users "belong" to. For more information on realms see'] = 'dans vos privilèges, et aussi une entrée dans le menu des privilèges pour créer et gérer les domaines. Les domaines sont utilisés en conjonction avec les privilèges pour créer des \'\'vues\'\' d\'un site conformément aux domaines auquel les utilisateurs \'\'appartinent\'\'. Pour plus d\'information sur les domaines voyez';
$xarML_PHPBackend_entries['Xaraya Realms'] = 'Domaines Xaraya';
$xarML_PHPBackend_entries['Testing settings:'] = 'paramètres de test';
$xarML_PHPBackend_entries[' lets you display debugging information on privleges to certain users. This is useful for testing new privilege situations on running sites.'] = 'vous laisse afficher de l\'information de débogage sur les privilèges de certains utilisateurs. Il est utile de tester les nouvelles situations de privilèges sur les sites en éxécution';
$xarML_PHPBackend_entries['Clicking on the'] = 'Cliquer sur le';
$xarML_PHPBackend_entries['link in the Admin menu gives you an overview of all the privileges on your system, both those assigned to roles and those unassigned. Compound privileges are collapsed, but you can click on them to open them up and view their components.'] = 'lien dans le menu Admin vous donnes un aperçu de tous les privilèges dans votre système, autant ceux assignés aux rôles et ceux non assignés. Les privilèges combinées sont effrondés, mais vous pouvez cliquer sur eux pour les ouvrir et voir leurs composants';
$xarML_PHPBackend_entries['link in the Admin menu lets you create a new unassigned privilege.When adding or modifying a privilege, you can define it to have its own access rights, or simply to serve as a container for other privileges.'] = 'lien dans le menu Admin vous laisser créer un nouveua privilège non assigné. Quand vous ajouter ou modifier un privilège, vous pouvez le définir afin qu\'il aille ses propres droits d\'accès, ou simplement pour servir comme contenant pour les autres privilèges.';
$xarML_PHPBackend_entries['link in the Admin menu lets you assign existing privileges to existing users and groups..'] = 'lien dans le menu Admin vous laisse assigner les privilèges existants pour les utilisateurs ou les groupes existants...';
$xarML_PHPBackend_entries['link in the Admin menu lets create and manage realms. This menu itme is available only if realms support is active (see above).'] = 'lien dans le menu Admin vous laisse créer et gérer les domaines. Cet objet du mneu est disponible seulement si le support des domaines est actif (voir ci-dessus)';
$xarML_PHPBackend_entries['Available Blocks'] = 'Blocs disponibles';
$xarML_PHPBackend_entries['The Privileges module has no blocks.'] = 'Le module des privilèges n\'a pas de blocs';
$xarML_PHPBackend_entries['Available Dataproperties'] = 'Propriétés de données disponibles';
$xarML_PHPBackend_entries[': accepts as input or displays the settings for an (extended) security check.'] = ': accepte comme entrée ou affiche les paramètres pour une vérification de sécurité (élargie)';
$xarML_PHPBackend_entries['Privilegestree'] = 'Arbre des privilèges';
$xarML_PHPBackend_entries[': displays a tree of privileges.'] = ': affiche un arbre des privilèges';
$xarML_PHPBackend_entries['Available Hooks'] = 'Crochets disponibles';
$xarML_PHPBackend_entries['The Privileges module has no hooks'] = 'Le module des privilèges n\'a pas de crochets';
?>