
# Pop's Sneakers - Projet Symfony
 Ce projet Symfony 'Pop's Sneakers' est un site de e-commerce revente de sneakers d'occasion ou neuves. Ces paires de baskets sont emblématiques, rares ou bien  des must haves. le site possede une homepage avec les onglets "home", "sneakers", "sell" et "newsletter".

 La communauté peut utilisé la plateforme pour revendre leur sneakers entre passionés il leur suffit de remplir le formulaire sur l'onglet sell et leur annonce peut etre publié sur le site dans "l'onglet sneakers/Public Submitted Sneakers (boutons).



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

**Pop's Sneakers** est une application web e-commerce où les utilisateurs peuvent parcourir et acheter des sneakers, ainsi que vendre leurs propres produits. Elle dispose d'une authentification utilisateur, et d'une structure basée sur une base de données pour stocker les informations sur les sneakers, 

### Fonctionnalités principales :
- **Liste des sneakers** : Les utilisateurs peuvent parcourir une collection de sneakers.
- **liste public submitted sneakers** : les utilisateurs peuvent voir les annonces des autres utilisateurs de la communauté sneakers.

- **Recherche et filtrage** : dans les submitted public sneakers il y a une search barre qui permet aux utilisateurs de chercher les sneakers  par catégorie, couleurs ou à partir de la description etc.

- **Authentification utilisateur** : l'utilisateurs peut s'inscrire il est directement connecté.S'il détient déja un compte sur la plateform  il peut se connecter directement egalement. les utilisateurs peuvent se déconnecter.
Par manque de temps l'administrateur n'a pu être crée.

- **Abonnement à la newsletter** : Les visiteurs peuvent s'abonner à une newsletter juste en rentrant leur email.

- **Realisation d'un crud** : le crud n'est que accessible via l'url sneakers/crud permet a l'administrateur de modifier, supprimer et créer  une card sneakers vendu par le Shop. 

## Fonctionnalités principales

### 1. Interaction avec la base de données
- L'application utilise Doctrine ORM pour communiquer avec la base de données.
- Les opérations CRUD permettent de gérer les sneakers, et la base de données est régulièrement mise à jour via les Migrations Doctrine.


### 4. Fonctionnalité de newsletter
-  **NewsletterController** gère les abonnements des utilisateurs. Les abonnés sont stockés dans la base de données.

## Configuration de la base de données
Ce projet utilise MySQL par défaut, mais vous pouvez passer à d'autres bases de données en ajustant votre fichier `.env.local`.

Pour un développement local, assurez-vous d'avoir un serveur MySQL en cours d'exécution, et configurez votre fichier `.env.local` comme l'exemple ci dessous  :
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

