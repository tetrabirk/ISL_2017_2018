introduction:

creation d'un thème wp avec la découpe html fournie par mr bloom

nom du theme: Nom et prénom - Thème
nom du dossier: votre-nom-theme
screenshot: une photo de vous




Règles de bases liées à l'HTML:

Le non respect des règles citées ci-dessous entraînera un échec pour l'examen.

-Aucune erreur dans la console n'est permise
-Aucune erreur 404(css,js,image,etc), n'est permise
-Si un texte n'est pas modifiable dans le back-office, il doit devenir une clé de traduction
-Tous les liens doivent être fonctionnels
-Le respect de la découpe est primordiale
-Aucune erreur liée au responsive n'est permise
-Visuellement le thème créer doit être identique à la découpe fournie



Pages demandées:

-Accueuil
Les fichiers home.php et index.php ne peuvent pas être utilisés pour cette page.

-A propos
Vous devez respectez la hiérarchie des template pour cette page.
Donc si je crée un nouvelle page, elle doit avoir les mêmes champs et le même visuel que la page à propos.

-Actualité
	-Finance
	-Bilan
	-Conseils
	-Juridique

Pour actualité et ses enfants, vous ne devez pas utiliser archive.php et index.php

-Contact

Vous devez respecter la hiérarchie des template pour cette page mais en utilisant son ID




Règles liées au pages:

Le non respect des règles citées ci dessous entrainera un échec pour l'examen.

-tout le contenu d'une page doit être modifiable dans le back office
-Tous champs supplémentaires doivent être créés avec ACF.
-Dans les catégories, le titre des articles doit être cliquable et redirigé vers l'article en question.

Vous trouverez en annexe un dossier avec chaque image qui représente un champs demandé trié par page.




Menus
-Le menu du haut doit garder la même structure et doit êtr modifiable dans le back-office
-Le menu du bas doit garder la même structure et doit être modifiable dans le back-office mais dot être différent de celui du haut.
-Le menu à droite dans les pages de l'article doit garder la même structure et doit être modifiable dans le back office mais doit être différent de celui du bas




Composition champs & ACF 

-Accueuil

slider est un ACF galerie

La première section est un ACF image,texte,WYSYWYG

La deuxième section est la boucle while avec les derniers articles.
Laisser les réglages de base dans le back-office !

La troisième section est un ACF répéteur composé d'une icon (texte simple), un titre (texte simple), WYSIWYG


WIdget ????





A propos et autres pages


La première section est le titre, le WYSIWIG et l'image de fond est l'image à la une

L'image avec l'icon play est un ACF image

La vidéo qui se lance en cliquant sur le play est ACF oEmbed

la deuxième section est un ACF répéteur composé d'un titre et d'un texte

la troisième section est un ACF texte pour le titre et le reste est un ACF répéteur composé d'une image, d'un nom (texte) et de la fonction (texte)



Contact

La première section est le titre, le WYSIWYG

La deuxième section est un ACF WYSIWYG et vous y mettez le contact formulaire.

La troisième section est un ACF Google MAP qui doit être centré à Liège mais vous pouvez laisser le marker de base.


Catégorie

Attention respecter la pagination!
Elle doit être identitque donc vous devez créer un nombre suffisant d'article...
Chaque titre des articles doit être un lien qui redirige vers l'article en question.

Articles

La première section est le titre et le fond est une image à la une.

La deuxième section est un ACF image.

La troisième section est composée du titre, date, auteur, catégorie et WYSIWYG

La partie de droite est composée d'un widget et d'un menu qui reprend les catégories
