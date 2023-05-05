<h1> PHP CRUD MUSIC </h1>
<h2> FAY Damien </h2>
<h2> Installation / Configuration </h2>
<h2> Serveur Web local </h2>
<p> Pour lancer le serveur web local, ouvrez un terminal à racine du projet, puis entrez la commande
"php -d display_errors -S localhost:8000 -t public/", puis, dans un navigateur web, entrez l'adresse
"hhtp://localhost:8000/", et vous aurez accès au contenu du répertoire public sous forme html. </p>
<h2> Style de codage </h2>
<p> Pour corriger les erreurs de codage ou de syntaxe, ce projet dispose d'un fichier ".php-cs-fixer.php".
Pour vérifier les fichiers à corriger, lancer dans un terminal ouvert dans la racine du projet
"php vendor/bin/php-cs-fixer fix --dry-run", pour vérifier quelles sont les corrections à faire
"php vendor/bin/php-cs-fixer fix --dry-run -diff", et enfin, pour corriger automatiquement les erreurs,
lancez la commande "php vendor/bin/php-cs-fixer fix". Le fichier n'est pas inclus dans le dépô git du projet,
téléchargez-le avec "http://cutrona/utils/correction/dl.php?f=%2Fbut%2Fs2%2Fphp-crud-music%2Fressources%2F.php-cs-fixer.php"</p>
