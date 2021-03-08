<?php
require_once('./account.php');

class Worker extends Account
{
    public function __construct($name, $surname, $login, $password)
    {
        $permissions = array('WORKER_ACCESS', 'WORKER_MODULES');
        parent::__construct($name, $surname, $login, $password, $permissions);
    }
}