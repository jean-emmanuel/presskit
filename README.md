# [SPIP] Eletctronic Press Kits (ammd.net)

*presse.ammd.net [fr]*
*press.ammd.net [en]*

## Installation

- Copier le fichier config/mes_options.php dans le repertoire "config"
- Copier le dossier presskit dans le repertoire d'installation de spip
- Installer le plugin "zippeur" **(nécessaire)**

## Fonctionnement

- Une rubrique par kit de presse
  - Colonne de gauche
    - Titre, le sous titre et le texte de la rubrique
  - Colonne de droite
    - Sites syndiqués
    - Articles de la rubrique (prévu pour mettre des players bandcamp)
    - Lien pour télécharger tous les documents (images, odt et pdf) de la rubrique)
    - Documents : images, videos (ajoutées avec des liens vimeo uniquement *...parce que j'en ai marre d'utiliser une clé d'API youtube pour récuperer la vignette*)
    
## Typographie

*Liste non exhaustive*

- { *texte en italique*  }
- {{ **texte en gras** }}
- {{{ **TITRE** }}}
- `<quote>` citation `</quote>`
- `--:` texte aligné à droite `--:`
- `-:-` texte aligné au centre `-:-`
- `----` séparateur horizontal (hr)
- `////` fin de flottement (clearfix)
- `[texte->url]` lien hypertexte


## Liens de sites

Ajouter des liens en cliquant sur "Référencer un site" dans la rubrique voulue. Le champ "Description du site" permet de choisir l'icone du lien, choisir dans la liste à cette adresse : http://fontawesome.io/icons/
(exemples : tag, tags, rss, envelope, ...) 

## Insertion de Média

Les videos hébergées chez vimeo peuvent être ajoutées avec le formulaire "Ajouter une image ou un document" en selectionnant l'option "depuis internet" et en indiquant l'adresse de la vidéo.
Elle ne sont pas archivées dans le fichier zip du dossier de presse (penser à y faire référence dans le dossier de presse odt/pdf).

- Document
  - `<docX|>` lien vers le document X avec indication de la taille du fichier
  - `[texte->docX]` lien vers le document X sur le *texte* indiqué

- Image / Video (vimeo)
  - `<imgX|>` image/video X affichée en pleine largeur
  - `<imgX|left>` image/video X à gauche du texte, 35% de la largeur
  - `<imgX|right>` image/video X à droite du texte, 35% de la largeur
  - `<imgX|center>` image/video X au centre, 35% de la largeur
  - On peut préciser `|titre=non` pour ne pas afficher le titre
  
- Audio (à mettre de préférence dans un article pour un affichage dans la colonne de droite)
 - `<bandcamp|track=XXX>` lecteur pour la piste XXX
 - `<bandcamp|album=XXX>` lecteur pour l'album XXX
 - `<bandcamp|album=XXX|track=XXX>` lecteur pour la piste XXX de l'album XXX
 
**On trouve l'identifiant d'un album ou d'une piste tout en bas du code source de la page bandcamp, en commentaire.**

## Credits

Template libre sous GPLv3 © AMMD 2015
Image de fond libre © <a href="https://unsplash.com/taylorleopold">Taylor Leopold</a>
