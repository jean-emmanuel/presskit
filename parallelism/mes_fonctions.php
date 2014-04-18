<?php
include_spip('inc/config');
  ecrire_config('activer_sites', 'oui');
  ecrire_config('rubriques_descriptif', 'oui');
  ecrire_config('rubriques_texte', 'oui');
  ecrire_config('documents_objets', 'spip_articles,spip_rubriques,');


function balise_SKEL($p) {
  $p->code = $GLOBALS['dossier_squelettes'];
  return $p;
}
function doclogo($url) {
  if (strpos($url,'L52xH52') === false) {
      return $url;
  }
}
function sanitize($titre) {
  $titre = preg_replace("([^\w\s\d\-_~,;:\[\]\(\]]|[\.]{2,})", '', $titre);
  $titre = str_replace(' ', '_', $titre);
  return $titre;
}
function vimeocheck($url) {
  if (strpos($url,'vimeo.com') !== false) {
      return $url;
  }
}
?>
