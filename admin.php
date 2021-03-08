<?php
require_once('./account.php');

class User extends Account
{

    public function __construct($name, $surname, $login, $password)
    {
        $permissions = array('ALL_ACCESS', 'MANAGE_USERS', 'CREATE_ACCOUNTS');
        parent::__construct($name, $surname, $login, $password, $permissions);
    }
}
