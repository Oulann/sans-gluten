<?php
namespace My\model;
use \My\model\Manager;

class CommentManager extends Manager
{
    public function getComments($id)
    {
        $bdd = $this->dbConnect();
        $comments = $bdd->prepare('SELECT comment.id, content, pseudo, id_recipe,  date, DATE_FORMAT(date, \'%d/%m/%Y à %Hh%imin%ss\') AS date FROM comment INNER JOIN member ON comment.id_member = member.id WHERE id_recipe = ? ORDER BY date');
        $comments->execute(array($id));
        return $comments;
    }

    public function addComment($id_recipe, $id_member, $content)
    {
        $bdd = $this->dbConnect();
        $newComment = $bdd->prepare("INSERT INTO comment (content, id_member, id_recipe, date)VALUES(:content, :id_member, :id_recipe, NOW())");
        $newComment->execute(array(
            'content' => $content,
            'id_member' => $id_member,
            'id_recipe' => $id_recipe,
        ));
        return $newComment;
    }

}