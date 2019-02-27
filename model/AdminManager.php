<?php
namespace My\model;

use \My\model\Manager;

class AdminManager extends Manager
{
    public function addMember($pseudo, $mail, $passwordhash)
    {
        $bdd=$this->dbConnect();
        $newRegmember=$bdd->prepare("INSERT INTO member (pseudo, mail, password, id_level)VALUES(:pseudo, :mail, :password,:id_level)");
        $newRegmember->execute(array(
        'pseudo'=> $pseudo,
        'mail'=> $mail,
        'password'=> $passwordhash,
        'id_level'=> 2,
        
        
        ));
    }
   
}