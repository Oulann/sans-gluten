<?php
namespace My\controller;

use \My\model\AdminManager;
use \My\model\CommentManager;
use \My\model\ListManager;

class AdminController
{
    private $adminManager;
    private $listManager;
    private $commentManager;

    public function __construct()
    {
        $this->adminManager = new AdminManager();
        $this->listManager = new ListManager();
        $this->commentManager = new CommentManager();
    }
}
