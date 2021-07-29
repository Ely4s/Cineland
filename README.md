# Cineland

Projet de 1 mois réalisé avec Symfony 4 pour l'UE Framework de la licence 3 d'informatique de l'UPJV.

## Explications

Extrait de la consigne :

```
Il s’agit de programmer un projet Symfony 4 appelé cineland. Il devra respecter les contraintes suivantes :
3 entités :
    
* une entité "acteur" qui comporte :

    * une propriété "nomPrenom" unique.
    * une propriété "dateNaissance" qui devra correspondre à une date valide
    * une propriété "nationalite"
    
* une entité "film" qui comporte :

    * une propriété "titre" unique
    * une propriété "duree" qui devra correspondre à une durée en minutes
    * une propriété "dateSortie" qui devra correspondre à une date valide
    * une propriété "note" qui devra être un entier compris entre 0 et 20
    * une propriété "ageMinimal" qui devra être un entier positif et non nul
    
* une entité "genre" qui comporte :

    * une propriété "nom" unique
    
* les entités seront associées bidirectionnellement de la manière suivante :

    * un "acteur" peut jouer dans aucun, un ou plusieurs "films"
    * un "film" peut impliquer aucun, un ou plusieurs "acteurs"
    * un "film" appartient à exactement un "genre"
    * plusieurs "films" peuvent appartenir au même "genre"
    * Un genre peut être lié à aucun film
 
Les actions qui seront proposées aux utilisateurs :

* action1 : lister tous les genres
* action2 : ajouter un genre
* action3 : lister tous les acteurs
* action4 : Afficher les détails d’un acteur donné (i.e., nomPrenom, date de naissance, nationalité et les films dans lesquels il a joué).
* action5 : ajouter un acteur
* action6 : modifier un acteur
* action7 : supprimer un acteur
* action8 : lister tous les films
* action9 : Afficher les détails d’un film donné (i.e., titre, durée, date de sortie, note, age minimal, le genre ainsi que les acteurs ayant joué un rôle dans le film).
* action10 : ajouter un film
* action11 : modifier un film
* action12 : supprimer un film
* action13 : lister les films dont la date de sortie est comprise entre deux années données
* action14 : lister les films dont la date de sortie est antérieure à une certaine date précise donnée
* action15 : lister les acteurs ayant joué dans un film donné
* action16 : lister les acteurs ayant joué dans au moins 3 films différents
* action17 : lister tous les films dans lesquels 2 acteurs donnés ont joué ensemble
* action18 : lister les genres pour lesquels un acteur donné a joué au moins 2 films
* action19 : Afficher la durée en minutes de tous les films joués par un acteur donné
* action20 : Afficher pour chaque acteur la liste des films dans lesquels il a joué dans l’ordre chronologique: un acteur n’ayant joué dans aucun film ne devra pas apparaître dans cette liste.
* action21 : Afficher pour chaque acteur la liste des genres dans lesquels il a joué au moins un film.
* action22 : Afficher la durée moyenne de tous les films d’un genre donné
* action23 : Augmenter ou diminuer la note d’un film
* action24 : Supprimer un genre seulement si aucun film ne s’y rapporte
* action25 : Rechercher des films via une partie de titre
* action26 : Augmenter l’âge minimal de tous les films dans lesquels à jouer un acteur donné : la valeur à ajouter sera soit une valeur explicitement renseignée, soit par défaut la valeur 1 dans le cas où elle ne serait pas renseignée.
```
