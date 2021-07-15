# Fighters

## Principe
Mettre en place un combat entre deux personnages en utilisant de la POO.
Ce combat sera représenté uniquement par des lignes de textes.

## Exo

### Exo 1 : initialisation des personnages
Créer un classe ```Character```, dans lequel les personnages auront les attributs suivant :
- un nom : ```name```
- un score d'attaque : ```attackPoint``` (15)
- des points de vie : ```lifePoints``` (100)
- (des points de magie : ```magicPoints```)

Et une méthode : 
- une action d'attaque : ```attack()```


### Exo 2 : base du combat
Dans l'index.php, mettre en place une logique pour que le combat se déroule jusqu'à ce que l'un des deux personnage soit KO.

### Exo 3 : les points de vie
Faire en sorte que les points de vie ne passe pas en dessous de 0.

### Exo 4 : les sous-classes de personnages
Ajouter un système de sous-classes, avec un ```Warrior``` et un ```Mage```.
> Important pour la suite : chaque sous-classe doit être indépendante et s'autogérer.

### Exo 5 : améliorer le système d'appel des classes.
Trouver une solution plus performante pour inclure (ou require) les classes dont on a besoin !

### Exo 6 : caractéristiques du Mage
- Le Mage a des points de magie (magicPoints) : 100.
- Il a une attaque de 5.
- Son attaque : Boule de feu (fireball).
    - Utlise aléatoirement entre 1 et 20 points de magie.
    - Les dégâts de cette attaque sont égaux au coût en points de magie * un nombre aléatoire entre 1 et 3.
- 3 possibilités d'attaque :
    - Il a assez de points de magie : boule de feu normale.
    - Il n'a plus assez de points de magie : boule de feu lancé avec les points de magie restant.
    - Si il n'a plus de point de magie : il donne un coup de bâton.

### Exo 7 : bouclier magique du Mage
A partir de maintenant, à chaque tour, le mage aura deux options :
- 70% de chance de faire sa boule feu.
- 30% de chance de faire son bouclier magique.

Caractéristiques du bouclier magie :
- Absorbe la prochaine attaque dirigée sur le Mage.
- Une fois absorbé, il disparait.
- Tant que le bouclier est actif, le Mage ne le relance pas.
- Coût en magie : 0.  
> Important : chaque sous-classe doit être indépendante et s'autogérer.