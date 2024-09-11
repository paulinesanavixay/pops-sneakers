
# Pop's Sneakers - Projet Symfony
Ceci est un projet basé sur Symfony pour **Pop's Sneakers**, c'est un site de e-commerce revente de sneakers. la communauté peut utilisé la plateforme  pour revendre leur sneakers entre passionés.

## Table des matières
- [Installation](#installation)
- [Aperçu du projet](#aperçu-du-projet)
- [Fonctionnalités principales](#fonctionnalités-principales)
- [Configuration de la base de données](#configuration-de-la-base-de-données)
- [Panneau d'administration et sécurité](#panneau-dadministration-et-sécurité)
- [Fixtures](#fixtures)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Installation

Pour démarrer le projet, suivez ces étapes :

### Pré-requis
- PHP 8.1 ou plus
- Composer
- MySQL (ou une autre base de données)
- Symfony CLI (facultatif)

### Étapes
1. Clonez le dépôt :
   ```bash
   git clone https://github.com/paulinesanavixay/pops_sneakers.git
   ```

2. Accédez au répertoire du projet :
   ```bash
   cd pops-sneakers-symfony
   ```

3. Installez les dépendances :
   ```bash
   composer install
   ```

4. Configurez votre fichier `.env.local` pour la connexion à la base de données :
   - Exemple pour une configuration locale avec MySQL :
     ```bash
     DATABASE_URL="mysql://utilisateur_bd:mot_de_passe_bd@127.0.0.1:3306/nom_bd"
     ```

5. Exécutez les commandes suivantes pour configurer la base de données :
   ```bash
   php bin/console doctrine:database:create
   php bin/console make:migration
   php bin/console doctrine:migration:migrate
   php bin/console doctrine:fixtures:load
   ```

6. Démarrez le serveur local Symfony :
   ```bash
   symfony server:start
   ```
   Ou utilisez le serveur intégré de PHP :
   ```bash
   php -S localhost:8000 -t public
   ```

## Aperçu du projet

**Pop's Sneakers** est une application web de commerce électronique où les utilisateurs peuvent parcourir et acheter des sneakers, ainsi que vendre leurs propres produits. Elle dispose d'une authentification utilisateur, et d'une structure basée sur une base de données pour stocker les informations sur les sneakers, 

### Fonctionnalités principales :
- **Liste des sneakers** : Les utilisateurs peuvent parcourir une collection de sneakers.
- **Recherche et filtrage** : Rechercher par catégorie, couleur, prix, etc.
- **Authentification utilisateur** : Inscription et connexion pour gérer votre collection de sneakers ou effectuer des achats.
- **Abonnement à la newsletter** : Les visiteurs peuvent s'abonner à une newsletter pour recevoir des mises à jour.

## Fonctionnalités principales


### 1. Interaction avec la base de données
- L'application utilise Doctrine ORM pour communiquer avec la base de données. Les entités **Sneaker** et **SneakerSell** représentent le cœur du système, chaque entité correspondant à une table de la base de données.
- Les opérations CRUD permettent de gérer les sneakers, et la base de données est régulièrement mise à jour via les Migrations Doctrine.


### 4. Fonctionnalité de newsletter
- Le **NewsletterController** gère les abonnements des utilisateurs. Les abonnés sont stockés dans la base de données.

## Configuration de la base de données
Ce projet utilise MySQL par défaut, mais vous pouvez passer à d'autres bases de données en ajustant votre fichier `.env.local`.

Pour un développement local, assurez-vous d'avoir un serveur MySQL en cours d'exécution, et configurez votre fichier `.env.local` comme suit :

```bash
DATABASE_URL="mysql://utilisateur_bd:mot_de_passe_bd@127.0.0.1:3306/nom_bd"
```

Après avoir configuré votre base de données, exécutez les migrations et chargez les fixtures comme mentionné dans la section [Installation](#installation).

## Fixtures

Les fixtures sont préconfigurées pour charger des données d'exemple dans la base de données. Utilisez la commande suivante pour charger les fixtures :

```bash
php bin/console doctrine:fixtures:load
```

Cela populera la base de données avec des données de sneakers d'exemple, facilitant ainsi les tests de l'application.

## Contribuer

N'hésitez pas à contribuer à ce projet ! Si vous souhaitez contribuer, suivez ces étapes :
1. Forkez le dépôt.
2. Créez votre branche de fonctionnalité (`git checkout -b fonctionnalité/nouvelle-fonctionnalité`).
3. Commitez vos changements (`git commit -m 'Ajouter une nouvelle fonctionnalité'`).
4. Poussez sur la branche (`git push origin fonctionnalité/nouvelle-fonctionnalité`).
5. Ouvrez une pull request.

## Licence

Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.