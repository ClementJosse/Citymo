# Citymo - Recherche Immobilière à Paris
![image](https://github.com/user-attachments/assets/1f2a97f0-ae9f-42bd-8f89-b7d5bebcd61c)

Projet fork depuis [https://github.com/WilliamVOTHANH/Citymo_front](https://github.com/WilliamVOTHANH/Citymo_front)
J'ai personnellement travaillé sur le backend de ce projet, qui est présent ici: [https://github.com/ClementJosse/Citymo-back](https://github.com/ClementJosse/Citymo-back)

## Introduction

Bienvenue dans Citymo, un outil de recherche immobilière vous permettant de trouver tous les appartements à vendre dans Paris.

## Lancement du Projet

Pour lancer le projet, suivez ces étapes simples :

1. **Login Docker :** Connectez-vous à Docker à l'aide de la commande suivante :

```
docker login
```

Saisissez votre nom d'utilisateur et votre mot de passe Docker lorsque vous y êtes invité.

2. **Pull des Containers :** Récupérez les images Docker nécessaires en exécutant les commandes suivantes :

```
docker pull williamvotn/citymo_front:latest
```
puis
```
docker pull williamvotn/citymo_bdd:latest
```

3. **Dossier Docker-Compose :** Assurez-vous d'être dans le dossier contenant le fichier `docker-compose.yml`.

4. **Lancement de l'Application :** Démarrez l'application avec la commande :

```
docker-compose up -d
```

L'application sera disponible à l'adresse http://localhost:8080 dans votre navigateur.

## Utilisation

1. Accédez à http://localhost:8080 dans votre navigateur.

2. Utilisez les fonctionnalités de recherche pour trouver des appartements à vendre à Paris.

## Besoin d'aide ?

Si vous avez des problèmes ou des questions, n'hésitez pas à nous contacter à [vothanh@et.esiea.fr].

---

Merci d'utiliser Citymo ! Nous espérons que vous trouverez votre appartement idéal à Paris.
