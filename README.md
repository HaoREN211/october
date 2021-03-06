# OctoberCMS



* Basé sur OctoberCMS (au dessus de Laravel).
* Utilise le moteur de templates Twig et le Taskrunner Gulp.
* Bibliothèques disponibles :
  * Bootstrap
  * FlatUI
  * JQuery
  
* Plugins de la communauté :

| Nom | Description |
|:----|:------------|
| Rainlab User | Gère des utilisateurs front-end. |
| Rainlab Editable | Permet d'éditer des blocs de contenu en front-end. |

## Installation

1. Corriger automatiquement les fichiers avec des fins de ligne CRLF avant de cloner le projet :
  * Sous Windows : `git config --global core.autocrlf true`
  * Sous Linux : `git config --global core.autocrlf input`
2. Penser à activer l'URL Rewriting sur le serveur :
  *  sudo a2enmod rewrite
3. Installer les dépendances logicielles :
  * Exécuter la commande `composer update --no-dev` à la racine du projet
4. Compiler les thèmes du portail :
  * Copier les fichiers communs dans les thèmes `for i in $(ls -I standard themes/); do cp -Rf commons/* themes/$i; done;`
  * Compiler les styles avec la commande `php artisan october:util compile less`
5. Changer la configuration de l'application :
  * Exécuter la commande `php artisan october:env` à la racine du projet
  * Configurer l'accès à la base dans le fichier `.env` à la racine du projet
  * Générer une nouvelle clé d'application avec la commande : `php artisan key:generate`
6. Construire la base de données et les tables :
  * Exécuter la commande `create database MaBase` dans PHPMyAdmin
  * Exécuter la commande `php artisan october:up` à la racine du projet
7. Donner les droits d'accès en écriture au démon du serveur Apache :
  * `chown -R www-data repertoire_du_projet`
8. Créer un portail par défaut :
  * Exécuter la commande `php artisan portal:create "Mon portail" "new" "localhost"`
8. Changer le mode d'activation des utilisateurs :
  * Aller dans le backend, menu `Paramètres`, item `Paramètres utilisateurs`
  * Cliquer sur l'onglet `Activation` et cocher la case `Administrateur`
9. Mettre en place le plannificateur de tâches :
  * Exécuter la commande `crontab -e`
  * Ajouter la ligne suivante : `* * * * * php /chemin/vers/artisan schedule:run >> /dev/null 2>&1`

## Environnement

```
  config/                <=== Fichiers de configuration (~ Laravel)
  plugins/
      acme/              <=== Nom de l'éditeur
       blog/             <=== Nom du plugin
         assets/         <=== Ressources des composants
           css/
           js/
         classes/        <=== Classes métier
         components/     <=== Composants OctoberCMS
         controllers/    <=== Contrôleurs backend
         models/         <=== Modèles et structures
         updates/        <=== Scripts de migration
         ...
         Plugin.php      <=== Fichier d'enregistrement du plugin
  themes/
      visitdata/         <=== Nom du thème
      assets/            <=== CSS, LESS, JS
      content/           <=== Blocs de contenu
      layouts/           <=== Structures de page
      pages/             <=== Pages OctoberCMS
      partials/
      theme.yaml         <=== Fichier de description du thème
  commons/               <=== Elements communs à tous les thèmes
  storage/               <=== Fichiers de log, cache et d'upload
```
OctoberCMS s'appuie sur deux choses : les **thèmes** et les **plugins**.
Un thème est une apparence du site web, il est entièrement basé sur des fichiers.
Un plugin est une manière d'étendre les fonctionnalités du CMS.

* Chaque thème est constitué de plusieurs éléments :
  * Les *pages* : page statique.
  * Les *partials* : embreyon de page.
  * Les *layouts* : structure d'une page.
  * Les *contents* : contenu éditable.
