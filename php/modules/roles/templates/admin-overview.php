<?php
global $xarML_PHPBackend_entries;
global $xarML_PHPBackend_keyEntries;
$xarML_PHPBackend_entries['Official Icon'] = 'Icône officiel';
$xarML_PHPBackend_entries['Overview'] = 'Aperçu';
$xarML_PHPBackend_entries['What is it?'] = 'Quest-ce que c\'est?';
$xarML_PHPBackend_entries['The Roles module lets you create and manage roles on your Xaraya site. Roles are
representations of the site\'s registered users and the different groups they can belong to. The Roles module is a core module within Xaraya and cannot be removed.'] = 'Le module des rôles vous laisse créer et gérer les rôles sur votre site Xaraya. Les rôles sont des représentations des utilisateurs enregistrés sur le site et des différents groupes auxquels ils appartiennent. Le module des rôles est un module du noyau qui fait partie de Xaraya et ne peut pas être supprimé.';
$xarML_PHPBackend_entries['Detail information on this module can be found'] = 'De l\'information détaillée sur ce module peut être trouvée';
$xarML_PHPBackend_entries['Concepts'] = 'Concepts';
$xarML_PHPBackend_entries['Roles represent'] = 'Rôles représentés';
$xarML_PHPBackend_entries['and'] = 'et';
$xarML_PHPBackend_entries['groups of users'] = 'groupe d\'utilisateurs';
$xarML_PHPBackend_entries['in Xaraya. Roles can be members of other roles, to any degree. You can, for instance, use roles to represent a company\'s organization chart, or class enrolements at a university.'] = 'dans Xaraya. Les rôles peuvent être des membres d\'autres rôles, à n\'importe quel degré. Vous pouvez, par exemple, utiliser les rôles pour représenter une charte d\'organisation d\'une compagnie ou les enrôlements dUne classe à l\'université.';
$xarML_PHPBackend_entries['By assigning privileges to roles, you define what a given role may or may not do on the site. Moreover, roles inherit the privileges of their ancestors, so in assigning a role to a specific group, it automatically has the privileges common to the group. The inherited privileges can be supplemented or constrained by assigning further privileges directly to the role.'] = 'En assignant les privilèges aux rôles, vous définissez ce qu\'un rôle donné peut ou ne peut pas faire sur le site. En plus, les rôles héritent les privilèges de leurs ancêtres, alors en assignant un rôle à un groupe spécifique, cela rend le privilège automatiquement commun au groupe. Les privilèges hérités peuvent être augmenter ou restreint en assigannt plus de privilèges directement au rôle.';
$xarML_PHPBackend_entries['Default Roles in Xaraya'] = 'Rôles par défaut dans Xaraya';
$xarML_PHPBackend_entries['The roles on your site are arranged in a tree, at the top of which is a role called Everybody, which represents the "group of all groups" on your site. Every user and every group is a member or descendent of Everybody. The structure of the default roles that are installed with Xaraya is shown below:'] = 'Les rôles de votre site sont arrangés dans un arbre, au dessus- duquel il y  a un rôle appelé Tout le monde, qui représentent le \'\'groupe de tous les groupes\'\' sur votre site. Chaque utilisateur et chaque groupe est un membre ou un descendant de tout le monde. La structure des rôles par défaut qui sont installés avec Xaraya est affiché ci-dessous.';
$xarML_PHPBackend_entries['Everybody (group)
|
|---Anonymous (user)
|
|---Administrators (group)
| |
| |---Admin (user)
|
|---SiteManagers (group)
| |
| |---SiteManager (user)
|
|---Users (group)'] = 'Tout le monde (groupe) | |--Anonyme (groupe) | |-- Administrateurs  (groupe) | | | |---Admin (utilisateur) | |--- Gestionnaires de site (groupe) | | | |--- Gestionnaires de site (utilisateur) | |--- Utilisateurs (groupe)';
$xarML_PHPBackend_entries['At installation time you are asked to choose a configuration that affects preinstalled
privileges assigned to the default roles. The privileges can be changed after installation.
The default roles and minimum privileges at installation time are.'] = 'Au moment de l\'installation vous vous verrez demander de choisir une configuration qui affecte les privilèges préinstallés assignés au rôles par défaut. Les privilèges peuvent être changer après l\'installation. Les rôles par défaut et les privilèges minimum aux moment de l\'installation sont.';
$xarML_PHPBackend_entries['Everybody:'] = 'Tout le monde';
$xarML_PHPBackend_entries[' the role containing all other roles. The access privileges are defined by the configuration chosen.'] = 'le rôle contient tous les autres rôles. Les privilèges d\'accès sont définispar la configuration choisie.';
$xarML_PHPBackend_entries['Anonymous:'] = 'Anonyme:';
$xarML_PHPBackend_entries[' a user that represents the unregistered users on your site. The access privileges are defined by the configuration chosen. This role can be initially configured with privileges only to access the front page of the site and the login block.'] = 'un utilisateur qui représente les utilisateurs non enregistrés de votre site. Les privilèges d\'accès sont définis par la configuration choisie. Ce rôle peut être configuré intialement avec des privilèges seulement pour accéder à la page d\'accueil du site et le bloc de connexion.';
$xarML_PHPBackend_entries['Administrators:'] = 'Administrateurs:';
$xarML_PHPBackend_entries[' a group that has administration privileges. By default it has complete access to the site.'] = 'Un groupe qui a des privilèges d\'administration. Par défaut il a un accès complet au site.';
$xarML_PHPBackend_entries['Admin:'] = 'Admin:';
$xarML_PHPBackend_entries[' a member of Administrators. This is the Admin role you create with the Xaraya installer. It inherits the privileges of its parent group.'] = 'un membre des administrateurs. Cela esr le rôle d\'admin que vous avez crée avec l\'installeur Xaraya. Il hérite des privilèges du groupe parent.';
$xarML_PHPBackend_entries['SiteManagers:'] = 'Gestionnnaires de site:';
$xarML_PHPBackend_entries[' a group that has DELETE privileges. The members of this group can modify, add and delete data throughout the site, but are barred from changing the configuration settings of modules.'] = 'un groupe qui a des privilèges de suppression. Les membres de ce groupe peuvent modifier, ajouter et supprimer les données à travers le site, mais sont barrer de changer la configuration des paramètres des modules.';
$xarML_PHPBackend_entries['SiteManager:'] = 'Gestionnnaires de site:';
$xarML_PHPBackend_entries[' a member of SiteManagers. This is the default SiteManager role you create with the Xaraya installer. It inherits the privileges of its parent group.'] = 'un membre des gestionnaires du site. Ceci est le rôle de gestionnaire du site par défaut que vous créez avec l\'installeur Xaraya. Il hérite des privilèges de son groupe parent';
$xarML_PHPBackend_entries['Users:'] = 'Utilisateurs:';
$xarML_PHPBackend_entries[' a group that normally holds registered users of the site. N.B.: this role does not come preconfigured with any privileges.'] = 'un groupe qui normalement contient les utilisateurs enregistrés du site. N.B. ce rôle ne vient pas pré ocnfiguré avec des privilèges.';
$xarML_PHPBackend_entries['Its members will not have access to the site until you assign some privileges.'] = 'Ces membres n\'auront pas accès au site avant que vous assigner quelques privilèges.';
$xarML_PHPBackend_entries['To reduce the risk of inadvertent damage Xaraya places constraints on how preconfigured roles can be changed or removed. However, you can define as many more roles in the tree as you wish in whatever configuration you choose.'] = 'Pour réduire le risque de dommage par inadvertance Xaraya place des restrictions sur comment pré configuré les rôles peuvent être changé et supprimé. Cependant, vous pouvez définir autant de rôles dans l\'arbre que vous le souhaitez et n\'importe quelle configuration que vous choissez.';
$xarML_PHPBackend_entries['Designated Site Administrator'] = 'Administrateur désigné du site';
$xarML_PHPBackend_entries['The designated site admin is a role that is distinguished among others. Xaraya keepts track fo this role\'s ID, and its value can be retrieved at any time through a special module variable:'] = 'L\'admin du site désigné est un rôle qui se distingue des autres. Xaraya garde trace de ces identifiants de rôles et sa vlaeur peut être retrouvée à n\'importe quel moment à travers une variable spécial de module.';
$xarML_PHPBackend_entries['xarModVars::get(\'roles\', \'admin\')'] = 'xarModVars::get(\'roles\', \'admin\')';
$xarML_PHPBackend_entries['The designated site admin is used in several places in Xaraya for privileged access. It can be thought of as the "root" user of a Xaraya site and is by convention a member of the Administrator\'s group (although Xaraya places no restriction on which user can be the designated site admin.'] = 'L\'admin du site désigné est utilisé dans plusieurs endroits dans Xaraya pour un accès privilégier. Il peut être considérer comme un utilisateur \',racine\'\' du site de Xaraya et est par convention un membre du groupe des administrateurs (même si Xaraya ne place aucune restriction sur quel utilisateur peut être désigné comme admin du site.';
$xarML_PHPBackend_entries['The Admin interface'] = 'L\'interface de L\'Admin';
$xarML_PHPBackend_entries['As an administrator, you can change the module\'s configuration by pointing your browser to the configuration page'] = 'Comme administrateurs vous pouvez changer la configuration du module en pointant votre navigateur dans la page de configuration';
$xarML_PHPBackend_entries['Admin Menu → Roles → Modify Configuration'] = 'Menu Admin  →Rôles → Modifier la configuration';
$xarML_PHPBackend_entries['. The configuration page includes the standard display options common to all core modules (see the Base module overview for an explanation of these).'] = 'La page de configuration inclut les options d\'affichage standard communes à tout les modules du noyau (voir l\'aperçu du module de base pour une expliaction de ceux-ci).';
$xarML_PHPBackend_entries['In addition, this module also supports the following configuration options:'] = 'En plus, ce module supporte aussi les options de configuration suivante:';
$xarML_PHPBackend_entries['Designated site administrator:'] = 'Administrateur désigné du site:';
$xarML_PHPBackend_entries[' defines a "root" administrator for the site who is guaranteed to have unrestricted access at all times. The designated site admin is by definition a member of the Administrators group.'] = 'défini comme un administrateur \'\'racine\'\' pour ce site qui est garanti d\'avoir un accès sans restrictions à n\'importe quel moment. L\'admin désigné du site est par définition un membre du groupe d\'administrateurs.';
$xarML_PHPBackend_entries['Default group for new users:'] = 'groupe par défaut pour les nouveaux utilisateurs:';
$xarML_PHPBackend_entries[' When creating new users on the site they will automatically be made members of this group, unless specifically overridden.'] = 'Quand vous créer de nouveaux utilisateurs ils seront automatiquement reconnu comme membres de ce groupe, à moins spécifiquement remplacer.';
$xarML_PHPBackend_entries['Authentication module:'] = 'module d\'Authentification';
$xarML_PHPBackend_entries[' defines the module to be used when users log in to the site. The default is the core Authsystem module.'] = 'définir le module à être utilisé quand les utilisateurs se connectent au site. Par défaut c\'est le module Authsyst';
$xarML_PHPBackend_entries['Registration module:'] = 'module de registration:';
$xarML_PHPBackend_entries[' defines the module to be used for registering new users.'] = 'définir le module à être utilisé pour enregistré les nouveaux utilisateurs.';
$xarML_PHPBackend_entries['User variables:'] = 'variables d\'utilisateur:';
$xarML_PHPBackend_entries[' Common variable such as Last Login, User Home Page, Last Password Update and Timezone can be activated for roles as needed.'] = 'Variable commune tel que la dernière connexion, la page d\'accueil de l\'utilisateur, la dernière mise à jour du mot de passe et le fuseau horraire peuvent être activés pour les rôles au besoin.';
$xarML_PHPBackend_entries['User hooks:'] = 'Crochets d\'utilisateur:';
$xarML_PHPBackend_entries[' access to user hooks defined for roles in the dynamicdata module..'] = 'accès aux crochets d\'utilisateur définis pour les rôles dans le module de données dynamique du module...';
$xarML_PHPBackend_entries['Account options:'] = 'Options de compte:';
$xarML_PHPBackend_entries[' various configurations pertaining to managing and displaying users\' accounts.'] = 'configurations variés qui permettent autant de gérer que d\'afficher les comptes d\'utilisateurs.';
$xarML_PHPBackend_entries['Clicking on the'] = 'Cliquer sur le';
$xarML_PHPBackend_entries['Groups & Users'] = 'Groupes & Utlisateurs';
$xarML_PHPBackend_entries['link in the Admin menu displays a tabbed interface to roles listings with a variety of display options. You can also add users and groups from this view, delete or modify users, and assign and test their privileges, and view them by various sorting and selection criteria.'] = 'Un lien dans le menu Admin affiche une interface étiquettée dans une liste de rôles avec une variété d\'options d\'affichage. Vous pouvez aussi ajouter des utilisateurs et des groupes de cet aperçu, supprimer ou modifier des utilisateurs et tester leurs privilèges, et les voir en utilisant des tris variés et des critères de sélection.';
$xarML_PHPBackend_entries['Messaging'] = 'Envoyer un message';
$xarML_PHPBackend_entries['link in the Admin menu lets you configure email notifications to users on registration, change of passwords, and account activation, including template customization. You can also email groups of users from this view.'] = 'Un lien dans le menu Admin vous laisse configurer les notifications par courriel aux utilisateurs lors de l\'enregistrement, du changement de mot de passe et l\'activation de compte, incluant une personnalisation de modèle. Vous pouvez aussi envoyer un courriel aux utilsateurs à partir de cet aperçu.';
$xarML_PHPBackend_entries['Recall/Purge'] = 'Rappeler/Purger';
$xarML_PHPBackend_entries['link in the Admin menu lets you recover users or groups that have been deleted, or purge them for good from the system.'] = 'Un lien dans le menu Admin vous laisse remettre des utilisateurs ou des groupes qui ont été supprimés, ou les purger pour de bon du système';
$xarML_PHPBackend_entries['link in the Admin menu lets you lock your site to registration or login during maintenance or updates.'] = 'Un lien dans le menu Admin vous laisse vérouiller votre site pour l\'enregistrement ou la connexion durant la maintenance ou les mise à jour.';
$xarML_PHPBackend_entries['Available Blocks'] = 'Blocs disponibles';
$xarML_PHPBackend_entries['Language Block'] = 'Bloc de langage';
$xarML_PHPBackend_entries[': allows user to select the language the site displays in to him/her'] = 'permet à l\'utilisateur de délectionner la langage d\'affichage pour lui/elle';
$xarML_PHPBackend_entries['Online Block'] = 'Bloc en ligne';
$xarML_PHPBackend_entries[': shows information on the number visiting your site right now'] = ': afficher l\'information de combien visitent votre site en ce moment même';
$xarML_PHPBackend_entries['User Block'] = 'Bloc d\'utilisateurs';
$xarML_PHPBackend_entries[': displays information on the current user\'s profile'] = ': afficher l\'informtaion du profile de l\'utilisateurs actuel';
$xarML_PHPBackend_entries['Available Dataproperties'] = 'propriétés de données disponibles';
$xarML_PHPBackend_entries['Affero'] = 'Affero';
$xarML_PHPBackend_entries[': accepts as input or displays a user\'s Affero user name.'] = 'accepter comme entrée, ou afficher le nom d\'utilisateur d\'un utilisateur Affero';
$xarML_PHPBackend_entries['AIM'] = 'AIM';
$xarML_PHPBackend_entries[': accepts as input or displays a user\'s AIM user name.'] = 'accepter comme entrée, ou afficher le nom d\'utilisateur d\'un utilisateur AIM.';
$xarML_PHPBackend_entries[': accepts as input or displays an email address.'] = 'accepter comme entrée, ou afficher une addresse de courriel.';
$xarML_PHPBackend_entries['Grouplist'] = 'Liste de groupe';
$xarML_PHPBackend_entries[': displays a list of groups of the site as a dropdown.'] = 'Afficher une liste des groupes sur le site comme liste déroulante.';
$xarML_PHPBackend_entries['ICQ'] = 'ICQ';
$xarML_PHPBackend_entries[': accepts as input or displays an ICQ user address.'] = 'accepter comme entrée, ou afficher une addresse d\'utilisateur ICQ';
$xarML_PHPBackend_entries[': accepts as input or displays a user\'s display name.'] = 'accepter comme entrée, ou afficher le nom d\'utilisateur';
$xarML_PHPBackend_entries[': accepts a password as input.'] = 'accepter un mot de passe comme entrée';
$xarML_PHPBackend_entries['Rolestree'] = 'Arbre des rôles';
$xarML_PHPBackend_entries[': displays a tree of groups and users.'] = 'Afficher un arbre des groupes et des utilisateurs.';
$xarML_PHPBackend_entries['Social Profile'] = 'Profile Social';
$xarML_PHPBackend_entries[': manages a user\'s profile on social network sites.'] = 'gérer un profile d\'utilisateur sur des sites de réseaux sociaux.';
$xarML_PHPBackend_entries['Userlist'] = 'liste d\'utilisateur';
$xarML_PHPBackend_entries[': displays a list of users of the site as a dropdown.'] = 'afficher une liste des utilisateurs du site comme liste déroulante';
$xarML_PHPBackend_entries[': accepts as input or displays a user\'s user name.'] = 'accepter comme entrée, ou afficher le nom d\'utilisateur d\'un utilisateur';
$xarML_PHPBackend_entries['Yahoo'] = 'Yahoo';
$xarML_PHPBackend_entries[': accepts as input or displays a Yahoo user address.'] = 'accepter comme entrée, ou afficher une addresse d\'utilisateur yahoo';
$xarML_PHPBackend_entries['Available Hooks'] = 'Crochets disponibles';
$xarML_PHPBackend_entries['Search Hook'] = 'Rechercher des crochets';
$xarML_PHPBackend_entries[': allows user to search the content of the Roles module. This hook is known to be used by the Search module (a non-core module).'] = ': permet aux utilisateurs de rechercher le contenu du module des Rôles. Ce crochet est connu pour être utiliser par le module de recherche (un module qui ne fait pas partie du noyau).';
$xarML_PHPBackend_entries['Usermenu Hook'] = 'Crochet du menu de l\'utilisateur';
$xarML_PHPBackend_entries[': lets other modules that hook into the Roles module display content in the current user\'s account page. This hook is used by e.g. the Themes module, allowing the user to define the theme for the site to display in. When the Roles module is hooked into itself, it lets the user edit his/her profile.'] = ': laisse les autres modules qui se crochètent dans le module des rôles afficher du contenu dans la page de compte de l\'utilisateur actuel. Ce crochet est utilisé par e.x. le module des thèmes, permettant à l\'utilisateur de définir le thème dans lequel le site affichera. Quand le module des rôles est crocheter dans lui-même, il laisse l\'utilisateur modifier son profile.';
?>