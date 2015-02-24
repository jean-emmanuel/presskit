<?php

    // SCSS to CSS compiler 
    require "php/scss.inc.php";
    function scsscss($stylesheet) {
        $scss = new scssc;
        try {
            $stylesheet = $scss->compile($stylesheet);
        } catch (Exception $ex) {
            return "scssphp fatal error: \n".$ex->getMessage();
        }
        $stylesheet = preg_replace('/\n+/','',$stylesheet);
        $stylesheet = preg_replace('/\s?+{\s+/','{',$stylesheet);
        $stylesheet = preg_replace('/\s?+;}/','}',$stylesheet);
        $stylesheet = preg_replace('/:\s+/',':',$stylesheet);
        $stylesheet = preg_replace('/;\s+/',';',$stylesheet);
        $stylesheet = preg_replace('/\s+/',' ',$stylesheet);
        return $stylesheet;
    }
    
    
    $GLOBALS['flag_preserver'] = true;
    $GLOBALS['puce'] = '-';
    $GLOBALS['class_spip_plus'] = '';
    $GLOBALS['ligne_horizontale'] = '<hr/>';
    $GLOBALS['debut_intertitre'] = '<h3>';
    $GLOBALS['fin_intertitre'] = '</h3>';
    $GLOBALS['debut_italique'] = '<em>';
    $GLOBALS['fin_italique'] = '</em>';

?>