* Les ressources de la partie front-end sont dans `/themes/monTheme/assets`.
* Le fichier CSS provient de la compilation des fichiers LESS du thème.
* Le répertoire `commons/` contient les éléments **communs** à tous les thèmes.
* Pour le debug, utiliser la fonction `traceLog()` et le plugin DebugBar.
* La syntaxe Twig permet d'accèder aux variables globales et à celles de la page courante :
  * Exemple : `{{ this->page->title }}`.

## Commandes utiles
* Vider le cache : `php artisan cache:clear`
* Mettre à jour les plugins : `php artisan october:up`
* Utiliser un thème : `php artisan theme:use rainlab-vanilla`
* Liste des thèmes : `php artisan theme:list`
* Supprimer un thème : `php artisan theme:remove rainlab-vanilla`
* Supprimer un plugin : `php artisan plugin:remove Foo.Bar`
* Créer un plugin : `php artisan create:plugin Foo.Bar`
* Réinitialiser les tables d'un plugin : `php artisan plugin:refresh AuthorName.PluginName`
* Créer un composant : `php artisan create:component Foo.Bar Post`
* Créer un modèle : `php artisan create:model RainLab.Blog Post`
* Créer un contrôleur : `php artisan create:controller RainLab.Blog Posts`

## Documentation

* FlatUI : <http://designmodo.github.io/Flat-UI/>
* Twig : <http://twig.sensiolabs.org/documentation/>
* OctoberCMS : <https://octobercms.com/docs/>
* FontAutumn : <http://daftspunk.github.io/Font-Autumn/>
* LESS : <http://lesscss.org/>






<p align="center">
    <img src="https://github.com/octobercms/october/blob/master/themes/demo/assets/images/october.png?raw=true" alt="October" width="25%" height="25%" />
</p>

[October](http://octobercms.com) is a Content Management System (CMS) and web platform whose sole purpose is to make your development workflow simple again. It was born out of frustration with existing systems. We feel building websites has become a convoluted and confusing process that leaves developers unsatisfied. We want to turn you around to the simpler side and get back to basics.

October's mission is to show the world that web development is not rocket science.

[![Build Status](https://travis-ci.org/octobercms/october.svg?branch=develop)](https://travis-ci.org/octobercms/october)
[![License](https://poser.pugx.org/october/october/license.svg)](https://packagist.org/packages/october/october)

### Learning October

The best place to learn October is by [reading the documentation](http://octobercms.com/docs) or [following some tutorials](http://octobercms.com/support/articles/tutorials).

You may also watch these introductory videos for [beginners](https://vimeo.com/79963873) and [advanced users](https://vimeo.com/172202661).

### Installing October

Instructions on how to install October can be found at the [installation guide](http://octobercms.com/docs/setup/installation).

### Quick start installation

For advanced users, run this in your terminal to install October from command line:

```shell
php -r "eval('?>'.file_get_contents('https://octobercms.com/api/installer'));"
```

If you plan on using a database, run this command:

```shell
php artisan october:install
```

### Development Team

October was created by [Alexey Bobkov](http://ca.linkedin.com/pub/aleksey-bobkov/2b/ba0/232) and [Samuel Georges](https://www.linkedin.com/in/samuel-georges-0a964131/), who both continue to develop the platform.

### Foundation library

The CMS uses [Laravel](http://laravel.com) as a foundation PHP framework.

### Contact

You can communicate with us using the following mediums:

* [Follow us on Twitter](http://twitter.com/octobercms) for announcements and updates.
* [Follow us on Facebook](http://facebook.com/octobercms) for announcements and updates.
* [Join us on IRC](http://octobercms.com/chat) to chat with us.

### License

The OctoberCMS platform is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

### Contributing

Before sending a Pull Request, be sure to review the [Contributing Guidelines](CONTRIBUTING.md) first.

### Coding standards

Please follow the following guides and code standards:

* [PSR 4 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md)
* [PSR 2 Coding Style Guide](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
* [PSR 1 Coding Standards](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md)
