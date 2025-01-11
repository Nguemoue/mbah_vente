# Générateur de Certificats de Vente - Projet Laravel

Ce projet est une application Laravel conçue pour générer des certificats de vente. Il permet aux utilisateurs de créer, gérer et exporter des certificats de vente au format PDF.

## Fonctionnalités

- **Création de certificats de vente** : Génération de certificats avec les détails du vendeur, de l'acheteur et des articles vendus.
- **Gestion des certificats** : Visualisation, édition et suppression des certificats existants.
- **Exportation en PDF** : Téléchargement des certificats au format PDF pour une impression ou un partage facile.

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

- **PHP >= 7.4**
- **Composer**
- **MySQL** ou un autre système de gestion de base de données compatible

## Installation

1. **Cloner le dépôt** :

   ```bash
   git clone https://github.com/votre-utilisateur/generateur-certificats-vente.git
   cd generateur-certificats-vente
   ```

2. **Installer les dépendances PHP** :

   ```bash
   composer install
   ```

3. **Installer les dépendances JavaScript** :

   ```bash
   npm install
   ```

4. **Configurer l'environnement** :

   - Copiez le fichier `.env.example` en `.env` :

     ```bash
     cp .env.example .env
     ```

   - Générez la clé de l'application :

     ```bash
     php artisan key:generate
     ```

   - Configurez les paramètres de base de données dans le fichier `.env`.

5. **Exécuter les migrations** :

   ```bash
   php artisan migrate
   ```

6. **Compiler les assets** :

   ```bash
   npm run dev
   ```

   Pour une compilation optimisée :

   ```bash
   npm run prod
   ```

7. **Lancer le serveur de développement** :

   ```bash
   php artisan serve
   ```

   Accédez à l'application via [http://localhost:8000](http://localhost:8000).

## Utilisation

- **Créer un certificat** : Naviguez vers la page de création et remplissez les informations requises.
- **Gérer les certificats** : Consultez la liste des certificats, avec des options pour les éditer ou les supprimer.
- **Exporter en PDF** : Sur la page de détail d'un certificat, cliquez sur "Exporter en PDF" pour télécharger le document.

## Contribution

Les contributions sont les bienvenues ! Veuillez suivre les étapes suivantes :

1. **Forker le dépôt**
2. **Créer une branche pour votre fonctionnalité** :

   ```bash
   git checkout -b nouvelle-fonctionnalite
   ```

3. **Commiter vos modifications** :

   ```bash
   git commit -m 'Ajouter une nouvelle fonctionnalité'
   ```

4. **Pousser vers la branche** :

   ```bash
   git push origin nouvelle-fonctionnalite
   ```

5. **Ouvrir une Pull Request**

## Auteur

- **Luc**  
  - Email : lucchuala@gmail.com  
  - GitHub : [Nguemoue](https://github.com/Nguemoue)

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.

