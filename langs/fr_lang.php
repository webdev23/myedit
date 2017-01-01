<?php
// FRENCH Language file
$LABEL_MENU = 'Pure editeur internet ';

$slogang = 'Pure editeur internet ';

$desc = <<<EOD
<div style="padding:1% 13% 0 13%;background-color:black"><br>
Bienvenue dans la page d'aide de myedit.io!<br><br>
<small>
Vous pouvez, avec myedit.io, créer une copie et modifier en direct toutes pages du web. Vos modifications pourront être partagées, ou être utilisées comme notes personnels!<br>
Un navigateur récent est nécessaire. (Exemple: Firefox 35 et +)<br>
Indiquer une adresse url et lancer! &nbsp;&nbsp;<a href="?load=now&url=https://en.wikipedia.org/wiki/BusyBox">Voir un exemple</a>
&nbsp;&nbsp;<a href="?load=now&url=http://www.ledauphine.com/&t=Le monde est à nous!">Un autre exemple</a><br>
Une fois la page affichée, pour modifier son contenu, positionner le curseur à l'endroit voulu, taper au clavier, et à vous INTERNET!<br>
Pour créer une nouvelle page avec vos modifications, utiliser le bouton sauver.<br>
Il est aussi possible de sauver avec le raccourci-clavier <span style="color:red">Ctrl + Shift + S</span>, ou simplement en tapant "<span style="color:red">ok</span>" dans la page! <br>
Pour ajouter une image, utiliser le sélecteur d'image, une fois l'image apparu, la déplacer dans la page à l'endroit voulu.<br>
Il est possible de redimensionner les images, en cliquant dessus.<br>
Un bookmarklet est disponible dans le menu.<br> 
Après l'avoir glissé vers votre barre de raccourcis, vous pourrez à tout moment charger une page dans myedit.io!<br>
Vous pourrez utiliser ce bookmarklet (aussi appelé "lien dynamique") depuis toutes pages INTERNET pour un chargement automatique dans myedit.io.<br>

<h3>Explications techniques:</h3>

- Téléchargement de la page avec CURL (la page deviens une page du même domaine, c'est une copie). Le header est modifié (Access-Control-Allow-Origin)<br>
- La page est convertie en UTF8 pour éviter au maximum les erreurs (à ce stade le résultat est bon sur les pages avec caractères latins seulement)<br>
- Modification de toutes les URLs pour que la page fonctionne: images, styles css.<br>
- Injection du document-design mode pour rendre la page éditable<br>
- Injection d'un peu de code javascript qui servira plus tard pour la sauvegarde, et de 3 librairies javascript: zepto, keypress et iframeResizer<br>
- Modification des titres H1 H2 H3 sur toute la page et de et la balise title, pour le nom dans l'onglet, et sur le titre dans les réseaux sociaux!). Il est possible de décocher "edit title" pour conserver le titre de la page original.<br>
- La page principale est redimensionéé en fonction du contenu de la page dans l'iframe, pour eviter les doubles ascenceurs.<br>
- En attente d'édition ;)<br>
- Une fois le bouton SAVE préssé, le contenu html DOM (celui que vous voyez et que vous avez "peut-être" édité ;) ) est sauvé et envoyé au serveur.<br>
- Le serveur php crée un nouveau titre au document, le sauve au bon endroit.<br>
- La réponse est un lien vers la page, un lien de suppression avec une clé unique, ainsi que des liens de partages non bloqués par adblock<br>
- Au premier affichage, la page est modifiée pour enlever le "document-design mode", puis est mise en cache sur le serveur au format html. Les balises META sont aussi modifiées pour berner la prévisualisation de lien sur facebook et (..). Il est possible que premier affichage soit assez lent, le temps de générer le rendu et mettre en cache. Ensuite l'affichage via le cache sera rapide comme une simple page html.<br>
- Pour les images, elles sont basiquement converties en BASE64, lorsque celle-ci apparaît, la gliser avec la souris à l'endroit voulue. Ne pas mettre une photo trop volumineuse, ne fonctionne donc pas sur mobile pour le moment.<br>
- Le style de l'interface est responsive et faite à la main sans aucuns templates ou librairies. L'avantage est qu'elle est rapide, artisanale donc unique, mais pas vierge de bugs, un jour peut-être! Sur mobile passer en mode "landscape/payasage" élargi la résolution c'est fait pour et ça a pas été facile à gérer :)<br>
- Une page peut-être édité plusieurs fois, un nouveau lien sera crée.<br><br>
N'hesitez pas à utliser le formulaire de contact!<br>
<br>
Voici quelques raccourcis clavier:<br>
<span style="color:red">ctrl + shift + s</span> = Sauver la page<br>
<span style="color:red">ctrl + shift + e</span> = Editer à nouveau (fonctionne partout)<br>
<span style="color:red">ctrl + shift + r</span>  = Suspendre l’édition<br><br>
A tout moment taper "edit" dans la page déclenche l'édition, y compris dans les pages sauvées.<br>
Décocher "edit tittle" et cliquer sur "Edit" pour conserver le titre d'origine de la page à modifier.
<br><br>
<h3>Utilisation via url:</h3><br>
http://myedit.io/?load=now&url=ÂDRESSE_URL&..&..&;<br>
?load=now         -->lance l'edition directement<br>
&url=                -->Permet de charger une adresse url à la volée.<br>
&t=                   -->Pour changer le titre de la page à la volée.<br>
&rename=off     -->Pour empêcher la modification des titres à la volée<br>
&rename=on      -->Pour ré-activer l'edition de titres (et des balises meta)<br>
<br>
<br><br></small>
</div>
EOD;

$lang_input = 'Indiquer ici une adresse url (http://...)';
$lang_inputB = 'Nouveau titre';

$lang_launch = '<small>Lancer</small>';
$lang_save = '<small>&nbsp;Sauver</small>';

$lang_lunch = '&nbsp;Plus grand';
$lang_closeenough = '&nbsp;Plus petit';

$lang_fulzz = 'Plein écran';
$lang_hidzz = 'Quitter le plein écran';

$lang_erase = 'Delete link:';

$lang_howit1 = 'Comment';
$lang_howit2 = '.ça marche?';
$lang_howitLink = '?help=me&parle=fr';



?>
