<?php

require_once("interface.php");

class loro implements aveVoladora{
    public function volar(){
        return "El ave puede volar!";
    }
}

class pinguino implements aveNadadora{
    public function nadar(){
        return "El ave puede nadar, pero no volar!";
    }
}

$ave = new loro();
echo $ave->volar();
$ave2 = new pinguino();
echo $ave2->nadar();


?>