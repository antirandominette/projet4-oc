# projet4-oc

Vous travaillez pour l'agence La Panthère, une grande agence de web design basée à Lyon. L’activité de l’entreprise a bien démarré mais aujourd’hui, elle est en perte de vitesse. Eh oui, la concurrence est rude. La fondatrice de l’entreprise, Sophie, cherche une solution pour faire repartir l’activité. En tapant “Entreprise web design Lyon” sur Internet, elle s’aperçoit que le site de l’agence apparaît seulement en deuxième page des moteurs de recherche. Par chance, un de vos collègues, Martin, lui a dit que vous étiez un spécialiste en référencement.

# Liste complète des changements :

- Charger les scripts après le contenu du `<body>`.
- Changer l’attribut `<html lang=”Default”>` en `<html lang=”fr”>`.
- Changer le contenu des balises `<title>`.
- Supprimer les `<div class=”keywords”>`.
- Restructurer la `<div class=”navbar”>` en réorganisant les `<li>` et supprimant les `<div class=”keywords”>` contenues dedans.
- Supprimer les balises `<meta keywords=” ”>`.
- Corriger les erreurs dans le fichier bootstrap.css.
- Remplacer les trois `<span>` formant un bars icon au profit d’un `<i class="fa fa-bars fa-2x"></i>`.
- Réorganiser la structure du projet : noms de dossiers, fichiers et changement de répertoires.
- Remplacer les `<a href="./page2.html">` par `<a href="./pages/contact.html">` dans index.html.
- Remplacer les mots-clés dans les attributs `“alt”` des balises `<img>` par des descriptions des images concernées.
- Remplacer des caractères spéciaux déclarés par leur `"entité"` en déclarant directement le caractère qu’elles représentent.
- Rendre le `<footer>` sticky.
- Changer le format des images en utilisant au maximum le format `.avif`.
- Remplacer les images utilisées pour afficher du texte par du texte.
- Changer la taille de la police d’écriture.
- Changer la couleur de la classe `.tc-white` par du blanc.
- Remplacer la police `Helvetca Neue` par `Roboto` importée via CDN.
- Supprimer les fichiers contenus dans `/fonts`.
- Corriger les `<input>` du formulaire de contact en ajoutant l’attribut `name=""`.
- Changer l’affichage du formulaire de contact en l’adaptant à la taille d’écran de l’utilisateur.
- Rajouter les attributs `<form method="post" action="../includes/form_1.php">` pour pouvoir traiter les données du formulaire.
- Remplacer les attributs invalides `<form succes-msg=" ">` et `<form fail-msg=" ">` par deux pages `.php` qui seront renvoyées dans les cas où : l’envoi des données est un succès et l’envoi des données est un échec.
- Rajouter une condition dans le fichier `form_1.php` pour gérer le renvoi des pages de succès ou d’échec.
- Ajouter la propriété `background-size: cover !important;` à la classe `bg-banniere` pour corriger l’affichage qui ne prend pas toute la largeur de l’écran sur les grandes résolutions.
- Supprimer les fichiers `.js` inutilisés et les remplacer par des imports CDN.
- Remplir les valeurs `content` de la balise `<meta name="description" content=" ">`.
- Corriger le ratio de contraste des pages `index.html` et `contact.html` pour les faire correspondre aux critères du niveau AA du WCAG.
- Indenter correctement le code.
- Utiliser un maximum de balises sémantiques.
- Changer l’affichage de la section de présentation.
- Baisser le nombre de `boutons/liens` menant à la page de contact depuis `index.html`.
- Retirer les images de fond rayées et pointillées. (`lines-h2-bg.png` et `dots-bg.png`).
- Changer l’affichage des `articles` de la section `portfolio`.
- Transformer structure contenant les liens vers les réseaux sociaux par une liste `<ul>`.
- Ajouter un attribut `aria-label` aux liens afin d'expliciter leur rôle.
