<?php
    if (!defined("_ECRIRE_INC_VERSION")) return;
    
    $GLOBALS['spip_pipeline']['pre_boucle'] .= "|presskit_tout_partout|presskit_multilang_partout";
    
    // ajouter le critère {tout} aux boucles rubriques si pas de présence d'un critère {statut}
    function presskit_tout_partout($boucle){
            if ($boucle->type_requete == 'rubriques' AND !isset($boucle->modificateur['criteres']['statut']))
                    $boucle->modificateur['criteres']['statut'] = true;
            return $boucle;
    }
    
    // ajouter le critère {!lang_select} à toutes les boucles
    function presskit_multilang_partout($boucle){
            $boucle->lang_select = 'non';
            return $boucle;
    }
    
    // Typo pratique
    $GLOBALS['spip_pipeline']['pre_typo'] .= "|presskit_pre_typo";
    function presskit_pre_typo($flux) {
        $flux = str_replace('////','<div class="clear"></div>',$flux);
        $flux = preg_replace('/-:-(.*)-:-/','<p class="align-center">$1</p>',$flux);
        $flux = preg_replace('/--:(.*)--:/','<p class="align-right">$1</p>',$flux);
        
        return $flux;
        
    }
    
?>
