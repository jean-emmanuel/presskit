<?php
    if (!defined('_ECRIRE_INC_VERSION')) return;
	define('_NO_CACHE', -1); 
	
    // ajouter le critère {tout} aux boucles rubriques si pas de présence d'un critère {statut}
    $GLOBALS['spip_pipeline']['pre_boucle'] .= "|tout_partout";
    function tout_partout($boucle){
            if ($boucle->type_requete == 'rubriques' AND !isset($boucle->modificateur['criteres']['statut']))
                    $boucle->modificateur['criteres']['statut'] = true;
            return $boucle;
    }
    
    // ajouter le critère {!lang_select} à toutes les boucles
    $GLOBALS['spip_pipeline']['pre_boucle'] .= "|multilang_partout";
    function multilang_partout($boucle){
            $boucle->lang_select = 'non';
            return $boucle;
    }
    
    // Typo pratique
    $GLOBALS['spip_pipeline']['pre_typo'] .= "|customs_pre_typo";
    function customs_pre_typo($flux) {
        $flux = str_replace('////','<div class="clear"></div>',$flux);
        $flux = preg_replace('/-:-(.*)-:-/','<p class="align-center">$1</p>',$flux);
        $flux = preg_replace('/--:(.*)--:/','<p class="align-right">$1</p>',$flux);
        
        return $flux;
        
    }
    
    $GLOBALS['dossier_squelettes']='presskit';
    
    define('_NOTES_OUVRE_REF',' <sup>');
    define('_NOTES_FERME_REF','</sup> ');
    define('_NOTES_OUVRE_NOTE','<span>');
    define('_NOTES_FERME_NOTE','</span> ');
    
?>
