<?php
//Vérifier caractères français, interdire caractères spéciaux, ponctuation (à détailler)
function verifierFrancais($str){
    //$regex = "/^([œŒæÆa-zs'æñÑÈÉÊËàâçèëéêîôùûü-]\\D)+$/si"; 
    $regex = "#^[a-zA-ZéàèêùôîïœŒæÆñÑÈÉÊËàâçèëéêîôùûüø'\\s-]*$#i";
    if(preg_match($regex,$str)){
        return true;
    }else{
        return false;
    }
}
function verifierReste($str){
    $regex = "#[œŒæÆa-zA-Z]#";
    return preg_match($regex, $str);
}
?>