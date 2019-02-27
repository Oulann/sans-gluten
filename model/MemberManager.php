<?php
namespace My\model;

use \My\model\Manager;


class MemberManager extends Manager{
    
    public function getSign_up($username, $password, $mail){
        $db = $this->dbConnect();
        $members = $db->prepare('INSERT INTO member(pseudo, password, mail) VALUES (?,?,?)');
        $members->execute(array(
            $username ,
            $password,
            $mail,
        ));
        return $members;
    }
}