=== Citriq.net ===
Contributors: clementbourgoin
Tags: books, reviews, links
Donate link: http://nokto.net/
Requires at least: 3.8
Tested up to: 3.8.1
Stable tag: trunk
License: GPL v2 or later
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

Référencez automatiquement vos critiques littéraires sur Citriq.net

== Description ==

Vous utilisez Wordpress pour votre blog littéraire ? L'extension Citriq pour Wordpress peut vous aider à mieux référencer vos articles en créant automatiquement des liens entre vos critiques et d'autres critiques du même livre sur d'autres sites littéraires ! [Citriq.net](http://citriq.net) est aussi un moteur de recherche qui recensent des dizaines milliers de critiques littéraires issues de centaines de sites et blogs.

== Installation ==

La première chose à faire est d’inscrire votre blog sur [Citriq.net](http://citriq.net) (si ce n’est pas déjà fait).

Une fois l'extension installée et activée sur votre blog, il vous faudra utiliser les champs personnalisés de Wordpress pour que l'extension sache lesquels de vos articles doivent être référencés sur Citriq, et à quel livre correspond la critique.

1. Activez les champs personnalisés (si ce n'est pas déjà fait) en cliquant, sur la page d'écriture des articles, sur **Options de l'écran** (en haut à droite) puis en cochant la case *Champs personnalisés*.
2. Pour signaler à l'extension qu'un article est une critique à référencer, il vous faudra renseigner l'ISBN du livre en créant un champ personnalisé ‘isbn’. Repérez la zone la zone **Ajouter un champ personnalisé** puis entrez *isbn* (en minuscule, c'est important) dans le champ **Nom** et l'ISBN du livre critique dans le champ **Valeur**. Cliquez enfin sur **Mettre** à jour pour enregistrer les modifications de votre article.
3. Répétez ensuite cette opération pour chaque article à référencer dans Citriq.

NB : L’ISBN est un numéro unique attribué à chaque livre publié, long de 13 chiffres et commençant toujours par 978 ou 979. On le trouve dans les premières pages du livre ou au dos, généralement près du code barre. Il peut être entré avec ou sans tiret.

= Pour aller plus loin =

Pour envoyer plus d’information à Citriq, il est possible d’utiliser d’autres champs personnalisés. Le champ isbn est le seul obligatoire, mais voici d’autres champs que vous pouvez utiliser :

* ‘excerpt’ : un extrait de la critique (jusqu’à 500 caractères) ;
* ‘reviewer’ : l’auteur de la critique (s’il y en a plusieurs sur le site) ;
* ‘source’ : support dont est issue la critique (si différent du site) ;
* ‘rating’ : permet d’indiquer une note (un entier, sur 100) ;

= Résolution des problèmes =

Pour vérifiez que l’extension fonctionne correctement, ajoutez **?debug=1** ou **&debug=1** à l’adresse de la page de l’article dans la barre de votre navigateur. Le widget Citriq affichera un message d’erreur détaillant le problème s’il y a lieu.

== Frequently Asked Questions ==

= Qu'est-ce que Citriq.net ? =

Citriq.net est un moteur de recherche et d'échange de critiques littéraires. Grace à un petit code JavaScript à ajouter à votre site, Citriq va automatiquement afficher des liens depuis chacune de vos critiques vers les critiques du mêmes livres sur tous les autres sites participants. Si une nouvelle critique d'un livre que vous avez déjà critiqué est posté ailleurs sur le web, inutile de mettre votre article à jour, les liens seront automatiquement ajoutés à votre article, et le nouvel article proposera automatiquement un lien vers le votre.

Pour utiliser Citriq, il faut normalement entrer chaque critique manuellement sur Citriq.net puis ajouter à votre article le petit code JavaScript qui vous est retourné. Grace à cette extension Wordpress, ce n'est plus nécessaire : le code JavaScript sera généré automatiquement à partir de l'ISBN du livre critiqué.

= Pourquoi utiliser Citriq ? =

Les lecteurs se content rarement d'un seul avis et cherchent souvent à lire plusieurs critiques d'un livre dont ils envisagent l'achat. Certains sites proposent ainsi des revues de presse qui nécessite un suivi au fil du temps. Citriq vous permet de générer automatiquement une liste de liens vers des critiques d'un même livre, qui se met à jour des qu'une nouvelle critique est proposée sur un autre site.

= À quoi sert le code JavaScript ? =

Une fois activée, l'extension va générer pour chacune de vos critiques un code JavaScript. Ce code va envoyer à Citriq.net les informations suivantes :

* L'adresse de la page d'où est appelée le code JavaScript (c'est à dire l'adresse de votre critique)
* L'ISBN du livre critiqué

Grace à ces informations, Citriq.net pourra générer des liens vers votre critique sur son site et sur tous les autres sites proposant une critique du même livre (correspondant au même ISBN).

En retour, Citriq retournera une liste de liens vers des critiques du même livre sur d'autres sites que le code JavaScript affichera sur votre site, à la fin de votre article.

== Changelog ==

= 1.0.3 (13/02/2014) =
* Les liens s'affichent désormais aussi si la critique est affiché sur une page avec d'autres articles (accueil, catégorie, tag) mais l'adresse de la critique n'est pas enregistrée dans ce cas (paramètre ‘ignore’)
* Ajout d'un paramètre ‘plugin’ pour détecter les blogs utilisateurs de l'extension à des fins statistiques
* La date de publication de l'article est désormais transmise avec le paramètre ‘date’

= 1.0.2 (11/02/2014) =
* Suppression du fichier inutile wp_auto_update.class.php
 
= 1.0.1 (10/02/2014) =
* Suppression de la mise à jour automatique
* Mise à jour de readme.txt
 
= 1.0 (08/02/2014) =
* Première version de l'extension

== Upgrade Notice ==

= 1.0.3 =
Les liens s'affichent désormais aussi si la critique est affiché sur une page avec d'autres articles (accueil, catégorie, tag). Ajout de nouveaux paramètres pour transmettre des informations à citriq (date de parution de la critique, version du plugin)